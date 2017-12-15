from flask import Flask, render_template, request, flash, redirect, url_for, session
from pubmotd import Publication
import firebase_admin
from firebase_admin import credentials, db
from wtforms import Form, StringField, TextAreaField, RadioField, SelectField, validators, PasswordField

cred = credentials.Certificate(
    'cred/motd-4d9cb-firebase-adminsdk-4hl57-1a90475830.json')
default_app = firebase_admin.initialize_app(cred, {
    'databaseURL': 'https://motd-4d9cb.firebaseio.com/a'
})

root = db.reference()
app = Flask(__name__)


@app.route('/home')
def home():
    return render_template('motdhome.html')


@app.route('/viewpublications')
def viewpublications():
    publications = root.child('publications').get()
    list = []  # create a list to store all the publication objects
    for pubid in publications:
        eachpublication = publications[pubid]

        pub = Publication(eachpublication['title'])
        pub.set_pubid(pubid)
        list.append(pub)
    return render_template('view_all_motd.html', publications=list)


class RequiredIf(object):

    def __init__(self, *args, **kwargs):
        self.conditions = kwargs

    def __call__(self, form, field):
        for name, data in self.conditions.items():
            if name not in form._fields:
                validators.Optional()(field)
            else:
                condition_field = form._fields.get(name)
                if condition_field.data == data:
                    validators.DataRequired().__call__(form, field)
                else:
                    validators.Optional().__call__(form, field)


class PublicationForm(Form):
    title = StringField('Title', [
        validators.Length(min=1, max=150),
        validators.DataRequired()])
    description = TextAreaField('description')


@app.route('/newpublication', methods=['GET', 'POST'])
def new():
    form = PublicationForm(request.form)
    if request.method == 'POST' and form.validate():
        title = form.title.data
        pub = Publication(title)

        pub_db = root.child('publications')
        pub_db.push({'title': pub.get_title()})

        flash('Message Inserted Sucessfully.', 'success')

        return redirect(url_for('viewpublications'))

    return render_template('create_motd.html', form=form)


@app.route('/update/<string:id>/', methods=['GET', 'POST'])
def update_publication(id):
    form = PublicationForm(request.form)
    if request.method == 'POST' and form.validate():
        title = form.title.data
        description = form.description.data
        pub = Publication(title)
            # create the magazine object
        pub_db = root.child('publications/' + id)
        pub_db.set({
            'title': pub.get_title()
            })

        flash('Magazine Updated Sucessfully.', 'success')

        return redirect(url_for('viewpublications'))
    else:
        url = 'publications/' + id
        eachpub = root.child(url).get()
        pub = Publication(eachpub['title'])
        pub.set_pubid(id)

        return render_template('update_motd.html', form=form)


@app.route('/delete_publication/<string:id>', methods=['POST'])
def delete_publication(id):
    pub_db = root.child('publications/' + id)
    pub_db.delete()
    flash('Publication Deleted', 'success')

    return redirect(url_for('viewpublications'))


@app.route('/login', methods=['GET', 'POST'])
def login():
    form = LoginForm(request.form)
    if request.method == 'POST' and form.validate():
        username = form.username.data
        password = form.password.data

        if username == 'admin' and password == 'P@ssw0rd':  # harcoded username and password=
            session['logged_in'] = True  # this is to set a session to indicate the user is login into the system.
            return redirect(url_for('viewpublications'))
        else:
            error = 'Invalid login'
            flash(error, 'danger')
            return render_template('motdlogin.html', form=form)

    return render_template('motdlogin.html', form=form)


@app.route('/logout')
def logout():
    session.clear()
    flash('You are now logged out', 'success')
    return redirect(url_for('login'))


class LoginForm(Form):
    username = StringField('Username', [validators.DataRequired()])
    password = PasswordField('Password', [validators.DataRequired()])


if __name__ == '__main__':
    app.secret_key = 'sekret123'
    app.run()


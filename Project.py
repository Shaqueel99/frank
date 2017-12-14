from flask import Flask, render_template, request
from wtforms import Form, StringField, TextAreaField, RadioField, SelectField


app = Flask(__name__)


@app.route('/')
def home():
    return render_template('index.html')

@app.route('/index 2.html')
def Login():
    return render_template('index 2.html')

@app.route('/register.html')
def register():
    return render_template('register.html')

@app.route('/ind.html')
def ind(fname):
 return redirect(.url_for('static', filename='img/' + fname), code=301)





if __name__ == '__main__':
    app.run()


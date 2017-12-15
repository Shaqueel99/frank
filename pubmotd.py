
class Publication:

    def __init__(self, title):
        self.__pubid = ''
        self.__title = title

    def get_title(self):
        return self.__title

    def set_title(self, title):
        self.__title = title

    def get_pubid(self):
        return self.__pubid

    def set_pubid(self, pubid):
        self.__pubid = pubid



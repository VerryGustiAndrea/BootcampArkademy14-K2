import re

def email(dataemail):
    if re.match(r'[0-9]+[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,6}', dataemail):
        if (len(dataemail)<=30):
            print('True')
        else:
            print('False')
    else:
        print('False')
        
def password(datapassword):
    if re.match(r'[A-Za-z]{5}[0-9]{2}[@#$%^&+=]{2}', datapassword):
        if (len(datapassword)<=9):
            print('True')
        else:
            print('False')
    else:
            print('False')
        
email('1verrrea@gmail.com')
email('budi')
password('passw22@@')
password('untas1234')
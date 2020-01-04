import json

def data(a, b):
    datadiri =  {
        'name' : a,
        'age' : b,
        'address' : 'Kedaton, Bandar Lampung',
        'hobbies' : ['Coding', 'Music'],
        'is_married' : False,
        'list_school' : [{
            'name' : 'Universitas Lampung',
            'year_in' : 2015,
            'year_out' : 2019,
            'major' : 'Teknik Informatika'
        }],
        'skills' : [{
            'skill_name' : 'Programming',
            'level' : ['Beginner', 'Advanced', 'Expert']
        }],
        'interest_in_coding' : True
    }
    
    print (json.dumps(datadiri))

data('Verry Gusti Andrea', 23)

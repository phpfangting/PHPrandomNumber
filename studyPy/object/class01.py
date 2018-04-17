class Student(object):

    def __init__(self, name, score):
        self.name = name
        self.score = score

    def say(self):
    
    	print( self.score)    




stu = Student('zhangsan',18)

stu.say()
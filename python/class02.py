#auto add method
# class A(object):
# 	def __init__(self,name,age):
# 		self.name=name
# 		self.age=age



# a=A('ldh',19)


# def fn(self,text):
# 	print(text)


# from types import MethodType
# a.say=MethodType(fn,a)
# a.say('hello')	


# A.say=fn

# b=A('zhangsan',19)
# b.say('fuck')

class Student(object):

	__slots__=('name','age')
	def __init__(self,name,age):
		self.name=name
		self.age=age

	def speak(self):
		print(self.name,self.age)

s=Student('liudehua',20)
s.speak()
s.score=100


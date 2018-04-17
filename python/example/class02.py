<<<<<<< HEAD
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

=======
class Student(object):

	 __slots__ = ('name', 'age') # 用tuple定义允许绑定的属性名称

	 def  __init__(self,name,age):

	 		self.name=name;

	 		self.age=age;






from enum import Enum

Month = Enum('Month', ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'));


for k,x in Month.__members__.items():

	print(k);






		
>>>>>>> 8d0c904a4f8cdea55c5bb69a7e8f6c9c1b2eef00

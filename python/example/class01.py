<<<<<<< HEAD
class Student(object):

	def __init__(self,name,age,weight):
		self.__name=name
		self.__age=age
		self.__weight=weight

	def speak(self):
		print(self.__name,self.__age,self.__weight)	

	def getName(self):
		return self.__name	
	
	def setName(self,value):
		if isinstance(value,int)==False:
			print('不是int')
			return False
		if 0<= value <=100:
			self.__name=value
		else:
			print('bad score')



s=Student('lisa',18,120);
# s.speak()
# s.score=100
# print(s.name)
# s.setName(10000)
# print(s.getName())
# s.__name='wangsan'
# print(s.__name)
# print(s.getName())

print(isinstance(s,Student))
print(type(s))
print(type('123'))
print(type(abs(-1)))

def  say():
	print('hello')

print(type(say))	


import types

print(type(say)==types.FunctionType)
print(type(abs)==types.BuiltinFunctionType)
=======
class People(object):


	def __init__(self,name,age):

		self.name=name;

		self.age=age;


class Student(People):

	__slots__=('name','age');

	pass

	def __init__(self,name,age,weight):

		People.__init__(self,name,age);
		
		self.weight=weight;

	def info(self):
		
			print(self.name,self.age,self.weight);



stu=Student('张三',18,120);
stu.score=100;
stu.info();

print(stu.score);



>>>>>>> 8d0c904a4f8cdea55c5bb69a7e8f6c9c1b2eef00

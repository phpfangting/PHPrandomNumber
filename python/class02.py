class Student(object):

	 __slots__ = ('name', 'age') # 用tuple定义允许绑定的属性名称

	 def  __init__(self,name,age):

	 		self.name=name;

	 		self.age=age;






from enum import Enum

Month = Enum('Month', ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'));


for k,x in Month.__members__.items():

	print(k);






		
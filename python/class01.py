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




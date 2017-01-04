

# print(abs(-100));


def say(x,y):

	if x > y:

		return x;
	else:
	
		return y;	

rs=say(10,200);

print(rs);

def speak():

	pass;


speak();


def  myfun(x,y):

	return x,y;


arr=myfun(100,29);

print(arr);

import math;

print(math.sqrt(100));

def power(x,n):

	s=1;
	i=0;

	while i<n:

		s = s*x;
		i +=1;
	return s;



num=power(2,8);

print(num);

def  f2(param=[]):

	if len(param)==0:

		param.append(10);	
		print('null');

	return param;


print(f2());
print(f2());
print(f2());
print(f2());


#可变参数

def f3(*param):

	for x in param:

		print(x);



f3(1,2,3,4,5,6,6);



#关键字参数

def f4(a,b,**kw):

	print('a:',a,'b:',b,'kw:',kw);


f4(1,2,city='beijing');	

#组合参数

def f5(x,b,*param,**k):
	
	print('x:',x,'b:',b,'param:',param,'k:',k);



f5(1,23,454,64,57,67,7,city='shanghai');	

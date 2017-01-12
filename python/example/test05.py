# arr=list(range(1,100));
# arr=[x*x for x in range(1,11)];


# arr=[m+n for m in 'abc' for n in 'cde'];
# print(arr);

# import os;

# arr=[x for x in os.listdir('../')];

# print(arr);

# arr=(x*x for x in range(1,10));

# for x in arr:

# 	print(x);


# #迭代器
# arr=iter([]);

# print(arr);

# #高阶函数
# a=-10;

# f=abs;

# print(f(a));


# #map

# def f(x):

# 	return x*x;

# arr=map(f,[1,2,3,4,5]);

# for x in arr:

# 	print(x);


# #redurce

# from functools import reduce;

# def f2(x,y):

# 	return x+y;

# arr=reduce(f2,[1,2,3,4,5,6,7]);

# print(arr);


# arr=[234,3534,2,535,242,46,-87868];

# arr=sorted(arr,key=abs);

# print(arr);

# L = [('Bob', 75), ('Adam', 92), ('Bart', 66), ('Lisa', 88)];


# def f6(v):

# 	return v[1];


# arr=sorted(L,key=f6,reverse=True);

# print(arr);	


# def f1(*param):

		
# 	def f2():
# 		s=0;	
# 		for x in param:

# 			s +=x;
# 		print(s);	
# 	return f2;
		
# f=f1(100,100,100,100);
# f();



# f=lambda x: x*x

# print(f(8));

#装饰器


def log(text):
	def z(func):
		def wamp(*param,**key):
			print("call %s:%s" % (text,func.__name__));
			return func(*param,**key);
		return wamp;
	return z;		


@log('exection')
def f6(num):

	print(num);

f6(99399);

print(int('12334',base=8));

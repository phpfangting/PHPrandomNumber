# def f1():

# 	arr=[x for x in range(1,8)]

# 	for x in arr:

# 		yield x



# g=f1();


# 1 1 2 3 5 8 13 21
   
# def f2(n=5):
	
# 	i,a,b = 1,1,1
# 	while i<=n:

# 		if i==1 or i==2:

# 			yield 1;
# 		else:

# 			a,b = b,a+b

# 			yield b

# 		i +=1	


# g=f2(20)

# print(next(g))
# print(next(g))
# print(next(g))
# print(next(g))
# print(next(g))

# def f3():

# 	def f4():

# 		print('f4');
# 	return f4


# g=f3()()


#闭包函数

# def f5():

# 	n=100

# 	def f6():

# 		return n*100

# 	return f6


# rs=f5()()

# print(rs)	

# def f7():

# 	arr=[]

# 	for i in range(1,5):

# 		def f8():

# 			return i

# 		arr.append(f8)

# 	return arr



# g=f7()

# print(g[0]())
# print(g[1]())
# print(g[2]())
# print(g[3]())

#匿名函数


# arr=[x for x in range(1,8)]

# rs=map(lambda x: x*x,arr);

# print(type(rs));


# for x in rs:

# 	print(x)


#装饰器
def log(text):
	def  deco(func):
		def wamp(a,b):
			print(func.__name__,'S')
			func(a,b)
			print(func.__name__,'E')
			print(text)
		return 	wamp
	return  deco	

@log('你是我内心的一首歌')
def f10(a,b):

	print('hello')

#log('hello')(f10)(10,20)

f10('liuft','jiayou')



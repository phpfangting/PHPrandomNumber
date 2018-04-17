# arr=[x for x in range(10)]
# print(arr[:3])

# def fn(n):

# 	a,b,i=1,1,1
# 	while i<=n:
# 		if i==1 or i==2:
# 			yield 1
# 		else:
# 			a,b=b,a+b;
# 			yield b
# 		i+=1
	




# f=fn(10)
# print(next(f))
# print(next(f))
# print(next(f))
# print(next(f))
# print(next(f))
# print(next(f))
# print(next(f))
# print(next(f))


# def f1():
# 	print('a')
# 	yield 1

# 	print('b')
# 	yield 2


# f=f1()

# print(next(f))

#

#接口
def f2():
	r='10'
	while True:
		n=yield r #接收参数
		print("f2_%s" % n)
		r='200 ok'#返回200


#客户端
def f3(n):
	i=0
	f=f2() #接口初始化
	f.send(None) #建立连接
	while i<n:
		r=f.send(i) #发送请求并返回数据
		print(r)
		i +=1
	f.close()	


f=f3(10)


	


	

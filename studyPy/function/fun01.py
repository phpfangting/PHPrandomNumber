def myabs(num):
	if num > 0 :
		return num
	else:
		return -num


num=myabs(-100)	
print(num)

def nop():
	print('hello')


nop()	

def cal(*p):
	for x in p:
		print(x)

arr = [1,2,3,4,5,6,7,8]
cal(*arr)

#关键字参数
def cal2(m,**kw):
	print(m)
	print(kw)


def person(name, age, **kw):
    print('name:', name, 'age:', age, 'other:', kw)

person('Bob', 35, city='Beijing',job=100)

key={'name':'zhangsan','age':18}
cal2(10,**key)
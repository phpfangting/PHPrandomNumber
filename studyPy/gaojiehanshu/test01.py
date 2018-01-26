def f(x):
	return x*x







arr = map(f,[1,2,3,4,5,6,78])
arr = list(arr)

print(arr)

f = lambda x:x*x



print(f(10))

f2=map(lambda x:x*x,[3,56,678,5])


print(list(f2))


def f2(x):
	return x%2==0



arr=list(filter(f2,[1,2,3,4,5,6,7,8,9,10]))
print(arr)


def  ff():
	a=10
	def fff():
		return a+10

	return fff
	

print(ff()())	
print(ff()())	
print(ff()())	
print(ff()())	
print(ff()())		
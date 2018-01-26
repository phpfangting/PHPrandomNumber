arr = {'name':'zhangsan','age':18}


for  k,x in arr.items():

	print(k)


arr2=[x*2 for x in range(1,100)]

print(arr2)


import os

arr3 = [d for d in  os.listdir('../../../')]

print(os)

arr5 = [m+n for m in 'abc' for n in'cde']

print(arr5)


arr6 = [x for x in range(1,1000000)]

for x in arr6:
	print(x)


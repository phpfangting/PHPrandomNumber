# def f5(n):

# 	if n==1:

# 		return 1;
# 	else:
	
# 		return f5(n-1)*n;	



# num=f5(10);

# print(num);


# arr=[];
# i=0;

# while i<100:

# 	if(i%2==0):

# 		arr.append(i);

# 	i +=1;	


# print(arr);		


# #切片
# arr=[1,2,3,4,5,6,7,8];
# arr2=arr[-3:-1];
# print(arr2);


# arr=(1,2,3,4,5,6);

# arr3=arr[1:5];

# print(arr3);

# arr4=['a.jpg','b.jpg','c.png'];

# for x in arr4:

# 	print(x[:-4]);


#
#
#迭代

arr5={'数学':80,'语文':89,'物理':98};

for k,v in arr5.items():

	print(k);


from collections import Iterable;

print(isinstance('abc',Iterable));	


arr6=[1,2,3,4,5,6,6];

for i,val in enumerate(arr6):

	print(i,val);



#if
# age=20;

# if age > 20 :

# 	print('大叔');
# else:
# 	print('小鲜肉');	

# score=int(input());

# if score>=90:

# 	print('very good');

# elif score >=80:

# 	print('good');

# else:

# 	print('ok');


#for


# member=['张三','lisi','wangsan','xiaoming'];


# for x in member:

# 	print(x);


# num=range(100);
# sums=0
# for x in num:

# 	sums +=x;



# print(sums);


#while

# num=range(100);

# i=0;

# sums=0;

# while i<100:
	
# 	sums+=i;

# 	i +=1;

# print(sums);	

#字典


score={'zhangsan':'100','lisi':90,'wangsan':89,'arr':[12,45,67,78]};

print(score['arr']);


print('ss' in  score);


print(score.get('lis','000'));

print(score.pop('lisi'));


num=set([1,2,3,4,5,6,7,8,9]);

num.add(10);

print(num);

print(num.remove(9));


num1=set([123,45454,68]);

num2=set([1,2,3]);

num3=num1 | num2;

print(num3);
#!/bin/bash
a=10
b=10
#[ $a -gt $b ] && echo 'ok' || echo 'error'
#[[ $a -gt $b ]] && echo 'ok' || echo 'error'

# if [ $a -gt $b ];then
# 	echo 'ok'
# else
# 	echo 'error'
# fi

#for循环
# for((i=0;i<100;i++));do
# 	if [ $a -gt $i ];then
# 		echo 'ok'
# 	fi		
# done	
# i=0
# while [[ $i -lt $a ]]; do
# 	echo $i
# 	((i=$i+1))

# done
# num=2
# case $num in
# 	1|2)
# 	echo '1'
# 	;;
# 	2)
# 	echo '2'
# 	;;
# esac	

for x in `ls -l`;do
	echo $x
done	


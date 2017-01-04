#!/bin/bash


num=$1

if [ ${num:-1} -eq 1 ];then

	echo 'hello'

fi


echo ${num:0}

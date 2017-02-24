#!/bin/bash
a=`git branch|grep ''|awk '{print $1}'`


OLD_IFS="$IFS"
IFS=" "
arr=($a)
IFS="$OLD_IFS"
echo ${arr[0]}

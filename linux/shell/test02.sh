#!/bin/bash


arr=(12 23 45 67 67 3 65 56 45)

for i in $arr;do

	echo $i

done

echo $0


for x in "$@";do

	echo $x

done

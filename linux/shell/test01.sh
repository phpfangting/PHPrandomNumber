#!/bin/bash

name='张三'

echo "My name is ${name}"

str="ni shi wonei xin de yi shou ge"

offset=`expr index "$str" ge`;
echo $offset
echo ${str:$offset:2}

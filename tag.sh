#!/bin/bash
#
#打 tag
#
#

if [ "$1" = "" ];then

	echo "请在脚本后面写上注释"

	exit
fi

VERSION="vtest"`date "+%Y%m%d%H%M"`

git tag -a $VERSION -m "$1"

git push origin $VERSION

echo $VERSION

git tag -ln

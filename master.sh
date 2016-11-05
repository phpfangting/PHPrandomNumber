#!/bin/bash


BRANCH=`git branch|grep '*'|awk '{print $2}'`
MASTER='master'
COMMENT=$1

if [ "$BRANCH" != "$MASTER" ];then

    echo -e "\033[31m 当前在 ${BRANCH} 分支上 请切换到 master 分支 \033[0m";

    exit

fi

echo -e "\033[32m 正在更新本地 master 分支 \033[0m"

echo '********************************************************************************'

git pull origin master #更新master分支

IS_COMMIT=`git status|grep 'nothing to commit'` #获取分之是否是干净的

if [ "$IS_COMMIT" = "" ];then

    if [ "$COMMENT" = "" ];then

         echo -e "\033[31m 该 ${BRANCH} 分支上有改动,请填写注释！！！再重新运行该脚本 \033[0m";

         exit

    fi

     echo ''

     echo -e "\033[32m 提交代码到本地 master 分支 \033[0m"

     echo '*********************************************************************************'

     git commit -am"$COMMENT" #提交代码


     echo ''

     echo -e "\033[32m 推送代码到远程 master 分支  \033[0m"

         echo '*********************************************************************************'

     git push origin master

     echo ''

     echo -e "\033[32m 更新本地 master 分支 \033[0m"

     echo '*********************************************************************************'

     git pull origin master

fi

echo ''

echo -e "\033[32m 更新完成！！！\033[0m"


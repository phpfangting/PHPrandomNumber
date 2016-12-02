#!/bin/bash
#
#易拍全球主站打版脚本
#
#

#当前分支

BRANCH=`git branch|grep '*'|awk '{print $2}'` 

COMMENT=$1

COLOR_START_GREEN="\033[32m" #绿色

COLOR_END="\033[0m" #

COLOR_START_RED="\033[31m" #红色

#成功提示

function success(){
	
    echo ''

    echo -e "${COLOR_START_GREEN} ${MSG} ${COLOR_END}"

    echo -e "*********************************************************************************${COLOR_START_GREEN}[ok]${COLOR_END}"

}

#错误提示

function error(){


 echo ''

 echo -e "${COLOR_START_RED} ${MSG} ${COLOR_END}"

 echo -e "*********************************************************************************${COLOR_START_RED}[failed]${COLOR_END}"


}

function updateDev(){


	MSG="正在更新本地 dev 分支"

	success;

	git pull origin dev;

	IS_COMMIT=`git status|grep 'nothing to commit'` #获取分之是否是干净的

	if [ "$IS_COMMIT" = "" ];then

		if [ "$COMMENT" = "" ];then

			MSG="该 ${BRANCH} 分支上有改动,请填写注释！！！再重新运行该脚本";

			error;

			exit;

		fi

		MSG="提交代码到本地 dev 分支"

		success;

		git add .

		git commit -am"$COMMENT" #提交代码

		MSG="推送代码到远程 dev 分支"

		success;

		git push origin dev

		MSG="更新本地 dev 分支"

		success;

		git pull origin dev


	fi

	MSG="更新完成！！！"

	success;
}


read -p "1 更新,2 打版,3 创建Tag: " STR


case "$STR" in

   1)

    if [ "$BRANCH" = "dev" ];then

        updateDev;

    fi

    ;;

   2)

    if [ "$BRANCH" = "dev" ];then

        updateDev;

        MSG="从本地  dev 分支切换到本地 master 分支"

        success;

        git checkout master

        MSG="正在更新本地 master 分支"

        success;

        git pull origin master

        MSG="合并本地 dev 分支 到 master 分支"

        success;

        MERGE_STATUS=`git merge dev|grep 'failed'`

        if [ "$MERGE_STATUS" != "" ];then

        	MSG="合并分支出现错误,正尝试解决"

        	error;

        	git add .

        	git commit -am 'update'
        fi

        git merge dev

        MSG="提交代码到本地 master 分支"

        success;

        git commit -am'update'

        MSG="推送代码到远程 master 分支"

        success;

        git push origin master

        MSG="更新本地 master 分支"

        success;

        git pull origin master

        MSG="在 master 分支 打版完成！！！"

        success;

        MSG="从 master分支 切换到 dev 分支"

        success;

        git checkout dev

        updateDev;

    fi

    ;;

   3)

    BRANCH=`git branch|grep '*'|awk '{print $2}'`

    MSG="当前 $BRANCH 已经创建的tag列表"

    success;

    #git ls-remote --tags origin|awk  '{if (NR%2==1) print $2}'|tr -d 'refs/tags/'|egrep 'v?[0-9]+\.[0-9]+' --color

    git tag 

    read -p "是否创建tag?yes|no: " STR

    if [ "$STR" = "yes" ];then

           VERSION="v"`date "+%Y%m%d.%H"`

           MSG="开始打tag"

           success;

           git tag -a  $VERSION -m"$VERSION"

           git push origin $VERSION

           MSG="$VERSION 完成！！！"

           success;

    fi

    ;;

   *)
    
    echo ''

    echo '请选择相应的操作！！！'

    exit;

    ;;
esac    

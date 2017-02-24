#!/bin/bash

#易拍全球主站打版脚本
#author:liuft
#date  :2017-02-24

UPDATE_BRANCH='' #需要更新操作的分支
TARGET_BRANCH=$1 #目标分支
MERGE_BRANCH=`git branch|grep '*'|awk '{print $2}'` #要合并的分支
COMMENT=$2 #注释

COLOR_START_GREEN="\033[32m" #绿色
COLOR_END="\033[0m"
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



#操作分支

function updateBranch(){

	 MSG="正在更新本地 ${UPDATE_BRANCH} 分支"
	 success;
	 git pull origin $UPDATE_BRANCH
	 IS_COMMIT=`git status|grep 'nothing to commit'` #获取分之是否是干净的

	 if [ "$IS_COMMIT" = "" ];then
	 
	 	if [ "$COMMENT" = "" ];then
			
			MSG="该 $UPDATE_BRANCH 分支上有改动,请填写注释！！！再重新运行该脚本";
			error;
			exit;
		fi
	 
	
	 	MSG="提交代码到本地 $UPDATE_BRANCH 分支"
	 	success;
	 	git add .
	 	git commit -am"$COMMENT" #提交代码
	 	MSG="推送代码到远程 $UPDATE_BRANCH 分支"
	 	success;
	 	git push origin $UPDATE_BRANCH
	 	git pull origin $UPDATE_BRANCH
	 	MSG="更新本地 $UPDATE_BRANCH 分支"
	 	success;
	 	git pull origin $UPDATE_BRANCH
	
	fi

	MSG="更新完成！！！"
	success;
}

UPDATE_BRANCH=$MERGE_BRANCH
updateBranch;









#!/bin/bash
#auto Mysql back
#author liufangting

MYSQL_USER_NAME='root'
MYSQL_PASSWORD='123456'
MYSQL_DATABASE='am_live'
BACK_DIR="/e/backlog/"`date +%Y%m%d`

if [ ! -d $BACK_DIR ];then

    mkdir -p $BACK_DIR
fi

cd $BACK_DIR
echo -e "\033[32m 开始备份 \033[0m"
mysqldump -u$MYSQL_USER_NAME -p$MYSQL_PASSWORD $MYSQL_DATABASE > sql.bak 
cd ~


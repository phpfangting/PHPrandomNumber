from wsgiref.simple_server import make_server;

from index01 import application;

#创建fuwu

httpd=make_server('127.0.0.1',8080,application);

print('Http Server is Startd');

#开始监听

httpd.serve_forever();



drop procedure pro;

DELIMITER $

create procedure pro()
begin
declare uid int;
declare email varchar(22) ;
declare tel int8;
declare str varchar(100) default 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
declare username varchar(20) default '';
declare dt int8 ;

set uid = 1010 ;

while(uid < 3000000) do

set uid = uid + 1;
set email = concat(floor(rand()*1099899999),'@qq.com');
set tel = floor(rand()*13000000000);
set username = substring(str , FLOOR(1 + RAND()*62 ),3);
set dt =  floor(rand()*1300000000);

insert into study.member(tel,name,email,create_dt)  values(tel,username,email,dt);


end while;

end

$
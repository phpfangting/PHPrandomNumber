<?php
require_once('class.phpmailer.php');//引入类库文件
$mail = new PHPMailer(); //实例化
$mail->IsSMTP(); // 启用SMTP
$mail->Host = "smtp.sina.com"; //SMTP服务器 这里以新浪邮箱为例子
$mail->Port = 25;  //邮件发送端口
$mail->SMTPAuth   = true;  //启用SMTP认证
$mail->CharSet  = "UTF-8"; //字符集
$mail->Encoding = "base64"; //编码方式
$mail->Username = "test@sina.com";  //你的邮箱
$mail->Password = "123";  //你的密码
$mail->Subject = "测试邮件标题"; //邮件标题
$mail->From = "test@sina.com";  //发件人地址（也就是你的邮箱）
$mail->FromName = "发件人测试姓名";  //发件人姓名
$address = "test@sina.com";//收件人email
$mail->AddAddress($address, "某某人");//添加收件人地址，昵称
$mail->AddAttachment("test,zip","重命名附件.zip"); // 添加附件,并重命名
$mail->IsHTML(true); //支持html格式内容
$mail->Body = "这是一份测试邮件，此为邮件内容"; //邮件内容
//发送
if(!$mail->Send()) {
 echo "fail: " . $mail->ErrorInfo;
} else {
 echo "ok";
}
?>
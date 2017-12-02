<?php
set_time_limit(0);
require(__DIR__.'/../'."phpMQTT.php");

$mqtt = new phpMQTT("10.10.10.123", 1883, "phpMQTT Sub Example"); //Change client name to something unique

if(!$mqtt->connect()){
	exit(1);
}
$topics['music'] = array("qos"=>0, "function"=>"procmsg");
$mqtt->subscribe($topics,0);
while($mqtt->proc()){

}
$mqtt->close();
function procmsg($topic,$msg){
//	echo "time:".date("r")."\nTopic:{$topic}\n$msg\n";
	echo 'hellomyname';
}

?>

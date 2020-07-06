


<?php
$to=$_GET['to'];
$from="InfoSMS";
$tex=$_GET['message'];
$tokenData="cqzDvW59qDsCWbAAxQjp";
$aray=[];
$aray['token']=$tokenData;
$aray['from']=$from;
$aray['to']=$to;
$aray['text']=$tex;
if(isset($_GET['submit'])){
	header("location:http://api.sparrowsms.com/v2/sms/?".http_build_query($aray));
}


?>
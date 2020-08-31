<?php
//------------------------------------------------------------------------------




//by ma.orojloo
//ma.orojloo@gamil.com
//github.com/maorojloo
//:)








error_reporting(0);
//------------------------------------------------------------------------------
if (!file_exists('madeline.php')) {copy('http://localhost:6969/bio/madeline.php', 'madeline.php');}
//------------------------------------------------------------------------------
include ('jdf.php');
//------------------------------------------------------------------------------
include 'madeline.php';
//------------------------------------------------------------------------------
$settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>575238,'api_hash'=> 'a90de900f4d398925565835ce37fa91e']];
$MadelineProto = new \danog\MadelineProto\API('session.madeline',$settings);
$MadelineProto->start();
//------------------------------------------------------------------------------
if(!file_exists("join.txt")){try{$MadelineProto->channels->joinChannel(['channel' => "https://t.me/****", ]); touch('join.txt');}catch (\danog\MadelineProto\RPCErrorException $e) {}}
//------------------------------------------------------------------------------
$day_number = jdate('j');
$month_number = jdate('n');
$year_number = jdate('y');
$day_name = jdate('l');
$time = date("H:i");
//------------------------------------------------------------------------------
copy("https://bcassetcdn.com/asset/logo/e7b2b2cb-aed9-4ca2-b4bc-61d4414d891b/logo?v=4&text=$time",'time.jpg');
//$MadelineProto->photos->uploadProfilePhoto(['file' => 'time.jpg']);
//------------------------------------------------------------------------------
$name = "اسمتون";
//$MadelineProto->account->updateProfile(['first_name' => "$name|$time|"]);
//------------------------------------------------------------------------------
$MadelineProto->account->updateProfile(['about' => "بازدید شما در ساعت $time .ثبت شد"]);
//------------------------------------------------------------------------------
echo 'OK ENJOY IT!';
?>


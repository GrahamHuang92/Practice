<?php
namespace Admin\Controller;
use Think\Controller;

define("TOKEN", "voguemwx");
class IndexController extends Controller {
    public function index(){
//        echo C('WX_ACCESS_TOKEN');
        
       if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $echoStr = $_GET["echostr"];		
		$token = C('TOKEN');
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			echo $echoStr;
            exit;
		}
//        echo 'tooken';
    }
    public function show(){
        echo 'imooc';
    }
    
    
}
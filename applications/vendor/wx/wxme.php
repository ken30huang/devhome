<?php
define('TOKEN' , 'yh0H8istzH86s0Hf20rAogtAHtAiyON6');
define('APPID' , 'wx06e44cafb33b63c5');
define('APPSECRET', 'cdf06c850c5288557a53304800188454');

if(isset($_GET['signature']) && isset($_GET['nonce']) && isset($_GET['timestamp']) && isset($_GET['echostr'])) {
    $tmpArr = array($_GET['nonce'] , $_GET['timestamp'] , TOKEN);
    sort($tmpArr);
    $tmpStr = implode($tmpArr);
    $tmpStr = sha1($tmpStr);
    if($tmpStr == $_GET['signature']) {
        echo $_GET['echostr'];
    }
} else {
    // echo "Hello , is me";
    $postData = file_get_contents('php://input');
    if(!$postData) {
        echo 'error input';
        exit(0);
    }

    $xmlObj = simplexml_load_string($postData , 'SimpleXMLElement' , LIBXML_NOCDATA);
    $fromUserName = $xmlObj->FromUserName;
    $toUserName = $xmlObj->ToUserName;
    $word = trim($xmlObj->Content);
    $time = time();
    $textTpl = "<xml>
            <ToUserName><![CDATA[%s]]></ToUserName>
            <FromUserName><![CDATA[%s]]></FromUserName>
            <CreateTime>%s</CreateTime>
            <MsgType><![CDATA[text]]></MsgType>
            <Content><![CDATA[%s]]></Content>
        </xml>";
    $content = date('Y-m-d H:i:s');
    if($word == 'hello') {
        $content = '你好';
    } else if($word == 'home') {
        $content = 'http://blog.kenspace.xyz/home';
    } else if($word == 'admin') {
        $content = 'http://blog.kenspace.xyz/kadmin/sys';
    }

    $result = sprintf($textTpl , $fromUserName , $toUserName , $time , $content);
    echo $result;
    exit;

}

?>
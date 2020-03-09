<?php
define('MINI_APP_ID' , 'wx3104da5198e06de7');
define('MINI_APP_SECRET' , 'b294d1884626fac137b4412dd65ddc3a');

class ApiWxController extends WebController {

    public function minilogin() {
        $code = $this->http->inputGet('code');        
        $loginUrl = 'https://api.weixin.qq.com/sns/jscode2session?appid='.MINI_APP_ID.'&secret='.MINI_APP_SECRET.'&js_code='.$code.'&grant_type=authorization_code';
        $login_res = $this->http->curlReq($loginUrl);
        echo $login_res;
        exit;
    }
}
?>
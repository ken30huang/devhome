<?php
class HomeToolsController extends IndexBaseController {

    public function index() {
        $this->display();
    }

    public function mind() {
        $this->display();
    }

    public function flab() {
        $this->display();
    }

    public function flabview() {
        
        $data = $this->http->inputPost('pageData');
        print_r($data);
        // $this->display();
        $path = APP_PATH.DS.'views'.DS.MODULE_NAME.DS.C_NAME.DS.'flabview.php';

    }
}
?>
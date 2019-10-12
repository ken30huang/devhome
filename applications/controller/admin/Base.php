<?php
class AdminController extends WebController {

    public function index() { echo 'admin controller '; }

    protected function checkLogin() {
        if(!$this->session->get('user')) {
            $this->http->redirect('/admin/user/login');
        }
    }
}
?>
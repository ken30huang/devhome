<?php
class AdminUserController extends AdminController {
    
    public function index() {
        
        $this->checkLogin();
    }

    public function save() {
        
    }

    public function del() {
        
    }

    public function logout() {
        $this->session->del('user');
        $this->http->redirect('/admin/user/login');
    }

    public function login() {
        if($this->http->isPost()) {
            $uname = $this->http->inputPost('uname');
            $upassword = $this->http->inputPost('upassword');
            $admin_model = TableModel::getInstance('admin' , 'admin_uid');
            $ucount = $admin_model->getCount(" AND admin_uname='".$uname."' AND admin_upwd='".md5($upassword)."'");
            if($ucount == 0) {
                $this->http->fail('用户名密码错误')->json();
            }

            $rows = $admin_model->where("admin_uname='".$uname."' AND admin_upwd='".md5($upassword)."'")->query();
            $this->session->set('user' ,$rows[0] );
            $this->http->success()->json();
        } else {
            $this->view->show('login', V_PATH);
        }
        
    }

}
?>
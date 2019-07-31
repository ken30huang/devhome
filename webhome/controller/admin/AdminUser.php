<?php
class AdminUserController extends AdminController {

    private $c_type = 'article';

    public function index() {
        
    }

    public function save() {
        
    }

    public function del() {
        
    }

    public function logout() {
        $this->web->clearSession();
        $this->web->redirect('/admin/user/login');
    }

    public function login() {
        if($this->web->isPost()) {
            $uname = $this->web->reqPost('uname');
            $upassword = $this->web->reqPost('upassword');
            $admin_model = TableModel::getInstance('admin' , 'admin_uid');
            $ucount = $admin_model->getCount(" AND admin_uname='".$uname."' AND admin_upwd='".md5($upassword)."'");
            if($ucount == 0) {
                $this->fail('用户名密码错误')->getJSON();
            }

            $rows = $admin_model->where("admin_uname='".$uname."' AND admin_upwd='".md5($upassword)."'")->query();
            $this->web->setSession('user' ,$rows[0] );
            $this->success()->getJSON();
        } else {
            $this->view->show('user/login');
        }
        
    }

}
?>
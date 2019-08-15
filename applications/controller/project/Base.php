<?php
class ProjectBaseController extends WebController {

    public function checkAccess() {
        if(!$this->session->get('projuser')) {
            $this->http->redirect(module_url('/user/login'));
        }
    }
}
?>
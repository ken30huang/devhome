<?php
class AdminIndexController extends AdminController {

    public function init($route) {
        parent::init($route);
    }

    public function index() { echo 'admin index controller '; }
}
?>
<?php
class HomeFlabController extends IndexBaseController {

    public function index() {
        $this->displayView('index');
    }

    public function run() {
        $post = $this->http->inputPost();
    }
}
?>
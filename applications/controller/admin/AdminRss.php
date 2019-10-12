<?php
class AdminRssController extends AdminController {


    public function index() {

        $this->checkLogin();
        $cmodel = $this->getModel('rss');
        $pageData = $cmodel->order('rss_id DESC')->query();
        $this->view->assign('rows' , $pageData);
        $this->view();
    }

    public function save() {
        $post = $this->http->inputPost();
        $this->getModel('rss')->data($post)->save();
        $this->http->success()->json();
    }

    public function del() {
        $this->getModel('rss')->data('rss_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {
        $cmodel = $this->getModel('rss');
        $row = $cmodel->data('rss_id' , $this->http->inputGet('rss_id'))->getRow();
        $this->view->assign('row' , $row);
        $this->view();
    }

    public function parsecont() {

        $rss_model = $this->getModel('rss');
        $rss_id = $this->http->inputPost('rss_id');
        $row = $rss_model->data('rss_id' , $rss_id)->getRow();
        if(!$row) {
            $this->http->fail('找不到记录[id='.$rss_id.']')->json();
        }

        $contents = @file_get_contents("compress.zlib://".$row['rss_link']);
        $contents = $this->_sanitize_html($contents);

        $dom = new DOMDocument('1.0', 'utf-8');
        $dom->loadXML($contents);
        $entrys = $dom->getElementsByTagName($row['rss_item']);
        $cmodel = $this->getModel('content');
        foreach($entrys as $entryitem) {
            $obj = array();
            $obj['c_title'] = $entryitem->getElementsByTagName($row['rss_item_title'])->item(0)->nodeValue;
            $obj['c_link'] = $entryitem->getElementsByTagName($row['rss_item_url'])->item(0)->nodeValue;
            $obj['c_type'] = 'rss';
            $num = $cmodel->getCount(" AND c_title='".$obj['c_title']."'");

            if($num == 0) {
                $cmodel->save($obj);
            }
        }

        $this->http->success()->json();

    }

    private function _sanitize_html($content) {
        if (!$content) return '';
        $invalid_characters = '/[^\x9\xa\x20-\xD7FF\xE000-\xFFFD]/';
        return preg_replace($invalid_characters, '', $content);
    }

}
?>
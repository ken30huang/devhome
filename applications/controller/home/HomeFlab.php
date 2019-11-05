<?php
class HomeFlabController extends IndexBaseController {

    public function save() {
        
        $demo_id = 0;
        $data = $this->http->inputPost('pageData');
        $title = $this->http->inputPost('title');
        $summery = $this->http->inputPost('summery');
        $postType = $this->http->inputPost('postType');
        $cateid = $this->http->inputPost('cateid');
        $pageData = json_decode($data , true);

        $c_model = $this->getModel('content');
        $snippet_model = $this->getModel('snippet');
        $code_model = TableModel::getInstance('code_file','cf_id');

        $create_date = date('Y-m-d H:i:s');
        $cdata = array('c_type'=>'snippet' , 'c_cateid'=>$cateid, 'c_title'=>$title, 'c_summery'=>$summery, 'c_pubdate'=>$create_date);
        $c_model->data($cdata)->save();
        $c_id = $c_model->getInsertID();

        if($postType > 1) {
            $demos_model = $this->getModel('demo');
            $demos_data = array(
                'demo_name'=>$title,
                'demo_desc'=>$summery
            );
            $demos_model->data($demos_data)->save();
            $demo_id = $demos_model->getInsertID();
        }

        if(isset($pageData['html'])) {
            $fdata = array('c_cateid'=>$cateid , 'c_filename'=>$title.'.html', 
                'c_filecont'=>$pageData['html'], 'c_contid'=>$c_id, 'c_filedate'=>$create_date);
            $snippet_model->data($fdata)->save();
            
            if($demo_id > 0) {
                $code_data = array('cf_name'=>$title.'.html' , 'demo_id'=>$demo_id, 'cf_code'=>$pageData['html'],'cf_type'=>'html');
                $code_model->data($code_data)->save();
            }
        }

        if(isset($pageData['css'])) {
            $fdata = array('c_cateid'=>$cateid , 'c_filename'=>$title.'.css', 
                'c_filecont'=>$pageData['css'], 'c_contid'=>$c_id, 'c_filedate'=>$create_date);
            $snippet_model->data($fdata)->save();

            if($demo_id > 0) {
                $code_data = array('cf_name'=>$title.'.css' , 'demo_id'=>$demo_id, 'cf_code'=>$pageData['css'],'cf_type'=>'css');
                $code_model->data($code_data)->save();
            }
        }

        if(isset($pageData['js'])) {
            $fdata = array('c_cateid'=>$cateid , 'c_filename'=>$title.'.js', 
                'c_filecont'=>$pageData['js'], 'c_contid'=>$c_id, 'c_filedate'=>$create_date);
            $snippet_model->data($fdata)->save();

            if($demo_id > 0) {
                $code_data = array('cf_name'=>$title.'.js' , 'demo_id'=>$demo_id, 'cf_code'=>$pageData['js'],'cf_type'=>'js', 'cf_jstype'=>$pageData['jstype']);
                $code_model->data($code_data)->save();
            }
        }

        $this->http->success()->json();
    }
}
?>
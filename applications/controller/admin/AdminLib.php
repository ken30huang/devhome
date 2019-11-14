<?php
class AdminLibController extends AdminController {

    public function index() {

        $this->checkLogin();
        $cmodel = $this->getModel('lib');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData();
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('page' , $page);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/lib"));
        $this->view();
    }

    public function save() {
        $post = $this->http->inputPost();
        $this->getModel('lib')->data($post)->save();
        $this->http->success()->json();
    }

    public function del() {
        $this->getModel('lib')->data('lib_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {
        $cmodel = $this->getModel('lib');
        $cate_list = $this->getModel('category')->getChilds(33);
        $row = $cmodel->data('lib_id' , $this->http->inputGet('lib_id'))->getRow();
        $this->view->assign('row' , $row);
        $this->view->assign('cate_list' , $cate_list);
        $this->view();
    }

    public function reqlib() {
        $lib_res = file_get_contents('https://api.bootcdn.cn/libraries.min.json');
        $lib_data = json_decode($lib_res , true);
        $cmodel = $this->getModel('lib');
        $cstart = 1;
        foreach($lib_data as $lib_row) {
            $rowId = 0;
            $result = $cmodel->where("lib_name='".$lib_row[0]."'")->query();
            if(count($result) > 0) {
                $rowId = $result[0]['lib_id'];
                $post = array('lib_id'=>$rowId, 'lib_star'=>$lib_row[2]);
                $cmodel->data($post)->save();
            } else {
                $post = array(
                    'lib_name'=>$lib_row[0],
                    'lib_intro_res'=>$lib_row[1],
                    'lib_star'=>$lib_row[2]
                );
                $cmodel->data($post)->save();
                $rowId = $cmodel->getInsertID();
            }
            if($cstart > 100) {
                break;
            }
        }
        $this->http->success()->json();
    }

    public function getdetail() {
        
        $cmodel = $this->getModel('lib');
        $row = $cmodel->data('lib_id' , $this->http->inputPost('lib_id'))->getRow();
        $file_res = file_get_contents('https://api.bootcdn.cn/libraries/'.$row['lib_name'].'.min.json');
        $file_data = json_decode($file_res , true);
        $homepage = getRowVal('homepage' , $file_data);
        $version = getRowVal('version' , $file_data);
        $github = '';
        $repository = getRowVal('repository' , $file_data);
        if($repository) {
            $github = $repository['url'];
        }

        $keywords = getRowVal('keywords' , $file_data);
        $update = array('lib_id'=>$row['lib_id'] , 'lib_site'=>$homepage , 'lib_github'=>$github, 'lib_keyword'=>implode(',',$keywords) , 'lib_version'=>$version);
        $cmodel->data($update)->save();
        $this->http->success()->json();
    }

}
?>
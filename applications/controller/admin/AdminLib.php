<?php
class AdminLibController extends AdminController {

    public function index() {

        $this->checkLogin();
        $cmodel = $this->getModel('lib');
        $where = "";
        $page = intval($this->http->inputGet('page'));
        $q = $this->http->inputGet('q');
        $page = $page==0 ? 1 : $page;
        if($q != '') {
            $where .= " AND (lib_name LIKE '%".$q."%')";
        }
        $pageData = $cmodel->setPageNum($page)->getPageData($where);
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('page' , $page);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/lib"));
        $this->view();
    }

    public function save() {
        $post = $this->http->inputPost();
        $model = null;
        if($post['save_opr'] == 'lib') {
            $model = $this->getModel('lib');
            $post['lib_cateid'] = $post['lib_cateid'].',';
        } else {
            $model = TableModel::getInstance('lib_files' , 'file_id');
        }
        unset($post['save_opr']);
        $model->data($post)->save();
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

    public function filelist() {
        $model = TableModel::getInstance('lib_files' , 'file_id');
        $file_list = $model->where("lib_id=".$this->http->inputGet('lib_id'))->order('file_id ASC')->query();
        $this->_assignData();
        $this->view->assign('file_list' , $file_list);
        $this->view();
    }

    public function fileadd() {
        $model = TableModel::getInstance('lib_files' , 'file_id');
        $file_row = $model->data('file_id' , $this->http->inputGet('file_id'))->getRow();
        $this->_assignData();
        $this->view->assign('file_row' , $file_row);
        $this->view();
    }

    private function _assignData() {
        $this->view->assign('lib_id' , $this->http->inputGet('lib_id'));
        $this->view->assign('page' , $this->http->inputGet('page'));
    }

}
?>
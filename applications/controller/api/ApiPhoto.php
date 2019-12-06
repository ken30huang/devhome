<?php
class ApiPhotoController extends WebController {

    //获取深股行情
    public function pixabay() {
        $input = $this->http->inputGet();
        $lang = 'cn';
        if(!empty($input['photo_lang'])) {
            $lang = $input['photo_lang'];
        }
        $url = 'https://pixabay.com/api/?key=12862972-a8dbde642644e818a8ee0ecd0&lang='.$lang;
        if(!empty($input['q'])) {
            $url .= '&q='.$input['q'];
        }
        if(!empty($input['photo_type'])) {
            $url .= '&image_type='.$input['q'];
        }
        if(!empty($input['photo_category'])) {
            $url .= '&category='.$input['photo_category'];
        }
        if(!empty($input['page_num'])) {
            $url .= '&page='.$input['page_num'];
        }
        if(!empty($input['page_show'])) {
            $url .= '&per_page='.$input['page_show'];
        }
        
        $cont = file_get_contents($url);
        $this->http->output($cont);
    }
}
?>
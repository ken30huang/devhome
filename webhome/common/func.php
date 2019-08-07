<?php
function page_show($page , $total , $pagesize=10 , $url) {
    //定义两边偏移
    $offset = 2;
    //求总页数，上一页，下一页
    $pageTotal = ceil($page/$pagesize);
    $prev = (intval($page)-1) <= 0 ? 1 : intval($page)-1;
    $next = (intval($page)+1) > $pageTotal ? $pageTotal : intval($page)+1;
    //开始显示和结束的页码
    $start = 1;
    $start = $page - $offset;
    $start = ($start < $offset) ? 1:$start;
    //左偏移小
    $end = $offset*2+$start;
    if($end > $pageTotal ) {
        //最后的页码大于总页数
        $end = $pageTotal;
    }
    
    $page_show = array();
    $page_show[] = '<nav aria-label="Page navigation example" class="m-center"><ul class="pagination">';
    $page_show[] = '<li class="page-item"><a class="page-link" href="'. $url.'?page='.($prev).'">Previous</a></li>';
    for($i=$start; $i<=$end; $i++) {
        $page_show[] = '<li class="page-item '.($i==$page?'active':'').'"><a class="page-link" href="'. $url.'?page='.($i).'">'.$i.'</a></li>';
    }
    $page_show[] = '<li class="page-item"><a class="page-link" href="'. $url.'?page='.($next).'">Next</a></li>';
    $page_show[] = '</ul></nav>';
    return implode('' , $page_show);
}
?>
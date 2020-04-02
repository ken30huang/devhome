<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>实验室</title>
    <link rel="shortcut icon" href="/static/imgs/favicon.ico" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/paper.min.css" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/static/plugins/codemirror/codemirror.css" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/common.css?v=1.0.0" />
    <script src="/static/js/libs/jquery/jquery.min.js"></script>
    <script src="/static/js/libs/base64/base64.min.js"></script>
    <script src="/static/plugins/codemirror/codemirror.js"></script>
    <script src="/static/js/comm.js"></script>
</head>

<body style="overflow:hidden;">
    <nav class="border fixed split-nav">
        <div class="nav-brand">
            <h3><a href="/">首页</a></h3>
        </div>
        <div class="collapsible">
            <input id="collapsible1" type="checkbox" name="collapsible1">
            <button>
                <label for="collapsible1">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </label>
            </button>
            <div class="collapsible-body">
                <ul class="inline">
                    <li><a href="javascript:;" id="settingBtn" for="modal-2">设置</a></li>
                    <li><a href="javascript:;" id="runBtn">运行</a></li>
                    <!-- <li><a href="javascript:;" id="exportBtn">导出</a></li> -->
                    <?php if(isset($issave)):?>
                    <li><a href="javascript:;" id="saveBtn">保存</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mt-70 row code_wrap">
        <div class="col-6 code-item">
            <div class="row text-center edit_tab">
                <div class="col-4 tab-item text-secondary">HTML代码</div>
                <div class="col-4 tab-item">CSS代码</div>
                <div class="col-4 tab-item">Javascript代码</div>
            </div>
            <div class="code-edit">
                <textarea id="html_content" class="code-text"><?php if(isset($html)): echo $html; endif;?></textarea>
            </div>
            <div class="code-edit" style="display: none;">
                <textarea id="css_content" class="code-text"><?php if(isset($css)): echo $css; endif;?></textarea>
            </div>
            <div class="code-edit" style="display: none;">
                <textarea id="js_content" class="code-text"><?php if(isset($js)): echo $js; endif;?></textarea>
            </div>
        </div>
        <div class="col-6 border-dashed  code-item">
            <iframe id="code_result" name="code_result" style="width:100%;height:100%;border:none"></iframe>
        </div>
    </div>
    <form name="runForm" action="/home/flab/run" target="code_result" method="post">
        <input type="hidden" name="html_content" value="<?php echo getRowVal('demo_html' , $row);?>" />
        <input type="hidden" name="js_content" value="<?php echo getRowVal('demo_js' , $row);?>" />
        <input type="hidden" name="css_content" value="<?php echo getRowVal('demo_css' , $row);?>" />
        <input type="hidden" name="js_type" value="<?php echo getRowVal('demo_jstype' , $row);?>" />
        <input type="hidden" name="js_links" value="<?php echo getRowVal('demo_jslinks' , $row);?>" />
        <input type="hidden" name="issubmit" value="<?php echo (isset($issubmit)?'1':'0'); ?>" />
    </form>
    <input class="modal-state" id="modal-2" type="checkbox">
    <div class="modal">
        <label class="modal-bg" for="modal-2"></label>
        <div class="modal-body">
            <label class="btn-close" for="modal-2">X</label>
            <h4 class="modal-title">扩展设置</h4>
            <p class="modal-text">
                Javascript类型:
                <select id="js_type">
                    <option value="javascript" <?php echo getSelVal('demo_jstype' , 'javascript' , $row);?>>javascript</option>
                    <option value="babel" <?php echo getSelVal('demo_jstype' , 'babel' , $row);?>>babel</option>
                </select>
            </p>
            <p class="modal-text">
                选择扩展Javascript:
                <div class="js_cont">
                    <?php foreach($jslist as $link):?>
                    <div class="chk-inline">
                        <label class="for">
                            <input
                                type="checkbox"
                                name="js_checks[]"
                                value="<?php echo $link['key'];?>"
                                <?php if(isset($js_links)):?>
                                    <?php if(in_array($link['key'] , $js_links)):?> checked <?php endif;?>
                                <?php endif;?>
                                /><?php echo $link['val'];?>
                        </label>
                    </div>
                    <?php endforeach;?>
                </div>
            </p>
            <a href="javascript:;" id="saveSetting">保存</a>
            <label for="modal-2" class="modal-link">Close</label>
        </div>
    </div>
    <input class="modal-state" id="chkSaveBox" type="checkbox">
    <div class="modal">
        <label class="modal-bg" for="chkSaveBox"></label>
        <div class="modal-body">
            <input type="hidden" id="demo_id" value="<?php echo getRowVal('demo_id' , $row , '0');?>" />
            <label class="btn-close" for="chkSaveBox">X</label>
            <h4 class="modal-title">保存成Demo</h4>
            <p class="modal-text">
                <div class="form-group">
                    <label>Demo名称</label>
                    <input type="text" placeholder="Demo名称" id="demo_name" value="<?php echo getRowVal('demo_name' , $row);?>" />
                </div>
                <div class="form-group">
                    <label>Demo描述</label>
                    <textarea id="demo_desc" placeholder="Demo描述"><?php echo getRowVal('demo_desc' , $row);?></textarea>
                </div>
            </p>
            <a href="javascript:;" id="postCont">保存</a>
            <label for="chkSaveBox" class="modal-link">Close</label>
        </div>
    </div>
</body>

<script src="/applications/layouts/<?php echo $ui_path;?>/js/code.js?v=1.0.2"></script>

</html>
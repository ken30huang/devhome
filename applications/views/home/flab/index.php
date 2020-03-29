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
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/common.css" />
    <script src="/applications/layouts/<?php echo $ui_path;?>/js/jquery.slim.min.js"></script>
    <script src="/static/plugins/codemirror/codemirror.js"></script>
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
                    <li><a href="javascript:;">保存</a></li>
                    <li><a href="javascript:;">导出</a></li>
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
                <textarea id="html_content" class="code-text"></textarea>
            </div>
            <div class="code-edit" style="display: none;">
                <textarea id="css_content" class="code-text"></textarea>
            </div>
            <div class="code-edit" style="display: none;">
                <textarea id="js_content" class="code-text"></textarea>
            </div>
        </div>
        <div class="col-6 border-dashed  code-item">
            <iframe id="code_result" style="width:100%;height:100%;border:none"></iframe>
        </div>
    </div>
</body>

<script src="/applications/layouts/<?php echo $ui_path;?>/js/code.js"></script>

</html>
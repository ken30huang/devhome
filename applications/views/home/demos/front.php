
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
        <iframe id="code_result" name="code_result" style="width:100%;height:100%;border:none"></iframe>
    </div>
</div>

<script src="/applications/layouts/<?php echo $ui_path;?>/js/code.js?v=1.0.0"></script>
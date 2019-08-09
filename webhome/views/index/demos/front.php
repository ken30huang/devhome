<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<?php foreach($css_list as $css):?>
    <link rel="stylesheet" href="<?php echo $css;?>" />
<?php endforeach;?>

<style>
    <?php echo $show['css']; ?>
</style>

<div class="container mt-80">
    <?php echo $show['html'];?>
</div>

<?php foreach($js_list as $js):?>
<script src="<?php echo $js; ?>"></script>
<?php endforeach;?>

<script type="text/<?php echo $show['jstype']?>"><?php echo $show['javascript']?></script>

<div class="pos_fixed btn_view">
    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-code"></i> 查看代码</button>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="html-tab" data-toggle="tab" href="#front-html" role="tab" aria-controls="html" aria-selected="true">HTML</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="css-tab" data-toggle="tab" href="#front-css" role="tab" aria-controls="css" aria-selected="false">CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="js-tab" data-toggle="tab" href="#front-js" role="tab" aria-controls="js" aria-selected="false">Javascript</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="front-html" role="tabpanel" aria-labelledby="html-tab">
                    <pre><code><?php echo $show['htmlcode']?></code></pre>
                </div>
                <div class="tab-pane fade" id="front-css" role="tabpanel" aria-labelledby="css-tab">
                    <pre><code><?php echo $show['css']?></code></pre>
                </div>
                <div class="tab-pane fade" id="front-js" role="tabpanel" aria-labelledby="js-tab">
                    <pre><code><?php echo $show['javascript']?></code></pre>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/static/plugins/highlight/highlight.pack.js"></script>
<script>
window.onload = function(){
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });
}
</script>
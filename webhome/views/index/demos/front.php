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
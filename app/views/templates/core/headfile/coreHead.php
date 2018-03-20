<meta charset="utf-8">
<title><?=(isset($this->title)) ? $this->title : TITLE ;?></title>
<link rel="stylesheet" href="<?=URL.'src/css/style.css?v='.token::v_building(7);?>">
<link rel="shortcut icon" type="image/x-icon" href="<?=URL.'public/images/icon.png';?>">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script type="text/javascript" src="<?=URL.'src/js/jquery-3.2.1.js';?>"></script>
<script type="text/javascript" src="<?=URL.'src/js/vue.min.js';?>"></script>
<?php if(isset($this->js)) { ?>
<?php foreach ($this->js as $js) { ?>
<script type="text/javascript" src="<?=URL.'app/views/'.$js.'?v='.token::v_building(7);?>"></script>
<?php } ?>
<?php } ?>
<?php if(isset($this->css)) { ?>
<?php foreach($this->css as $css) { ?>
<link rel="stylesheet" href="<?=URL.'app/views/'.$css.'?v='.token::v_building(7);?>">
<?php } ?>
<?php } ?>

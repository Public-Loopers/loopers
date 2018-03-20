<h1>Hello World!!!</h1>
<div id="summernote">
  <p>Hello Summernote</p>
</div>
  <script src="<?=URL.'dist/lang/summernote-id-ID.js';?>"></script>
  <script src="<?=URL.'dist/summernote-lite.css';?>"></script>
  <script src="<?=URL.'dist/summernote-lite.js';?>"></script>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote({
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ]
});
    });
  </script>

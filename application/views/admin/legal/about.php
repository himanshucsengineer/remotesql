<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
      <h1 class="mt-4">About Us</h1>
      <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">About Us</li>
      </ol>
      <div class="container">
      <textarea name="about" id="textareaContent"></textarea>
      </div>
   </div>
</main>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ckeditor/ckeditor.js"></script>
<script>
$(document).ready(function(){
    CKEDITOR.replace('textareaContent');
});
    </script>
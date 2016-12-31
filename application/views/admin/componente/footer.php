</div>
<!-- /#wrapper -->
<script>
    
    
    function base_url(url = null){
        var base_url = "<?php echo base_url(); ?>";
        if(url == null){
            return base_url;
        }else{
            return base_url + '/' + url;
        }
    }
    
    function base_url_admin(url = null){
        var base_url = "<?php echo base_url_admin(); ?>";
        if(url == null){
            return base_url;
        }else{
            return base_url + '/' + url;
        }
    }
    
</script>
<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/js/funcoes.js'); ?>"></script>	
<script src="<?php echo base_url('assets/admin/tinymce/tinymce/tinymce.min.js'); ?>"></script>	
<script src="<?php echo base_url('assets/admin/tinymce/tinymce.init.js'); ?>"></script>	
<script src="<?php echo base_url('assets/admin/fancybox/fancybox/jquery.fancybox.pack.js'); ?>"></script>	
<script src="<?php echo base_url('assets/admin/fancybox/fancybox.init.js'); ?>"></script>

<!-- angularjs -->
<script src="<?php echo base_url('assets/admin/app/angular/angular.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/app/config.js'); ?>"></script>


<?php
foreach ($script as $value)
{
  echo $value;
  echo "\n";
}
?>
</body>

</html>

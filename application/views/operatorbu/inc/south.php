</div>
	

	<script type="text/javascript" src="<?= base_url() ?>assets/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/jquery.easyui.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  

  <script type="text/javascript">
     $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });

    
     
  </script>
</body>
</html>
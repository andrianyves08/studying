  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    new WOW().init();
  </script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
  $(function() {  
    <?php if($this->session->flashdata('success')): ?>
      <?php echo "toastr.success('".$this->session->flashdata('success')." ')"; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')): ?>
      <?php echo "toastr.error('".$this->session->flashdata('error')." ')"; ?>
    <?php endif; ?>  
  });
  </script>
  <?php if($this->session->flashdata('multi')): ?>
    <?php echo $this->session->flashdata('multi'); ?>
  <?php endif; ?>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/lazyframe.min.js"></script>
  <script>
    lazyframe('.lazyframe', {
      apikey: 'AIzaSyB-iDku_44LtvJZ00FXc1G9UOjqDv3ttas' // Sorry, will only work on this domain
    });
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    $("img").addClass("img-fluid");
    $('#homepage_video').on('hidden.bs.modal', function (e) {
        $("#homepage_video iframe").attr("src", "");
    });
    
    $(document).on('click', '#play', function(){
       $("#homepage_video iframe").attr("src", $("#homepage_video iframe").attr("data-src"));
    });
  });
  </script>
  </body>
</html>
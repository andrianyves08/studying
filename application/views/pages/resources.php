<main class="pt-5 mx-lg-5 mt-5">
<div class="container-fluid">
  <div class="view">
    <div class="container mb-5 pb-5">
      <div class="row align-items-center view justify-content-center">
        <div class="col-md-6 col-sm-12 wow text-center fadeInLeft">
           <img src="<?php echo base_url();?>assets/img/pngegg (4).png" alt="Success Vectors by Vecteezy" class="img-fluid" style="width: 75%;">
        </div>
        <div class="col-md-6 col-sm-12 wow fadeInRight text-white text-right">
         <h1 class="customfont_header mb-4 nav_text text-right">FREE Resources. <br><span class="text-warning">ANYTIME.</span> <span class="cyan-text"> ANY DAY.</span></h1>
        <p class="mb-4 pb-2 font-weight-bold text-right text-dark">Learn more about dropshipping by checking our free resources<br> and start scaling your business to the moon</p>
        </div>
      </div>
    </div>
  </div>
   <section>
  <style>
    .md-pills .nav-link.active {
      color: #fff;
      background-color: #616161;
    }
    button.close {
      position: absolute;
      right: 0;
      z-index: 2;
      padding-right: 1rem;
      padding-top: .6rem;
    }
  </style>
  <div class="row mb-4 mt-3 justify-content-center">
    <div class="col-lg-10">
        <ul class="nav md-pills flex-center flex-wrap mx-0 wow fadeIn" role="tablist">
          <li class="nav-item">
            <a class="nav-link active font-weight-bold text-uppercase" data-toggle="tab" href="#panel31" role="tab">ALL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#category_dropshipping" role="tab">Dropshipping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#category_inspirational" role="tab">Inspirational</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#type1" role="tab">Blogs</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="tab-content mb-5">
      <div class="tab-pane fade show in active container-fluid" id="panel31" role="tabpanel">
      <?php foreach ($all_resources as $all_resource) { ?>
        <div class="row justify-content-center post_3">
          <div class="col-lg-6 mb-4 view overlay zoom">
            <img src="https://app.studying.com/assets/img/blogs/<?php echo $all_resource['banner']; ?>" class="img-fluid z-depth-1-half img-id-2" alt="">
          </div>
          <a href="<?php echo base_url('./'.$all_resource['slug']);?>">
            <div class="col-lg-4 mb-4">
              <h6 class="indigo-text"><?php echo ucwords($all_resource['type_name']); ?></h6>
              <h2 class="customfont_header"><?php echo ucwords($all_resource['title']); ?></h2>
              <p><?php echo substr(ucfirst(strip_tags($all_resource['content'])), 0, 300); ?>...</p>
              <a href="<?php echo base_url('./'.$all_resource['slug']);?>">Read More <i class="fas fa-angle-double-right ml-1"></i></a>
              <p class="mt-auto"><?php echo date("F d, Y", strtotime($all_resource['timestamp']));?></p>
            </div>
          </a>
        </div>
        <?php } ?>
        <div class="text-center">
          <a class="blue-text load_more" data-type="3">View More</a>
        </div>
      </div>
    
      <div class="tab-pane fade" id="category_dropshipping" role="tabpanel">
        <?php foreach ($resources_categories as $resources_category) { ?> 
          <?php if ($resources_category['category_ID'] == '1') { ?>
            <div class="row justify-content-center">
              <div class="col-md-6 mb-4 view overlay zoom">
                <img src="https://app.studying.com/assets/img/blogs/<?php echo $resources_category['banner']; ?>" class="img-fluid z-depth-1-half img-id-2" alt="">
              </div>
              <a href="<?php echo base_url('./'.$resources_category['slug']);?>">
                <div class="col-md-4 mb-4">
                  <a href="<?php echo base_url('./'.$resources_category['slug']);?>">
                    <h6 class="indigo-text"><?php echo ucwords($resources_category['type_name']); ?></h6></a>
                  <h2 class="customfont_header"><?php echo ucwords($resources_category['title']); ?></h2>
                  <p><?php echo substr(ucfirst(strip_tags($resources_category['content'])), 0, 300); ?>...</p>
                  <a href="<?php echo base_url('./'.$resources_category['slug']);?>">Read More <i class="fas fa-angle-double-right ml-1"></i></a>
                  <p class="mt-auto"><?php echo date("F d, Y", strtotime($resources_category['timestamp']));?></p>
                </div>
              </a>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
     
      <div class="tab-pane fade" id="category_inspirational" role="tabpanel">
        <?php foreach ($resources_categories as $resources_category) { ?> 
          <?php if ($resources_category['category_ID'] == '2') { ?>
            <div class="row justify-content-center">
              <div class="col-md-6 mb-4 view overlay zoom">
                <img src="https://app.studying.com/assets/img/blogs/<?php echo $resources_category['banner']; ?>" class="img-fluid z-depth-1-half img-id-2" alt="">
              </div>
              <a href="<?php echo base_url('./'.$resources_category['slug']);?>">
              <div class="col-md-4 mb-4">
                <h6 class="indigo-text"><?php echo ucwords($resources_category['type_name']); ?></h6>
                <h2 class="customfont_header"><?php echo ucwords($resources_category['title']); ?></h2>
                <p><?php echo substr(ucfirst(strip_tags($resources_category['content'])), 0, 300); ?>...</p>
                <a href="<?php echo base_url('./'.$resources_category['slug']);?>">Read More <i class="fas fa-angle-double-right ml-1"></i></a>
                <p class="mt-auto"><?php echo date("F d, Y", strtotime($resources_category['timestamp']));?></p>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
      <?php foreach ($types as $type) { ?> 
        <div class="tab-pane fade" id="type<?php echo $type['id']; ?>" role="tabpanel">
          <?php foreach ($all_resources as $all_resource) { ?> 
            <?php if ($all_resource['type'] == $type['id']) { ?>
             <div class="row justify-content-center post_<?php echo $type['id'];?>">
                <div class="col-md-6 mb-4 view overlay zoom">
                  <img src="https://app.studying.com/assets/img/blogs/<?php echo $all_resource['banner']; ?>" class="img-fluid z-depth-1-half img-id-2" alt="">
                </div>
                <a href="<?php echo base_url('./'.$all_resource['slug']);?>">
                  <div class="col-md-4 mb-4">
                    <h6 class="indigo-text"><?php echo ucwords($all_resource['type_name']); ?></h6>
                    <h2 class="customfont_header"><?php echo ucwords($all_resource['title']); ?></h2>
                    <p><?php echo substr(ucfirst(strip_tags($all_resource['content'])), 0, 300); ?>...</p>
                    <a href="<?php echo base_url('./'.$all_resource['slug']);?>">Read More <i class="fas fa-angle-double-right ml-1"></i></a>
                    <p class="mt-auto"><?php echo date("F d, Y", strtotime($all_resource['timestamp']));?></p>
                  </div>
                </a>
              </div>
            <?php } ?>
          <?php } ?>
          <div class="text-center">
          <a class="blue-text load_more" data-type="<?php echo $type['id'];?>">View More</a>
        </div>
        </div>
      <?php } ?>
    </div>
  </section>
</div>
</main>
<script type="text/javascript">
$(function () {
  var selectedClass = "";
  $(".filter").click(function () {
    selectedClass = $(this).attr("data-rel");
    $("#gallery").fadeTo(100, 0.1);
    $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
    setTimeout(function () {
      $("." + selectedClass).fadeIn().addClass('animation');
      $("#gallery").fadeTo(300, 1);
    }, 300);
  });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  var start = 5;
  $(document).on("click", ".load_more", function() { 
    var type = $(this).data('type');
    $.ajax({
        url: "<?=base_url()?>pages/load_more",
        type: 'post',
        data: {start:start, type:type},
        beforeSend:function(){
          $(".load_more").text("Loading...");
        },
        success: function(response){
          $(".post_"+type).last().after(response).show().fadeIn("slow");
          $(".load_more").text("View more");
          start = start + 5;
          if(!$.trim(response)) {
            $(".load_more").hide();
          }
        }
    });
  });
});
</script>
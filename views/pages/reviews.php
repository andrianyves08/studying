<main class="pt-5 mx-lg-5 mt-5">
  <div class="view">
    <div class="container mb-5 pb-5">
      <div class="row align-items-center view justify-content-center">
        <div class="col-md-6 col-sm-12 wow text-center fadeInLeft">
          <img src="<?php echo base_url();?>assets/img/pngegg (2).png" alt="Success Vectors by Vecteezy" class="img-fluid" style="width: 75%;">
        </div>
        <div class="col-md-6 col-sm-12 wow fadeInRight text-white text-right">
          <h1 class="customfont_header mb-4 nav_text text-right">37 <span class="font-weight-bold">SUCCESS </span> STORIES</h1>
          <p class="mb-4 pb-2 font-weight-bold text-right text-dark">We help our students achieve their goals. Aren't just satisfied, but they're triumphant and happy traveling the world while making real business results at the same time.</p>
          <i class="wow bounce infinite fas fa-star fa-lg yellow-text"></i><i class="wow bounce infinite slow fas fa-star fa-lg yellow-text"></i><i class="wow bounce infinite fas fa-star fa-lg yellow-text"></i><i class="wow bounce infinite slow fas fa-star fa-lg yellow-text"></i><i class="wow bounce infinite fas fa-star fa-lg yellow-text"></i>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="modal fade" id="show_more_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-info modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" id="reviewer_info">
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="row">
          <?php foreach ($reviews as $review) { 
            $output = '';                       
            if($review['rating'] == 0){
              $output .='<i class="far fa-star amber-text"></i>';
            } else {
              $i = 0;
              while($review['rating'] > $i){
                $output .='<i class="fas fa-star amber-text"></i>';
                $i++;
              }
            }
          ?>
          <div class="col-lg-4 col-sm-6 align-items-stretch">
            <div class="card hoverable mb-4 d-flex flex-colum">
              <div class="view overlay">
                <div class="embed-responsive embed-responsive-16by9">
                  <div class="lazyframe embed-responsive-item" data-src="<?php echo $review['url']; ?>" data-title="" data-vendor="vimeo"></div> 
                </div>
              </div>
              <a class="card-body show_more" data-id="<?php echo $review['id']; ?>">
                <h6 class="review_text customfont_header font-weight-bold"><?php echo ucwords($review['reviewers_name']); ?></h6>
                <div class="d-xl-flex justify-content-xl-between">
                  <h6 class="review_text"><?php echo ucwords($review['location']);?></h6>
                  <h6 class="review_text"><?php echo $output;?></h6>
                </div>
              </a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
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
  $(document).on('click','.show_more',function(e) {
    var id=$(this).data('id');
    $.ajax({
      type : "POST",
     url: "<?=base_url()?>pages/get_reviews",
      dataType : "JSON",
      data : {id:id},
      success: function(data){
        $('#show_more_modal').modal('show');
        var html = "";
        html += '<div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">'+data.title+'</h5><button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        html += '<div class="modal-body"><h5 class="font-weight-normal mb-2">'+data.name+'</h5>';
        html += '<p class="text-muted">'+data.description+'</p>';
        html += '<ul class="list-unstyled font-small mt-5">';
        html += '<li><p class="mb-2"><strong>Location</strong></p><p class="text-muted">'+data.location+'</p></li>';
        html += '<li><p class="mb-2"><strong>Date</strong></p><p class="text-muted">'+data.date+'</p></li></ul></div>';
        $('#reviewer_info').html(html);
      }
    });
    return false;
  });     
});
</script>
<main class="pt-5 mx-lg-5 mt-5">
<div class="container-fluid">
  <section>
    <div class="row justify-content-center">
      <div class="col-lg-6 mb-4">
        <div class="card mb-4 wow fadeIn">
          <img src="https://app.studying.com/assets/img/blogs/<?php echo $content['banner']; ?>" class="img-fluid post-image" style="height: 300px;">
        </div>
        <div class="card mb-4 wow fadeIn">
          <div class="card-body">
            <p class="h5 my-4"><?php echo ucwords($content['title']); ?></p>
            <?php echo $content['content']; ?>
            <?php foreach ($files as $file) { ?>
              <a class="btn btn-primary btn-sm" href="https://app.studying.com/assets/img/resources/<?php echo $file['file']; ?>" download><?php echo pathinfo($file['file'], PATHINFO_FILENAME); ?></a>
            <?php } ?> 
          </div>
        </div>
        <?php foreach ($categories as $category) { ?>
          <span class="badge badge-pill badge-secondary"><i class="fas fa-tag"></i> <?php echo strtolower($category['name']); ?></span>
        <?php } ?> 
      </div><!--Column-->
      <div class="col-lg-4 mb-4">
        <div class="card mb-4 wow fadeIn" style="background-image: linear-gradient(46deg, #3965af 0%, #4599d3 100%);">
          <div class="card-body text-white text-center">
            <h4 class="mb-4 customfont_header text-white font-weight-bold">Try Now Studying.com</h4>
            <p>Join Us Today!  Our program is tailored to fit anyone who wanted to learn and start their dropshipping business.  Start making money at the comfort of your home and at your own terms and time.</p>
            <a target="_blank" class="custom_button btn btn-sm mb-4" href="https://calendly.com/studyingofficial/45m-discovery-session-free?month=2021-05">Book a CALL
              <i class="fas fa-phone ml-2"></i></a>
            </a>
          </div>
        </div>
        <div class="card mb-4 wow fadeIn">
          <div class="card-header customfont_header text-white text-center" style="background-image: linear-gradient(46deg, #3965af 0%, #4599d3 100%);">
            Related article
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <?php foreach ($other_articles as $other_article){  ?>
              <?php if($other_article['type'] == '1'){  ?>
              <li class="media my-2">
                <img class="d-flex mr-3 img-id-1" src="https://app.studying.com/assets/img/blogs/<?php echo $other_article['banner']; ?>" alt="">
                <div class="media-body">
                  <a href="<?php echo base_url('./'.$other_article['slug']); ?>">
                    <h5 class="mt-0 mb-1 customfont_header"><?php echo ucwords($other_article['title']); ?></h5>
                  </a>
                  <?php echo date("F d, Y", strtotime($other_article['timestamp']));?>
                </div>
              </li>
            <?php } } ?>
            </ul>
          </div><!--Card Body-->
        </div><!--Card-->
      </div><!--Column-->
    </div><!--Row-->
  </section>
</div><!--Container-->
</main>
<script type="text/javascript">
  $("img").addClass("img-fluid").removeAttr('width').removeAttr('height');
  $("img").closest('span').removeAttr('style');
</script>
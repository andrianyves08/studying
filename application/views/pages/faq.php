
  <!-- Full Page Intro -->
  <div class="view grey lighten-5 ">
    <!-- Mask & flexbox options-->
    <div class="mask">
      <!-- Content -->
      <div class="container h-50">
        <!--Grid row-->
        <div class="row align-items-center h-75">
         
       
          <!--Grid column-->
          <div class="col-md-6 wow fadeInRight pt-5 mt-5">
            <h1 class="mb-4"><span class="text-warning">Everything</span> you<span class="cyan-text"> Need</span> to know.
            </h1>
            <p class="mb-4 pb-2 dark-grey-text">How can we help?</p>
          </div>
          <!--Grid column-->

           <!--Grid column-->
          <div class="col-md-6 wow flip text-center">
            <img src="<?php echo base_url();?>assets/img/question.png" class="img-fluid" style="width: 75%;">

          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->


<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">
    <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
      <div class="row">
        <div class="col-md-12">
          <input class="form-control mb-4" id="listSearch" type="text" placeholder="Search" aria-label="Search" style="width: 60%;">
          <div class="myList">
          <?php foreach ($categories as $category) { ?>
            <div class="mb-4 h-1">
          <h4 class="h4 indigo-text"><?php echo ucwords($category['name']); ?></h4>
          <div class="accordion md-accordion accordion-blocks" id="accordionEx7" role="tablist"
            aria-multiselectable="true">
            <?php foreach ($faqs as $faq) { ?>
              <?php if ($category['id'] == $faq['category_ID']) { ?>
            <div class="card h-1">
              <div class="card-header customcolorbg mb-1" role="tab" id="heading1">
                <a data-toggle="collapse" data-parent="#accordionEx7" href="#collapse<?php echo $faq['id'];?>" aria-expanded="true"
                  aria-controls="collapse<?php echo $faq['id'];?>">
                  <h5 class="mb-0 white-text font-thin h-1">
                    <?php echo ucwords($faq['question']); ?> <i class="fas fa-angle-down rotate-icon"></i>
                  </h5>
                </a>
              </div>
              <div id="collapse<?php echo $faq['id'];?>" class="collapse" role="tabpanel" aria-labelledby="heading1"
                data-parent="#accordionEx7">
                <div class="card-body mb-1">
                  <?php echo $faq['answer']; ?>
                </div>
              </div>
            </div>
            <?php } } ?>
          </div><!--/.Accordion wrapper-->
          </div>
          <?php } ?>
          </div>
        </div><!--Grid column-->
      </div><!--Grid row-->
    </section>
  </div>
</main><!--Main layout-->





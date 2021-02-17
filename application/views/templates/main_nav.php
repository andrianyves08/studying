
<header>
  <nav class="wow fadeIn d-flex navbar">
    <picture>
      <a class="navbar-brand waves-effect" href="<?php echo base_url(); ?>">
        <source media="(min-width: 456px)" srcset="<?php echo base_url();?>assets/img/logo-1.png">
        <source media="(min-width: 256px)" srcset="<?php echo base_url();?>assets/img/logo-1.png">
        <img src="<?php echo base_url();?>assets/img/<?php echo $settings['logo_img'];?>" class="img-fluid" alt="" style="height: 40px;">
      </a>
    </picture>
    <ul class="nav ml-auto justify-content-end">
      <li class="nav-item">
        <a class="nav-link blue-text" href="https://shop.studying.com">
          Shop
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link blue-text" href="<?php echo base_url();?>reviews">
          Reviews
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link blue-text" href="<?php echo base_url();?>resources">
          Resources
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link blue-text" href="http://app.studying.com">
          Login
        </a>
      </li>
    </ul>
  </nav>
</header>
<!-- Main navigation -->
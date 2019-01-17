<div class="header-top clear">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 hidden-xs">
                <div class="header-top-left header-top-info">
                    <div class="social-bar">
                        <ul>
                            <li>
                      <a class="fa fa-twitter" href="#"></a>
                   </li>
                            <li>
                      <a class="fa fa-pinterest" href="#"></a>
                   </li>
                            <li>
                      <a class="fa fa-facebook" href="#"></a>
                   </li>
                            <li>
                      <a class="fa fa-behance" href="#"></a>
                   </li>
                            <li>
                      <a class="fa fa-instagram" href="#"></a>
                   </li>
                            <li>
                      <a class="fa fa-linkedin" href="#"></a>
                   </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="header-top-right pull-right header-top-info">
                    <ul>
                        <?php if ($this->session->userdata('user_id')) : ?>
                            <li>
                                <a href="<?= base_url('authentication/logout') ?>"> <i class="fa fa-sign-out"></i> log out</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= base_url('authentication/registration') ?>"><i class="fa fa-user"></i> 
                                    Register
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('authentication/login') ?>"> <i class="fa fa-sign-in"></i> log in</a>
                            </li>
                        <?php endif ; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="index4-header">
    <a class="navbar-brand visible-xs" id="navbar-logo-mobile" href="<?= base_url() ?>"><img src="<?= base_url('assets') ?>/images/logo.png" alt="" class="img-responsive"></a>
        <a href="post-ad.html" class="submit-btn visible-xs pull-right"><i class="fa fa-plus-square"></i> Create Ad </a>
    <nav class="navbar navbar-default hidden-xs" id="navbar">
        <div class="container">
            <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="navbar-logo" href="<?= base_url() ?>"><img src="<?= base_url('assets') ?>/images/logo.png" alt="" class="img-responsive"></a>
       </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                <ul class="nav navbar-nav navbar-right" id="menu-right">
                    <?php if ($this->session->userdata('user_id')) : ?>
                        <li>
                            <a href="<?= base_url('accounts/dashboard') ?>" class="submit-btn"><i class="fa fa-plus-square"></i> <?= $this->session->userdata('email_id') ?> </a>
                        </li>
                    <?php endif ; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
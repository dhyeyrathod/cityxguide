<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="ScriptsBundle">
        <title>AdZone A Complete Classified Solution Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <?php $this->load->view('common/css') ?>
    </head>
    <body>
        <?php $this->load->view('common/header') ?>
        <section class="pricing-section-1 pricing-white light-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <?php foreach ($location_data_key as $key => $location_data) : ?>
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <h2> <?= $location_data->country_name ?> </h2>
                                <div class="features_left">
                                    <ul>
                                        <?php foreach ($location_data->cities as $key => $cities_info) : ?>
                                            <li> <?= $cities_info->city_name ?> </li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ; ?>
                        
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer footer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="footer_block">
                            <a href="index.html" class="f_logo"><img src="<?= base_url('assets') ?>/images/logo.png" class="img-responsive" alt="logo"></a>
                     
                            <p>Lorem Ipsum is simply dummy text of the printing and type of setting industry. Standard for dummy text ever since the 1500s..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 col-xs-12">
                        <div class="footer_block">
                            <h4>Hot Links</h4>
                            <ul class="footer-links">
                                <li> <a href="#">Home</a> </li>
                                <li> <a href="#">About Us</a> </li>
                                <li> <a href="#">Privacy</a> </li>
                                <li> <a href="#">Contact Us</a> </li>
                                <li> <a href="#">Term & Conditions</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <div class="footer_block dark_gry">
                            <h4>Recent Posts</h4>
                            <ul class="recentpost">
                                <li>
                                    <span><a class="plus" href="#"><img src="<?= base_url('assets') ?>/images/footer/1.jpg" alt="" /><i>+</i></a></span>
                           
                                    <p><a href="#">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                    <h3>Sep 15, 2016</h3>
                                </li>
                                <li>
                                    <span><a class="plus" href="#"><img src="<?= base_url('assets') ?>/images/footer/2.jpg" alt="" /><i>+</i></a></span>
                           
                                    <p><a href="#">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                    <h3>Fab 10, 2016</h3>
                                </li>
                                <li>
                                    <span><a class="plus" href="#"><img src="<?= base_url('assets') ?>/images/footer/3.jpg" alt="" /><i>+</i></a></span>
                           
                                    <p><a href="#">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                    <h3>Fab 10, 2016</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="footer_block">
                            <h4>Contact Information</h4>
                            <ul class="personal-info">
                                <li><i class="fa fa-map-marker"></i> 3rd Floor,Link Arcade Model Town, BBL, USA.</li>
                                <li><i class="fa fa-envelope"></i> Support@domain.com</li>
                                <li><i class="fa fa-phone"></i> (0092)+ 124 45 78 678 </li>
                                <li><i class="fa fa-clock-o"></i> Mon - Sun: 8:00 - 16:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="footer-bottom-section light-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p>Copyright ©2016 - All rights Reserved. Made By <a href="http://themeforest.net/user/scriptsbundle"> ScriptsBundle </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
        <?php $this->load->view('common/js') ?>
    </body>
</html>
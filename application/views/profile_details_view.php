<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ScriptsBundle">
        <title>AdZone A Complete Classified Solution Template</title>
        <?php $this->load->view('common/css') ?>
    </head>
    <body>
        <div class="page">
            <?php $this->load->view('common/header') ?>
            <section class="ad-breadcrumb parallex">
                <div class="container page-banner">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h1><?= $profile_data->title ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ad-listing-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-12 nopaddingright">
                                    <div class="slick-gallery-slideshow">
                                        <div class="slider gallery-slideshow gallery-slideshow-not-tab">
                                            <?php foreach ($image_key as $key => $image_data) : ?>
                                                <div>
                                                    <div class="image"><img src="<?= base_url('profile_image') ?>/<?= $image_data->image_name ?>" alt="image" /></div>
                                                </div>
                                            <?php endforeach ; ?>
                                            <!-- <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/camera/1.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/camera/2.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/camera/3.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/camera/4.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/1.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/2.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/3.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/4.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/5.jpg" alt="image" /></div>
                                            </div> -->
                                            <div style="display: none;">
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/6.jpg" alt="image" /></div>
                                            </div>
                                        </div>
                                        <div class="slider gallery-nav gallery-nav-not-tab">
                                            <?php foreach ($image_key as $key => $image_data) : ?>
                                                <div>
                                                    <div class="image"><img style="width: 131px;height: 180px;" src="<?= base_url('profile_image') ?>/<?= $image_data->image_name ?>" alt="image" /></div>
                                                </div>
                                            <?php endforeach ; ?>
                                            <!-- <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/camera/2.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/camera/3.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/camera/4.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/1.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/2.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/3.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/4.jpg" alt="image" /></div>
                                            </div>
                                            <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/5.jpg" alt="image" /></div>
                                            </div> -->
                                            <!-- <div>
                                                <div class="image"><img src="<?= base_url('assets') ?>/images/post-images/animals/5.jpg" alt="image" /></div>
                                            </div> -->
                                            <div style="display: none;">
                                                <div class="image"><img  src="<?= base_url('assets') ?>/images/post-images/animals/6.jpg" alt="image" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 nopaddingleft">
                                    <div class="ad-detail">
                                        <div class="ad-detail-title">
                                            <h3><i class=" icon-layers"></i> Ad Detail</h3>
                                        </div>
                                        <div class="ad-detail-desc light-blue ">
                                            <ul>
                                                <li>
                                                   <span class="pull-left">Name</span>
                                                   <span class="pull-right"><?= $profile_data->name ?></span>
                                                </li>
                                                <li>
                                                   <span class="pull-left">Contact Number</span>
                                                   <a href="tel:<?= $profile_data->contact ?>"><span class="pull-right"><?= $profile_data->contact ?></span></a>
                                                </li>
                                                <li>
                                                   <span class="pull-left">Email Id</span>
                                                   <span class="pull-right"><?= $profile_data->email ?></span>
                                                </li>
                                                <li>
                                                   <span class="pull-left">City</span>
                                                   <span class="pull-right"><?= $profile_data->city_name ?></span>
                                                </li>
                                                <li>
                                                   <span class="pull-left">Country</span>
                                                   <span class="pull-right"><?= $profile_data->country_name ?></span>
                                                </li>
                                                <li>
                                                   <span class="pull-left">Website</span>
                                                   <a href="<?= $profile_data->website ?>"><span class="pull-right"><?= $profile_data->website ?></span></a>
                                                </li>
                                                <li>
                                                   <span class="pull-left">Age</span>
                                                   <a href="<?= $profile_data->website ?>"><span class="pull-right"><?= $profile_data->age ?></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ad-detail-title">
                                            <h3> <i class="icon-profile-male"></i> Posted By </h3>
                                        </div>
                                        <div class="business-card light-blue ">
                                            <div class="media">
                                                <div class="media-left">
                                                   <img class="media-object img-circle profile-img" alt="" src="<?= base_url('assets') ?>/images/default-avatar.png">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="media-heading"><?= $profile_data->username ?></h3>
                                                    <div class="mail"><a href="mailto:<?= $profile_data->email_id ?>"><?= $profile_data->email_id ?></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-sm-12">
                                    <div class="heading-inner">
                                        <p class="title">Description</p>
                                    </div>
                                    <p><?= $profile_data->descriptions ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php $this->load->view('common/footer') ?>
            <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
            <?php $this->load->view('common/js') ?>
        </div>
    </body>
</html>
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
            <?php $this->load->view('common/user_header') ?>
            <section class="dashboard light-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <?php if ($this->session->userdata('success')) : ?>
                                <div class="alert alert-success text-center">
                                    <strong><?= $this->session->userdata('success') ?></strong>
                                </div>
                            <?php endif ; ?>
                            <aside>
                                <div class="widget">
                                    <div class="widget-heading">
                                        <span class="title">Popular advertisement</span>
                                    </div>
                                    <ul class="related-post">
                                        <?php foreach ($user_profiles_key as $key => $user_profiles_data) : ?>
                                            <li>
                                                <div class="col-md-10 col-lg-10">
                                                    <img src="<?= base_url('profile_image') ?>/<?= $user_profiles_data->image_name ? $user_profiles_data->image_name : "default.jpg" ?>" alt="post image" class="img-responsive">
                                                    <a href="<?= base_url('profile/details') ?>/<?= str_replace(array(' ','/','|'),array('-','-','-'), $user_profiles_data->title) ?>/<?= $this->friend->base64url_encode($user_profiles_data->id) ?>"><?= $user_profiles_data->title ?></a>
                                                    <span><i class="fa fa-calendar"></i> <?= $user_profiles_data->created_date ?> </span>
                                                </div>
                                                <a href="<?= base_url('accounts/delete_profile') ?>/<?= $this->friend->base64url_encode($user_profiles_data->id) ?>"><button class="btn btn-danger pull-right"><i class="fa fa-close"></i> Delete </button></a>
                                                <a href="<?= base_url('accounts/editProfile') ?>/<?= $this->friend->base64url_encode($user_profiles_data->id) ?>"><button class="btn btn-primary pull-right"><i class="fa fa-close"></i> Edit </button></a>
                                            </li>
                                        <?php endforeach ; ?>

                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="main-box profile-box-contact">
                                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                    <div class="profile-box-footer">
                                       <a href="#">
                                       <span class="value"><?= $user_add_posted->total_post ?></span>
                                       <span class="label">Ads Posted</span>
                                       </a>
                                       <a href="#">
                                       <span class="value">912</span>
                                       <span class="label">Followers</span>
                                       </a>
                                       <a href="#">
                                       <span class="value">83</span>
                                       <span class="label">Messages</span>
                                       </a>
                                    </div>
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
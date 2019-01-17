<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ScriptsBundle">
        <title>Escorts Classified Ads India | Adult Ads Posting Classifieds India | Submit Ads in India</title>
        <?php $this->load->view('common/css') ?>
    </head>
    <body>
        <div class="page">
            <?php $this->load->view('common/header') ?>
            <?php $this->load->view('common/user_header') ?>
            <section class="dashboard light-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12 col-md-push-8">
                            <div class="main-box profile-box-contact">
                                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                    <div class="profile-box-footer">
                                       <a href="#">
                                       <span class="value">783</span>
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
                        <div class="col-md-8 col-sm-12 col-xs-12 col-md-pull-4">
                            <div class="dashboard-main-disc">
                                <div class="heading-inner">
                                    <p class="title">biography</p>
                                </div>
                                <div>
                                    <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                           </p>
                                </div>
                                <div class="meta-detail">
                                    <div class="heading-inner">
                                        <p class="title">My Profile Detail</p>
                                    </div>
                                    <dl>
                                        <dt><i class="fa fa-user"></i></dt>
                                        <dd><?= $user_info_data->username ?></dd>
                                        <dt><i class="fa fa-calendar-o"></i></dt>
                                        <dd><?= $user_info_data->created_date ?></dd>
                                        <dt><i class="fa fa-user"></i></dt>
                                        <dd><?= $user_info_data->contact ?></dd>
                                        <dt><i class="fa fa-envelope-o"></i></dt>
                                        <dd><?= $user_info_data->email_id ?></dd>
                                    </dl>
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
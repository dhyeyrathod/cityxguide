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
                        <div class="col-sm-6 col-md-6">
                            <h1><?= $city_info->city_name ?> Escorts</h1>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <ol class="breadcrumb pull-right">
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li><a href="#"><?= $city_info->country_name ?></a></li>
                                <li class="active"><?= $city_info->city_name ?> Escorts</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing-section-1 pricing-white light-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <aside>
                                <div class="widget">
                                    <?php if (count($city_profiles_key) == 0) : ?>
                                        <h2 class="text-center"><strong> Profile Is Not Present </strong></h2>
                                    <?php endif ; ?>
                                    <ul class="categories-module">
                                        <?php foreach ($city_profiles_key as $city_profiles_data) : ?>
                                            <li> <a href="<?= base_url('profile/details') ?>/<?= str_replace(array(' ','/','|'),array('-','-','-'), $city_profiles_data->title) ?>/<?= $this->friend->base64url_encode($city_profiles_data->id) ?>"> <?= $city_profiles_data->title ?> </a> </li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                            </aside>
                            <center><?= $this->pagination->create_links(); ?></center>
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
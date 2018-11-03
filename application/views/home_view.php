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
                                <h3><b> <?= $location_data->country_name ?></b></h3>
                                <div class="features_left">
                                    <ul>
                                        <?php foreach ($location_data->cities as $key => $cities_info) : ?>
                                            <li><a href="<?= base_url()?><?= str_replace(' ','-',$cities_info->city_name) ?>-escorts/<?= $this->friend->base64url_encode($cities_info->id) ?>"><?= $cities_info->city_name ?></a></li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('common/footer') ?>
        <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
        <?php $this->load->view('common/js') ?>
    </body>
</html>
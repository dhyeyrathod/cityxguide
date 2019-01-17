<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ScriptsBundle">
        <title><?= $country_info->country_name ?> Escorts Classifieds|Call Girls Directory <?= $country_info->country_name ?></title>
        <meta name="description" content="Available now hot & sexy <?= $country_info->country_name ?> escorts classifieds , post more details about sizzling and sensual call girls service in <?= $country_info->country_name ?> on demand VIP escorts services available 24/7.">
            <meta name="keywords" content="<?= $country_info->country_name ?> escorts directory,<?= $country_info->country_name ?> call girls service,<?= $country_info->country_name ?> escorts ageny ads, <?= $country_info->country_name ?> femal massage classifieds ,<?= $country_info->country_name ?> male escorts classifieds,<?= $country_info->country_name ?> vip call girls">
        <?php $this->load->view('common/css') ?>
    </head>
    <body>
        <div class="page">
            <?php $this->load->view('common/header') ?>
            <section class="ad-breadcrumb parallex">
                <div class="container page-banner">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <h1><?= $country_info->country_name ?> Escorts</h1>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <ol class="breadcrumb pull-right">
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li class="active"><a href="#"><?= $country_info->country_name ?> Escorts</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="flate-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <form class="form-inline">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                                    <div class="form-group">
                                        <select class="form-control" id="select_country" style="width: 100%">
                                            <option label="Select Option">---Select Country---</option>
                                            <?php foreach ($country_key as $country_data) : ?>
                                                <option value="<?= $this->friend->base64url_encode($country_data->id) ?>-<?= $country_data->country_name ?>"><?= $country_data->country_name ?></option> 
                                            <?php endforeach ; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                                    <div class="form-group">
                                        <select class="form-control" id="select_city" style="width: 100%">
                                            <option>---Select City---</option>
                                            <?php foreach ($cities_info_key as $key => $cities_info_data) : ?>
                                                <option value="<?= $this->friend->base64url_encode($cities_info_data->id) ?>-<?= $cities_info_data->city_name ?>"><?= $cities_info_data->city_name ?></option>
                                            <?php endforeach ; ?>
                                        </select>
                                    </div>
                                </div>  
                            </form>
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
                                    <?php if (count($country_profiles_key) == 0) : ?>
                                        <h2 class="text-center"><strong> Profile Is Not Present </strong></h2>
                                    <?php endif ; ?>
                                    <ul class="categories-module">
                                        <?php foreach ($country_profiles_key as $country_profiles_data) : ?>
                                            <li> <a href="<?= base_url('profile/details') ?>/<?= str_replace(array(' ','/','|'),array('-','-','-'), $country_profiles_data->title) ?>/<?= $this->friend->base64url_encode($country_profiles_data->id) ?>"> <?= $country_profiles_data->title ?> </a> </li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                            </aside>
                            <center><?= $this->pagination->create_links(); ?></center>
                        </div>
                    </div>
                </div>
            </section>
            <input type="hidden" id="select_country_pageload" value="<?= $this->friend->base64url_encode($country_info->id) ?>-<?= $country_info->country_name ?>">
            <?php $this->load->view('common/footer') ?>
                <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
            <?php $this->load->view('common/js') ?>
            <script type="text/javascript">
            $("#select_country").change(function() {
                var country_id = $("#select_country").val().split('-')[0];
                var country_name = $("#select_country").val().split('-')[1];
                var redirect_url = '<?= base_url() ?>Escorts-' + country_name + '/' + country_id ;
                window.location.replace(redirect_url);
            });
            $("#select_city").change(function() {
                var city_id = $("#select_city").val().split('-')[0];
                var city_name = $("#select_city").val().split('-')[1];
                var redirect_url = '<?= base_url() ?>' + city_name + '-escorts/' + city_id ;
                window.location.replace(redirect_url);
            });
            $(document).ready(function() {
                var country_seleced = $("#select_country_pageload").val();
                $("#select_country").val(country_seleced);
            });     
        </script>
        </div>
    </body>
</html>
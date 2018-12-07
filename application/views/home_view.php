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
        <section class="flate-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form class="form-inline">
                            <div class="col-md-6 col-sm-4 col-xs-12">
                            
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <select class="select-category form-control select2-hidden-accessible" id="select_country">
                                        <option label="Select Option">---Select Country---</option>
                                        <?php foreach ($country_key as $country_data) : ?>
                                            <option value="<?= $this->friend->base64url_encode($country_data->id) ?>-<?= $country_data->country_name ?>"><?= $country_data->country_name ?></option> 
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
                        <?php foreach ($location_data_key as $key => $location_data) : ?>
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <a href="<?= base_url() ?>Escorts-<?= str_replace(' ','-',$location_data->country_name)  ?>/<?= $this->friend->base64url_encode($location_data->id) ?>"><h3><b> <?= $location_data->country_name ?></b></h3></a>
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
        <script type="text/javascript">
            $("#select_country").change(function() {
                var country_id = $("#select_country").val().split('-')[0];
                var country_name = $("#select_country").val().split('-')[1];
                var redirect_url = '<?= base_url() ?>Escorts-' + country_name + '/' + country_id ;
                window.location.replace(redirect_url);
            });
        </script>
    </body>
</html>
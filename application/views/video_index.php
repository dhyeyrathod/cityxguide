<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="ScriptsBundle">
        <title>Worldwide Escorts Classifieds|High Profile Call Girls Directory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <?php $this->load->view('common/css') ?>
    </head>
    <body>
        <?php $this->load->view('common/header') ?>
        <section class="papular-post light-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                        <?php foreach ($videos_key as $key => $videos_data) : ?>
                            <?php if ($videos_data->is_admin == TRUE) : ?>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="papular-reviews">
                                    <a href="<?= $videos_data->url ?>" targate="_blank">
                                        <div class="image">
                                            <video width="100%" height="200px" controls> 
                                                <source src="<?= base_url('profile_video') ?>/<?= $videos_data->video ?>">
                                            </video>
                                        </div>
                                        <div class="content">
                                            <a href="<?= $videos_data->url ?>" target="_blank"><marquee><h4><?= $videos_data->title ?></h4></marquee></a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php else :  ?>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="papular-reviews">
                                    <a href="<?= base_url('video/details') ?>/<?= $videos_data->id ?>">
                                        <div class="image">
                                            <video width="100%" height="200px" controls> 
                                                <source src="<?= base_url('profile_video') ?>/<?= $videos_data->video ?>">
                                            </video>
                                        </div>
                                        <div class="content">
                                            <a href="<?= $videos_data->url ?>" target="_blank"><marquee><h4><?= $videos_data->title ?></h4></marquee></a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif ; ?>
                        <?php endforeach ; ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="load-more-btn">
                                <button class="btn-default"> View More <i class="fa fa-angle-double-right"></i> </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <?php $this->load->view('common/footer') ?>
        <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
        <?php $this->load->view('common/js') ?>
    </body>
</html>
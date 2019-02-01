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
        <section class="ad-breadcrumb parallex">
            <div class="container page-banner">
                <div class="col-sm-6 col-md-6">
                    <h1><?= $video_data->title ?></h1>
                </div>
            </div>
        </section>
        <section class="featured-ads">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 nopadding">
                        <div class="blog-post">
                            <div class="post-img">
                                <video width="100%" height="100%" controls> 
                                    <source src="<?= base_url('profile_video') ?>/<?= $video_data->video ?>">
                                </video>
                            </div>
                            <div class="blog-single">
                                <div class="post-info">
                                    <i class="fa fa-calendar-o"></i><?= $video_data->created_date ?>
                                </div>
                                <p><?= $video_data->description ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <aside>
                            <div class="widget">
                                <div class="widget-heading"><span class="title">Website</span></div>
                                <ul class="categories-module">
                                    <li> <a href="<?= $video_data->url ?>"> <?= $video_data->url ?> </a> </li>
                                </ul>
                            </div>
                            
                            <div class="widget">
                                <div class="widget-heading"><span class="title">Tags</span></div>
                                <ul class="tagcloud">
                                    <?php foreach (explode(',',$video_data->tags) as $tags) :  ?>
                                        <li><a href="#"> <?= $tags ?> </a></li>
                                    <?php endforeach ; ?>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('common/footer') ?>
        <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
        <?php $this->load->view('common/js') ?>
    </body>
</html>
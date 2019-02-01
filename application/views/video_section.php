<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ScriptsBundle">
        <title>Escorts Classified Ads India | Adult Ads Posting Classifieds India | Submit Ads in India</title>
        <?php $this->load->view('common/css') ?>
        <style>
            .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
            .bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
            .percent { position:absolute; display:inline-block; top:3px; left:48%; }
        </style>
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
                        <div class="col-md-8 col-sm-8 col-xs-12 col-md-pull-4">
                            <?php if ($this->session->userdata('success')) : ?>
                                <div class="alert alert-success text-center">
                                    <strong><?= $this->session->userdata('success') ?></strong>
                                </div>
                            <?php endif ; ?>
                            <?php if ($this->session->userdata('error')) : ?>
                                <div class="alert alert-danger text-center">
                                    <strong><?= $this->session->userdata('error') ?></strong>
                                </div>
                            <?php endif ; ?>
                            <div class="dashboard-main-disc">
                                <div class="heading-inner">
                                    <p class="title">Ad new Video</p>
                                </div>
                                    <?= form_open_multipart('accounts/video_section') ?>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Title<span class="required">*</span>
                                                </label>
                                                <input name="title" value="<?= set_value('title') ?>" class="form-control" type="text">
                                                <?= form_error('title') ? form_error('title') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Website<span class="required">*</span></label>
                                                <input name="website_url" value="<?= set_value('website_url') ?>" class="form-control" type="text">
                                                <?= form_error('website_url') ? form_error('website_url') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Video Upload<span class="required">*</span></label>
                                                <p><b>Note : </b>The maximum file size for uploads in this demo is 10 MB.Only video and gif files (3gp , gif , mp4 , mkv) are allowed in this demo</p>
                                                <input name="profile_video" multiple class="form-control" type="file">
                                                
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Description<span class="required">*</span></label>
                                                <textarea class="form-control" rows="10" name="description"><?= set_value('description') ?></textarea>
                                                <?= form_error('description') ? form_error('description') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Tags<span class="required">*</span></label><br>
                                                <input id="tags" type="text" name="tags" data-role="tagsinput" class="form-control">
                                                <?= form_error('tags') ? form_error('tags') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <button class="btn btn-default pull-right"><i class="fa fa-save"></i> Save Video </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php $this->load->view('common/footer') ?>
            <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
            <?php $this->load->view('common/js') ?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" integrity="sha256-tQ3x4V2JW+L0ew/P3v2xzL46XDjEWUExFkCDY0Rflqc=" crossorigin="anonymous"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    </body>
</html>
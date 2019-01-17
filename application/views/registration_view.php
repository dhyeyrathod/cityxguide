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
            <section class="contact-us light-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <?= form_open('authentication/registration') ?>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input class="form-control" value="<?= set_value('username') ?>" name="username" type="text">
                                            <?= form_error('username') ? form_error('username','<div class="text-danger">','</div>') : " " ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input class="form-control" value="<?= set_value('email') ?>" name="email" type="email">
                                            <?= form_error('email') ? form_error('email','<div class="text-danger">','</div>') : " " ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Password<span class="required">*</span></label>
                                            <input type="password" name="password" class="form-control">
                                            <?= form_error('password') ? form_error('password','<div class="text-danger">','</div>') : " " ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Contact <span class="required">*</span></label>
                                            <input type="text" value="<?= set_value('contact') ?>" class="form-control" name="contact">
                                            <?= form_error('contact') ? form_error('contact','<div class="text-danger">','</div>') : " " ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button style="float: left;" class="btn btn-default">Submit</button>
                                    </div>
                                </form>
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
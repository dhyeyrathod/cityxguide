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
                            <div class="dashboard-main-disc">
                                <div class="heading-inner">
                                    <p class="title">Ad new post</p>
                                </div>
                                    <?= form_open_multipart('accounts/add_new_post') ?>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Name<span class="required">*</span></label>
                                                <input name="name" value="<?= set_value('name') ?>" class="form-control" type="text">
                                                <?= form_error('name') ? form_error('name') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Email Id<span class="required">*</span></label>
                                                <input name="email" value="<?= set_value('email') ?>" class="form-control" type="text">
                                                <?= form_error('email') ? form_error('email') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Title<span class="required">*</span>
                                                </label>
                                                <input name="title" value="<?= set_value('title') ?>" class="form-control" type="text">
                                                <?= form_error('title') ? form_error('title') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Contact Number<span class="required">*</span></label>
                                                <input name="contact" value="<?= set_value('contact') ?>" class="form-control" type="text">
                                                <?= form_error('contact') ? form_error('contact') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Website<span class="required">*</span></label>
                                                <input name="website" value="<?= set_value('website') ?>" class="form-control" type="text">
                                                <?= form_error('website') ? form_error('website') : "" ?>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Country<span class="required">*</span></label>
                                                <select id="country_select" value="<?= set_value('country_id') ?>" name="country_id" class="select-general form-control">
                                                    <option value="">---Select Country---</option>
                                                    <?php foreach ($all_country_key as $key => $all_country_data) : ?>
                                                        <option value="<?= $all_country_data->id ?>"><?= $all_country_data->country_name ?></option>
                                                    <?php endforeach ; ?>
                                                </select>
                                                <?= form_error('country_id') ? form_error('country_id') : "" ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>City<span class="required">*</span></label>
                                                <select id="city_select" name="city_id" class="select-general form-control">
                                                    <option value="">---Select City---</option>
                                                </select>
                                                <?= form_error('city_id') ? "The City field is required." : "" ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input name="age" value="<?= set_value('age') ?>" class="form-control" type="number">
                                            </div> 
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Image Upload<span class="required">*</span></label>
                                                <input name="profile_image[]" multiple class="form-control" type="file">
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
                                            <button class="btn btn-default pull-right"><i class="fa fa-save"></i> Save Profile </button>
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
        </div>
    </body>
</html>
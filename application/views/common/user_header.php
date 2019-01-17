<section class="dashboard-menu dashboard-menu-2 light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard-menu-container">
                    <ul>
                        <li class="<?php if($this->uri->segment(2) == "dashboard") : echo "active" ; endif ; ?>">
                            <a href="<?= base_url('accounts/dashboard') ?>">
                                <div class="menue-name"> dashboard </div>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(2) == "add_new_post") : echo "active" ; endif ; ?>">
                            <a href="<?= base_url('accounts/add_new_post') ?>">
                                <div class="menue-name">Add New Add</div>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(2) == "user_profiles") : echo "active" ; endif ; ?>">
                            <a href="<?= base_url('accounts/user_profiles') ?>">
                                <div class="menue-name">Adds Details</div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php define('usemainjs',true);define('dotdotcnt',0); define('bodyClass','bg-dark'); define('titleExtend','');define('footerFixed',false); require_once('static/Content/head.php'); ?>
    <div id='signPrefer' data-prefer="<?php if(@$_GET["signin"] == true){ echo 'signin'; }else if(@$_GET['signup'] == true){ echo 'signup'; }else{ echo "signin"; } ?>"></div>
    <div class="border-0 rounded-0">
        <div class='card bg-dark text-white border-0 rounded-0 outtercardMargin daysMainCard'>
            <div class='card-header text-white header-days border-bottom border-primary'>
                <div id="header-permanent-days" style='display:none;'>
                    <div class="d-flex justify-content-center bg-dark">
                        <div class='days_current-Cate_And_Type'><span id='currentType' data-current="previous" class='text-primary'></span> | <span id='categoryType' class='text-info'>Events</span></div>
                    </div>
                </div>
                <div id="header-permanent-notlogin">
                    <div class='d-flex justify-content-start'>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="form_login">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="card bg-black text-white rounded-0 border-0">
                                <div class="card-header bg-secondary rounded-0">
                                    <span>Days Web App </span> | <span class="form_application_type">Sign In</span>
                                </div>
                                <div class="card-body form_classApplication">
                                    <div class="action_first_form" data-form-type="signin">
                                        <form method="post" autocomplete="rutjfkde">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label for="username_input_signin">Username</label>
                                                    <input placeholder="Username" class='rounded-pill border-0 form-control' readonly 
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                    type="text" name="username_input_signin" id="username_input_signin">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label for="password_input_signin">Password</label>
                                                    <input placeholder='Password' class='rounded-pill border-0 form-control' readonly 
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                    type="password" name="password_input_signin" id="password_input_signin">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="action_first_form" style='display:none;' data-form-type="signup">
                                        <form method="post" autocomplete="off">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label for="username_input_signup">Username</label>
                                                    <input readonly 
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                    type="text" autocomplete="off" name="username_input_signup" id="username_input_signup" placeholder='Username' class='rounded-pill border-0 form-control is-invalid'>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label for="email_input_signup">Email</label>
                                                    <input readonly 
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                    type="email" autocomplete="off" name="email_input_signup" id="email_input_signup" placeholder='Email' class='rounded-pill border-0 form-control is-invalid'>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label for="password_input_signup">Password</label>
                                                    <input readonly 
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                    type="password" autocomplete="off" name="password_input_signup" id="password_input_signup" placeholder='Password' class='rounded-pill border-0 is-invalid form-control'>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label for="passwordconfirm_input_signup">Confirm Password</label>
                                                    <input readonly 
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                    type="password" autocomplete="off" name="passwordconfirm_input_signup" id="passwordconfirm_input_signup" placeholder='Confirm Password' class='rounded-pill border-0 is-invalid form-control'>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label for="phome_input_signup">Phone Number</label>
                                                    <input readonly 
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                    type="tel" name="phome_input_signup" id="phome_input_signup" placeholder='Phone Number' class='rounded-pill border-0 form-control'>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label for="age_input_signup">Age</label>
                                                    <input readonly 
                                                    onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                    type="number" name="age_input_signup" id="age_input_signup" min='4' max='100' maxlength='3' placeholder="Age" class='rounded-pill border-0 form-control'>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <label for="profile-url">Profile URL</label>
                                                    <input readonly 
                                                        onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');this.blur();this.focus();}"
                                                        type="url" id='profile-url' class="form-control is-invalid rounded-pill border-0 profile-url" placeholder="john" 
                                                        aria-label="myprofile" aria-describedby="addonUrlProfile">
                                                </div>
                                            </div>                                       
                                        </form>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 text-secondary termDisplay" style='display:none;'>
                                            *By clicking 
                                            <span class='form_application_type font-weight-bold text-warning'>Sign-in.</span>
                                            You agree to our <a href="readableContent/policy/read" class="text-primary font-weight-bold">Policy</a>.
                                            <br />
                                            <span class="text-info">A form automatically create your profile in a time you click sign-up button.</span>
                                        </div>
                                        <div class="col-6 underterm">
                                            <div data-type-action='signin' class="form_application_type_btn btn rounded-pill border-0 btn-block btn-success"><i class='fal fa-sign-in'></i> Sign-in</div>
                                        </div>
                                        <div class="col-6 underterm">
                                            <div data-type-action='signin' class="form_application_type_btn_trash btn rounded-pill border-0 btn-block btn-danger"><i class='fal fa-trash-alt'></i> Clear</div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <a data-btn-type='signup' class='signup_aele' style='display:none;' href="javascript:switchsisuto('signin');">I already have an account.</a>
                                        <a data-btn-type='signin' class='signin_aele' href="javascript:switchsisuto('signup');">I didn't have an account.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="card text-dark rounded-0 border-0">
                                <!-- <img src="https://via.placeholder.com/1280x720/808080/ffffff/?text=Days Web App" alt="Days Infographic" class='rounded-0 card-img-top'> -->
                                <div id="carouselDaysMain" class="carousel slide carousel-fade" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselDaysMain" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselDaysMain" data-slide-to="1"></li>
                                        <li data-target="#carouselDaysMain" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="https://via.placeholder.com/1280x720/808080/ffffff/?text=Days Web App" class="d-block w-100" alt="Days Web App">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Days Web App</h5>
                                            <p>Important days that matter to you.</p>
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="https://via.placeholder.com/1280x720/808080/ffffff/?text=Countdown" class="d-block w-100" alt="Countdown">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Countdown</h5>
                                            <p>Beautiful, Responsive, Minimal for any countdown</p>
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="https://via.placeholder.com/1280x720/808080/ffffff/?text=Background" class="d-block w-100" alt="Background">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Background</h5>
                                            <p>Inspiring you with amazing place around the world.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselDaysMain" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselDaysMain" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                            <div class="card text-dark rounded-0 border-0">
                                <div class="card-body">
                                    <div class="card-title h2 font-weight-bold">Days</div>
                                    <div class='card-subtitle h4 mb-2 text-muted'>Remember your important days,<br />A beautiful way to countdown to all the events that matter to you</div>
                                    <p class="card-text h6 text-primary">Get started to your important days now.</p>
                                    <div class="row" style='width:30% !important;'>
                                        <div class="col-4">
                                            <a class='btn btn-block rounded-0 btn-info' href='/days/lobby'><i class='fal fa-globe-asia text-dark'></i> Explore</a>
                                        </div>
                                        <div class="col-4">
                                            <a class='btn btn-block rounded-0 btn-primary' href='/days/lobby#pricing'><i class='fal fa-dollar-sign text-dark'></i> Pricing</a>
                                        </div>
                                        <div class="col-4">
                                            <a class='btn btn-block rounded-0 btn-success' href='/days/users/myaccount/dashboard'><i class='fal fa-user-alt text-dark'></i> My Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="application">
                    This is application.
                </div>
            </div>
        </div>
    </div>
<?php require_once('./static/Content/foot.php'); ?>
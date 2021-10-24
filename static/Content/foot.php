<?php
if(!defined('usemainjs')){
    die('usemainjs is not defined in'.__FILE__);
}
if(!defined('dotdotcnt')){
    die('dotdotcnt is not defined in'.__FILE__);
}
if(footerFixed == true){
    $footerClass = 'fixed-bottom';
}else{
    $footerClass = "";
}
if(dotdotcnt == 0){
    $dot = "";
}else if(dotdotcnt < 0){
    die('dotdotcnt is not valid');
}else if(dotdotcnt > 10){
    die('dotdotcnt is not valid');
}else{
    $dot = "";
    for ($i=0; $i < dotdotcnt; $i++) { 
        $dot .= "../";
    }
}
?>
    <section class="footers bg-black pt-5 mt-5 pb-3 border-top border-primary <?php echo $footerClass; ?> text-white">
        <div class="container pt-5">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 mt-2 footers-one">
                    <div class="footers-logo">
                        <div class="h5"><span class='text-warning' style='font-weight:900;font-family:Prompt;'>|</span> Days</div>
                    </div>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-2">
                                <div class='imgOverlays'></div>
                            </div>
                            <div class="col-10">
                                <p>The days you will remember, A beautiful way to countdown to all the events that matter to you</p>
                            </div>
                        </div>
                    </div>
                    <div class="social-icons"> 
                        <a href="https://www.facebook.com/"><i id="social-fb" class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://twitter.com/"><i id="social-tw" class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://instagram/"><i id="social-ig" class="fab fa-instagram fa-2x"></i></a>
                        <a href="mailto:igamesecure@aol.com"><i id="social-em" class="fal fa-envelope fa-2x"></i></a>
                    </div>
                    <div class="row">
                        <div class="input-group mt-3">
                            <input type="email" class="form-control rounded-pill-left" id='subscriptINPUT' placeholder="Email Address" aria-label="Email Address" aria-describedby="subscriptBTN">
                            <div class="input-group-append">
                                <button class="btn btn-success btn-subscribe rounded-pill-right" type="button" id="subscriptBTN">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 mt-2 footers-two">
                    <div class="h5"><span class='text-warning' style='font-weight:900;font-family:Prompt;'>|</span> Myaccount</div>
                    <ul class="list-unstyled">
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/users/myaccount/dashboard">My Account</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/users/myaccount/plan">My Plan</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/users/myaccount/categorys">My Categorys</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/users/myaccount/countdowns">My Events</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/users/myaccount/backgrounds">My Backgrounds</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 mt-2 footers-three">
                    <div class="h5"><span class='text-warning' style='font-weight:900;font-family:Prompt;'>|</span> Information</div>
                    <ul class="list-unstyled">
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/blog">Blog</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/lobby">Days</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/lobby#pricing">Pricing</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/background">Background</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 mt-2 footers-four">
                    <div class="h5"><span class='text-warning' style='font-weight:900;font-family:Prompt;'>|</span> Explore</div>
                    <ul class="list-unstyled">
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/lobby">Explore</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/sitemap">Sitemap</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/main!signin">Sign In</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/feedback">Feedbacks</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/readableContent/policy/read">User Agreement</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 mt-2 footers-five">
                    <div class="h5"><span class='text-warning' style='font-weight:900;font-family:Prompt;'>|</span> Company</div>
                    <ul class="list-unstyled">
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/about">Company</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/partner">Partner</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/readableContent/policy/read">Terms</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/readableContent/policy/read">Policy</a></li>
                        <li class='footer-li-list text-primary'><i class='fas fa-chevron-double-right'></i> <a class='footer-a-list' href="/days/system/contact">Contact Us</a></li>
                    </ul>
                </div>
                    
            </div>
            <div class="row text-center">
                <div class="col-md-12 pt-3">
                    <p class="text-muted">&copy;2020-<?php echo date('Y'); ?> Nawin All right reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Cookie Consent. -->
    <div class="d-flex justify-content-end consent__cookie--panel fixed-bottom">
        <div class="col-12 col-sm-12 fixed-bottom consent__cookie--panel col-md-4 col-lg-4 col-xl-4 mr-0 mb-3 ml-0">
            <div class="card bg-bopac border border-warning text-white rounded-0">
                <div class="card-title ml-3 mt-3">
                    <h2>Allow Cookies</h2>
                </div>
                <div class="card-body">
                    <p>
                        We use third party cookie &amp; site cookie to enhance user experience, to personalize content, ads and analyze site traffic.
                        <br />To continue use this website please accept our cookie policy.
                        <br> <a href="readableContent/policy/read" class="font-weight-bold">Learn More&gt;</a>    
                    </p>
                    <div class="row">
                        <div class="col-12"><button type="button" class="btn consent__cookie--accept btn-outline-danger mt-2 btn-block">Accept Cookies</button></div>
                        <!-- <div class="col-6"><button type="button" class="btn consent__cookie--config btn-outline-primary mt-2 btn-block">Cookies Preference</button></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cookie Consent End. -->
    <!-- jQuery -->
    <script src="./<?php echo $dot; ?>static/public/jquery/jquery.min.js"></script>
    <!-- Font Awesome Icon -->
    <script src="./<?php echo $dot; ?>static/public/fa/js/brands.min.js"></script>
    <!-- <script src="./<?php echo $dot; ?>static/public/fa/js/conflict-detection.min.js"></script> -->
    <script src="./<?php echo $dot; ?>static/public/fa/js/duotone.min.js"></script>
    <script src="./<?php echo $dot; ?>static/public/fa/js/fontawesome.min.js"></script>
    <script src="./<?php echo $dot; ?>static/public/fa/js/light.min.js"></script>
    <script src="./<?php echo $dot; ?>static/public/fa/js/regular.min.js"></script>
    <script src="./<?php echo $dot; ?>static/public/fa/js/solid.min.js"></script>
    <script src="./<?php echo $dot; ?>static/public/fa/js/v4-shims.min.js"></script>
    <!-- bootstrap -->
    <script src="./<?php echo $dot; ?>static/public/bootstrap/js/bootstrap.min.js"></script>
    <!-- Cookie JS -->
    <script src="./<?php echo $dot; ?>static/public/main/cookie.js?version=0.0.1&timeUpdate=<?php echo time(); ?>&nightmare_varible=<?php echo str_shuffle(md5(time())); ?>"></script>
    <script src="./<?php echo $dot; ?>static/public/main/ConsentCookie.js?version=0.0.1&timeUpdate=<?php echo time(); ?>&nightmare_varible=<?php echo str_shuffle(md5(time())); ?>"></script>
    <!-- Main JS -->
    <script src="./<?php echo $dot; ?>static/public/main/clearFirstContent.js?version=0.0.1&timeUpdate=<?php echo time(); ?>&nightmare_varible=<?php echo str_shuffle(md5(time())); ?>"></script>
<?php
if(usemainjs == true){
?>
    <script src="./<?php echo $dot; ?>static/public/main/regexp.js?version=0.0.1&timeUpdate=<?php echo time(); ?>&nightmare_varible=<?php echo str_shuffle(md5(time())); ?>"></script>
    <script async src="./<?php echo $dot; ?>static/public/main/main.js?version=0.0.1&timeUpdate=<?php echo time(); ?>&nightmare_varible=<?php echo str_shuffle(md5(time())); ?>"></script>
    <?php
}
?>
    </body>
</html>
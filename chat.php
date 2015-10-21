<?php
    include("./inc_header.php"); 
    
     header1(
        $body_class = "login-page access-page has-full-screen-bg",
        $wrapper    = true,
        $tooltip    = true,
        $nav_show   = false,
        $nav_item   = "chat",
        $title      = "SuperNET Chat - Get in touch instantly via the SuperNET Slack "
    )
?>
        <!-- ******Login Section****** --> 
        <section class="login-section access-section section">
            <div class="container">
                <div class="row">
                    <div class="form-box col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">     
                        <div class="form-box-inner">
                            <iframe src="http://slackinvite.supernet.org/" style="border:0; width:100%; height:600px;"></iframe>
                            <p class="text-center"><Join the SuperNET Slack</p>
                        </div><!--//form-box-inner-->
                    </div><!--//form-box-->
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//contact-section-->
    </div><!--//upper-wrapper-->
    
<?php
    include("./inc_footer.php");
?>
<?php
    include "overfile/connect.php";
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    if(isset($_POST["send_contact"])){
        $name = $_POST["name"];
        $name = trim($name);
        $email = $_POST["email"];
        $email = trim($email);
        $title = $_POST["title"];
        $title = trim($title);
        $comment = $_POST["comment"];
        $comment = trim($comment);

        $check = true;
        if(strlen($name) == 0){
            $name_error = "Please Enter Name <br>";
            $check = false;
        }
        if(strlen($email) == 0){
            $email_error = "Please Enter Email <br>";
            $check = false;
        }
        if(strlen($title) == 0){
            $title_error = "Please Enter Title <br>";
            $check = false;
        }
        if(strlen($comment) == 0){
            $comment_error = "Input Your Comment <br>";
            $check = false;
        }

        if($check){
            $query 		= "INSERT INTO contact(name,email,title,comment) VALUES ('$name','$email','$title','$comment')";
            $result=mysqli_query($con,$query);
            if($result){
                $msg ='<p style="color:blue">Your Contact Had Been Send!</p>';
            }
        }
    }
?>
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li class='active'>Contact</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="row inner-bottom-sm">
            <div class="contact-page">
                <div class="col-md-12 contact-map outer-bottom-vs">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.106903817078!2d108.20856754137111!3d16.059941364196668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b4239d8e51%3A0x96e408c6b0419760!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBEdXkgVMOibg!5e0!3m2!1sen!2s!4v1475650027694" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <form role="form" class="cnt-form" action="<?php echo'index.php?url=contact'?>" method="post">
                    <div class="col-md-9 contact-form">
                        <div class="col-md-12 contact-title">
                            <h4>Contact Form</h4>
                        </div>
                        <div class="col-md-4 ">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
                                    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="Name" name="name"/>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Input Your Email" name="email"/>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                                    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Title" name="title"/>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
                                    <textarea class="form-control unicase-form-control" id="exampleInputComments" name="comment"></textarea>
                                </div>
                        </div>
                        <div class="col-md-12 outer-bottom-small m-t-20">
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="send_contact">Send Message</button>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <span style="color: red">
                                        <?php
                                            if(isset($name_error)) echo $name_error;
                                            if(isset($email_error)) echo $email_error;
                                            if(isset($title_error)) echo $title_error;
                                            if(isset($comment_error)) echo $comment_error;
                                        ?>
                                    </span>
                                        <?php
                                            if(isset($msg)) echo $msg;
                                        ?>
                                </div>
                        </div>
                    </div>
                </form>
		</div><!-- /.contact-page -->
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <h3 class="section-title">Our Brands</h3>
            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
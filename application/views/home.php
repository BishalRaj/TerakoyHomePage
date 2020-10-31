<!-- Masthead-->
<header class="masthead" id="particles-js">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">
                    Shape The Future
                </h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5"></p>
                <a class="btn btn-primary btn-xl js-scroll-trigger " href="#moto">Find Out How !</a>
            </div>
        </div>
    </div>
</header>

<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container">
        <div class="row justify-content-center zoom-in">
            <div class="col-lg-8 col-md-8 col-sm-10 col-10 text-center">
                <h2 class="text-white mt-0">About <?php echo $this->session->userData('site_name'); ?></h2>
                <hr class="divider my-4" />
                <p class="text-white-50 mb-4 def-font">
                    TERAKOYA Academia is a young software development company that
                    envisions shaping the future of Nepal through information technology.
                    Founded by Sharad Rai, a PhD scholar in the University of Tokyo, we
                    aim to deliver the best and most cost-effective software development
                    offshoring and outsourcing solutions to customers in various areas. In
                    addition, we also connect talented Nepali IT students with Japanese
                    companies.
                </p>
                <a class="btn btn-light btn-xl" href="about">Read More</a>
            </div>
        </div>
    </div>
</section>
<!-- Moto-->
<section class="page-section" id="moto">
    <div class="container">
        <h2 class="text-center mt-0 top-to-bottom">At Your Service</h2>
        <hr class="divider my-4" />
        <div class="row ">
            <div class="col-lg-3 col-md-6 px-5 mx-auto text-center right-to-left has-animation ">
                <div class="bg-dark p-5 rotate-icon-ff mx-auto my-5">
                    <i class="fas fa-4x fa-gem rotate-icon-negative "></i>
                </div>
                <h3 class="h4 mb-2 text-danger def-font">Quality Work</h3>
                <p class="text-muted def-font">
                    We provide quality services by implementing via agile software
                    development process.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 px-5 mx-auto text-center bottom-to-top has-animation ">
                <div class="bg-dark p-5 rotate-icon-ff mx-auto my-5">
                    <i class="fab fa-4x fa-facebook-f rotate-icon-negative "></i>
                </div>
                <h3 class="h4 mb-2 text-danger">Great Support</h3>
                <p class="text-muted def-font">
                    We provide quality services by implementing via agile software
                    development process.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 px-5 mx-auto text-center left-to-right has-animation ">
                <div class="bg-dark p-5 rotate-icon-ff mx-auto my-5">
                    <i class="fab fa-4x fa-youtube rotate-icon-negative "></i>
                </div>
                <h3 class="h4 mb-2 text-danger">Trusted Company</h3>
                <p class="text-muted def-font">
                    We provide quality services by implementing via agile software
                    development process.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services-->
<div id="services">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <!-- Services Heading -->
                <div class="row text-center mt-4 p-4 no-gutters">
                    <div class="col-lg-12">
                        <h2>
                            HOW WE ASSIST YOU FOR YOUR CAREER?
                        </h2>
                        <p class=" def-font">
                            We not only offer career-oriented IT training in Nepal as per
                            industry needs but also guarantee successful job placements for
                            deserving students and professionals.
                        </p>
                    </div>
                </div>

                <!-- Services Body -->
                <div class="row p-4 mb-5 align-items-center mr-auto ml-auto">
                    <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner">

                            <?php $chk_active=1; foreach ($tes_data as $tes):?>

                            <div class="carousel-item <?php if ($chk_active==1) echo "active" ?>">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-2 text-center p-2">
                                        <img src="<?php echo $tes->tes_image;?>" class="rounded-circle w-50" alt="" />
                                        <h2 class="def-font"><?php echo $tes->tes_name;?></h2>
                                        <h5 class="def-font"><?php echo $tes->tes_position;?></h5>
                                    </div>
                                    <div class="col-lg-7 card px-5 py-5 w-100">
                                        <center>
                                            <p class="text-muted mb-0 def-font">
                                                <?php echo $tes->tes_desc;?>
                                            </p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <?php $chk_active++; endforeach;?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact-->
<section class="page-section bg-light-dark" id="contact">
    <div class="container-fluid">
        <h2 class="mt-0 text-center has-animation top-to-bottom">
            Let's Get In Touch!
        </h2>
        <hr class="divider mt-4" />
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-6 text-center mt-4 has-animation left-to-right">
                <p class="text-muted mb-5">
                    Ready to start your next project with us? Give us a call or send us an
                    email and we will get back to you as soon as possible!
                </p>
            </div>
            <div class="container">
                <form method="post" action="contact/add" class="w-100">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-11 mx-auto text-center mb-5 mb-lg-0">
                            <div class="form-group">
                                <input name="name" placeholder="Your Name" type="text"
                                    class="form-control form-control-lg p-4 formInsider" />
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input name="email" placeholder="Email Address" type="email"
                                    class="form-control form-control-lg p-4 formInsider" />
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input name="phone" placeholder="Phone Number" type="number"
                                    class="form-control form-control-lg p-4 formInsider" />
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-11 mx-auto m-0 text-center sm-adjust">
                            <div class="form-group">
                                <textarea name="desc" placeholder="Your message" rows="6"
                                    class="form-control form-control-lg formInsider"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mt-3">
                            <button value="submit" type="submit" class="btn p-3 btn-h-org">
                                send message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="contact-info">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 px-5 py-5 text-center text-light bg-semi-transparent">
                <p>
                    <i class="fas fa-4x fa-phone mb-4 p-3 circle-light bg-semi-transparent rotate-icon"></i>
                </p>
                <h1 class="def-font"><?php echo $this->session->userData('site_contact'); ?></h1>
                <h5 class="def-font"><?php echo $this->session->userData('site_address'); ?></h5>
                <h5 class="def-font"><?php echo $this->session->userData('site_email'); ?></h5>
                <p class="mt-4">
                    <a href="https://www.<?php echo $this->session->userData('site_social_facebook'); ?>">
                        <i class="fab fa-4x fa-facebook-f mx-2 p-3 circle-dark bg-semi-transparent"></i>
                    </a>
                    <a href="https://www.<?php echo $this->session->userData('site_social_twitter'); ?>">
                        <i class="fab fa-4x fa-twitter mx-2 p-3 circle-dark bg-semi-transparent "></i>
                    </a>
                    <a href="https://www.<?php echo $this->session->userData('site_social_youtube'); ?>">
                        <i class="fab fa-4x fa-youtube mx-2 p-3 circle-dark bg-semi-transparent "></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<script>
$("#header_home").addClass("active");
</script>
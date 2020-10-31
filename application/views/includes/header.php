<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $this->session->userData('site_name'); ?></title>

    <script src="" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/particle.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/blog.css" rel="stylesheet" />
    <link href="css/media.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" style="border: none;" id="mainNav">
        <div class="container">

            <div class="col-lg-2 col-md-2 col-sm-2 col-3" id="nav-logo">
                <a class="navbar-brand" href="welcome">
                    <img src="<?php echo $this->session->userData('site_logo'); ?>" class="img-fluid" alt="Logo" />
                </a>
            </div>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_home" href="<?php echo base_url();?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_about"
                            href="<?php echo base_url('about');?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_services"
                            href="<?php echo base_url('services');?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_team"
                            href="<?php echo base_url('team');?>">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_contact"
                            href="<?php echo base_url('contact');?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_gallery"
                            href="<?php echo base_url('gallery');?>">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_blog"
                            href="<?php echo base_url('blog');?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_testimonial"
                            href="<?php echo base_url('testimonial');?>">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="header_career"
                            href="<?php echo base_url('career');?>">Career</a>
                    </li>
                    <li class="nav-item ml-4">
                        <select name="language" style="border: none;" id="language">
                            <option value="en">EN</option>
                            <option value="jp">JP </option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
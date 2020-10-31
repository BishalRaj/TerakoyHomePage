    <!-- Masthead-->
    <header class="masthead-about">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">
                        About <?php echo $this->session->userData('site_name'); ?>
                    </h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">
                        " Who questions much, shall learn much, and retain much "
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-5 col-4">
                    <img src="./assets/img/TERAKOYA-Academia.png" class="img-fluid rounded-circle" alt="">
                </div>
                <div
                    class="col-lg-9 col-md-9 col-sm-10 col-10 text-center my-auto py-5 text-center card shadow bg-white right-to-left has-animation">
                    <p class="def-font">" <?php echo $this->session->userData('site_name'); ?> is a young software
                        development company that envisions
                        shaping the future of Nepal through information technology. Founded by Sharad Rai,
                        a PhD scholar in the University of Tokyo who has been in Japan for the past 13 years,
                        we aim to deliver the best and most cost-effective
                        software development offshoring and outsourcing solutions to customers in various areas. "
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CEO-->
    <section class="page-section bg-primary" id="ceo">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-lg-9 col-md-9 col-sm-10 col-10 text-center my-auto py-5 text-center card shadow bg-white left-to-right has-animation">
                    <p class="px-0 py-0 mx-0 my-0">
                        <h1 class="px-0 py-0 mx-0 my-0">Sharad Rai</h1>
                    </p>
                    <p class="px-0 py-0 mx-0 my-0">
                        <h4 class="px-0 py-0 mx-0 my-0">Founder & CEO</h4>
                    </p>
                    <p class="def-font">" After completing Masters’ from the University of Tokyo,
                        Sharad Rai joined SoftBank Corporation in 2014.
                        While pursuing PhD in the University of Tokyo, he founded TERAKOYA Academia in 2019.
                        Besides, Sharad has also founded an international non profit organization,
                        YouMe Nepal in Japan and has built two schools in Nepal where more than
                        500 students are studying today. "
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 col-4">
                    <img src="./assets/img/Sharad-Rai.png" class="img-fluid rounded-circle" alt="">
                </div>
            </div>
        </div>
    </section>

    <script>
$("#header_about").addClass("active");
    </script>
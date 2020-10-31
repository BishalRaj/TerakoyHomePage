<!-- Masthead-->
<!-- <header class="masthead-about">
  <div class="container h-100">
    <div
      class="row h-100 align-items-center justify-content-center text-center"
    >
      <div class="col-lg-10 align-self-end">
        <h1 class="text-uppercase text-white font-weight-bold">
          Blog Terakoya
        </h1>
        <hr class="divider my-4" />
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-white-75 font-weight-light mb-5">
          " Coming together is <i><b>beginning</b></i
          >, staying together is <i><b>progress</b></i
          >, and working together is <i><b>success</b></i
          >, "
        </p>
      </div>
    </div>
  </div>
</header> -->

<!-- Blog -->


<section class="page-section bg-primary p-5 ">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>

<section class="details-card" style="background-color: #f5f5f5;" id="blog">
    <div class="container">
        <div class="row justify-content-center align-self-center">

            <div class="col-lg-5 bg-light p-5">


                <?php
                if($this->session->flashdata('err_message') != '') { ?>
                <h1 class="text-danger"><?php echo $this->session->flashdata('err_message'); ?></h1>
                <?php } ?>


                <h1 class="text-warning">Login</h1>
                <form method="post" action="login/validate">

                    <div class="form-group">
                        <input name="email" placeholder="Email Address" type="email"
                            class="form-control form-control-lg" />
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <input name="password" placeholder="Your Password" type="password"
                            class="form-control form-control-lg" />
                        <div class="text-danger"></div>
                    </div>

                    <button value="submit" type="submit" class="btn btn-info">
                        Login
                    </button>
                </form>
            </div>

        </div>
    </div>

</section>
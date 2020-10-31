<!-- Masthead-->
<header class="masthead-about">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">
                    Team <?php echo $this->session->userData('site_name'); ?>
                </h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">
                    " Coming together is <i><b>beginning</b></i>, staying together is <i><b>progress</b></i>, and
                    working together is <i><b>success</b></i>, "
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Team-->

<section class="page-section" style="background-color: #f5f5f5;" id="team">

    <div class="container">
        <h2 class="text-center mt-0 top-to-bottom">Team Research</h2>
        <hr class="divider my-4" />
        <div class="row justify-content-center align-self-center">

            <?php $counter=1; foreach ($data as $team):?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-10 p-3 mx-2 my-2 text-center card shadow bg-white <?php echo $retVal = ($counter%2==1) ? "animate_fadeInTopLeft" : "animate_fadeInTopRight" ; ?> has-animation"
                style="border-color: #e8e8e8;">
                <div class="mt-3">
                    <img src="<?php echo $team->t_image;?>" class="img-fluid rounded-circle w-75" alt="Logo" />
                    <h3 class="h4 mb-2"><?php echo $team->t_name;?></h3>
                    <p class="text-muted mb-0">
                        <?php echo $team->t_position;?>
                    </p>
                </div>
            </div>
            <?php $counter++; endforeach;?>

        </div>
    </div>
</section>


<script>
$("#header_team").addClass("active");
</script>
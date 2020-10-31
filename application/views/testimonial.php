<!-- Masthead-->
<header class="masthead-about">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">
                    Terakoya Testimonials
                </h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">
                    " A testimonial from a <i><b>Client</b></i> is <i><b>Gold</b></i> "
                </p>
                <em>
            </div>
        </div>
        </small></d iv>
</header>

<!-- Team-->

<section class="page-section" style="background-color: #f3f5f5;" id="team">

    <div class="container">
        <h2 class="text-center mt-0 top-to-bottom">Heading</h2>
        <hr class="divider my-4" />
        <div class="row justify-content-center align-self-center">

            <?php  $i=1; ?>

            <?php $counter=1; foreach ($data as $tes):?>

            <div class="col-lg-3 col-md-5 col-sm-5 col-10 p-3 mx-2 my-2 text-center card shadow bg-white <?php echo $retVal = ($counter%2==1) ? "animate_fadeInTopLeft" : "animate_fadeInTopRight" ; ?> has-animation"
                style="border-color: #e8e8e8;">
                <div class="mt-3 mb-3">
                    <img src="<?php echo $tes->tes_image;?>" class="rounded-circle w-50" alt="Logo" />
                    <p class="mt-2">
                        <span style="width:2px; background-color:#ffeb3b; height:2px; padding:2px; margin-right:5%;">
                        </span>
                        <small class="def-font"><?php echo $tes->tes_desc;?></small>
                        <span style="width:2px; background-color:#ffeb3b; height:2px; padding:2px; margin-left:3%;">
                        </span>
                    </p>
                    <h3 class="h4 mb-2 text-danger def-font"><?php echo $tes->tes_name;?></h3>
                    <p class="text-muted mb-0 def-font">
                        <?php echo $tes->tes_position;?>
                    </p>
                </div>
            </div>


            <?php $i++; ?>

            <?php $counter++; endforeach;?>

        </div>
    </div>
</section>


<script>
$("#header_testimonial").addClass("active");
</script>
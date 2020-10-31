<!-- Masthead-->
<header class="masthead-about">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">
                    Gallery <?php echo $this->session->userData('site_name'); ?>
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

<!-- Gallery -->
<section class="details-card" style="background-color: #f5f5f5;" id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 bg-light pt-5">
                <div id="myBtnContainer">
                    <button class="btn active w-100 my-2" onclick="filterSelection('all')"> Show all</button>
                    <?php foreach ($data as $gallery):?>
                    <button class="btn w-100" onclick="filterSelection('<?php echo  $gallery->g_type;?>')">
                        <?php echo $gallery->g_type  ;?></button>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <?php foreach ($data as $gallery):?>
                    <div class="col-lg-4 column <?php echo $gallery->g_type;?>">
                        <div class="content">
                            <img src="<?php echo $gallery->g_image;?>" alt="" class="img-fluid" />
                            <h4 class="text-center"><?php echo $gallery->g_title;?></h4>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$("#header_gallery").addClass("active");
</script>
<script src="<?php echo base_url('js/imageFilter.js'); ?>"></script>
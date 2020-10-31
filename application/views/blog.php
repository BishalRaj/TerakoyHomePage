<!-- Masthead-->
<header class="masthead-about">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">
                    Blog <?php echo $this->session->userData('site_name'); ?>
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

<!-- Blog -->



<section class="details-card" style="background-color: #f5f5f5;" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/nature" alt="">
                        <span>
                            <h4>heading</h4>
                        </span>
                    </div>
                    <div class="card-desc">
                        <h3>Heading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo,
                            perspiciatis
                            voluptas totam</p>
                        <a href="news" class="btn-card">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/animals" alt="">
                        <span>
                            <h4>heading2</h4>
                        </span>
                    </div>
                    <div class="card-desc">
                        <h3>Heading2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo,
                            perspiciatis
                            voluptas totam</p>
                        <a href="news" class="btn-card">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/tech" alt="">
                        <span>
                            <h4>heading3</h4>
                        </span>
                    </div>
                    <div class="card-desc">
                        <h3>Heading3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo,
                            perspiciatis
                            voluptas totam</p>
                        <a href="news" class="btn-card">Read</a>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation ">
            <ul class="pagination justify-content-center align-self-center mt-4">

                <li class="page-item ">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>

                </li>
                <li class="page-item ">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&langle;</span>
                        <span class="sr-only">Previous</span>
                    </a>

                </li>


                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&rangle;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>





    </div>



</section>

<!-- details card section starts from here -->

<script>
$("#header_blog").addClass("active");
</script>
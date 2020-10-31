<!-- Masthead-->
<header class="masthead-about">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">
                    Contact <?php echo $this->session->userData('site_name'); ?>
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

<!-- Contact-->
<section class="page-section bg-light" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-11 col-11 mx-auto">
                <div class="text">
                    <h2>Enquire Now</h2>
                </div>
                <form method="post" action="contact/add">
                    <div class="form-group">
                        <input name="name" placeholder="Your Name" type="text" class="form-control form-control-lg" />
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <input name="email" placeholder="Email Address" type="email"
                            class="form-control form-control-lg" />
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <input name="phone" placeholder="Phone Number" type="number"
                            class="form-control form-control-lg" />
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <textarea name="desc" placeholder="Your message" rows="4" class="form-control form-control-lg">
            </textarea>
                    </div>
                    <button value="submit" type="submit" class="btn btn-info">
                        send message
                    </button>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 px-5 margin-top def-font">
                <h2>Contact Details</h2>
                <p><strong>TERAKOYA Academia</strong></p>
                <p>Mid Baneshwor, Kathmandu, Nepal</p>
                &nbsp;
                <p><strong>Contact Number</strong></p>
                <p>+977-9808965730</p>
                &nbsp;
                <p><strong>Email:</strong></p>
                <p>terakoya.academia@gmail.com</p>
            </div>
        </div>


    </div>
    </div>
</section>
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.1782885971194!2d85.33740382916976!3d27.69525918638222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDQxJzQyLjkiTiA4NcKwMjAnMTYuNiJF!5e0!3m2!1sen!2snp!4v1596016206559!5m2!1sen!2snp"
    width="100%" height="500px" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"
    class="zoom-in"></iframe>


<script>
$("#header_contact").addClass("active");
</script>
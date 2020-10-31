<!-- Masthead-->
<header class="masthead-about">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">
                    Career in <?php echo $this->session->userData('site_name'); ?>
                </h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">
                    " A testimonial from a <i><b>Client</b></i> is <i><b>Gold</b></i> "
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Team-->

<section class="page-section" style="background-color: #f3f5f5;" id="team">

    <div class="container">
        <h2 class="text-center mt-0 top-to-bottom">Heading</h2>
        <hr class="divider my-4" />
        <div class="row justify-content-center align-self-center">
            <div class="col-md-7">
                <form method="post" action="career/add">
                    <div class="form-group required">
                        <label class="required control-label">Full name *</label>
                        <input class="required form-control" required="required" aria-required="true"
                            placeholder="Your full name" type="text" name="name"></div>
                    <div class="form-group required"><label class="required control-label">Date of Birth *</label>
                        <input class="required form-control" required="required" aria-required="true"
                            placeholder="2000-02-02" type="date" name="dob"></div>
                    <div class="form-group required"><label class="required control-label">Email address *</label>
                        <input class="required form-control form-control" required="required" aria-required="true"
                            placeholder="Your email address" type="email" name="email"></div>
                    <div class="form-group  required"><label class="tel required control-label">Phone number *</label>
                        <input class="tel required form-control form-control" required="required" aria-required="true"
                            placeholder="Your phone number" type="number" name="phone"></div>
                    <div class="form-group required">
                        <label class="required control-label">Qualifications *</label>
                        <input class="required form-control" required="required" aria-required="true"
                            placeholder="Your qualifications" type="text" name="qualifications"></div>
                    <div class="form-group required">
                        <label class="required control-label">Skills *</label>
                        <input class="required form-control" required="required" aria-required="true"
                            placeholder="Your skills" type="text" name="skills"></div>
                    <div class="form-group required">
                        <label class="required control-label">CV *</label>
                        <input class="required form-control" required="required" aria-required="true"
                            placeholder="Your CV" type="text" name="cv" onclick="openKCFinder(this)" readonly></div>
                    <div class="form-group text-center">
                        <input class="btn btn-info px-5" type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
</section>


<script>
$("#header_career").addClass("active");
</script>
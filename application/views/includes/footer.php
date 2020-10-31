    <!-- Footer-->
    <footer class="text-light" id="footer">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-2 col-md-3 col-sm-3 col-3 has-animation bottom-to-top mx-auto px-4">
                    <img src="<?php echo $this->session->userData('site_logo'); ?>" class="img-fluid" alt="Logo" />
                </div>
            </div>
        </div>
        <div class="container-fluid text-center pb-4 text-dark">
            <small class=" def-font">Copyright © 2020 TERAKOYA Academia. | All Rights Reserved.</small>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- scripts -->
    <script src="<?php echo base_url('js/particles.js'); ?>"></script>
    <script src="<?php echo base_url('js/app.js'); ?>"></script>
    <script src="<?php echo base_url('js/animation.js'); ?>"></script>
    <script src="<?php echo base_url('js/fontawesome.js'); ?>"></script>
    <script type="text/javascript">
function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open("<?php echo base_url();?>assets/kcfinder/browse.php?type=files&dir=files/public", 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}
    </script>
    </body>

    </html>
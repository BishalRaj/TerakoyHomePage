</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Soragh <?php echo getLastDate('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

<script src="<?php echo base_url('js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('js/jquery.dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('js/jquery-ui.min.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('js/fontawesome.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('js/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>


<script src="<?php echo base_url('js/datatable.srg.js');?>"></script>
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
</div>
<footer class="footer-area">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg single-footer-widget">
                <h5 class="" style="color: lightgray;"><span style="color:crimson;">Copyright &copy; 2024</span> by Muhammad Rohman Syah</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="text-decoration-none" href="#">syahr642@gmail.com</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="text-decoration-none" href="#">(+62) 899-7785-724</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="text-decoration-none" href="<?= base_url('auth'); ?>">Halaman Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg single-footer-sosial pt-2 my-auto text-right">
                <a class="text-decoration-none mx-2" target="_blank" href="https://github.com/rohmansyah23"><i class="fab fa-2x fa-github"></i></a>
                <a class="text-decoration-none mx-2" target="_blank" href="https://www.instagram.com/roman.syahr/?ighs=NWtleXp3MTFzcWd5"><i class="fab fa-2x fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<a class="scroll-to-top rounded" href="#page-top">
	  <i class="fas fa-angle-up"></i>
	</a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/user/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.alert').alert().delay(3000).slideUp('slow');
    });
</script>
<script>
    function toggleNav() {
        var target = document.querySelector("#navbarNavAltMarkup");
        var button = document.querySelector(".navbar-toggler");
        
        if (target.classList.contains("show")) {
            target.classList.remove("show");
            button.setAttribute("aria-expanded", "false");
        } else {
            target.classList.add("show");
            button.setAttribute("aria-expanded", "true");
        }
    }
</script>
</body>
</html>

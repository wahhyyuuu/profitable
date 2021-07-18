<?= $this->extend('member/layout') ?>
<?= $this->section('member'); ?>
                        <br>
                        <h5 class="ml-5">Status
                            <input type="radio" name="jk" class="mr-2" value="laki-laki" checked />Berlangsung
                            <input type="radio" name="jk" class="mr-2" value="perempuan" />Selesai
                            <input type="radio" name="jk" class="mr-2" value="perempuan" />Semua
                        </h5>
                        <div class="feature-text">
                        <center>
                        <img src="<?= base_url(); ?>/home/img/mb.png" alt="Image" style="width: 730px;" class="mt-5">
                        </center>
                        </div>
                        <div class="feature-text">
                            <h6 class="text-center"><font color="#00008B">Hi Albert</font>, Saat ini kamu belum punya investasi aktif di provesty.</h6>
                            <h6 class="text-center"><font color="#6495ED">Yuk mulai sekarang!</font></h6>
                            <center>
                            <a href="<?= base_url(); ?>" class="box7 mt-5">Pelajari Investasi</a>
                            <a href="<?= base_url(); ?>" class="box7 mt-5">Mulai Investasi</a>
                            </center>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/tempusdominus/js/moment.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url(); ?>/home/js/main.js"></script>
</body>
</html>
<?= $this->endSection(); ?>

<!--================ start footer Area  =================-->	
<footer class="footer-area mt-3">
   <div class="container">
      <div class="row f_widgets_inner">
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget ab_widgets">
               <div class="f_title">
                  <h3>Portal Kesehatan PawsCare</h3>
               </div>
               <p>Portal ini mencakup tentang Informasi</p> Anabul & Anubis, Penyakit dan solusi, tips &  trik, pemetaan lokasi dan fakta seru.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                  <div class="f_title">
                  <h3>Tautan Langsung</h3>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <h5 style="color: white">Kategori</h5>
                        <ul class="list mt-3">
                           <?php foreach($category as $c) : ?>
                              <li><a href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->category_name ?></a></li>
                           <?php endforeach ?>
                        </ul>
                     </div>
                     <div class="col-6">
                        <h5 style="color: white">Lainnya</h5>
                        <ul class="list mt-3">
                              <li><a href="<?= base_url('home') ?>">Beranda</a></li>
                              <li><a href="<?= base_url('tentang') ?>">Tentang Kami</a></li>
                              <li><a href="<?= base_url('tanya') ?>">Tanya Kami</a></li>
                              <li><a href="<?= base_url('klinik') ?>">Lokasi Klinik</a></li>
                        </ul>
                     </div>                              
                  </div>                     
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
               <div class="f_title">
                  <h3>Latar Belakang</h3>
               </div>
               <div class="row">
                  
                  <div class="container-fluid">
                     <p>Perkembangan dan kemajuan teknologi ini mampu memberikan berbagai kemudahan,</p> salah satunya pada bidang teknologi informasi. Teknologi informasi dapat dimanfaatkan untuk pembuatan sistem informasi misalnya portal kesehatan.</p>
                  </div>                              
               </div>                     
            </div>
         </div>
      </div>
      <div class="row footer-bottom d-flex justify-content-between align-items-center">
         <div class="col-lg-12">
            <div class="f_boder"></div>
         <p class="footer text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           &copy; 2024 PawsCare | <?php echo date('l, d-m-Y'); ?> </p>
         </div>

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
         </div>
      </div>
   </footer>
   <!--================ End footer Area  =================-->

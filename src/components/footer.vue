<template>
  <section class="section pb-lg-0 pb-0" id="contact">
    <div class="overlay-container">
      <img src="/public/images/bg-cover 2.png" alt="" class="">
      <div class="overlay-background"></div>
      <div class="overlay-text">
        <h1 class="mb-4">Lamajang Connect</h1>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-3">
            <img :src="'../images/Logo.png'" alt="" height="100">
          </div>
          <p>Lamajang Connect adalah solusi yang inovatif dan berkelanjutan untuk mempromosikan budaya dan warisan
            tradisional Desa Lamajang.</p>
        </div>
        <div class="col-lg-4">
          <div class="footer-list">
            <p class="text-black mb-3">Link</p>
            <ul class="list-unstyled footer-list">
              <li>
                <router-link :to="{name: 'budaya'}">
                  Budaya
                </router-link>
              </li>
              <li>
                <router-link :to="{name: 'pariwisata'}">
                  Pariwisata
                </router-link>
              </li>
              <li>
                <router-link :to="{name: 'penginapan'}">
                  Penginapan
                </router-link>
              </li>
              <li>
                <router-link :to="{name: 'about-us'}">
                  Tentang Kami
                </router-link>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-list">
            <p class="text-black mb-3">Hubungi Kami</p>
            <ul class="list-unstyled footer-list">
              <li><a href="#">0888-7777-6666</a></li>
              <li><a href="#">lamajangconnect@gmail.com</a></li>
              <li><a href="#">
                  Jl. Dr. Setiabudi No.193, Gegerkalong, Kec. Sukasari,
                  Kota Bandung, Jawa Barat 40153
              </a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container-fluid end -->
  </footer>
  <!-- footer end -->

  <div class="footer-alt py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <p class="mb-0">2024 © Lamajang Connect. Design by <a href="" class="text-white">C624-PS052</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'footer'
}
</script>
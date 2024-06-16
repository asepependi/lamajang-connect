<template>
  <Topbar />
  <section class="section" id="pariwisata" style="padding-top: 150px;">
    <div class="search-container row justify-content-center mb-4">
      <input type="text" id="search" placeholder="Cari sesuatu...">
      <button type="button" id="search-button">Cari</button>
    </div>
    <div class="container-fluid bg-white">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="title text-center mb-4">
            <h1>Pariwisata</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
            <router-link :to="{name: 'pariwisata-detail', params:{id:'2'}}">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="overlay-content">
                  <h5 class="font-16 m-0">Kebun Teh</h5>
                </div>
              </div>
            </router-link>
            </a>
          </div>

        </div>
        <div class="col-lg-4 col-md-6">
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                
                <div class="overlay-content">
                  <h5 class="font-16 m-0">Kebun Teh</h5>
                </div>
              </div>
            </a>
          </div>

        </div>

        <div class="col-lg-4 col-md-6">
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                
                <div class="overlay-content">
                  <h5 class="font-16 m-0">Kebun Teh</h5>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                
                <div class="overlay-content">
                  <h5 class="font-16 m-0">Kebun Teh</h5>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                
                <div class="overlay-content">
                  <h5 class="font-16 m-0">Kebun Teh</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                
                <div class="overlay-content">
                  <h5 class="font-16 m-0">Kebun Teh</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- row end -->


    </div>
    <!-- container-fluid end -->
  </section>
  <Footer />
</template>
<script>
  import Topbar from '@/components/topbar.vue';
  import Footer from '@/components/footer.vue';
  export default {
    name: 'pariwisata',
    components: {
      Topbar,
      Footer
    },
  }
</script>
<template>
  <Topbar />
  <section class="section" id="penginapan">
            <div class="search-container row justify-content-center mb-4">
                <input type="text" id="search" placeholder="Cari sesuatu...">
                <button type="button" id="search-button" >Cari</button>
            </div>
            <div class="container-fluid ">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="title text-center mb-4">
                            <h1 >Penginapan</h1>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-4 col-md-6">
                        <div class="penginapan-box text-center card ">
                            <router-link :to="{name: 'penginapan-detail', params:{id:'2'}}" class="text-dark">
                                <div class="position-relative penginapan-content">
                                    <div class="penginapan-img">
                                        <img :src="'images/penginapan/penginapan-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <!-- <div class="penginapan-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-black"></i>
                                        </div>
                                    </div> -->
                                    <div class="overlay-content">
                                        <h5 class="font-16 m-0">Home Stay</h5>
                                    </div>
                                </div>
                            </router-link>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="penginapan-box text-center card ">
                            <a href="#" class="text-dark">
                                <div class="position-relative penginapan-content">
                                    <div class="penginapan-img">
                                        <img :src="'images/penginapan/penginapan-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <!-- <div class="penginapan-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-black"></i>
                                        </div>
                                    </div> -->
                                    <div class="overlay-content">
                                        <h5 class="font-16 m-0">Home Stay</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="penginapan-box text-center card ">
                            <a href="#" class="text-dark">
                                <div class="position-relative penginapan-content">
                                    <div class="penginapan-img">
                                        <img :src="'images/penginapan/penginapan-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <!-- <div class="penginapan-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-black"></i>
                                        </div>
                                    </div> -->
                                    <div class="overlay-content">
                                        <h5 class="font-16 m-0">Home Stay</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="penginapan-box text-center card ">
                            <a href="#" class="text-dark">
                                <div class="position-relative penginapan-content">
                                    <div class="penginapan-img">
                                        <img :src="'images/penginapan/penginapan-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <!-- <div class="penginapan-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-black"></i>
                                        </div>
                                    </div> -->
                                    <div class="overlay-content">
                                        <h5 class="font-16 m-0">Home Stay</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="penginapan-box text-center card ">
                            <a href="#" class="text-dark">
                                <div class="position-relative penginapan-content">
                                    <div class="penginapan-img">
                                        <img :src="'images/penginapan/penginapan-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <!-- <div class="penginapan-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-black"></i>
                                        </div>
                                    </div> -->
                                    <div class="overlay-content">
                                        <h5 class="font-16 m-0">Home Stay</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="penginapan-box text-center card ">
                            <a href="#" class="text-dark">
                                <div class="position-relative penginapan-content">
                                    <div class="penginapan-img">
                                        <img :src="'images/penginapan/penginapan-1.jpg'" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <!-- <div class="penginapan-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-black"></i>
                                        </div>
                                    </div> -->
                                    <div class="overlay-content">
                                        <h5 class="font-16 m-0">Home Stay</h5>
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
    name: 'penginapan',
    components: {
      Topbar,
      Footer
    },
  }
</script>
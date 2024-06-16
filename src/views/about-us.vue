<template>
  <Topbar/>
  <section class="section" style="padding-top: 150px;">
    <div class="bg-overlay"></div>
    
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="features-img">
                    <img :src="'images/Logo.png'" alt="" class="img-fluid-about mx-auto d-block">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <h2 class="mb-3 pl-3 title-about">Lamajang Connect</h2>
                <div class="item testi-box" style="background-color: #033D44;">
                    <div class="card bg-default" style="background-color: #033D44; color: white;">
                        <div class="card-body">
                            <p class="mb-5">
                                Lamajang Connect adalah solusi yang inovatif dan berkelanjutan untuk mempromosikan budaya dan warisan tradisional Desa Lamajang. Dengan aplikasi ini, kami bertujuan untuk membangun jembatan antara tradisi dan teknologi, serta antara komunitas lokal dan wisatawan, demi melestarikan warisan budaya yang berharga serta meningkatkan kesejahteraan masyarakat desa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container-fluid end -->
  </section>
  <section class="section section-bg-default" style="background-color: #033D44;">
      <div class="container-fluid">
          <div class="row justify-content-start">
              <div class="col-lg-5">
                  <div class="title text-left mb-5 text-white">
                      <h2 class="text-white">Tim Proyek</h2>
                      <h2 class="text-white">Lamajang Connect</h2>
                  </div>
              </div>
          </div>
          <div class="row" >
              <div class="col-lg-4 col-md-6">
                  <div class="demo-box text-center card p-2">
                      <a href="#" class="text-dark">
                          <div class="position-relative demo-content">
                              <div class="demo-img">
                                  <img :src="'images/profile-01.png'" alt="" class="img-fluid mx-auto d-block rounded">
                              </div>
                              <div class="overlay-content">
                                  <h5 class="font-16 m-0">Moch Riyan Putra Suryadi</h5>
                                  <h6>Project Manager</h6>
                              </div>
                          </div>
                          
                      </a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="demo-box text-center card p-2">
                      <a href="#" class="text-dark">
                          <div class="position-relative demo-content">
                              <div class="demo-img">
                                  <img :src="'images/profile-01.png'" alt="" class="img-fluid mx-auto d-block rounded">
                              </div>
                              <div class="overlay-content">
                                  <h5 class="font-16 m-0">Moch Riyan Putra Suryadi</h5>
                                  <h6>Front-End Developer</h6>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="demo-box text-center card p-2">
                      <a href="#" class="text-dark">
                          <div class="position-relative demo-content">
                              <div class="demo-img">
                                  <img :src="'images/profile-01.png'" alt="" class="img-fluid mx-auto d-block rounded">
                              </div>
                              <div class="overlay-content">
                                  <h5 class="font-16 m-0">Moch Riyan Putra Suryadi</h5>
                                  <h6>Back-End Developer</h6>
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
  <Footer/>
</template>
<script>
import Topbar from '@/components/topbar.vue';
import Footer from '@/components/footer.vue';
export default {
  name: 'about-us',
  components: {
    Topbar,
    Footer
  }
}
</script>
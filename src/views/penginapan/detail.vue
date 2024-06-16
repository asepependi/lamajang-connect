<template>
  <Topbar />
  <section class="section " id="detail" >
    <div class="bg-overlay"></div>
    <div class="container-fluid" style="padding-top: 150px;">
        <div class="row align-items-center justify-content-center pt-5 pb-5" style="background-color: #033D44;">
            <div class="col-lg-5">
                <div class="detail-img">
                    <img :src="'../../images/penginapan/penginapan-1.jpg'" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="mt-5 mt-lg-0">
                    <h2 class=" text-white">Villa Cikondang</h2>
                    <h3 class=" text-white">Rp.180.000</h3>
                    <a href=""><button class="btn btn-sm navbar-btn mb-2" style="background-color: #D8EE7B; color: #033D44; ">
                        Pesan
                    </button></a>
                    <p style="font-weight: 300;color: white;">
                        Alamat: Lamajang, Kec. Pangalengan,Kabupaten Bandung,Jawa Barat 40378
                    </p>
                    <p style="font-weight: 300;color: white;">
                        Jam masuk: 14.00 - 12.00 WIB
                    </p>
                    
                    <p style="font-weight: 300;color: white;">Villa adalah istilah yang sering digunakan untuk merujuk kepada sebuah hunian mewah yang berdiri sendiri, biasanya dikelilingi oleh taman atau lahan luas. Villa sering kali memiliki desain arsitektur yang eksklusif dan berbeda dari rumah-rumah lainnya.</p>
                    
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
    name: 'detail',
    components: {
      Topbar,
      Footer
    },
  }
</script> 
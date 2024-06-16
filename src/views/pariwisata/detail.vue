<template>
  <Topbar />
  <section class="section " id="detail" >
    <div class="bg-overlay"></div>
    <div class="container-fluid" style="padding-top: 150px;">
        <div class="row align-items-center justify-content-center pt-5 pb-5" style="background-color: #033D44;">
            <div class="col-lg-5">
                <div class="detail-img">
                    <img :src="'../../images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="mt-5 mt-lg-0">
                    <h2 class=" text-white">Rumah Adat Cikondang</h2>
                    <h3 class=" text-white">Rp.20.000</h3>
                    <a href=""><button class="btn btn-sm navbar-btn mb-2" style="background-color: #D8EE7B; color: #033D44; ">
                        Pesan
                    </button></a>
                    <p style="font-weight: 300;color: white;">
                        Alamat: Lamajang, Kec. Pangalengan,Kabupaten Bandung,Jawa Barat 40378
                    </p>
                    <p style="font-weight: 300;color: white;">
                        Jam buka: 08.00 - 17.00 WIB
                    </p>
                    
                    <p style="font-weight: 300;color: white;">Rumah adat Cikondang adalah rumah tradisional dari masyarakat Sunda di Jawa Barat, Indonesia
                    .Fungsi utama rumah adat Cikondang adalah sebagai tempat tinggal dan pusat kegiatan adat dan budaya masyarakat setempat. 
                    Selain itu, rumah ini juga mencerminkan nilai-nilai kearifan lokal, seperti kebersamaan dan harmoni dengan alam.</p>
                    
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
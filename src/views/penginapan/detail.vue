<template>
  <Topbar />
  <section class="section " id="detail" >
    <div class="bg-overlay"></div>
    <div class="container-fluid" style="padding-top: 150px;">
      <div class="row align-items-center justify-content-center pt-5 pb-5" style="background-color: #033D44;">
        <div class="col-lg-5">
          <div class="detail-img">
            <img :src="data_detail.foto" alt="" class="img-fluid mx-auto d-block">
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mt-5 mt-lg-0">
            <h2 class=" text-white">{{data_detail.nama}}</h2>
            <h3 class=" text-white">{{data_detail.harga}}</h3>
            <a href="https://api.whatsapp.com/send?text=Hallo, Admin Lamajang Connect, Saya Dapat Info dari Website Mengenai Pemesanan Penginapan&source=&phone=+6281220618341" 
              class="btn btn-sm navbar-btn mb-2" style="background-color: #D8EE7B; color: #033D44; " target="_blank">
              Pesan
            </a>
            <p style="font-weight: 300;color: white;">
              {{data_detail.alamat}}
            </p>
            <p style="font-weight: 300;color: white;">
              Jam masuk: {{data_detail.jam_masuk_keluar}} WIB
            </p>
            <p style="font-weight: 300;color: white;">
              {{data_detail.deskripsi}}
            </p>
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
  import MasterData from '@/services/MasterData.service';
  import Topbar from '@/components/topbar.vue';
  import Footer from '@/components/footer.vue';
  export default {
    name: 'detail',
    components: {
      Topbar,
      Footer
    },
    data() {
      return {
        id: this.$route.params.id,
        data_detail: {}
      }
    },
    methods: {
      getData(){
        MasterData.penginapanDetail(this.id).then((res) => {
          if (res.data.status) {
            this.data_detail = res.data.data
          }
        })
      }
    },
    mounted(){
      this.getData()
    }
  }
</script> 
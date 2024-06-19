<template>
    <Topbar />
    <section class="section " id="budaya">
        <div class="bg-overlay"></div>
        <div class="container-fluid" style="padding-top: 150px;">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="title text-center mb-5">
                        <h1>Budaya</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center"
                style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="col-lg-5">
                    <div class="budaya-img">
                        <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="mt-5 mt-lg-0">
                        <h2 class="mb-3">Kesenian</h2>
                        <p style="font-weight: 500;color: #033D44;">Lamajang Connect adalah solusi yang inovatif dan
                            berkelanjutan untuk mempromosikan budaya dan warisan tradisional Desa Lamajang. Dengan
                            aplikasi ini, kami bertujuan untuk membangun jembatan antara tradisi dan teknologi, serta
                            antara komunitas lokal dan wisatawan, demi melestarikan warisan budaya yang berharga serta
                            meningkatkan kesejahteraan masyarakat desa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center pt-5 mt-5"
                style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="col-lg-5">
                    <div>
                        <h2 class="mb-3">Ritual Adat</h2>
                        <p style="font-weight: 500;color: #033D44;">Lamajang Connect adalah solusi yang inovatif dan
                            berkelanjutan untuk mempromosikan budaya dan warisan tradisional Desa Lamajang. Dengan
                            aplikasi ini, kami bertujuan untuk membangun jembatan antara tradisi dan teknologi, serta
                            antara komunitas lokal dan wisatawan, demi melestarikan warisan budaya yang berharga serta
                            meningkatkan kesejahteraan masyarakat desa.</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="budaya-img mt-5 mt-lg-0">
                        <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center pt-5 mt-5"
                style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="col-lg-5">
                    <div class="budaya-img">
                        <img :src="'images/pariwisata/pariwisata-1.jpg'" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="mt-5 mt-lg-0">
                        <h2 class="mb-3">Makanan</h2>
                        <p style="font-weight: 500;color: #033D44;">Lamajang Connect adalah solusi yang inovatif dan
                            berkelanjutan untuk mempromosikan budaya dan warisan tradisional Desa Lamajang. Dengan
                            aplikasi ini, kami bertujuan untuk membangun jembatan antara tradisi dan teknologi, serta
                            antara komunitas lokal dan wisatawan, demi melestarikan warisan budaya yang berharga serta
                            meningkatkan kesejahteraan masyarakat desa.</p>
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
        name: 'budaya',
        components: {
            Topbar,
            Footer
        },
        data() {
            return {
                listData: {}
            }
        },
        methods: {
            getData(page = 1) {
                MasterData.budaya(
                    `?page=${page}`
                ).then((res) => {
                    this.listData = res.data.data
                })
            }
        },
        mounted() {
            this.getData()
        }
    }
</script>
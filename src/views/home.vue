<template>
  <Topbar />
  <section class="bg-home bg-gradient" id="home">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5">
          <div class="home-title text-white">
            <div class="hero-text">
              <h1 class="text-white mb-4">Selamat Datang Di <br> Lamajang Connect mitra terpercaya Anda dalam menemukan
                keindahan.</h1>
              <p>Nikmati Liburan Anda di desa wisata Lamajang</p>
              <a href="#">
                <button>Ayo Mulai</button>
              </a>
              <a href="#">
                <button>Pelayanan</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="home-img mt-0 mt-lg-0">
            <img :src="'images/profile-01.png'" alt="" class="img-fluid mx-auto d-block">
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container-fluid end -->
  </section>
  <!-- home start -->

  <!-- section tengah start -->

  <section>
    <div class="row">
      <div class="column">
        <img d alt="Bersama Memperbaiki" />
      </div>
      <div class="column">
        <div class="container-card">
          <h2>Lamajang Connect</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
          <button class="button" href="#">Baca Selengkapnya</button>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="column">
        <div class="container-card">
          <h2>Wisata Desa Lamajang</h2>
          <p>
            Terdapat Banyak budaya yang ada di desa wisata
            Lamajang dari mulai makanan sampai adat istiadat.
          </p>
          <div class="blos">
            <div class="blis">
              <h2>1xxx+</h2>
              <p>Makanan</p>
            </div>
            <div class="blis">
              <h2>1xxx+</h2>
              <p>Adat Istiadat</p>
            </div>
          </div>
          <button class="button" href="#">Baca Selengkapnya</button>
        </div>
      </div>
      <div class="column">
        <img d alt="Bersama Memperbaiki" />
      </div>
    </div>
  </section>

  <!-- section tengah start end -->

  <!-- section slider pariwisata -->
  <section class="slider-pariwisata">
    <div class="container-pariwisata">
      <h1>Pariwisata</h1>

      <div class="wrapper">
        <i id="left" class="fa-solid  fas fa-angle-left"></i>
        <ul class="carousel">

          <!-- 1 -->
          <div class="pariwisata-box card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'https://main.mobile.doss.co.id/storage/uploads/2022/12/landscape-photography-tips-4.webp'"
                    alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>Rumah Adat Cikondang</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </a>
          </div>

          <!-- 2 -->
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'https://www.wiranurmansyah.com/wp-content/uploads/2009/02/best_001.jpg'" alt=""
                    class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>Kebun Teh</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </a>
          </div>
          <!-- 3 -->

          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'https://jagofoto.com/uploads/_rbcxo9au-u.jpg'" alt=""
                    class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>Rumah Adat Cikondang</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </a>
          </div>

          <!-- 4 -->
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="pariwisata-img">
                  <img :src="'images/pohon.png'" alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>Rumah Adat Cikondang</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </a>
          </div>


        </ul>
        <i id="right" class="fa-solid fas fa-angle-right"></i>
      </div>
      <button>
        <span>Lihat Selengkapnya</span>
        <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
          <path
            d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
            fill="black"></path>
        </svg>
      </button>
    </div>

  </section>



  <!-- section end slider pariwisata -->

  <!-- section penginapan -->
  <section class="slider-penginapan">
    <div class="container-penginapan">
      <h1>Penginapan</h1>

      <div class="penginapan-wrapper">
        <i id="left" class="fa-solid  fas fa-angle-left"></i>
        <ul class="penginapan-carousel">

          <!-- 1 -->
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="penginapan-img">
                  <img :src="'https://rakyatbenteng.disway.id/upload/76c9300a2c88e0f798ceccb244e7b4d7.jpg'" alt=""
                    class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>Rumah Adat Cikondang</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </a>
          </div>


          <!-- 2 -->
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="penginapan-img">
                  <img
                    :src="'https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/05/10/air-terjun-tumpak-sewu-lumajang-3380798728.jpeg'"
                    alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>Rumah Adat Cikondang</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </a>
          </div>
          <!-- 3 -->
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="penginapan-img">
                  <img
                    :src="'https://asset-2.tstatic.net/tribunjatimtravel/foto/bank/images/gunung-semeru-di-pronojiwo-kabupaten-lumajang.jpg'"
                    alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>Rumah Adat Cikondang</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </a>
          </div>
          <!-- 4 -->
          <div class="pariwisata-box text-center card ">
            <a href="#" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="penginapan-img">
                  <img
                    :src="'https://www.oyorooms.com/travel-guide/id/wp-content/uploads/sites/6/2022/11/6-Destinasi-Alam-Lumajang-Paling-Aesthetic.jpg'"
                    alt="" class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>Rumah Adat Cikondang</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </a>
          </div>

        </ul>
        <i id="right" class="fa-solid fas fa-angle-right"></i>
      </div>

      <div class="center-button">
        <button>
          <span>Lihat Selengkapnya</span>
          <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
            <path
              d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
              fill="black"></path>
          </svg>
        </button>
      </div>
    </div>

  </section>

  <!-- section slider end penginapan -->

  <!-- section kelompok 23 -->
  <section class="slider-kelompok">
    <div class="container-kelompok">
      <h1>Tim Proyek</h1>
      <h1> Lamajang Connect</h1>
      <div class="card-gridh">
        <!-- 1 -->
        <div class="card-client">
          <div class="user-picture">
            <img
              :src="'https://media.licdn.com/dms/image/D5603AQE1rZhA_84GWA/profile-displayphoto-shrink_400_400/0/1718259626060?e=1723680000&v=beta&t=M3q9Bpb3sNx1ocfmYsIoPqOKUBPPOk2HHdRxwGUl_P0'"
              alt="" class="img-fluid mx-auto d-block rounded">
          </div>
          <p class="name-client"> Asep Ependi
            <span>Project Manager
            </span>
          </p>
          <div class="social-media">
            <a href="#">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                </path>
              </svg>
              <span class="tooltip-social">LinkedIn</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                </path>
              </svg>
              <span class="tooltip-social">Instagram</span>
            </a>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
              </svg>
              <span class="tooltip-social">Facebook</span>
            </a>

          </div>
        </div>

        <!-- 2 -->
        <div class="card-client">
          <div class="user-picture">
            <img
              :src="'https://media.licdn.com/dms/image/D5603AQE1rZhA_84GWA/profile-displayphoto-shrink_400_400/0/1718259626060?e=1723680000&v=beta&t=M3q9Bpb3sNx1ocfmYsIoPqOKUBPPOk2HHdRxwGUl_P0'"
              alt="" class="img-fluid mx-auto d-block rounded">
          </div>
          <p class="name-client"> Armandsyah Yudhiana
            <span>Frontend Developer
            </span>
          </p>
          <div class="social-media">
            <a href="#">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                </path>
              </svg>
              <span class="tooltip-social">LinkedIn</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                </path>
              </svg>
              <span class="tooltip-social">Instagram</span>
            </a>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
              </svg>
              <span class="tooltip-social">Facebook</span>
            </a>

          </div>
        </div>

        <!-- 3 -->
        <div class="card-client">
          <div class="user-picture">
            <img
              :src="'https://media.licdn.com/dms/image/D5603AQE1rZhA_84GWA/profile-displayphoto-shrink_400_400/0/1718259626060?e=1723680000&v=beta&t=M3q9Bpb3sNx1ocfmYsIoPqOKUBPPOk2HHdRxwGUl_P0'"
              alt="" class="img-fluid mx-auto d-block rounded">
          </div>
          <p class="name-client"> Moch Riyan Putra Suryadi
            <span>Backend Developer
            </span>
          </p>
          <div class="social-media">
            <a href="#">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                </path>
              </svg>
              <span class="tooltip-social">LinkedIn</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                </path>
              </svg>
              <span class="tooltip-social">Instagram</span>
            </a>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
              </svg>
              <span class="tooltip-social">Facebook</span>
            </a>

          </div>
        </div>
        <!-- 4 -->

      </div>
    </div>
  </section>
  <Footer />
</template>
<script>
  import Topbar from '@/components/topbar.vue';
  import Footer from '@/components/footer.vue';
  import { slidePariwisata, slidePenginapan } from '../../public/js/slider.js';
  export default {
    name: 'home',
    components: {
      Topbar,
      Footer
    },
    mounted(){
      slidePariwisata();
      slidePenginapan();
    }
  }
</script>
<style scoped>
@import url('../../public/css/boxcard.css');
</style>
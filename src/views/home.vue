<template>
  <Topbar />
  <section class="bg-home" id="home" style="padding-top: 150px;background-color: #033D44;padding-bottom: 0px;">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-5">
        <div class="home-title text-white ">
          <div class="hero-text">
            <h1 class="text-white" style="font-size: 40px;">Selamat Datang Di <br> <span style="color: #FCA203;">Lamajang Connect</span> mitra terpercaya Anda dalam menemukan keindahan.</h1>
            <p style="font-size: 20px;">Nikmati Liburan Anda di desa wisata Lamajang</p>
            <a href="#budaya" class="btn btn-sm mr-3" style="background-color: #D8EE7B; color: #033D44;">
                AYO MULAI
            </a>
            <a href="#penginapan">
              <button class="btn btn-sm mr-3" style="background-color: #033D44; border-color: #D8EE7B;">
                LAYANAN
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-5 d-flex justify-content-center" style="top: 30px;">
        <div class="home-img d-flex " style="width: 300px; height: 300px; border-radius: 50%; background-color: white;">
          <div class="user-picture">
            <img
              src="/public/images/Logo.png"
              alt="" class="img-fluid mx-auto d-block rounded">
          </div>
        </div>
      </div>
    </div>
    <!-- row end -->
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L24,192C48,160,96,96,144,90.7C192,85,240,139,288,154.7C336,171,384,149,432,122.7C480,96,528,64,576,64C624,64,672,96,720,117.3C768,139,816,149,864,133.3C912,117,960,75,1008,74.7C1056,75,1104,117,1152,149.3C1200,181,1248,203,1296,186.7C1344,171,1392,117,1416,90.7L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
  <!-- container-fluid end -->
</section>

<!-- home start -->
  <!-- section tengah start -->
  <section id="budaya" style="padding-top: 30px;">
    <div class="container-fluid" style="padding-top: 50px; padding-bottom: 40px;">
        <template v-for="item in listBudaya.data" :key="item">
          <div class="row align-items-center justify-content-center" style="background-color: rgba(245, 245, 245, 0.9);">
              <div class="col-lg-5">
                  <div class="budaya-img">
                      <img :src="item.foto" alt="" class="img-fluid mx-auto d-block">
                  </div>
              </div>
              <div class="col-lg-5 offset-lg-1">
                  <div class="mt-5 mt-lg-0">
                      <h1 class="mb-3">{{item.nama}}</h1>
                      <p style="font-weight: 500;color: #033D44;">
                        {{item.deskripsi}}
                      </p>
                      <a :href="'/budaya'">
                        <button class="btn btn-sm mr-3 mb-2" style="background-color: #D8EE7B; color: #033D44;">
                          LIHAT SELENGKAPNYA
                        </button>
                    </a>
                  </div>
              </div>
          </div>
          <!-- <div class="row align-items-center justify-content-center pt-5 mt-5" style="background-color: rgba(245, 245, 245, 0.9);">
              <div class="col-lg-5">
                  <div>
                      <h1 class="mb-3">Budaya di Desa Wisata Lamajang</h1>
                      <p style="font-weight: 500;color: #033D44;">Terdapat Banyak budaya yang ada di desa wisata 
                        Lamajang dari mulai makanan sampai adat istiadat.</p>
                        <a href="/budaya">
                        <button class="btn btn-sm mr-3" style="background-color: #D8EE7B; color: #033D44;">
                          LIHAT SELENGKAPNYA
                        </button>
                    </a>
                  </div>
              </div>
              <div class="col-lg-5 offset-lg-1">
                  <div class="budaya-img mt-5 mt-lg-0">
                      <img :src="item.foto" alt="" class="img-fluid mx-auto d-block">
                  </div>
              </div>
          </div> -->
        </template>
        <!-- row end -->
    </div>
  <!-- section tengah start end -->
  </section>
  <!-- section pariwisata -->
  <section class="slider-penginapan" style="background-color: #033D44;">
    <div class="container-penginapan">
      <h1 class="text-center text-white">Pariwisata</h1>
      <div class="penginapan-wrapper">
        <ul class="penginapan-carousel">
          <div class="pariwisata-box text-center card " style="background-color: white;"
            v-for="item in pariwisata.data" :key="item">
            <router-link :to="{name: 'pariwisata-detail', params:{id:item.id}}" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="penginapan-img">
                  <img :src="item.foto" alt=""
                    class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>{{item.nama}}</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </router-link>
          </div>
        </ul>
      </div>

      <div class="center-button">
        <a href="/pariwisata">
          <button style="background-color: white; color: #033D44;">
          <span>Lihat Selengkapnya</span>
          <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="37" cy="37" r="35.5" stroke="#033D44" stroke-width="3"></circle>
            <path
              d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
              fill="#033D44"></path>
          </svg>
        </button>
        </a>
      </div>
    </div>

  </section>

  <!-- section slider end penginapan -->

  <!-- section penginapan -->
  <section class="slider-penginapan" id="penginapan" style="padding-top: 30px;">
    <div class="container-penginapan">
      <h1>Penginapan</h1>

      <div class="penginapan-wrapper">
        <i id="left" class="fa-solid  fas fa-angle-left" style="z-index: 0;"></i>
        <ul class="penginapan-carousel">
          <div class="pariwisata-box text-center card " style="background-color: #033D44;"
          v-for="item in penginapan.data" :key="item">
            <router-link :to="{name: 'penginapan-detail', params:{id:item.id}}" class="text-dark">
              <div class="position-relative pariwisata-content">
                <div class="penginapan-img">
                  <img :src="item.foto" alt=""
                    class="img-fluid mx-auto d-block rounded">
                </div>
                <div class="pariwisata-overlay"></div>
                <div class="overlay-content">
                  <h5>{{item.nama}}</h5>
                  <button style="border-radius: 10px;">
                    <span>Pilih Wisata</span>
                  </button>
                </div>
              </div>
            </router-link>
          </div>
        </ul>
        <i id="right" class="fa-solid fas fa-angle-right" style="z-index: 0;"></i>
      </div>

      <div class="center-button">
        <a href="/penginapan">
          <button style="background-color: #033D44; color: white;">
          <span>Lihat Selengkapnya</span>
          <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
            <path
              d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
              fill="white"></path>
          </svg>
        </button>
      
        </a>
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
        <div class="card-client" style="background-color: #D8EE7B; color: #033D44;">
          <div class="user-picture">
            <img
              :src="'/images/profile-02.png'"
              alt="" class="img-fluid mx-auto d-block rounded">
          </div>
          <p class="name-client"> Asep Ependi
            <span>Project Manager
            </span>
          </p>
          <div class="social-media">
            <a href="https://www.linkedin.com/in/asep-ependi/">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                </path>
              </svg>
              <!-- <span class="tooltip-social">LinkedIn</span> -->
            </a>
            <a href="https://www.instagram.com/asef_ependi/">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                </path>
              </svg>
              <!-- <span class="tooltip-social">Instagram</span> -->
            </a>
            <a href="https://github.com/asepependi">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
              </svg>
              <!-- <span class="tooltip-social">Facebook</span> -->
            </a>

          </div>
        </div>

        <!-- 2 -->
        <div class="card-client" style="background-color: #D8EE7B; color: #033D44;" >
          <div class="user-picture">
            <img
              :src="'/images/profile-03.png'"
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
              <!-- <span class="tooltip-social">LinkedIn</span> -->
            </a>
            <a href="#">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                </path>
              </svg>
              <!-- <span class="tooltip-social">Instagram</span> -->
            </a>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
              </svg>
              <!-- <span class="tooltip-social">Facebook</span> -->
            </a>

          </div>
        </div>

        <!-- 3 -->
        <div class="card-client" style="background-color: #D8EE7B; color: #033D44;">
          <div class="user-picture">
            <img
              src="/public/images/profile-01.png"
              alt="" class="img-fluid mx-auto d-block rounded">
          </div>
          <p class="name-client"> Moch Riyan Putra Suryadi
            <span>Backend Developer
            </span>
          </p>
          <div class="social-media">
            <a href="https://www.linkedin.com/in/mochriyanputrasuryadi/">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                </path>
              </svg>
              <!-- <span class="tooltip-social">LinkedIn</span> -->
            </a>
            <a href="https://www.instagram.com/rynputra_10/">
              <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                </path>
              </svg>
              <!-- <span class="tooltip-social">Instagram</span> -->
            </a>
            <a href="https://github.com/riyanslr10/">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
              </svg>
              <!-- <span class="tooltip-social">Github</span> -->
            </a>

          </div>
        </div>
      </div>
    </div>
  </section>
  <Footer />
</template>
<script>
  import Home from '@/services/Home.service';
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
    },
    data(){
      return{
        listBudaya: {},
        pariwisata: {},
        penginapan: {}
      }
    },
    methods: {
      dataBudaya(){
        Home.budaya().then((res) => {
          if (res.data.status) {
            this.listBudaya = res.data.data
          }
        })
      },
      dataPariwisata(){
        Home.pariwisata().then((res) => {
          if (res.data.status) {
            this.pariwisata = res.data.data
          }
        })
      },
      dataPenginapan(){
        Home.penginapan().then((res) => {
          if (res.data.status) {
            this.penginapan = res.data.data
          }
        })
      }
    },
    mounted(){
      this.dataBudaya()
      this.dataPariwisata()
      this.dataPenginapan()
    }
  }
</script>
<style scoped>
@import url('../../public/css/boxcard.css');
</style>
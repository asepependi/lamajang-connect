<template>
  <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" style="background-color: #033D44;">
    <div class="container-fluid">
      <router-link :to="{name: 'home'}" class="logo text-uppercase">
        <img src="/public/images/Logo.png" alt="" class="logo-light" height="60" />
        <img src="/public/images/Logo.png" alt="" class="logo-dark" height="60" />
      </router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="mdi mdi-menu"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
          <li class="nav-item active">
            <router-link :to="{name: 'budaya'}" class="nav-link">
              Budaya
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{name: 'pariwisata'}" class="nav-link">
              Pariwisata
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{name: 'penginapan'}" class="nav-link">
              Penginapan
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{name: 'about-us'}" class="nav-link">
              Tentang Kami
            </router-link>
          </li>
        </ul>
        <a :href="url_app" class="btn btn-sm btn-rounded navbar-btn" style="background-color: #D8EE7B; color: #033D44; ">
          Masuk
        </a>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  name: 'topbar',
  data(){
    return {
      url_app: import.meta.env.VITE_APP_URL+'login'
    }
  }
}
</script>
<template>
  <div class="LoginV1">
    <img class="BgCover1" :src="'images/bg-cover 2.png'" alt="Background Cover" />
    <div class="Rectangle28"></div>
    <div class="Rectangle27"></div>
    <a href="masuk.html">
      <div class="Group20">
        <div class="Rectangle3"></div>
        <div class="Masuk">DAFTAR</div>
      </div>
    </a>
    <div class="Login">Daftar</div>
    <div class="Username">Nama</div>
    <div>
      <input type="text" id="name" class="Rectangle651">
    </div>
    <div>
      <input type="password" id="password" class="Rectangle646">
    </div>
    <div class="Password">Kata Sandi</div>
    <a href="masuk.html">
      <div class="AccountLink">
        <span>Tidak punya akun ? </span><span class="Highlight">Masuk disini</span>
      </div>
    </a>
  </div>
</template>
<script>
  export default {
    name: 'register'
  }
</script>
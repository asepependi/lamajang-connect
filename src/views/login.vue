<template>
  <div class="LoginV1">
    <img class="BgCover1" :src="'images/bg-cover 2.png'" alt="Background Cover" />
    <div class="Rectangle28"></div>
    <div class="Rectangle27"></div>
    <a href="pariwisata.html">
      <div class="Group20">
        <div class="Rectangle3"></div>
        <div class="Masuk">MASUK</div>
      </div>
    </a>
    <div class="Login">Masuk</div>
    <div class="Username">Nama</div>
    <div>
      <input type="text" id="name" class="Rectangle651">
    </div>
    <div>
      <input type="password" id="password" class="Rectangle646">
    </div>
    <div class="Password">Kata Sandi</div>
    <a href="daftar.html">
      <div class="AccountLink">
        <span>Tidak punya akun ? </span><span class="Highlight">Daftar disini</span>
      </div>
    </a>
  </div>
</template>
<script>
  export default {
    name: 'login'
  }
</script>
<style scoped>
  .LoginV1 {
    width: auto;
    height: 775px;
    position: relative;
    background: white;
    border-radius: 2px;
    overflow: hidden;
  }

  .BgCover1 {
    width: auto;
    height: 775px;
    left: 0;
    top: 0;
    position: absolute;
  }

  .Rectangle28 {
    width: 1600px;
    height: 806px;
    left: 0;
    top: 0;
    position: absolute;
    background: rgba(3, 61, 68, 0.80);
  }

  .Rectangle27 {
    width: 870px;
    height: 477px;
    left: 385px;
    top: 165px;
    position: absolute;
    background: #033D44;
    border-radius: 30px;
  }

  .Group20 {
    width: 251px;
    height: 65px;
    left: 694px;
    top: 518px;
    position: absolute;
  }

  .Rectangle3 {
    width: 251px;
    height: 65px;
    left: 0;
    top: 0;
    position: absolute;
    background: #D8EE7B;
    border-radius: 10px;
  }

  .Masuk {
    width: 119px;
    left: 65px;
    top: 15px;
    position: absolute;
    text-align: center;
    color: #283618;
    font-size: 24px;
    font-weight: 700;
    line-height: 36px;
  }

  .Login {
    width: 156px;
    height: 38px;
    left: 742px;
    top: 197px;
    position: absolute;
    text-align: center;
    color: white;
    font-size: 32px;
    font-weight: 600;
    letter-spacing: 1.87px;
  }

  .Username {
    width: 186px;
    height: 31px;
    left: 576px;
    top: 268px;
    position: absolute;
    color: white;
    font-size: 32px;
    font-weight: 600;
    letter-spacing: 1.87px;
  }

  .Rectangle651,
  .Rectangle646 {
    width: 502.27px;
    height: 62px;
    position: absolute;
    background: #F6F6F6;
    border-radius: 20px;
  }

  .Rectangle651 {
    left: 569px;
    top: 308px;
  }

  .Rectangle646 {
    left: 569px;
    top: 423px;
  }

  .Password {
    width: 221px;
    height: 38px;
    left: 576px;
    top: 383px;
    position: absolute;
    color: white;
    font-size: 32px;
    font-weight: 600;
    letter-spacing: 1.87px;
  }

  .AccountLink {
    width: 605px;
    height: 38px;
    left: 518px;
    top: 664px;
    position: absolute;
    color: white;
    font-size: 32px;
    font-weight: 600;
    letter-spacing: 1.87px;
  }

  .Highlight {
    color: #D8EE7B;
  }
</style>
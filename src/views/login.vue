<template>
  <div id="app">
    <div class="loginBox">
      <div class="inner">
        <div class="signIn" v-if="signIn">
          <div class="top">
            <a href="/">
              <img
              class="logo"
              src="/public/images/Logo.png"
            />
            </a>
            
            <div class="title">Masuk</div>
            <div class="subtitle">
              Belum punya akun?
              <span class="subtitle-action" @click="signIn = !signIn">
                Daftar disini
              </span>
            </div>
          </div>
          <form>
            <div class="form">
              <input
                required
                aria-required="true"
                aria-invalid="false"
                aria-label="E-mails"
                type="email"
                pattern="^[\w\.-]+@[\w\.-]+\.\w+$"
                class="w100"
                :class="{ invalid: email.error }"
                ref="email"
                placeholder="Email"
                autofocus
                @blur="validateEmail"
                @keydown="validateEmail"
                v-model="email.value"
              />

              <input
                required
                aria-required="true"
                type="password"
                class="w100"
                :class="{ invalid: password.error }"
                placeholder="Kata Sandi"
                v-model="password.value"
                @blur="validatePassword"
                @keydown="validatePassword"
              />
            </div>

            <input
              type="submit"
              value="Masuk"
              class="action"
              :class="{ 'action-disabled': !loginValid }"
            />
          </form>
        </div>

        <div class="register" v-else>
          <div class="top">
            <a href="/">
              <img
              class="logo"
              src="/public/images/Logo.png"
            />
            </a>
            <div class="title">Daftar</div>
            <div class="subtitle">
              Sudah punya akun?
              <span class="subtitle-action" @click="signIn = !signIn">
                Masuk disini
              </span>
            </div>
          </div>

          <div class="form">

            <input
              type="text"
              class="w100"
              placeholder="Email"
              v-model="email.value"
            />
            <input
              type="password"
              class="w100"
              placeholder="Kata Sandi"
              v-model="password.value"
            />
          </div>

          <button class="action" :class="{ 'action-disabled': !registerValid }">
            DAFTAR
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'login',
  

  data() {
    return {
      emailRegex: /^[\w\.-]+@[\w\.-]+\.\w+$/,
      passwordRegex: /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/,


      password: {
        value: "",
        error: false
      },

      email: {
        value: "",
        error: false
      },

      signIn: true
    };
  },

  methods: {
    validateEmail(event) {
      if (this.email.value == "") this.email.error = true;
      else this.email.error = false;
    },

    validatePassword(event) {
      if (this.password.value == "") this.password.error = true;
      else this.password.error = false;
    }
  },

  mounted() {
    // this.$refs.email.focus();
  },

  computed: {

    emailValid() {
      return this.emailRegex.test(this.email.value);
    },

    passwordValid() {
      return this.password.value.length > 0;
    },

    loginValid() {
      return this.emailValid && this.passwordValid;
    },

    registerValid() {
      return (
        this.emailValid &&
        this.passwordValid 

      );
    }
  }
};
</script>

<!-- Use preprocessors via the lang attribute! e.g. <style lang="scss"> -->
 
<style lang="scss">
@mixin box {
  box-shadow: 1px 1px 2px 1px black;
}

@mixin field {
  border: 1px solid black;
  height: 40px;
  padding: 10px;
  margin-top: 20px;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="text"] {
  @include field;
}

input[type="email"] {
  @include field;
}

input[type="password"] {
  @include field;
}

.invalid {
  border: 2px solid red !important;
  &::placeholder {
    color: red;
  }
}

.errorMessage {
  color: red;
  margin: 10px;
  top: 5px;
}

.w100 {
  width: 100%;
}



.logo {
  width: 300px;
  margin-bottom: 10px;
}

.action {
  height: 40px;
  text-transform: uppercase;
  border-radius: 25px;
  width: 100%;
  border: none;
  cursor: pointer;
  background: green;
  margin-top: 20px;
  color: #fff;
  font-size: 1.2rem;
  @include box;
}

.action-disabled {
  color: #eee;
  background: #aaa;
  cursor: auto;
}

.top {
  display: flex;
  align-items: center;
  flex-direction: column;
  margin-bottom: 10px;
}

.title {
  width: 100%;
  font-size: 1.8rem;
  margin-bottom: 10px;
  text-align: center;
}

.subtitle {
  .subtitle-action {
    color: green;
    font-weight: bold;
    cursor: pointer;
  }
}

html {


  display: flex;
  align-items: center;
  justify-content: center;

  font-family: sans-serif;
}


.loginBox {
  background: #033D44;
  border-radius: 20px;
  max-width: 600px;
  padding: 45px 55px;
  animation: slideInTop 1s;
}

@keyframes slideInTop {
  from {
    opacity: 0;
    transform: translateY(-30%);
  }

  to {
    opacity: 100;
    transform: translateY(0%);
  }
}

@media screen and (min-width: 440px) {
  .loginBox {
    @include box;
  }
}

@media screen and (max-width: 440px) {
  html {
    background: #fff;
    align-items: start;
    justify-content: start;
  }

  .loginBox {
    padding: 25px 25px;
    max-width: 100vw;
  }
}
</style>
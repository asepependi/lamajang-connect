import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import router from './router/index'
import '../public/css/bootstrap.min.css'
import '../public/css/materialdesignicons.min.css'
import '../public/css/pe-icon-7-stroke.css'
import '../public/css/owl.carousel.css'
import '../public/css/owl.theme.css'
import '../public/css/owl.transitions.css'
import '../public/css/style.css'
import '../public/js/jquery.min.js'
import '../public/js/bootstrap.bundle.min.js'
import '../public/js/jquery.easing.min.js'
import '../public/js/scrollspy.min.js'
import '../public/js/owl.carousel.min.js'
import '../public/js/app.js'

const app = createApp(App)
app.use(router)
app.mount('#app')
import axios from "axios"
const API_URL = import.meta.env.VITE_API_URL+'v1/home/'

class Home {
  budaya(){
    return axios.get(API_URL+'budaya')
  }
  pariwisata(){
    return axios.get(API_URL+'pariwisata')
  }
  penginapan(){
    return axios.get(API_URL+'penginapan')
  }
}

export default new Home
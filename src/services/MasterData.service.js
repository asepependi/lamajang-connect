import axios from "axios"
const API_URL = import.meta.env.VITE_API_URL+'v1/'

class MasterData {
  budaya(){
    return axios.get(API_URL+'budaya')
  }
  pariwisata(){
    return axios.get(API_URL+'pariwisata')
  }
  pariwisataDetail(id){
    return axios.get(API_URL+'pariwisata/'+id+'/detail')
  }
  penginapan(){
    return axios.get(API_URL+'penginapan')
  }
  penginapanDetail(id){
    return axios.get(API_URL+'penginapan/'+id+'/detail')
  }
}

export default new MasterData
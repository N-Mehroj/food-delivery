import axios from "./axios";

const Location = {
    location (data){
        return axios.post('geoData', {data})
    },

}

export default Location
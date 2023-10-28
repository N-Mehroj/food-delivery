import axios from "./axios";

const Location = {
    location (data){
        return axios.post('setAddress', {data})
    },

}

export default Location
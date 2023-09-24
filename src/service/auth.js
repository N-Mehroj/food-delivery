import axios from "./axios";

const AuthService = {
    register (user){
        return axios.post('usersign', {user})
    },
    phone (phone){
        return axios.post('phone', {phone})
    },
    login (user){
        return axios.post('login', {user})
    },
}

export default AuthService
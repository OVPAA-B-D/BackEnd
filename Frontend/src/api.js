import axios from 'axios'

const api = axios.create({
    baseURL: 'http://localhost:8000/',
    headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*'
    },
<<<<<<< HEAD
    xsrfCookieName: 'XSRF-TOKEN',
    xsrfHeaderName: 'X-XSRF-TOKEN',
    withCredentials: true
});

api.interceptors.request.use(function (config) {
    const token = sessionStorage.getItem("Authorization")
    config.headers.Authorization = `Bearer ` + token;
    console.log('apiiiiiiiii token', token)
    return config;
});


=======
});

>>>>>>> 0e825f2 (Adding Program)
export default api 
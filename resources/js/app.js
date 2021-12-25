require('./bootstrap');

import Alpine from 'alpinejs';
import axios from 'axios';

window.Alpine = Alpine;

Alpine.start();

            //STK Push
document.getElementById('stkpush').addEventListener('click', (event) => {
    event.preventDefault()

    const requestBody = {
        amount: document.getElementById('amount').value,
        account: document.getElementById('account').value,
        phone: document.getElementById('phone').value
    }

    axios.post('stkpush', requestBody)
    .then((response) => {
        if(response.data.ResponseDescription){
           document.getElementById('stk_response').innerHTML = response.data.ResponseDescription
        } else {
           document.getElementById('stk_response').innerHTML = response.data.errorMessage
        }
    })
    .catch((error) => {
        console.log(error);
    })
})


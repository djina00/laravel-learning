import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});


//Listening for public broadcasting
// Echo.channel('chat').listen('NewMessage', (e) => {
//     console.log(e);
//     document.getElementById('message').innerHTML += `<p>${e.message}</p>`
// });


//Listening for private broadcasting
window.Echo.private('chat').listen('NewMessage', (e) => {
    console.log(e);
    document.getElementById('message').innerHTML += `<p>${e.message}</p>`
});

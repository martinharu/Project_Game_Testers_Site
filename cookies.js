function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + (days*24*60*60*1000));
    document.cookie = `${name}=${value};expires=${d.toUTCString()};path=/`;
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

window.onload = () => {
    let username = getCookie('username');

    if (username) {
        document.getElementById('welcome').innerText = `Welkom, ${username}! Fijn dat je onze website bezoekt.`;
    } else {
        username = prompt("Welkom! Wat is je naam?");
        if (username) {
            setCookie('username', username, 365);
            document.getElementById('welcome').innerText = `Welkom, ${username}! Fijn dat je onze website bezoekt.`;
        }
    }
};

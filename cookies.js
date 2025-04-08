// Functie om een cookie te zetten met naam, waarde en aantal dagen geldig
function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000)); // Bereken verloopdatum (expiry date)
    document.cookie = `${name}=${value};expires=${d.toUTCString()};path=/`; // Cookie instellen voor hele site
}

// Functie om een cookie op te halen aan de hand van de naam
function getCookie(name) {
    const value = `; ${document.cookie}`; // Voeg extra ; toe om consistent te kunnen splitten
    const parts = value.split(`; ${name}=`); // Zoek naar specifiek cookie
    if (parts.length === 2) return parts.pop().split(';').shift(); // Return alleen de waarde (value)
}

// Wanneer de pagina geladen is
window.onload = () => {
    let username = getCookie('username'); // Haal 'username' cookie op

    if (username) {
        // Als cookie bestaat, toon welkomsbericht met naam
        document.getElementById('welcome').innerText = ` , ${username}! Fijn dat je onze website bezoekt.`;
    } else {
        // Vraag naam via prompt als cookie niet bestaat
        username = prompt("Welkom! Wat is je naam?");
        if (username) {
            setCookie('username', username, 365); // Sla naam op in cookie voor 1 jaar
            document.getElementById('welcome').innerText = ` , ${username}! Fijn dat je onze website bezoekt.`;
        }
    }
};

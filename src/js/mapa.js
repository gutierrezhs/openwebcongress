if(document.querySelector('#mapa')) {

    const lat = 36.71959809315844;
    const lng = -4.461947651658929;
    const zoom = 16;

    const map = L.map('mapa').setView([lat, lng], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
        .bindPopup(`
            <h2 class="mapa__heading">OpenWebCongress</h2>
            <p class="mapa__texto">Centro de EIP | International Business School</p>
        `)
        .openPopup();
}
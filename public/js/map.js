// map.js
function initMap() {
    const establishmentLocation = { lat: -8.839988, lng: 13.289437 }; // Example coordinates
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: establishmentLocation,
    });
    const marker = new google.maps.Marker({
        position: establishmentLocation,
        map: map,
    });
}

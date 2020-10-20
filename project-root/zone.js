function init() {
    const Hossegor = {
        lat: 46.5,
        lng: -1.67
    }

    const zoomLevel = 5;
    const map = L.map('mapid').setView([Hossegor.lat, Hossegor.lng], zoomLevel);

    const Layer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibHVsZW1vaW4iLCJhIjoiY2tnaHRwbDJhMDE5cDJybXgyM25tbjJyeSJ9.tpebCPhbdLU74--7AZ9dNA'
    });
    Layer.addTo(map);

    var popup = L.popup();


    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }

    map.on('click', onMapClick);
}


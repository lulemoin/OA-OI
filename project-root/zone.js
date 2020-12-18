function init() {
    const Hossegor = {
        lat: -13,
        lng: 46
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

function init2(){
    init();
    const cerclePerf = {
        x: 150,
        y: 100,
        r_ext: 75,
        r_int: 75 * 0.8
    }

    var moy_perfs = document.getElementById("performance").innerHTML;
    document.getElementById("performance").innerHTML="";

    var svg = d3.select("#performance")
        .append("svg")
        .attr("width", 2000)
        .attr("height", 2000);


    var circle = svg.append("circle")
        .attr("cx", cerclePerf.x)
        .attr("cy", cerclePerf.y)
        .attr("r", cerclePerf.r_ext)
        .attr("fill", "red");

    var circlewhite = svg.append("circle")
        .attr("cx", cerclePerf.x)
        .attr("cy", cerclePerf.y)
        .attr("r", cerclePerf.r_int)
        .attr("fill", "white");


    var svg = d3.select("svg")
        .append("g")
        .attr("transform", "translate("+ cerclePerf.x +","+cerclePerf.y +")");

    var arc = d3.arc()
        .innerRadius(cerclePerf.r_int)
        .outerRadius(cerclePerf.r_ext);

    var sector_white = svg.append("path")
        .attr("fill", "white")
        .attr("stroke-width", 10)
        .attr("stroke", "white")
        .attr("d", arc({startAngle:0, endAngle:(Math.PI*2*(1-moy_perfs/100))}))

    var text_perf = svg.append("text")
        .style("text-anchor", "middle")
        //.attr("x", "-0.5em")
        .attr("y", "0.25em")
        .attr("font-size", "2.5em")
        .text(Math.round(moy_perfs));

    var text_perf = svg.append("text")
        .style("text-anchor", "middle")
        //.attr("x", "-4em")
        .attr("y", cerclePerf.r_ext*1.5)
        .attr("font-size", "1.5em")
        .text("Indicateur de performance");

    const expf=10000;
    const expe=123;
    const pf=87;
    const pe=23;

    var prog_bar = svg.append("rect")
        .attr("x", -100)
        .attr("y", 300)
        .attr("width", 100 )
        .attr("height", 100)
        .attr("fill","green");

    var prog_bar2 = svg.append("rect")
        .attr("x", -100)
        .attr("y", 300)
        .attr("width", 100)
        .attr("height", 100)
        .attr("fill","green");
}

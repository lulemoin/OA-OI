const width = 550, height = 550;
const path = d3.geoPath();

console.log("y'a quelqu'un ?");






const projection = d3.geoConicConformal()
    .center([2.454071, 49.279229])
    .scale(20)
    .translate([width / 2, height / 2]);

    path.projection(projection);

const svg = d3.select('#map').append("svg")
    .attr("id", "svg")
    .attr("width", width)
    .attr("height", height);
   // .zoom(zoom)

const deps = svg.append("g");

d3.json('https://www.datavis.fr/d3js/map-firststep/departments.json').then(function(geojson) {
    deps.selectAll("path")
        .data(geojson.features)
        .enter()
        .append("path")
        .attr("d", path);
});

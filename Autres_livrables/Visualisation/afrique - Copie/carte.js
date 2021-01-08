

const width =900;
const height =600;

const path=d3.geoPath();

const projection = d3.geoMercator()
	//.center([])
	//.scale(100000)
	.translate([width/2, height/2]);

path.projection(projection);


const svg = d3.select("body")
	.append("svg")
	.attr("id","mapid")
	.attr("width", width)
	.attr("height",height);

const states =svg.append("g");

d3.json("south-africa.geojson").then(function(geojson){
	states.selectAll("path")
	.data(geojson.features)
	.enter()
	.append("path")
	.attr("d",path);

});

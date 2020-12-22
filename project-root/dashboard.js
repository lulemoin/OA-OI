function init_data(){
	//Création des jeux de données pour les pie chart

	var compo = document.getElementById("compo").innerHTML;
	var compo= JSON.parse(compo);
	document.getElementById("compo").innerHTML="";

	var string = JSON.stringify(compo);
	string.replace (/"/g,"");


	compo.title="Composition des revenus"

	init_dash(compo);
}


function init_dash(input) {
//Initialisation de variables



	var width = 700
	var height = 400
	var zoomed = 0
	var zoomed2 = 0
	opacity = "0%"
	var dec1 = width/2;
	var decy =200
	var dec2 = width/2;


	/*var zoom = d3.zoom()
      .scaleExtent([1, 10])
      .translateExtent([[10, 10], [width, height]])
      .on("zoom", zoomed);
    */


//Création du svg1
	var svg = d3.select("#dataviz").append("svg")
		.attr("width", width)
		.attr("height", height)
		.attr("id", "demo")
		.style("stroke", "black")
		//.call(d3.zoom().on("zoom", function () {
		//	svg.attr("transform", d3.event.transform)}))
		.on("click", clicked1);


//Création du svg2
	var svg2 = d3.select("#dataviz").append("svg")
		.attr("width", width)
		.attr("height", height)
		.attr("id", "demo2")
		.style("stroke", "black")
		//.call(d3.zoom().on("zoom", function () {
		//	svg2.attr("transform", d3.event.transform)}))
		.on("click", clicked2);

//initialisation du point de départ des svg
	d3.select("#demo")
		.append("g")
		.attr('transform', "translate("+ dec1 + "," + decy +")");

	d3.select("#demo2")
		.append("g")
		.attr('transform',  "translate("+ dec2 + "," + decy +")");


//Fonction de zoom en cliquant sur les svg et apparition des textes
	function clicked1(d) {
		var x, y, k, opacity;


// si le svg n'est pas zoomé, alors on zoom
		if (zoomed == 0) {
			k = 2;
			x = dec2;
			y = decy;
			opacity = "100%"
			opacityb = "5%"

			zoomed = 1;
		}
// sinon on revient à la position initiale
		else {
			opacity = "0%"
			opacityb = "100%"
			x = 0
			y = 0;
			k = 1;
			zoomed = 0
		}

		svg.transition()
			.duration(750)
			.attr("transform", "translate(" + x + "," + y + ")scale(" + k + ")")
			.style("stroke-width", 1 / k + "px")

		svg.selectAll("#legend").transition(10000).attr("opacity", opacity);
		svg2.transition()
			.duration(750).attr("opacity", opacityb)
	}

	function clicked2(d) {
		var x, y, k, opacity;


// si le svg n'est pas zoomé, alors on zoom
		if (zoomed2 == 0) {
			k = 2;
			x = -dec2;
			y = decy;
			opacity = "100%"
			opacityb = "5%"
			zoomed2 = 1;
		}
// sinon on revient à la position initiale
		else {
			x = 0;
			y = 0;
			k = 1;
			zoomed2 = 0
			opacity = "0%"
			opacityb = "100%"
		}

		svg2.transition()
			.duration(750)
			.attr("transform", "translate(" + x + "," + y + ")scale(" + k + ")")
			.attr()
			.style("stroke-width", 1 / k + "px");

		svg2.selectAll("#legend").transition(10000).attr("opacity", opacity);
		svg.transition()
			.duration(750).attr("opacity", opacityb)

	}


// Générateur des arcs
	var arcGen = d3.arc()
		.innerRadius(50)
		.outerRadius(120);

//Création des echelles de couleurs pour les pie chart
	var colorScale = d3.scaleSequential(d3.interpolate("purple", "orange")).domain([20, 40, 60, 80, 100]);

	var colorScale2 = d3.scaleSequential(d3.interpolate("yellow", "orange", "green")).domain([100, 500, 600, 900, 1000]);


//Génération des pie chart
	var angleGen = d3.pie()
		.value((d) => d.size)
		.padAngle(.08);


//Création des jeux de données pour les pie chart
	/*var input = [
		{name: "Vente", size: "1000"},
		{name: "Apport financier", size: "200"},
		{name: "Revenu non agricole", size: "300"}
	]
	input.title = "Composition des revenus"*/


	var output = [
		{name: "Consommation intermediaire", size: "2000"},
		{name: "Salaire", size: "700"},
		{name: "Consommation intermediaires", size: "950"},
		{name: "Salairse", size: "250"},
		{name: "Investissemenst", size: "300"}
	]
	output.title = "Composition des dépenses"


//Générateur d'angles en fonction des donénes
	var data = angleGen(input);
	var data2 = angleGen(output);


//Titre du pie chart
	d3.select("#demo").append("text")
		.data(input)
		.text(input.title)
		.attr("x", dec1)
		.attr("y", "60")
		.attr("text-anchor", "middle")
		.attr("font-size", "20px")
		.style("color", "black")
		.attr("stroke-width", "0.2px")


//Titre du pie chart

	d3.select("#demo2").append("text")
		.text(output.title)
		.attr("x", dec2)
		.attr("y", "60")
		.attr("text-anchor", "middle")
		.attr("font-size", "20px")
		.style("color", "black")
		.attr("stroke-width", "0.2px")


//Génération des parts du pie chart et coloration
	d3.select("#demo")
		.select("g")
		.selectAll("path")
		.data(data)
		.enter()
		.append("path")
		.attr("d", arcGen)
		.attr("fill", (d) => colorScale(d.value));


	d3.select("#demo2")
		.select("g")
		.selectAll("path")
		.data(data2)
		.enter()
		.append("path")
		.attr("d", arcGen)
		.attr("fill", (d) => colorScale2(d.value))
	;


//Legendes
	d3.select("#demo")
		.selectAll("newText")
		.data(data)
		.enter()
		.append("text")
		.attr("id", "legend")
		.attr("x", d => d3.pointRadial((d.startAngle + d.endAngle - 0.1) / 2, (100 + 90) / 2)[0])
		.attr("y", d => d3.pointRadial((d.startAngle + d.endAngle - 0.1) / 2, (100 + 90) / 2)[1] - 5)
		.attr("text-anchor", "middle")
		.text(d => d.data.name)
		.attr("font-size", "15px")
		.style("color", "black")
		.attr("stroke-width", "0.2px")
		.attr("fill", "black")
		.attr("transform", "translate("+ dec1 +","+ decy +")")
		.attr("opacity", opacity);

//Legendes
	d3.select("#demo")
		.selectAll("newText")
		.data(data)
		.enter()
		.append("text")
		.attr("id", "legend")
		.attr("x", d => d3.pointRadial((d.startAngle + d.endAngle - 0.1) / 2, (100 + 90) / 2)[0])
		.attr("y", d => d3.pointRadial((d.startAngle + d.endAngle - 0.1) / 2, (100 + 90) / 2)[1] + 10)
		.attr("text-anchor", "middle")
		.text(d => d.data.size)
		.attr("font-size", "10px")
		.style("color", "black")
		.attr("stroke-width", "0.2px")
		.attr("fill", "black")
		.attr("transform", "translate("+ dec1 +","+ decy +")")
		.attr("opacity", opacity);


	d3.select("#demo2")
		.selectAll("newText")
		.data(data2)
		.enter()
		.append("text")
		.attr("id", "legend")
		.attr("x", d => d3.pointRadial((d.startAngle + d.endAngle - 0.1) / 2, (100 + 90) / 2)[0])
		.attr("y", d => d3.pointRadial((d.startAngle + d.endAngle - 0.1) / 2, (100 + 90) / 2)[1] - 5)
		.attr("text-anchor", "middle")
		.text(d => d.data.name)
		.attr("font-size", "15px")
		.style("color", "black")
		.attr("stroke-width", "0.2px")
		.attr("fill", "black")
		.attr("transform", "translate("+ dec2 +","+ decy +")")
		.attr("opacity", opacity);

	d3.select("#demo2")
		.selectAll("newText")
		.data(data2)
		.enter()
		.append("text")
		.attr("id", "legend")
		.attr("x", d => d3.pointRadial((d.startAngle + d.endAngle - 0.1) / 2, (100 + 90) / 2)[0])
		.attr("y", d => d3.pointRadial((d.startAngle + d.endAngle - 0.1) / 2, (100 + 90) / 2)[1] + 10)
		.attr("text-anchor", "middle")
		.text(d => d.data.size)
		.attr("font-size", "10px")
		.style("color", "black")
		.attr("stroke-width", "0.2px")
		.attr("fill", "black")
		.attr("transform", "translate("+ dec2 +","+ decy +")")
		.attr("opacity", opacity);


}


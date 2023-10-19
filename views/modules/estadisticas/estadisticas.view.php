
<html>
<head>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "GASTOS TOTAL PULPAS"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 25.00, label: "BUENAVISTA" },
			{ y: 25.00, label: "NUEVO CHILE" },
			{ y: 25.00, label: "SEMILLAS" },
			{ y: 25.00, label: "SANTA CECILIA" }
		]
	}]
});
chart.render();
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
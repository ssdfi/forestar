(function() {
  $(document).ready(function() {
    var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
					"Marzo",
					"Abril",
					"Mayo",
					"Junio",
					"Julio",
					"Agosto"
				],
				datasets: [
					{
						label: '# of Votes',
						data: [
							12,
							19,
							3,
							5,
							2,
							3
						],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}
				]
			},
			options: {
				scales: {
					yAxes: [
						{
							ticks: {
								beginAtZero: true
							}
						}
					]
				}
			}
		});
		var oilCanvas = document.getElementById("oilChart");

		// Chart.defaults.global.defaultFontFamily = "Lato"; Chart.defaults.global.defaultFontSize = 18;
    // "ARCHIVO"
    // "ARCHIVO EN TRANSITO"
    // "CONTABLE"
    // "LEGALES"
    // "LIQUIDACION"
    // "OTRO"
    // "PROVINCIA"
    // "SIG"
    // "SISTEMAS"
    // "TECNICOS"


		var oilData = {
			labels: [
				"ARCHIVO", "ARCHIVO EN TRANSITO", "CONTABLE", "LEGALES", "LIQUIDACION"
			],
			datasets: [
				{
					data: [
						133.3, 86.2, 52.2, 51.2, 50.2
					],
					backgroundColor: ["#FF6384", "#63FF84", "#84FF63", "#8463FF", "#6384FF"]
				}
			]
		};

		var pieChart = new Chart(oilCanvas, {
			type: 'pie',
			data: oilData
		});

		var speedCanvas = document.getElementById("speedChart");

		Chart.defaults.global.defaultFontFamily = "Lato";
		Chart.defaults.global.defaultFontSize = 18;

		var dataFirst = {
			label: "Entradas",
			data: [
				0,
				59,
				75,
				20,
				20,
				55,
				40
			],
			lineTension: 0.3,
			fill: false,
			borderColor: 'red',
			backgroundColor: 'transparent',
			pointBorderColor: 'red',
			pointBackgroundColor: 'lightgreen',
			pointRadius: 5,
			pointHoverRadius: 15,
			pointHitRadius: 30,
			pointBorderWidth: 2,
			pointStyle: 'rect'
		};

		var dataSecond = {
			label: "Salidas",
			data: [
				20,
				15,
				60,
				60,
				65,
				30,
				70
			],
			lineTension: 0.3,
			fill: false,
			borderColor: 'purple',
			backgroundColor: 'transparent',
			pointBorderColor: 'purple',
			pointBackgroundColor: 'lightgreen',
			pointRadius: 5,
			pointHoverRadius: 15,
			pointHitRadius: 30,
			pointBorderWidth: 2
		};

		var speedData = {
			labels: [
				"0s",
				"10s",
				"20s",
				"30s",
				"40s",
				"50s",
				"60s"
			],
			datasets: [dataFirst, dataSecond]
		};

		var chartOptions = {
			legend: {
				display: true,
				position: 'top',
				labels: {
					boxWidth: 80,
					fontColor: 'black'
				}
			}
		};

		var lineChart = new Chart(speedCanvas, {
			type: 'line',
			data: speedData,
			options: chartOptions
		});
  });
}).call(this);

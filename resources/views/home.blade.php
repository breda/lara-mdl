@extends('partials.dashboard')

@section('page_title')
	Welcome
@stop

@section('dashboard-content')

<div class="mdl-grid" id="drag">
	<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow" style="background: white">
		@include('widgets.stat', array('chartID'=>'chart1', 'value'=>'45', 'header'=>'Goals Achieved', 'arrow'=>'arrow-up', 'footer'=>'18% Up this month'))
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow" style="background: white;">
		@include('widgets.stat', array('chartID'=>'chart2', 'value'=>'68', 'header'=>'Sales', 'arrow'=>'arrow-up', 'footer'=>'27% Up this month'))		
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow" style="background: white;">
		@include('widgets.stat', array('chartID'=>'chart3', 'value'=>'32', 'header'=>'Customers', 'arrow'=>'arrow-down', 'footer'=>'3% Down this month'))		
	</div>
</div>
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow grid-margin" style="background: white;">
		<div class="panel-header">Sales Graph <span class="cog"><button id="refresh1" class="mdl-button mdl-js-button mdl-button--icon">
        	<i class="mdi mdi-refresh"></i>
    		</button></span>
    	</div>
		<div class="linechart"><canvas id="home-line-chart"></canvas></div>
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow grid-margin relative" style="background: #1abc9c;">
		<div class="panel-body weather">
			<h5><i class="mdi mdi-map-marker"></i>&nbsp;Bangalore</h5>
			<div class="weather-container" style="text-align: center;">
				<div class="temp">
					23°<sup>C</sup> <br>
				</div>				
				<img src="images/weather.svg" alt="" class="weather-icon">
			</div>
			<div class="weather-table">
			<table class="mdl-data-table mdl-js-data-table">
					<thead>
						<tr>
							<th class="mdl-data-table__cell--non-numeric">Day</th>
							<th>Max </th>
							<th>Min</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="mdl-data-table__cell--non-numeric">Tuesday</td>
							<td>22°C</td>
							<td>31°C</td>
						</tr>
						<tr>
							<td class="mdl-data-table__cell--non-numeric">Wednesday</td>
							<td>17°C</td>
							<td>29°C</td>
						</tr>
						<tr>
							<td class="mdl-data-table__cell--non-numeric">Thursday</td>
							<td>19°C</td>
							<td>27°C</td>
						</tr>
						<tr>
							<td class="mdl-data-table__cell--non-numeric">Friday</td>
							<td>22°C</td>
							<td>34°C</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow grid-margin" style="background: white;">
		<div class="panel-header">Live traffic</div>
		<div class="linechart">
			<canvas id="home-line-chart2"></canvas>
		</div>
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow grid-margin" style="background: white; position: relative;">
		<div class="panel-header">to do list <span class="cog">
			<button id="todo" class="mdl-button mdl-js-button mdl-button--icon">
		        <i class="mdi mdi-settings"></i>
		    </button>
		    <ul class="mdl-menu {{ \Session::get('rtl') == 'rtl' ? 'mdl-menu--bottom-left' : 'mdl-menu--bottom-right' }} mdl-js-menu mdl-js-ripple-effect" for="todo">
		        <li class="mdl-menu__item">Some Action</li>
		        <li class="mdl-menu__item">Another Action</li>
		        <li class="mdl-menu__item">Disabled Action</li>
		        <li class="mdl-menu__item">Yet Another Action</li>
		    </ul></span>
	    </div>
	    <div class="to-do">
	    	<ul>
	    		<li>
	    			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox1">
		    			<input type="checkbox" id="checkbox1" class="mdl-checkbox__input" />
		    			<span class="mdl-checkbox__label">Ibe can be the new Sterling.</span>
		    		</label>
		    	</li>
		    	<li>
			    	<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox2">
			    		<input type="checkbox" id="checkbox2" class="mdl-checkbox__input" />
			    		<span class="mdl-checkbox__label">Make or break season for Rodgers.</span>
			    	</label>
			    </li>
			    <li>
				    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox3">
				    	<input type="checkbox" id="checkbox3" class="mdl-checkbox__input" />
				    	<span class="mdl-checkbox__label">Benteke will show why he's good.</span>
				    </label>
				</li>
				<li>
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox4">
						<input type="checkbox" id="checkbox4" class="mdl-checkbox__input" />
						<span class="mdl-checkbox__label">Sturridge will definitely be back.</span>
					</label>
				</li>
				<li>
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox5">
						<input type="checkbox" id="checkbox5" class="mdl-checkbox__input" />
						<span class="mdl-checkbox__label">PFA player of the year Coutinho.</span>
					</label>
				</li>
				<li>
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox6">
						<input type="checkbox" id="checkbox6" class="mdl-checkbox__input" />
						<span class="mdl-checkbox__label">We go again.</span>
					</label>
				</li>
	    	</ul>
	    	<div class="bottom">
		    	<form action="#">
		    		<div class="mdl-textfield mdl-js-textfield textfield-demo">
		    			<input class="mdl-textfield__input" type="text" id="sample1" />
		    			<label class="mdl-textfield__label" for="sample1">To do...</label>
		    		</div>
		    	</form>
		    	<button class="mdl-button mdl-button--raised mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored btn">
		    	<i class="mdi mdi-check"></i>
		    	</button>
	    	</div>
	    </div>
	</div>
</div>
<div class="mdl-grid" id="drag2">
	<div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow grid-margin" style="background: white;">
		<div class="panel-header">Month Breakdown</div>
		<div id="bar"></div>
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet shadow grid-margin" style="background: white;">
		<div class="panel-header">Approvals</div>
		<div id="donut"></div>
	</div>
</div>


@stop

@section('js')

    @parent

    <script>
        $(function() {
        	$.growl({ title: "Hello", message: "Welcome to Material Admin!" });
        	if ($(window).width()<600) {
                $('#drag').removeAttr('id');
                $('#drag2').removeAttr('id');
            };
		    $('#chart1').easyPieChart({
		        lineWidth: 8,
		        scaleColor: false,
		        size: 85,
		        lineCap: "square",
		        barColor: "#fb8c00",
		        trackColor: "#f9dcb8"
		    });
		    $('#chart2').easyPieChart({
		        lineWidth: 8,
		        scaleColor: false,
		        size: 85,
		        lineCap: "square",
		        barColor: "#00D554",
		        trackColor: "#c7f9db"
		    });
		    $('#chart3').easyPieChart({
		        lineWidth: 8,
		        scaleColor: false,
		        size: 85,
		        lineCap: "square",
		        barColor: "#F800FC",
		        trackColor: "#F5E5F5"
		    });

		    var lineChartData1 = {
	            labels : ["JAN","FEB","MAR","APR","MAY","JUN"],
	             datasets: [
			        {
			            label: "My First dataset",
			            fillColor: "#FFA3FD",
			            strokeColor: "#FFA3FD",
			            pointColor: "#fff",
			            pointStrokeColor: "#FFA3FD",
			            pointHighlightFill: "#fff",
			            pointHighlightStroke: "#FFA3FD",
			            data: [7, 20, 10, 15, 17, 10, 27]
			        },
			        {
			            label: "My Second dataset",
			            fillColor: "#F800FC",
			            strokeColor: "#F800FC",
			            pointColor: "#fff",
			            pointStrokeColor: "#F800FC",
			            pointHighlightFill: "#fff",
			            pointHighlightStroke: "#F800FC",
			            data: [6, 9, 22, 11, 13, 20, 27]
			        }
			    ]

	        };
	    
	        var homeLineChart = document.getElementById("home-line-chart").getContext("2d");

	        var chartCurves = new Chart(homeLineChart).Line(lineChartData1, {
	            responsive: true,
	            bezierCurve : false,
	            datasetStroke: false,
	            legendTemplate: false,
	            pointDotRadius : 6,
	            showTooltips: false
	        });

            $( "#refresh1" ).click(function() {	
            	chartCurves.datasets[0].points[1].value = Math.floor(Math.random() * (22 - 17 + 1)) + 17;
            	chartCurves.datasets[0].points[3].value = Math.floor(Math.random() * (22 - 15 + 1)) + 15;
            	chartCurves.datasets[0].points[4].value = Math.floor(Math.random() * (19 - 13 + 1)) + 13;
            	chartCurves.datasets[1].points[1].value = Math.floor(Math.random() * (10 - 5 + 1)) + 5;
            	chartCurves.datasets[1].points[2].value = Math.floor(Math.random() * (25 - 20 + 1)) + 20;
            	chartCurves.datasets[1].points[4].value = Math.floor(Math.random() * (15 - 10 + 1)) + 10;
            	chartCurves.datasets[1].points[5].value = Math.floor(Math.random() * (22 - 18 + 1)) + 18;
            	chartCurves.update();    	            	        	
            });

            var lineChartData2 = {
	            labels : ["JAN","FEB","MAR","APR","MAY","JUN"],
	             datasets: [
			        {
			            label: "My First dataset",
			            fillColor: "rgba(0,0,0, 0)",
			            strokeColor: "#C172FF",
			            pointColor: "#fff",
			            pointStrokeColor: "#8F00FF",
			            pointHighlightFill: "#fff",
			            pointHighlightStroke: "#8F00FF",
			            data: [99, 180, 80, 140, 120, 220, 100]
			        },
			        {
			            label: "My Second dataset",
			            fillColor: "rgba(0,0,0, 0)",
			            strokeColor: "#FFB53A",
			            pointColor: "#fff",
			            pointStrokeColor: "#FF8300",
			            pointHighlightFill: "#fff",
			            pointHighlightStroke: "#FF8300",
			            data: [50, 145, 200, 75, 50, 100, 50]
			        }
			    ]

	        };


	        var homeLineChart2 = document.getElementById("home-line-chart2").getContext("2d");

	        var chartCurves2 = new Chart(homeLineChart2).Line(lineChartData2, {
	            responsive: true,
	            bezierCurve : false,
	            datasetStroke: false,
	            legendTemplate: false,
	            pointDotRadius : 9,
	            pointDotStrokeWidth : 3,
	            datasetStrokeWidth : 3
	        });	  

	        var chart = c3.generate({
	        	bindto: '#bar',
			    data: {
			        columns: [
			            ['Players', 30, 200, 100, 400, 150, 250, 200, 120, 80, 180, 40, 90, 220, 110, 20, 65]
			        ],
			        type: 'bar'
			    },
			    bar: {
			        width: {
			            width: 30 // this makes bar width 50% of length between ticks
			        }
			        // or
			        //width: 100 // this makes bar width 100px
			    },
			    color: {
				  pattern: ['#00D554']
				},
				padding: {
					left: 70,
					right: 50,
					top: 10
				},
				legend: {
					hide: true
				}
			});    


			var chart2 = c3.generate({
				bindto: '#donut',
			    data: {
			        columns: [
			            ['Approved', 13],
			            ['Pending', 25],
			            ['Rejected', 25],
			            ['Others', 37]
			        ],
			        type : 'donut'
			    },
			    donut: {
			        title: ""
			    },
				color: {
				  pattern: ['#FF8300','#00AEFF','#00D554','#FF2800']
				},
				padding: {
					left: 30,
					right: 30,
					top: 30,
					bottom: 15
				}
			});
  			dragula([document.getElementById('drag')], {
			  revertOnSpill: true
			});
			dragula([document.getElementById('drag2')], {
			  revertOnSpill: true
			});		

			$('.c-hamburger').click(function() {
				chartCurves.clear();
				chartCurves2.clear();
				
				setTimeout(function() {
					chartCurves.render();										
					chartCurves.resize();
					chartCurves2.render();										
					chartCurves2.resize();
				}, 250);
				setTimeout(function() {
					chart.resize();
					chart2.resize();
				}, 150);
			});	      

		});
    </script>

@endsection
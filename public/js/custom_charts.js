$(document).ready(function(){
	/**
	var ctx = $('#myChart').get(0).getContext('2d');

	var data = [
		{
			value: 270,
			color: 'green',
		},
		{
			value: 90,
			color: 'red',
		},
	]

	var Doughnut = new Chart(ctx).Doughnut(data);
	*/

	//line chart
	var lineChart = $('#monthlyChart').get(0).getContext('2d');

	var data = {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [
	        {
	            label: 'Monthly Comparism',
	            data: [12, 19, 3, 5, 2, 3],
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor:'rgba(75, 192, 192, 0.4)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [5],
	            borderDashOffset: 0.0,
	            borderJoinStyle: 'miter',
	            pointBorderColor: "rgba(75,192,192,1)",
	            pointBackgroundColor: "#ffffff",
	            pointBorderWidth: 1,
	            pointHoverRadius: 5,
	            pointHoverBackgroundColor: "rgba(75,192,192,1)",
	            pointBorderColor: 2,
	            pointRadius: 1,
	            pointHitRadius: 10,
	        },
	        {
	            label: 'Monthly Comparism',
	            data: [10, 17, 5, 4, 6, 2],
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor:'rgba(255, 99, 132, 0.2)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [],
	            borderDashOffset: 0.0,
	            borderJoinStyle: 'miter',
	            pointBorderColor: "rgba(75,192,192,1)",
	            pointBackgroundColor: "#ffffff",
	            pointBorderWidth: 1,
	            pointHoverRadius: 5,
	            pointHoverBackgroundColor: "rgba(220,220,220,1)",
	            pointBorderColor: 2,
	            pointRadius: 1,
	            pointHitRadius: 10,
	        }
        ]
    };

    var options = {
    	scales: {
    		yAxes: [{
    			display: true,
    			ticks: {}
    		}],
    		xAxes: [{
    			display:false,
    		}]
    	}
    }

	var monthlyChart = new Chart(lineChart, {
	    type: 'line',
	    data: data,
	    options: options
	});

	//bar chart
	
	var barChart = $('#revenueChart').get(0).getContext('2d');

	var data = {
        labels: ["Station, location", "Station, location", "Station, location", "Station, location", "Station, location", "Station, location"],
        datasets: [
	        {
	            label: 'Monthly Comparism',
	            backgroundColor: 'rgba(75, 192, 192, 0.4)',
	            data: [12, 19, 3, 5, 2, 3],
	        },
	        /**
	        {
	            label: 'Monthly Comparism',
	            data: [10, 17, 5, 4, 6, 2],
	        }
	        */
        ]
    };

    var options = {
    	scales: {
    		yAxes: [{
    			display: true,
    			ticks: {}
    		}],
    		xAxes: [{
    			display:false,
    		}]
    	}
    }

	var revenueChart = new Chart(barChart, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});
	
});

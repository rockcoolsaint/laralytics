
function getData2(){
	alert("ok");
}


function getTodaysDaysData(stationId, authorization)
{ 
	$.ajax({

		method: 'GET',
		headers: {
	        'Authorization': authorization,
	        'Content-Type': "application/json",
	    },
		url: 'http://analytics-api.energy360africa.com/api/v1/sales/today/' + stationId,
		beforeSend: function() {
			//loading icon

			//transactions
			$("div#pms_transactions").html('<strong>Loading...</strong>');
			$("div#ago_transactions").html('<strong>Loading...</strong>');
			$("div#dpk_transactions").html('<strong>Loading...</strong>');

			//revenue
			$("div#today_revenue #pms_revenue").html('<strong>Loading...</strong>');
			$("div#today_revenue #ago_revenue").html('<strong>Loading...</strong>');
			$("div#today_revenue #dpk_revenue").html('<strong>Loading...</strong>');

			//volume
			$("div#pms_volume").html('<strong>Loading...</strong>');
			$("div#ago_volume").html('<strong>Loading...</strong>');
			$("div#dpk_volume").html('<strong>Loading...</strong>');

			//first transaction time
			$("span#first_transaction_time").html('<strong>Loading...</strong>');

			//customer average
			$("div#cust_avg #avg_vol").html('<strong>Loading...</strong>');
			$("div#cust_avg #avg_val").html('<strong>Loading...</strong>');

			//pump activity
			$("span#num_pumps").html('<strong>Loading...</strong>');

			$("span#sell_pumps").html('<strong>Loading...</strong>');

			//sales by pump
			$("div#pump_sales").html('<strong>Loading...</strong>');

			//sales by hour
			$("div#hourly_sales").html('<strong>Loading...</strong>');

		},
	}).done(function(result) {
		//console.log(result);

		//Overview:Today
		//web

		//remove loading
		//revenue
		$("div#today_revenue #pms_revenue").find('strong').remove();
		$("div#today_revenue #ago_revenue").find('strong').remove();
		$("div#today_revenue #dpk_revenue").find('strong').remove();

		//volume
		$("div#pms_volume").find('strong').remove();
		$("div#ago_volume").find('strong').remove();
		$("div#dpk_volume").find('strong').remove();

		//transactions
		$("div#pms_transactions").find('strong').remove();
		$("div#ago_transactions").find('strong').remove();
		$("div#dpk_transactions").find('strong').remove();

		//first transaction time
		$("span#first_transaction_time").find('strong').remove();

		$("span#num_pumps").find('strong').remove();

		$("span#sell_pumps").find('strong').remove();

		//sales by pump
		$("div#pump_sales").find('strong').remove();

		//sales by hour
		$("div#hourly_sales").find('strong').remove();


		/*
		 *load content dynamically
		 */

		//transactions
		if (result.data.hasOwnProperty("PMS")) {
			$("div#today_transactions #pms_transactions").html(result.data.PMS.numTransactions);
		}
		if (result.data.hasOwnProperty("AGO")) {
			$("div#today_transactions #ago_transactions").html(result.data.AGO.numTransactions);
		}
		if (result.data.hasOwnProperty("DPK")) {
			$("div#today_transactions #dpk_transactions").html(result.data.DPK.numTransactions);
		}

		//revenue
		if (result.data.hasOwnProperty("PMS")) {
			$("div#today_revenue #pms_revenue").html(result.data.PMS.revenue);
		}
		if (result.data.hasOwnProperty("AGO")) {
			$("div#today_revenue #ago_revenue").html(result.data.AGO.revenue);
		}
		if (result.data.hasOwnProperty("DPK")) {
			$("div#today_revenue #dpk_revenue").html(result.data.DPK.revenue);
		}

		//volume
		if (result.data.hasOwnProperty("PMS")) {
			$("div#pms_volume").html(result.data.PMS.volume);
		}
		if (result.data.hasOwnProperty("AGO")) {
			$("div#ago_volume").html(result.data.AGO.volume);
		}
		if (result.data.hasOwnProperty("DPK")) {
			$("div#dpk_volume").html(result.data.DPK.volume);
		}

		//first transaction time
		if (result.data.hasOwnProperty("firstTransactionTime")) {
			$("span#first_transaction_time").html(result.data.firstTransactionTime);
		}

		//customer average
		$("div#cust_avg #avg_vol").html(result.data.volumePerCustomer + 'L');
		$("div#cust_avg #avg_val").html(result.data.revenuePerCustomer + 'K');

		//pump activity
		$("span#num_pumps").html(result.data.totalPumps);
		$("span#sell_pumps").html(result.data.activePumps);

		//sales by pump
		$("div#pump_sales").html('<canvas id="pump_saleChart" class="hidden-xs" width="400" height="200"></canvas>');

		$("div#hourly_sales").html('<canvas id="sales_trendChart" class="hidden-xs" width="400" height="200"></canvas>');

		//pumpsalebar chart


		//Load pump sales data
		var pumpSalesData = result.data.activePumpsSale;
		var pumpSalesArray = parseData(pumpSalesData);
		drawPumpSaleChart(pumpSalesArray);

		//load hourly sales data
		var salesByHourData = result.data.salesByHour;
		var salesByHourArray = parseData(salesByHourData);
		drawSalesByHourChart(salesByHourArray);

	});
}

//draw pumpsales chart
function drawPumpSaleChart(pumpSalesArray)
{ 	

	var pumps = pumpSalesArray[0];
	var sales = pumpSalesArray[1];

	var pumpSaleChart = $('#pump_saleChart').get(0).getContext('2d');
	//var pumpObj = result.data.activePumpsSale;
	//var res = 
	var data = {
        labels: pumps,
        datasets: [
	        {
	            label: 'Total Volume',
	            backgroundColor: 'rgba(75, 192, 192, 0.4)',
	            data: sales,
	        },
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
    	},
    	maintainAspectRatio: false
    }

	var revenueChart = new Chart(pumpSaleChart, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});
		
}

//convert pumsales object to arrays of pumps and sales data
function parseData(data)
{ 

	var labels = [];
	var values = [];

	for (key in data)
	{
		if (data.hasOwnProperty(key))
		{
			labels.push(key);
			values.push(data[key]);
		}
	}
	
	return [labels, values];
}

function drawSalesByHourChart(salesByHourArray)
{	
	var labels = salesByHourArray[0];
	var values = salesByHourArray[1];

	//sales trend by hour chart
	var salesTrendChart = $('#sales_trendChart').get(0).getContext('2d');

	var data = {
        labels: labels,
        datasets: [
	        {
	            label: 'Hourly Sales',
	            data: values,
	            fill: true,
	            lineTension: 0.1,
	            backgroundColor:'rgba(75, 192, 192, 0.4)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [],
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
        ]
    };

    var options = {
    	scales: {
    		yAxes: [{
    			display: true,
    			ticks: {}
    		}],
    		xAxes: [{
    			gridLines: {
			        display: false,
			        color: "black"
			    },
    		}]
    	},
    	maintainAspectRatio: false
    }

	var trend = new Chart(salesTrendChart, {
	    type: 'line',
	    data: data,
	    options: options
	});
	
}



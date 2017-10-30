$(function(){


	//Read cookie
	console.log($.cookie('role'));
	console.log($.cookie('token'));
	console.log($.cookie('company'));
	console.log(JSON.parse($.cookie('company')));


	$( "#combobox" ).combobox({ 
        select: function (event, ui) { 
          //alert($(this).val());
          var stationId = $(this).val();
          //alert(stationId);
          var authorization = "Bearer "+ $.cookie('token');
          getTodaysDaysData(stationId, authorization);
          //load today
         
          
        }
  });
  $( "#toggle" ).on( "click", function() {
    $( "#combobox" ).toggle();
  });

	var company = JSON.parse($.cookie('company'));
	//console.log(company["C36172EF-A9E2-490F-A83C-8DC0091EEF3B"].stations);

	function getCompanyId() {
		$.each(company, function(id, companyObject) {
			//console.log(id);
			return id;
		});
	}

	var companyId = getCompanyId();
	//console.log(getCompanyId());

	var checkRole = function() {
		if ($.cookie('role') == "Administrator") {
			return true;
			//$(#stations).on('change', function() {

			//});
		} //else {

		//}
	}

	//get stations from cookie stations_names
	var stationNames = function () {
		var stations = $.cookie('stations_names');
		//console.log(typeof JSON.parse(stations));
		var company = JSON.parse($.cookie('company'));

		$.each(company, function(id, companyObject) {
			var stationArray = company[id].stations;
			//console.log(stationArray);
			stationArray.forEach(function(item){
				//console.log(value);
				$("#combobox").append('<option value=' + item.id + '>' + item.name + '</option>');
			});
		});

		/**
		$.each(stationArray, function(stationId, stationName) {
			//console.log(value);
			$("#stations").append('<option value=' + stationId + '>' + stationName + '</option>');
		});
		*/
	}

	
		//append list off stations to station selection input
		stationNames();

		
			
		//console.log('true');
		//console.log($('select[name=selector]').val());
		//console.log($('select#stations').val());
		
		//set parameters
		var stationId = $(this).val();
		console.log(stationId);
		var content_type = "application/json";
		var authorization = "Bearer "+ $.cookie('token');

		//request for today's data
		

});






 
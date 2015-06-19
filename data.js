$(function() {
	//Highcharts with mySQL and PHP - Ajax101.com

	var Ldate = [];
	var Log = [];
	var switch1 = true;
	$.get('values.php', function(data) {

		data = data.split('/');
		for (var i in data) {
			if (switch1 == true) {
				Ldate.push(data[i]);
				switch1 = false;
			} else {
				Log.push(parseFloat(data[i]));
				switch1 = true;
			}

		}
		Ldate.pop();

		$('#chart').highcharts({
			chart : {
				type : 'spline'
			},
			title : {
				text : 'Highcharts with mySQL, PHP and AJAX'
			},
			subtitle : {
				text : 'Source: Ajax101.com'
			},
			xAxis : {
				title : {
					text : 'Ldate'
				},
				categories : Ldate
			},
			yAxis : {
				title : {
					text : 'Log'
				},
				labels : {
					formatter : function() {
						return this.value + 'Log'
					}
				}
			},
			tooltip : {
				crosshairs : true,
				shared : true,
				valueSuffix : ''
			},
			plotOptions : {
				spline : {
					marker : {
						radius : 4,
						lineColor : '#666666',
						lineWidth : 1
					}
				}
			},
			series : [{

				name : 'Log',
				data : Log
			}]
		});
	});
}); 
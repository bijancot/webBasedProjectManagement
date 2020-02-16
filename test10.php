<html>
<script src="https://code.highcharts.com/gantt/highcharts-gantt.js"></script>
<script src="https://code.highcharts.com/gantt/modules/exporting.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<style>
#container {
    max-width: 1200px;
    min-width: 800px;
    height: 400px;
    margin: 1em auto;
}
.scrolling-container {
	overflow-x: auto;
	-webkit-overflow-scrolling: touch;
}

</style>
<div class="scrolling-container">
	<div id="container"></div>
</div>
<?php
$conn = mysqli_connect('192.168.79.3', 'budosen', 'bijan2089', 'mmopilot');
// mysqli_set_charset($conn, 'utf8');
$query = mysqli_query($conn, 'SELECT jobDescription,idJob,SUBSTRING_INDEX(unix_timestamp(time), \'.\', 1)*1000 as end,UNIX_TIMESTAMP(createdDate)*1000 as start FROM mmo_job order by idJob');
while($row = mysqli_fetch_assoc($query)) {
	$data[] = array(model=>$row['jobDescription'],
		current=>0,deals=>
		array([
		rentedTo=>$row['idJob'],
		from=>(int)$row['start'],
		to=>(int)$row['end']]
	));
}

$json = json_encode($data);
$array_final = preg_replace('/"([a-zA-Z]+[a-zA-Z0-9_]*)":/','$1:',$json);

echo $array_final;
?>
<script>
// Set to 00:00:00:000 today
var today = new Date(),
    day = 1000 * 60 * 60 * 24,
    map = Highcharts.map,
    dateFormat = Highcharts.dateFormat,
    series,
    cars;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

cars = <?php echo $array_final;?>

// Parse car data into series.
series = cars.map(function (car, i) {
    var data = car.deals.map(function (deal) {
        return {
            id: 'deal-' + i,
            rentedTo: deal.rentedTo,
            start: deal.from,
            end: deal.to,
            y: i
        };
    });
    return {
        name: car.model,
        data: data,
        current: car.deals[car.current]
    };
});

Highcharts.ganttChart('container', {
    series: series,
    title: {
        text: 'Car Rental Schedule'
    },
    tooltip: {
        pointFormat: '<span>Rented To: {point.rentedTo}</span><br/><span>From: {point.start:%e. %b}</span><br/><span>To: {point.end:%e. %b}</span>'
    },
    xAxis: {
        currentDateIndicator: true
    },
    yAxis: {
        type: 'category',
        grid: {
            columns: [{
                title: {
                    text: 'Model'
                },
                categories: map(series, function (s) {
                    return s.name;
                })
            }, {
                title: {
                    text: 'Rented To'
                },
                categories: map(series, function (s) {
                    return s.current.rentedTo;
                })
            }, {
                title: {
                    text: 'From'
                },
                categories: map(series, function (s) {
                    return dateFormat('%e. %b', s.current.from);
                })
            }, {
                title: {
                    text: 'To'
                },
                categories: map(series, function (s) {
                    return dateFormat('%e. %b', s.current.to);
                })
            }]
        }
    }
});

</script>
</html>
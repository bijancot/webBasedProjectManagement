    <!-- Main Wrapper -->
    <section id="content_wrapper">
                <!-- Topbar Menu Wrapper -->
        <div id="topbar-dropmenu-wrapper">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-danger">
                        <span class="fa fa-music"></span>
                        <span class="service-title">Audio</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-success">
                        <span class="fa fa-picture-o"></span>
                        <span class="service-title">Images</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-primary">
                        <span class="fa fa-video-camera"></span>
                        <span class="service-title">Videos</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-alert">
                        <span class="fa fa-envelope"></span>
                        <span class="service-title">Messages</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-system">
                        <span class="fa fa-cog"></span>
                        <span class="service-title">Settings</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-dark">
                        <span class="fa fa-user"></span>
                        <span class="service-title">Users</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Topbar Menu Wrapper -->

                <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Manage Job Progress > Add New Job Progress</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Time Line
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->

                <div class="chute chute-center">
<div id="container"></div>
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
<!-- AllCP Info -->
    
</div>
<!-- /Column Center -->
           
        </section>
        <!-- /Content -->

        

    </section>
    <!-- /Main Wrapper -->

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
<?php
 $select = $db->prepare("SELECT a.time as kolo,a.createdDate as kolotero,a.jobDescription as hoho,c.name as nem FROM mmo_job a join mmo_order b on a.idOrder=b.idOrder join mmo_users c on a.idOperator=c.idUser;");
 $select->execute();
 $tampil = $select->fetchAll();

 foreach ($tampil as $value) {
    echo $value['kolo']."<br/>";
    echo $value['kolotero']."<br/>";

    $a = strtotime(date("d-m-Y",strtotime($value['kolotero'])))*1000;
    $c = strtotime(date("d-m-Y",strtotime($value['kolo'])))*1000;
    $b = $a-$c;
}
//echo date("d-m-Y",strtotime('2019-12-16 23:10:48'))."</br>";

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

cars = [{
    model: 'Nissan Leaf',
    current: 0,
    deals: [{
        rentedTo: 'Lisa Star',
        from: today - 1 * day,
        to: today + 2 * day
    }, {
        rentedTo: 'Shane Long',
        from: today - 3 * day,
        to: today - 2 * day
    }, {
        rentedTo: 'Jack Coleman',
        from: today + 5 * day,
        to: today + 6 * day
    }]
}, {
    model: 'Jaguar E-type',
    current: 0,
    deals: [{
        rentedTo: 'Martin Hammond',
        from: today - 2 * day,
        to: today + 1 * day
    }, {
        rentedTo: 'Linda Jackson',
        from: today - 2 * day,
        to: today + 1 * day
    }, {
        rentedTo: 'Robert Sailor',
        from: today + 2 * day,
        to: today + 6 * day
    }]
}, {
    model: 'Volvo V60',
    current: 0,
    deals: [{
        rentedTo: 'Mona Ricci',
        from: today + 0 * day,
        to: today + 3 * day
    }, {
        rentedTo: 'Jane Dockerman',
        from: today + 3 * day,
        to: today + 4 * day
    }, {
        rentedTo: 'Bob Shurro',
        from: today + 6 * day,
        to: today + 8 * day
    }]
}, {
    model: 'Volkswagen Golf',
    current: 0,
    deals: [{
        rentedTo: 'Hailie Marshall',
        from: today - 1 * day,
        to: today + 1 * day
    }, {
        rentedTo: 'Morgan Nicholson',
        from: today - 3 * day,
        to: today - 2 * day
    }, {
        rentedTo: 'William Harriet',
        from: today + 2 * day,
        to: today + 3 * day
    }]
}, {
    model: 'Peugeot 208',
    current: 0,
    deals: [{
        rentedTo: 'Harry Peterson',
        from: today - 1 * day,
        to: today + 2 * day
    }, {
        rentedTo: 'Emma Wilson',
        from: today + 3 * day,
        to: today + 4 * day
    }, {
        rentedTo: 'Ron Donald',
        from: today + 5 * day,
        to: today + 6 * day
    }]
}];

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

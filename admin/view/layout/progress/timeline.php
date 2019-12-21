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
var today = new Date(<?php echo $a?>),
    day = 1000 * 60 * 60 * 24,
    // Utility functions
    dateFormat = Highcharts.dateFormat,
    defined = Highcharts.defined,
    isObject = Highcharts.isObject,
    reduce = Highcharts.reduce;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('container', {
    series: [{
        name: 'job for <?php echo $value['nem']?>',
        data: [{
            name: '<?php echo $value['hoho']?>',
            id: 'prepare_building',
            color:'red',
            start: today + (1*day),
            end: <?php echo $c?>+ (1*day),
            completed: {
                amount: 0.2
            },
            owner: ' <?php echo $value['nem']?>'
        }, {
            name: 'Inspect building',
            id: 'inspect_building',
            start: today + 6 * day,
            end: today + 8 * day,
            owner: 'Ivy'
        }, {
            name: 'Passed inspection',
            id: 'passed_inspection',
            dependency: 'inspect_building',
            start: today + 9.5 * day,
            milestone: true,
            owner: 'Peter'
        }]
    }],
    tooltip: {
        pointFormatter: function () {
            var point = this,
                format = '%e. %b',
                options = point.options,
                completed = options.completed,
                amount = isObject(completed) ? completed.amount : completed,
                status = ((amount || 0) * 100) + '%',
                lines;

            lines = [{
                value: point.name,
                style: 'font-weight: bold;'
            }, {
                title: 'Start',
                value: dateFormat(format, point.start)
            }, {
                visible: !options.milestone,
                title: 'End',
                value: dateFormat(format, point.end)
            }, {
                title: 'Completed',
                value: status
            }, {
                title: 'Owner',
                value: options.owner || 'unassigned'
            }];

            return reduce(lines, function (str, line) {
                var s = '',
                    style = (
                        defined(line.style) ? line.style : 'font-size: 0.8em;'
                    );
                if (line.visible !== false) {
                    s = (
                        '<span style="' + style + '">' +
                        (defined(line.title) ? line.title + ': ' : '') +
                        (defined(line.value) ? line.value : '') +
                        '</span><br/>'
                    );
                }
                return str + s;
            }, '');
        }
    },
    title: {
        text: 'Your Timeline'
    },
    xAxis: {
        currentDateIndicator: true,
        min: today - 3 * day,
        max: today + 18 * day
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

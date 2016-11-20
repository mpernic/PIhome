<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>PIhome Automation Demo Project</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php?page=switches">Switches</a>
                </li>
                <li>
                    <a href="index.php?page=sensors">Sensors</a>
                </li>
                <li>
                    <a href="index.php?page=attendance">Attendance</a>
                </li>
                <li>
                    <a href="index.php?page=automation">Automation</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Begin Body -->
<div class="container">
    <div class="row">
        <div class="col-md-3" id="leftCol">

            <div class="well">
                <ul class="nav nav-stacked" id="sidebar">
                    <li><a href="index.php?page=switches">Switches</a></li>
                    <li><a href="index.php?page=sensors">Sensors</a></li>
                    <li><a href="index.php?page=attendance">Attendance</a></li>
                    <li><a href="index.php?page=switautomationches">Automation</a></li>
                </ul>
            </div>

        </div>
        <div class="col-md-9">
            <h2><?php echo $_REQUEST['page']; ?></h2>

            <?php
                switch($_REQUEST['page']) {
                    case "sensors":
                        include "sensors.php";
                        break;
                    case "attendance":
                        include "attendance.php";
                        break;
                    case "automation":
                        include "automation.php";
                        break;
                    case "switches":
                    default:
                        include "switches.php";
                        break;
                }
            ?>

            <hr>
        </div>
    </div>
</div>



<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
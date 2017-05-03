<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="500 Internal Server Error">
        <meta name="author" content="">
        <title>500 Internal Server Error</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <style>
/* Error Page Inline Styles */
body {
    padding-top: 20px;
}
/* Layout */
.jumbotron {
    font-size: 21px;
    font-weight: 200;
    line-height: 2.1428571435;
    color: inherit;
    padding: 10px 0px;
}
/* Everything but the jumbotron gets side spacing for mobile-first views */
.masthead, .body-content, {
    padding-left: 15px;
    padding-right: 15px;
}
/* Main marketing message and sign up button */
.jumbotron {
    text-align: center;
    background-color: transparent;
}
.jumbotron .btn {
    font-size: 21px;
    padding: 14px 24px;
}
/* Colors */
.green {color:#5cb85c;}
.orange {color:#f0ad4e;}
.red {color:#d9534f;}
        </style>
        <script type="text/javascript">
function loadDomain() {
    var display = document.getElementById("display-domain");
    display.innerHTML = document.domain;
}
        </script>
    </head>
    <body onload="javascript:loadDomain();">
        <!-- Error Page Content -->
        <div class="container">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1><span class="glyphicon glyphicon-fire red"></span> 500 Internal Server Error</h1>
                <p class="lead">The web server is returning an internal error for <em><span id="display-domain"></span></em>.</p>
                <a href="javascript:document.location.reload(true);" class="btn btn-default btn-lg text-center"><span class="green">Try This Page Again</span></a>
            </div>
        </div>
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2>What happened?</h2>
                        <p class="lead">A 500 error status implies there is a problem with the web server's software causing it to malfunction.</p>
                    </div>
                    <div class="col-md-6">
                        <h2>What can I do?</h2>
                        <p class="lead">If you're a site vistor</p>
                        <p> Nothing you can do at the moment. If you need immediate assistance, please send us an email instead. We apologize for any inconvenience.</p>
                        <p class="lead">If you're the site owner</p>
                        <p>This error can only be fixed by server admins, please contact your website provider.</p>
                        <p>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#devinfo" aria-expanded="false" aria-controls="devinfo">
                            Information for developers
                        </button>
                        <div class="collapse" id="devinfo">
                            <pre><?=$message?></pre>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Error Page Content -->
        <!--Scripts-->
        <!-- jQuery library -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>
<?php exit; ?>

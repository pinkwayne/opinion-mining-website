<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="author" content="Yiwei GU">
    <meta name="description" content="a opinion mining system ">
    <meta name="keywords" content="opinion mining, machine learning, neural network">
    <title>Fudan Opinion-Mining System </title>
    <link rel="icon" href="icon.ico" >
    <link rel="shortcut icon" href="icon.ico" >
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waitForResult.js"></script>
    <style type="text/css">
        body {
            background-color: #ffffff;
            padding-top: 70px;
            padding-bottom: 50px;
        }
        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .navbar-brand {
            height: 40px;
            padding-top: 10px;
        }
        .navbar {
            min-height: 40px;
        }
        .navbar-toggle {
            margin-top: 4px;
            margin-bottom: 4px;
        }
    </style>
</head>
<body contenteditable="false" style=" font-family: '微软雅黑', sans-serif">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand disabled"><big>E.E.Dept Fudan </big></span>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home " aria-hidden="true"></span> Home</a></li>
                <li class="divider-vertical"></li>
                <li><a href="" data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-info-sign " aria-hidden="true"></span> About us</a></li>
                <li class="divider-vertical"></li>
                <li><a href="mailto:wayne92gu@gmail.com"><span class="glyphicon glyphicon-envelope " aria-hidden="true"></span> Email</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="background-color: #ffffff">
        <h1 class="text-center" style="color: black;
         font-style: normal; font-family: '微软雅黑', sans-serif">
            Fudan Opinion-mining System  <br><br>
        </h1>
        <div class="row">
            <form name="input_url" method="post" action="" onsubmit="checkForm();return false;">
                <div class="col-lg-12" >
                    <div class="input-group input-group-lg" style="width: 100%" >
                        <input class="form-control " type="url" name="url" id="url" required="required" placeholder="input your url begin with 'http(s)://' to analysis...">
                        <span class="input-group-btn">
                             <button class="btn btn-success" type="submit" id="submit" name="submit" value="post" >
                                 <span class="glyphicon glyphicon-search " aria-hidden="true"></span> Dig!
                             </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <p class="text-center" id="resultArea">...</p>
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="text-center" >
            <span style="color: gray">
                E.E.Dept Fudan University Shanghai China<br>WebSite Ver.0.1 by Webstorm
            </span>
        </div>
    </nav>
    <!-- 模态框（Modal） -->
    <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        About us
                    </h4>
                </div>
                <div class="modal-body">
                    about info...<br>
                    ...<br>...<br>...<br>...<br>...<br>...<br>...<br>...<br>
                    website icons designed by <a href="http://glyphicons.com/" target="_blank">GLYPHICONS</a>.
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>
</html>
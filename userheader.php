<head>
    <title>Home page </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="quiz.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="logo.png"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="showtest.php">Test</a>
            </li>
            <li>
                <a href="result.php">Results</a>
            </li>
            <li>
                <a href="sublist.php">List</a>
            </li>
            <li>
                <?php
                if(isset($_SESSION['login']))
                {
                    echo "<a href=\"signout.php\">Signout</a></strong></div>";
                }
                else
                {
                    echo "&nbsp;";
                }
                ?>
            </li>
        </ul>
    </div>

    </div>

</nav>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Coastal Products</h1>
        <p>Subtext/Slogan</p>
        <p><a href="#" class="btn btn-primary btn-large">See Our Products!</a>
        </p>
    </header>

    <hr>

    <!-- Title
    <div class="row">
        <div class="col-lg-12">
            <h3>Top Products</h3>
        </div>
    </div>



    <div class="row text-center">

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h3>Feature Item</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Feature Item</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://www.tomiscolourpavilion.com/wp-content/uploads/2014/08/honey.jpg" alt="">
                <div class="caption">
                    <h3>Honey</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h3>Feature Item</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

    </div> -->


    <hr>


</div>
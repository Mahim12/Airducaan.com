<!DOCTYPE HTML>
<html manifest="app_cache.appcache">

<head>
    <title>Incomm</title>
    <link rel="icon" type="image/svg" href="assets/photos/icons/favicon.svg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    </style>
</head>

<body style="background-color:#f9f9f9;">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand" href="Home.php"><img src="assets/photos/icons/Logo1.svg" alt="image" style="height:55px; object-fit:cover;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mr-lg-4">
                <li class="nav-item">
                    <a class="nav-link navs-link" href="About.html">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navs-link" href="Contact.php" href="#">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link navs-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form id="search-form" method="post" name="name" action="Search" target="_self"><button class="dropdown-item" name="name" value="Fashion & Lifestyle">Fashion & Lifestyle</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="Search.php" target="_self"><button class="dropdown-item" name="name" value="Gadgets & Electronics">Gadgets and Electronics</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="Search.php" target="_self"><button class="dropdown-item" name="name" value="Babies & Toys">Babies & Toys</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="Search.php" target="_self"><button class="dropdown-item" name="name" value="Sports">Sports</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="Search.php" target="_self"><button class="dropdown-item" name="name" value="Books">Books</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="Search.php" target="_self"><button class="dropdown-item" name="name" value="Home & Lifestyle">Home & Lifestyle</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="Search.php" target="_self"><button class="dropdown-item" name="name" value="Accessories">Accessories</button></form>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" name="name" action="Search.php" target="_self">
                <input class="form-control mr-sm-2" name="name" type="search" placeholder="I want to compare. . ." required>
                <button class="btn btn-danger my-2 my-sm-0" type="submit" onsubmit="return OnButton1();">Search</button>
            </form>
        </div>
    </nav>
    <div class="page-footer hide-on-desktop-only">
        <div class="search-container">
            <form method="post" name="name" action="Search.php" target="_self">
                <input type="search" placeholder="I want to compare. . ." name="name" required>
                <button onsubmit="return OnButton1();" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="container mt-5 mt-lg-3">
        <div class="row">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/photos/icons/imageed.svg" alt="image" style="width:100%; height:100%; object-fit:contain;" />
                            <div class="carousel-caption d-none d-md-block">
                                <p>...</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--
        <div class="row mt-4">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div style="text-align:center; text-transform:uppercase;">
                    <h4>Compare Prices For Anything!</h4>
                </div>
            </div>
        </div>
        -->
        <div class="row mt-4">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div class="popular-container">
                    <div class="row mt-4">
                        <div class='col-lg-12 col-md-12 col-12 pl-5'>
                            <div style="text-align:left; text-transform:uppercase;">
                                <h3 class="category-titles">Most Popular</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row p-lg-3 p-5 mb-3">
                        <?php
                        $images = array();
                        $directory = 'assets/photos/products';
                        $files = scandir($directory);
                        shuffle($files);
                        if ($handle = opendir($directory)) {
                            while (false !== ($file = readdir($handle))) {
                                if (preg_match("/\.png$/", $file)) $images[] = $file;
                                elseif (preg_match("/\.jpg$/", $file)) $images[] = $file;
                                elseif (preg_match("/\.jpeg$/", $file)) $images[] = $file;
                                elseif (preg_match("/\.gif$/", $file)) $images[] = $file;
                            }
                            shuffle($images);
                            closedir($handle);
                        }
                        ?>
                        <?php
                        foreach ($files as $item) {
                            if ($item != '.' && $item != '..') {
                                $path = $directory . '/' . $item;
                                $x = substr($item, 0, strrpos($item, '.'));
                                echo '<div class="col-lg-2 col-md-2 col-12 mb-lg-2 mb-md-2 mb-5"><form id="search-form" method="post" name="name" action="search.php" target="_self"><button class = "gallery-image-button" name="name" value="' . $x . '"><div class="popular-img-container"><img class="card-img-top" src="' . $path . '" alt="image" style="width:100%; height:100%; object-fit:contain;"/><div style="text-align:center; text-transform:uppercase;"><p>' . $x . '</p></div></div></button></form></div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class='col-lg-4 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div class='card'>
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/boots.jpg' alt='image' style='width:100%; height:100%; object-fit:contain;'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>COMPARE SHOES</h5>
                        <p>Wanna buy the shoes you always dreamed of? We want to help you take the first step! COMPARE NOW.</p>
                        <form action="search.php" method="post" target="_self"><button class='btn btn-danger' name="name" value="shoes">TRY IT OUT NOW</button></form>
                    </div>
                </div>
            </div>
            <div class='col-lg-4 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div class='card'>
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/jackets.jpg' alt='image' style='width:100%; height:100%; object-fit:contain;'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>COMPARE JACKETS</h5>
                        <p>Winter is coming! This simple and intuitive webapp makes it incredibly easy for you to find the jackets that best suit YOU.</p>
                        <form action="search.php" method="post" target="_self"><button class='btn btn-danger' name="name" value="jackets">TRY IT OUT NOW</button></form>
                    </div>
                </div>
            </div>
            <div class='col-lg-4 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div class='card'>
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/cellphones.jpg' alt='image' style='width:100%; height:100%; object-fit:contain;'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>COMPARE MOBILES</h5>
                        <p>Stay in touch with the people you love the most by giving them the best phones. So why wait to buy the perfect gift?</p>
                        <form action="search.php" method="post" target="_self"><button class='btn btn-danger' name="name" value="mobiles">TRY IT OUT NOW</button></form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div style="text-align:left; text-transform:uppercase; color:#dc3545;">
                    <h4>Fashion And Lifestyle</h4>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dace";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "select * from `fashion+&+lifestyle` ORDER BY rand()";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><a href = '" . $row['weblink'] . "' class='card-link' target='_blank'><div class='card'><div class='img-container'><img class='card-img-top' src='" . $row['imagelink'] . "' alt='" . $row['imagelink'] . "' style = 'width:100%; height:100%; object-fit:contain;'/></div><div class='card-body'><h5 class='card-title'>" . $row['price'] . "</h5> <p class='card-text'>" . $row['description'] . "</p> <p class='card-text'>" . $row['vendor'] . "</p><button class='btn btn-shop mt-lg-3 mt-md-3 mt-3'>SHOP</button></div></div></a></div>";
                }
            }
            ?>
        </div>
        <div class="row mt-3">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div style="text-align:left; text-transform:uppercase; color:#dc3545;">
                    <h4>Gadgets And Electronics</h4>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dace";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "select * from `gadgets+and+electronics` ORDER BY rand()";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><a href = '" . $row['weblink'] . "' class='card-link' target='_blank'><div class='card'><div class='img-container'><img class='card-img-top' src='" . $row['imagelink'] . "' alt='" . $row['imagelink'] . "' style = 'width:100%; height:100%; object-fit:contain;'/></div><div class='card-body'><h5 class='card-title'>" . $row['price'] . "</h5> <p class='card-text'>" . $row['description'] . "</p> <p class='card-text'>" . $row['vendor'] . "</p><button class='btn btn-shop mt-lg-3 mt-md-3 mt-3'>SHOP</button></div></div></a></div>";
                }
            }
            ?>
        </div>
        <div class="row mt-3">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div style="text-align:left; text-transform:uppercase; color:#dc3545;">
                    <h4>Babies And Toys</h4>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dace";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "select * from `babies+and+toys` ORDER BY rand()";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><a href = '" . $row['weblink'] . "' class='card-link' target='_blank'><div class='card'><div class='img-container'><img class='card-img-top' src='" . $row['imagelink'] . "' alt='" . $row['imagelink'] . "' style = 'width:100%; height:100%; object-fit:contain;'/></div><div class='card-body'><h5 class='card-title'>" . $row['price'] . "</h5> <p class='card-text'>" . $row['description'] . "</p> <p class='card-text'>" . $row['vendor'] . "</p><button class='btn btn-shop mt-lg-3 mt-md-3 mt-3'>SHOP</button></div></div></a></div>";
                }
            }
            ?>
        </div>
        <div class="row mt-3">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                <div style="text-align:left; text-transform:uppercase; color:#dc3545;">
                    <h4>Sports</h4>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dace";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "select * from `sports` ORDER BY rand()";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><a href = '" . $row['weblink'] . "' class='card-link' target='_blank'><div class='card'><div class='img-container'><img class='card-img-top' src='" . $row['imagelink'] . "' alt='" . $row['imagelink'] . "' style = 'width:100%; height:100%; object-fit:contain;'/></div><div class='card-body'><h5 class='card-title'>" . $row['price'] . "</h5> <p class='card-text'>" . $row['description'] . "</p> <p class='card-text'>" . $row['vendor'] . "</p><button class='btn btn-shop mt-lg-3 mt-md-3 mt-3'>SHOP</button></div></div></a></div>";
                }
            }
            ?>
        </div>
    </div>
    <!-- Footer 
    <div class="page-footer hide-on-mobile-and-tablet">
        <div class="search-container">
            <form method="post" name="name" action="combine.php" target="_self">
                <input type="search" placeholder="I want to compare. . ." name="name" required>
                <button onsubmit="return OnButton1();" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
     Footer -->
    <!-- Footer hiding right now for mobile and tablets
    <div class="footer hide-on-desktop-only">
        <div class="row hide-on-desktop-only">
            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0">
                <a href="home.php" class="active"><img src="assets/photos/icons/home.png" style='width:100%; height:50px; object-fit:contain;' /></a>
            </div>
            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0 pt-1">
                <a href="about.php"><img src="assets/photos/icons/about.png" style='width:100%; height:45px; object-fit:contain;' /></a>
            </div>
            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0 pt-1">
                <a href="contact.php"><img src="assets/photos/icons/contact.png" alt="photo" style='width:100%; height:48px; object-fit:contain;' /></a>
            </div>
        </div>
    </div>
-->
    <script>
        function OnButton1() {
            document.name.action = "searchtrialgajabko.php" // First target    
            document.name.submit(); // Submit the page
            document.name.action = "searchtrialthulo.php" // Second target   
            document.name.submit();
            document.name.action = "searchtrialmuncha.php" // third target   
            document.name.submit(); // Submit the page
            document.name.action = "searchtrialsastodeal.php" // third target   
            document.name.submit(); // Submit the page
            return true;
        }

        $(document).ready(function() {
            $(".card-img-top").on("error", function() {
                $(this).attr('src', 'assets/photos/icons/Logo1.svg');
            });
        });

        function loadlink() {
            $('#contents').load('loadingonmain.php', function() {
                $(this).unwrap();
            });
        }
        loadlink(); // This will run on page load
        /*
        var counter = 0;
        $(window).scroll(function() {
            if ($(window).scrollTop() == $(document).height() - $(window).height() && counter < 2) {
                appendData();
            }
        });
        function appendData() {
            var html = '';
            for (i = 0; i < 16; i++) {
                html +=
                    "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><div class = 'loading'><div class='img-container'><img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' /> </div> <div class='p-2'><img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .'style='width:100%; height:100%; object-fit:contain;' /></div><div class='p-2'><img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .'style='width:100%; height:100%; object-fit:contain;' /></div><div class='p-2'><img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .'style='width:100%; height:100%; object-fit:contain;' /></div></div></div>";
            }
            $('.another').append(html);
            counter++;
        }
        */
    </script>
</body>

</html>
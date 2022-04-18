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
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Fashion & Lifestyle">Fashion & Lifestyle</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Gadgets & Electronics">Gadgets and Electronics</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Babies & Toys">Babies & Toys</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Sports">Sports</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Books">Books</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Home & Lifestyle">Home & Lifestyle</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Accessories">Accessories</button></form>
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
        // define variables and set to empty values
        $firstnameErr = $lastnameErr = $emailErr = $genderErr = $mobileErr = $dobErr = $commentErr = "";
        $firstname = $lastname = $email = $gender = $mobile = $dob = $comment = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["firstname"])) {
                $firstnameErr = "First name is required";
            } else {
                $firstname = test_input($_POST["firstname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
                    $firstnameErr = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["lastname"])) {
                $lastnameErr = "Last name is required";
            } else {
                $lastname = test_input($_POST["lastname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
                    $lastnameErr = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }
            if (empty($_POST["mobile"]) && !is_numeric($_POST["mobile"])) {
                $mobileErr = "Correct format for mobile number is required";
            } else {
                $mobile = test_input($_POST["mobile"]);
            }
            if (empty($_POST["dob"])) {
                $dobErr = "Date of birth is required";
            } else {
                $dob = test_input($_POST["dob"]);
            }
            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <div class="row mb-lg-5 mb-md-5 mb-5">
            <div class="offset-lg-3 offset-md-3 col-lg-6 col-md-6 col-12">
                <div class="contact-form-background" id="contact">
                    <div class="row mt-3">
                        <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                            <div style="text-align:center; text-transform:uppercase; color:#dc3545;">
                                <h4>CONNECT WITH US</h4>
                            </div>
                        </div>
                        <div class='col-lg-12 col-md-12 col-12 mb-lg-2 mb-md-2 mb-2'>
                            <div style="text-align:center; text-transform:uppercase;">
                                <p>Leave us a message</p>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="submit.php" target="_self">
                        <!--php echo htmlspecialchars($_SERVER["submitform.php"]); -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><label for="fname">First Name</label></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><input type="text" class="contact-form" id="fname" name="firstname" placeholder="Your name.." required></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><span class="error"><?php echo $firstnameErr; ?></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><label for="lname">Last Name</label></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><input type="text" class="contact-form" id="lname" name="lastname" placeholder="Your last name.." required></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><span class="error"><?php echo $lastnameErr; ?></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><label for="email">Email ID</label></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><input type="text" class="contact-form" id="email" name="email" placeholder="Your email address.." required></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><span class="error"><?php echo $emailErr; ?></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><label for="mobile">Mobile</label></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><input type="text" class="contact-form" pattern="[1-9]{1}[0-9]{9}" id="mobile" name="mobile" placeholder="Your mobile number.." minlength="10" maxlength="10" required></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><span class="error"><?php echo $mobileErr; ?></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><label for="dob">D.O.B</label></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><input type="date" class="contact-form" id="dob" name="dob" placeholder="Your date of birth.." pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><span class="error"><?php echo $dobErr; ?></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><label for="gender">Gender</label></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"> <select id="gender" name="gender" required>
                                    <option name="gender" value="female">Female</option>
                                    <option name="gender" value="male">Male</option>
                                    <option name="gender" value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><span class="error"><?php echo $genderErr; ?></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><label for="comment">Comment</label></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><textarea class="boxsizingBorder" name="comment" rows="10"></textarea></div>
                        </div>

                        <button class="contact-form-submit" type="submit" onsubmit="return OnButton2();">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
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
    </Script>
</body>

</html>
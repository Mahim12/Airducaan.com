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
        .contact-form,
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid white;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .boxsizingBorder {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid white;
        }

        .animated-container {
            background-color: white;
            height: 545px;
            padding: 50px;
        }
    </style>
</head>

<body style="background-color:#f9f9f9;">

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
            <div class="col-lg-6 col-md-6 col-12 p-0">
                <div class="animated-container">
                    <img class='card-img-top' src='forjob/dale.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
                <div class="contact-form-background" id="contact">

                    <form method="post" action="submit.php" target="_self">
                        <!--php echo htmlspecialchars($_SERVER["submitform.php"]); -->
                        <div class="row">
                            <div class="col-lg-2 col-md-12 col-12 mt-4"><label for="fname">Name:</label></div>

                            <div class="col-lg-10 col-md-12 col-12"><input type="text" class="contact-form" id="fname" name="firstname" placeholder="Your name.." required></div>
                        </div>
                        <div class="row">


                            <div class="col-lg-2 col-md-12 col-12 mt-4"><label for="lname">Profession:</label></div>
                            <div class="col-lg-10 col-md-12 col-12"><input type="text" class="contact-form" id="lname" name="lastname" placeholder="Your last name.." required></div>

                        </div>

                        <div class="row">


                            <div class="col-lg-2 col-md-12 col-12 mt-4"><label for="lname">Lives in:</label></div>
                            <div class="col-lg-10 col-md-12 col-12"><input type="text" class="contact-form" id="lname" name="lastname" placeholder="Your last name.." required></div>

                        </div>



                        <div class="row mt-4">
                            <div class="col-lg-12 col-md-12 col-12"><label for="comment">Bio:</label></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"><textarea class="boxsizingBorder" name="comment" rows="10"></textarea></div>
                        </div>


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
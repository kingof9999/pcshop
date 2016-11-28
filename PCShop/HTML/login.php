<?php 
    require_once("models/sign-in.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="../../PCShop-Admin/PCShop-Admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../../PCShop-Admin/PCShop-Admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../../PCShop-Admin/PCShop-Admin/css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="../../PCShop-Admin/PCShop-Admin/css/font-awesome.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="../../PCShop-Admin/PCShop-Admin/css/style.css" rel="stylesheet">
    <link href="../../PCShop-Admin/PCShop-Admin/css/style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <?php 
            $result		= Setting::homeSignin();
            if(isset($msg)) echo $msg;
            if(isset($msg1)) echo $msg1;
            if(isset($email_signup_error)) echo $email_signup_error;
            if(isset($password_signup_error)) echo $password_signup_error;
        ?>
    </form>

</div>


</body>
</html>

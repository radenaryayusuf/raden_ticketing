<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login 2 | Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="<?php echo base_url()?>assets/assets/images/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/animate-it/animate.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/css/style-default.css">
</head>

<body class="login2">
      
   
    
    <!-- Forgot Div Start Here -->
    <div class="login animated flipInY" id="forgotDiv">  
        <div class="text-center">
            <img src="<?php echo base_url()?>assets/assets/images/logo-a.png" alt="logo">
        </div>

        <form role="form" class="ForgotForm">

            <div class="clearfix">
                <p>Enter your e-mail address below to reset your password.</p>
            </div>

            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="forgot_email" placeholder="email@example.com">
                </div>
            </div>                        

            <div class="clearfix">
                <button type="button" class="btn btn-danger pull-left lnkLogin">BACK</button>
                <button type="submit" class="btn btn-primary pull-right">SUBMIT</button>
            </div>     

        </form>


    </div>  
    <!-- Forgot Div End Here -->
    
    <!-- Register Div Start Here -->
    <div class="login animated flipInY" id="registerDiv">  
        <div class="text-center logo">
            <img src="assets/images/logo-c.svg" alt="logo">
        </div>

        <form role="form" class="registerForm">
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="text" class="form-control" name="register_fulName" placeholder="Full Name">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="register_email" placeholder="email@example.com">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="forgot_password" placeholder="Password">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="forgot_cpassword" placeholder="Confirm Password">
                </div>
            </div>                        

            <div class="clearfix">
                <button type="button" class="btn btn-danger pull-left lnkLogin">BACK</button>
                <button type="submit" class="btn btn-primary pull-right">REGISTER</button>
            </div>     

        </form>

    </div>  
    <!-- Register Div End Here -->

    <script type="text/javascript" src="assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/plugins.js"></script>
    
    <script type="text/javascript" src="assets/plugins/validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/plugins/validation/additional-methods.min.js"></script>

    <script type="text/javascript" src="assets/js/page-login2.js"></script>
</body>
</html>
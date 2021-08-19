<?php  
session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);


if(isset($_POST['submit']))
{
$tmpname = $_FILES['idproof']['tmp_name'];    
$path = getcwd().DIRECTORY_SEPARATOR.'landlordid';
$filename = $path.DIRECTORY_SEPARATOR.$_FILES['idproof']['name'];
$fil = $_FILES['idproof']['name'];
$success = move_uploaded_file($tmpname, $filename);        

    $id     = $_POST["id"];
    $fname   = $_POST["fname"];
    $lname   = $_POST["lname"];
    $email  = $_POST["email"];
    $mobile = $_POST["mobile"];
    $state  = $_POST["state"];
    $city   = $_POST["city"];
    $street = $_POST["street"];
    $pincode= $_POST["pincode"];
    $password = $_POST["password"];
   

    $query = "INSERT INTO landlord
        (id,fname,lname,email,contact,state,city,street,pincode,password,proof)     
        VALUES
        ('$id','$fname','$lname','$email','$mobile','$state','$city','$street','$pincode','$password','$fil');";
    

$success = $db->query($query);



if($success)
{
    header("Location:landlord_homepage.php");
    $_SESSION["id"] = $id;
    
}
        
else
{
    $error_message = $db->error;
    $done =  "<p>An error occured : $error_message </p>";
}        

}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Signin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
#logo{
    height:100px; 
    width:100px; 
    float:left;
    margin-left: 3px; 
    margin-top: 0px;
    padding: 0px;
}        

html, body {
  padding: 0px;
  margin: 0px;
  height: 100%;
}



.border-md {
    border-width: 2px;
}

.btn-facebook {
    background: #405D9D;
    border: none;
}

.btn-facebook:hover, .btn-facebook:focus {
    background: #314879;
}

.btn-twitter {
    background: #42AEEC;
    border: none;
}

.btn-twitter:hover, .btn-twitter:focus {
    background: #1799e4;
}


body {
    min-height: 100vh;
}

.form-control:not(select) {
    padding: 1.5rem 0.5rem;
}

select.form-control {
    height: 52px;
    padding-left: 0.5rem;
}

.form-control::placeholder {
    color: #ccc;
    font-weight: bold;
    font-size: 0.9rem;
}
.form-control:focus {
    box-shadow: none;
}

        </style>
    </head>
    <body>



<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
      <img src="logo.png" id="logo">
        <div class="btn-group btn-group-lg">
            <a href="landlordlogin.php"><button type="button" class="btn btn-primary">Login</button></a>
                <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
        </div>
  </div>
</nav>            
<br><br><br><br>

<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Create an Account</h1>
            <p class="font-italic text-muted mb-0">Enter the required information for account. You need to fill all the fields to begin with your journey at Terrific Estate</p>
            
        </div>

        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="landlordsignin.php" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-primary"></i>
                            </span>
                        </div>
                        <input id="email" type="text" name="id" placeholder="Unique Id" class="form-control bg-white border-left-0 border-md">
                    </div>

                    
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="fname" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                   
                    
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="mobile" placeholder="Contact" class="form-control bg-white border-left-0 border-md">
                    </div>


                   
                    
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-location-arrow text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="state" placeholder="State" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-globe text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="city" placeholder="City" class="form-control bg-white border-left-0 border-md">
                    </div>

                   
                    
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-map-marker text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="text" name="street" placeholder="Street/Village Name/House Number" class="form-control bg-white border-left-0 border-md">
                    </div>

                    


                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="pincode" placeholder="Area Pincode" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="postoffice" placeholder="Nearest Post Office" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <br><br>
                    
                    
                    <div class="input ml-3">
                        <div class="title"><b> Id Proof</b></div>
                            <input class="text" type="file" placeholder="Upload File..." class="proof" name='idproof' required/>
                    </div>
                    
                    <br><br>
                    <br><br>

                    
                    
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                            <input type="submit" name="submit" value="Craete Account" class="submit btn btn-primary btn-block py-2"/>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


    
    </body>
</html>


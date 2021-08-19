<?php  
session_start();

$message='';    

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);


if(isset($_POST['submit']))
	{

    $id          =   $_POST["id"];
    $password    =   $_POST["password"];

    $query = "Select * from landlord where id='$id' and password='$password'";
    
    $rec = $db->query($query);
    $count = mysqli_num_rows($rec);
    
    if ($count>0)
    {
        
    header("Location:landlord_homepage.php");
    $_SESSION["id"] = $id;
    

    }
    
    else
    {
        $message = "Access denied";
    }
            
        }


        
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

#logo{
    height:100px; 
    width:100px; 
    float:left;
    margin-left: 3px; 
    margin-top: 0px;
    padding: 0px;
}        

  .border {
    display: inline-block;
    width: 130px;
    height: 30px;
  }
  
  span#border {
    display: inline-block;
    width: 130px;
    height: 70px;
    margin: 2%;
    background-color: #555;
  }            
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 100px auto;
}
.wrapper{
  width: 100%;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #16a085;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #16a085;
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover{
  background: #12876f;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}


        </style>
        
    </head>
    
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
      <img src="logo.png" id="logo">
        <div class="btn-group btn-group-lg">
            <a href="landlordsignin.php"><button type="button" class="btn btn-primary">New Account</button></a>
                <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
        </div>
  </div>
</nav>            
<br><br><br><br>
    <div class="container">
      <div class="wrapper">
        <div class="title bg-primary"><span>Login</span></div>
        <form action="landlordlogin.php" method="post">
          <div class="row">
              <i class="fa fa-user bg-primary" aria-hidden="true"></i>
            <input type="text" placeholder="ID" name="id" required>
          </div>
          <div class="row">
            <i class="fa fa-lock bg-primary" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <br><br>
          <div class="row button">
            <input class="bg-primary" name="submit" type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="landlordsignin.php">New Account</a></div>
        </form>
      </div><br>
        <center><h1>  <?php if(isset($message)){echo $message;}?> </h1></center>
    </div>
<br><br>
      
        
                
<br><br>
</body>
</html>
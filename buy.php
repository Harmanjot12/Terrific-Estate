<?php 
session_start();
$id = $_SESSION['id'];

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);

$query3 ="SELECT * FROM images";

$result = $db->query($query3);

if ($result == false)
{
    $error_message = $db->error;
    echo "<p>An error occured : $error_message </p>";
}

$row_count = $result->num_rows;


for($i=0 ; $i<$row_count; $i++)
{
$propimg = $result->fetch_assoc();
}

$_SESSION["id"] = $id;    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Buy Property</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <style>
#logo{
    height:100px; 
    width:100px; 
    float:left;
    margin-left: 3px; 
    margin-top: 0px;
    padding: 0px;
}        



a{
    text-decoration: none;
}
        </style>    
    </head>
    <body>
        
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand ml-5" href=""><img src="logo.png" id="logo">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto m-4">
                
      <li class="nav-item">
        <a href="sellproperty.php" class="btn border border-primary m-2" role="button">Sell / Rent</a>
      </li>
      <li class="nav-item">
        <a href="property_images.php" class="btn btn-primary m-2" role="button">View Images</a>
      </li>
    
    </ul>
    
<div class="btn-group">
    <a href="property_homepage.php" class="btn btn-primary" role="button">Home</a>  
    <a href="rent.php" class="btn btn-primary" role="button">Rent</a>  
    <a href="admin_upload_images.php" class="btn btn-primary" role="button">Attach Images</a>  
    <a href="visit.php" class="btn btn-primary" role="button">Book Visit</a>  
    <a href="admin_logout.php" class="btn btn-primary" role="button">Logout</a>  
</div>
      
</div>
        
</nav>
        <br><br><br><br><br><br><br><br><br><br><br>        

         
<div class="container">
    <div class="row">   
  
<?php
$query ="SELECT * FROM property where sellrent = 'sell'";
$result = $db->query($query);
if ($result == false)
{
    $error_message = $db->error;
    echo "<p>An error occured : $error_message </p>";
    
}

$row_count = $result->num_rows;

for($i=0 ; $i<$row_count; $i++)
{
$prop = $result->fetch_assoc();
?>
         
<div class="col-sm-4 pb-4">
<div class="card-deck">                    
  <div class="card" style='height:550px;'>
    <div class="card-body text-center">
        <button type="button" class="btn btn-primary float-right">
            Property Id <span class="badge badge-light"><?php echo $prop['propertyid']?></span>
        </button> 
        <button type="button" class="btn  float-left">
            <span class="badge badge-light"><?php echo $prop['type'] ?> for <?php echo $prop['sellrent'] ?></span>
        </button><br><br><br>
      <h5 class="text-center"><?php echo $prop['Street'] ." " .$prop['distict'] ." " . $prop['pincode'] ." " . $prop['state'] ." " . $prop['country'] ?></h5>
      <br>
      <p class="info text-success m-3 p-2">
      <?php echo $prop['info'];?>
        Here you can check property <a href='property_images.php'>images</a>
        <br><br>
      </p>
      
      <br>
      
      <ul class="text-left">
          <li>Price <?php echo $prop['price'] ?> </li>
          <li>Area <?php echo $prop['size'] ?></li>
          <li>Rooms <?php echo $prop['rooms'] ?> </li>
          <li>Bathrooms <?php echo $prop['bathrooms'] ?></li>
          <li>Government Approved ?  <?php echo $prop['gov'] ?></li>
      </ul>
      
    </div><br><br>
  </div>
    

</div></div>
<?php		

}
    $propertyid = $prop['propertyid'];
    $_SESSION["propertyid"] = $propertyid;
?>    
</div>
</div>

<div class="container-fluid">
    <div class="row"><div class="col-sm-12">
    <?php include 'footer.php';?>
    </div></div>        
</div>

    </body>
</html>




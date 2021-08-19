<?php  
session_start();
$id = $_SESSION['id'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <title>Landlord Home Page</title>

        <style>
#logo{
    height:100px; 
    width:100px; 
    float:left;
    margin-left: 3px; 
    margin-top: 0px;
    padding: 0px;
}        


.bgimg {
    background-image: url('house5.jpg');
    background-repeat: no-repeat;
    background-size: 100% 600px;
}

a{
    text-decoration: none;
}
        </style>    
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=""><img src="logo.png" id="logo">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto m-4">
      
        
        
      <li class="nav-item">
          <a href="view_landlord.php" class="btn btn-primary m-1" role="button">View</a>
      </li>
      
      <li class="nav-item">
          <a href="admin_upload_images.php" class="btn btn-primary m-1" role="button">Add Images</a>
      </li>
      
      <li class="nav-item">
          <a href="edit_landlord.php" class="btn btn-primary m-1" role="button">Edit</a>
      </li>
      
      <li class="nav-item">
          <a href="delete_landlord.php" class="btn btn-primary m-1" role="button">Delete</a>
      </li>
    </ul>
    <ul class="navbar-nav m-4">
      
        <li class="nav-item">  <a href="landlord_all_properties.php" class="btn btn-primary m-2" role="button">My Properties</a></li>
        <li class="nav-item">  <a href="sellproperty.php" class="btn btn-primary m-2" role="button">Add Property</a></li>
        <li class="nav-item">  <a href="admin_logout.php" class="btn btn-primary m-2" role="button">Logout</a></li>
          
    </ul>     
  </div>
</nav>    

    <div class="container-fluid">
        <div class="row bgimg">
            <div class="col-sm-12"> <br><br><br>   
                <h6 class="text-success m-4 font-weight-bolder" style="font-size:30px;">SELL or RENT your properties</h6>
                   <br><br>
                   <div class="col-sm-6">
                   <p class="text-dark m-5 font-weight-bolder" style="font-size:30px;">
                    Fill the require information of belonging you want to sell by clicking the option <a class="text-
                                                                                                         
                                                                                                         
                                                                                                         decoration-none" href="sellproperty.php" class="bg">sell property</a> and get highest price.</p>
                    </div>
                   <div class="col-sm-6"></div>
                    <br><br>
            </div>    
        </div>
        <br><br>
        <br><br>
        <div class="row p-3 m-4">
            <div class="col-sm-6">
                <p>
                Here are some properties which are sold or sometimes owner switch their mind to sell their plot,accomodation,farm house and others. So to avoid calls and mails for Terrific regarding respective property and keep buyers away from visitors, kindly <a href='delete_landlord.php'>delete property </a>from your account.
                <br><br>
                You can also <a href="admin_upload_images.php">upload images </a>of your property to rise number of visitor to your belongings by which price of you property will definitely hit a peak.  
                </p>
            </div>   
            
            <div class="col-sm-6">
            <p>
            Here you can check details of any of your property.You must know property id so that you can search you belongings.
            <a href='view_landlord.php'>view your property</a> and get all of your property details. 
            <br><br>
            Sometimes we need to change property price accoding to societies demand. You can also make change if any inappropriate information is uploaded with your property. <a href='edit_landlord.php'>Edit the details </a>of your belongings to attract huge traffic.
            </p>
            </div>   
        </div>
        
        <div class="row"><?php include 'footer.php';?></div>
 
    </div>
        
    
    </body>
</html>

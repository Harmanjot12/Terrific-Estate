<?php

session_start();
$id = $_SESSION['id'];

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home Page</title>
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
        
  .overflow{
    height: 400px;
    width: 90%;
    overflow: auto;
   }
        </style>
    </head>
<body>
<nav class="navbar navbar-light bg-light">
  
      <img src="logo.png" id="logo">
        <div class="btn-group btn-group-lg">
            <a href="admin_logout.php"><button type="button" class="btn btn-primary">Home</button></a>
            <a href="admin_logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
        </div>
  
</nav>    

<br><br>
       
    <div class="container">
        <h1>Enquries </h1>
        
            <div class="row">
                <div class="col-sm-8 overflow">
                   <div class="table-responsive">

  <table class="table table-responsive table-hover table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Sr. Num</th>
        <th>Date of Enquiry</th>
        <th>Full Name</th>
        <th>Contact Number</th>
      </tr>
    </thead>
    <tbody>

    
<?php 

$query ="SELECT * FROM enquiry
         ORDER BY srnum DESC ";

$result = $db->query($query);

if ($result == false)
{
    $error_message = $db->error;
    echo "<p>An error occured : $error_message </p>";
    
}

$row_count = $result->num_rows;


for($i=0 ; $i<$row_count; $i++)
{
        $property = $result->fetch_assoc();
        
        
    
    echo "<tr>";
    echo "<td>".$property['srnum']."</td>";
    echo "<td>".$property['Enqdate']."</td>";
    echo "<td>".$property['name']."</td>";
    echo "<td>".$property['number']."</td>";
    echo "</tr>";
}

?>
</table>
                   
                   </div>     
                </div>
                
                
                
                
                
                <div class="col-sm-1"></div><br><br><br>
                <div class="col-sm-3">
                <aside class="text-center">
                <a href='view_properties.php' class="aside">View all properties</a> <br> 
                <a href='view_property.php' class="aside">View property by ID</a> <br>
                <a href='sellproperty.php' class="aside">Add new property                 </a> <br>
                <a href='admin_upload_images.php' class="aside">Add images to property           </a> <br>
                <a href='admin_edit.php' class="aside">Edit particular property         </a> <br>
                <a href='admin_delete.php' class="aside">Delete property                 </a> <br><br>
    
                <a href='record_admin.php' class="aside">Admin Record                     </a> <br> 
                <a href='record_landlord.php' class="aside">Landlord Record                  </a> <br>
                <a href='record_seller.php' class="aside">Seller's Record                  </a> <br><br><br>

                <a href="sale_plot.php" class="aside">Plot For Sale</a><br>
                <a href="sale_flat.php" class="aside">Flat For Sale</a><br>
                <a href="sale_house.php" class="aside">House For Sale</a><br>
                <a href="sale_bangalow.php" class="aside">Bungalow For Sale</a><br>
                <a href="sale_farmhouse.php" class="aside">Farm House For Sale</a><br><br>
    
                <a href="rent_flat.php" class="aside">Flat For Rent</a><br>
                <a href="rent_house.php" class="aside">House For Rent</a><br>
                <a href="rent_bungalow.php" class="aside">Bungalow For Rent</a><br>
                <a href="rent_farmhouse.php" class="aside">Farm House For Rent</a><br><br>
                </aside>
            </div> 
        </div>
        <br><br><br>
        
</div>        



<br><br>


    <div class="container">
                <h1>Property Visit </h1>

            <div class="row">
                <div class="col-sm-8 overflow">
                   <div class="table-responsive">

  <table class="table  m-5 table-responsive table-hover table-striped table-bordered w-100">
    <thead class="thead-dark">
      <tr>
        <th>Property ID &emsp;</th>
        <th>Visitor ID &emsp;&emsp;</th>
        <th>Date of Visit &emsp;</th>
        <th>Time of Visit &emsp;</th>
      </tr>
    </thead>
    <tbody>

    
<?php 

$query2 =" SELECT * FROM visit";

$results = $db->query($query2);

if ($results == false)
{
    $error_message = $db->error;
    echo "<p>An error occured : $error_message </p>";
    
}

$row_count = $results->num_rows;


for($i=0 ; $i<$row_count; $i++)
{
        $propertys = $results->fetch_assoc();
        
        
    
    echo "<tr>";
    echo "<td>".$propertys['propertyid']."</td>";
    echo "<td>".$propertys['visitorid']."</td>";
    echo "<td>".$propertys['date']."</td>";
    echo "<td>".$propertys['time']."</td>";
    echo "</tr>";
}

?>
  </table>
                   
            </div>     
        </div>
    </div>
</div>        





<div class="container-fluid">
       <div class="row">
            <?php include 'footer.php';?>
        </div>
    
</div>
</body>
</html>

<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Plot for Sale</title>
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
h1{color:blue;}
        </style>    
    </head>
    <body>
    

<nav class="navbar navbar-light bg-light">
  
      <img src="logo.png" id="logo">
        <div class="btn-group btn-group-lg">
            <a href="admin_homepage.php"><button type="button" class="btn btn-primary">Home</button></a>
            <a href="admin_logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
        </div>
  
</nav>    
        <div class="container">
<br><br><br>
<h1><center>List of Flat on Rent</center></h1>



  <table class="table table-responsive table-hover table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Property ID</th>
        <th>Owner ID</th>
        <th>Sell/Rent</th>
        <th>Type</th>
        <th>Size</th>
        <th>Price</th>
        <th>Rooms</th>
        <th>Bathrooms</th>
        <th>Info</th>
        <th>Gov. Approval</th>
        <th>Country</th>
        <th>State</th>
        <th>Distict</th>
        <th>Street</th>
        <th>Pincode</th>
      </tr>
    </thead>
    <tbody>

<?php

$query ="SELECT * FROM property
         where sellrent='rent' and type='flat' 
         ORDER BY propertyid DESC ";

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
    echo "<td>".$property['propertyid']."</td>";
    echo "<td>".$property['ownerid']."</td>";
    echo "<td>".$property['sellrent']."</td>";
    echo "<td>".$property['type']."</td>";
    echo "<td>".$property['size']."</td>";
    echo "<td>".$property['price']."</td>";
    echo "<td>".$property['rooms']."</td>";
    echo "<td>".$property['bathrooms']."</td>";
    echo "<td>".$property['info']."</td>";
    echo "<td>".$property['gov']."</td>";
    
    echo "<td>".$property['country']."</td>";
    echo "<td>".$property['state']."</td>";
    echo "<td>".$property['distict']."</td>";
    echo "<td>".$property['Street']."</td>";
    echo "<td>".$property['pincode']."</td>";
    
    
    echo "</tr>";
}

?>

        </table>
    </div>


</body>
</html>

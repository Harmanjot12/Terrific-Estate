<?php  
session_start();
$id = $_SESSION['id'];
   
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);

if(isset($_POST["srch"]))
{
    
    $propertyid = $_POST['propertyid'];
    $qry2 = "select * from property where propertyid = '$propertyid'";
    $rec2 = mysqli_query($db, $qry2);
    
    $reccount = mysqli_num_rows($rec2);    
    
    if($reccount > 0)
    {
        while($row = mysqli_fetch_assoc($rec2))
        {
           
            
            $ssellrent = $row["sellrent"];
            $stype = $row["type"];
            $ssize = $row["size"];
            $sprice = $row["price"];
            $srooms = $row["rooms"];
            $sbathrooms = $row["bathrooms"];
            $sinfo = $row["info"];
            $sgov  = $row["gov"];
            $scountry = $row["country"];
            $sstate = $row["state"];
            $sdistict  = $row["distict"];
            $sStreet = $row["Street"];
            $spincode = $row["pincode"];}
    }
}



if(isset($_POST["update"]))
{
                
            $propertyid = $_POST["propertyid"];
            $ssellrent = $_POST["sellrent"];
            $stype = $_POST["type"];
            $ssize = $_POST["size"];
            $sprice = $_POST["price"];
            $srooms = $_POST["rooms"];
            $sbathrooms = $_POST["bathrooms"];
            $sinfo = $_POST["info"];
            $sgov  = $_POST["gov"];
            $scountry = $_POST["country"];
            $sstate = $_POST["state"];
            $sdistict  = $_POST["distict"];
            $sStreet = $_POST["Street"];
            $spincode = $_POST["pincode"];
            
            
       
    $qry3 = "update property 
            set sellrent = '$ssellrent' , type = '$stype',size = '$ssize',price = '$sprice',rooms = '$srooms',
            bathrooms = '$sbathrooms',info = '$sinfo' , gov = '$sgov' , country = '$scountry' , state = '$sstate' , distict = '$sdistict' , Street = '$sStreet',pincode = '$spincode' 
            where propertyid = '$propertyid'";
    $successs = mysqli_query($db, $qry3);
    
    
    
    if($successs)
    {
        $msg = "Record Successfully Updated !";
    }
    else
    {
        $msg = "Error ";
    }
            

}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Record</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
          
#logo{
    height:100px; 
    width:100px; 
    float:left;
    margin-left: 3px; 
    margin-top: 0px;
    padding: 0px;
}        


input[type=text],[type=email],[type=tel], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}        
        </style>
    </head>
    <body>
        

<nav class="navbar navbar-light bg-light">
  
      <img src="logo.png" id="logo">
        <div class="btn-group btn-group-lg">
            <a href="landlord_homepage.php"><button type="button" class="btn btn-primary">Home</button></a>
            <a href="delete_landlord.php"><button type="button" class="btn btn-primary">Delete</button></a>
            <a href="admin_logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
        </div>
  
</nav>    
<br><br><br>


<form id="form1"  name="myForm" action="edit_landlord.php" method="post">


<div>
  <select name="propertyid" id="propertyid">
  <option value="none" selected disabled hidden>Search Property By ID..</option>

    <?php
        $qry1  = "select propertyid from property
                 where ownerid = '$id';";
        $rec1 = mysqli_query($db, $qry1);
        
        while($row = mysqli_fetch_assoc($rec1))
        {
            echo "<option value='". $row["propertyid"] . "'>" . $row["propertyid"] . "</option>";
        }
    ?>
  </select>
        
            
<script>
    document.getElementById("propertyid").value = "<?php echo $propertyid; ?>";
</script> 
       
    
<input type ="submit" name="srch" value ="SHOW" /><br/><br/><br/><br/><br/>



    <label for="name">This property is for sell/rent</label>
    <input type="text" id="name"  name="sellrent"  value="<?php if(isset($ssellrent)){ echo $ssellrent;} ?>">
    
    <br><br>

    
    <label for="comment">This property is government approved</label>
    <input type="text" id="comment" name="gov" value="<?php if(isset($sgov)){ echo $sgov;} ?>">


    <br><br>

    
    <label for="name">Type of Property</label>
    <input type="text" id="name" name="type"  value="<?php if(isset($stype)){ echo $stype;} ?>">
    
    <br><br>

    
    <label for="gender">Size</label>
    <input type="text" id="gender" name="size" value="<?php if(isset($ssize)){ echo $ssize;} ?>">
    
    <br><br>
    
    <label for="fname">Price</label>
    <input type="text" id="fname"  name="price" value="<?php if(isset($sprice)){ echo $sprice;} ?>">
    
    <br><br>
    
    <label for="mname">Number of Rooms</label>
    <input type="text" id="mname" name="rooms" value="<?php if(isset($srooms)){ echo $srooms;} ?>">

    <br><br>
    
    <label for="contact">Number of Bathrooms</label>
    <input type="text" id="contact" name="bathrooms" value="<?php if(isset($sbathrooms)){ echo $sbathrooms;} ?>">

    <br><br>
    
    <label for="comment">Additional Information</label>
    <input type="text" id="comment" name="info" value="<?php if(isset($sinfo)){ echo $sinfo;} ?>">


    <br><br>
    
    <label for="fname">Country</label>
    <input type="text" id="fname"  name="country" value="<?php if(isset($scountry)){ echo $scountry;} ?>">
    
    <br><br>
    
    <label for="mname">State</label>
    <input type="text" id="mname" name="state" value="<?php if(isset($sstate)){ echo $sstate;} ?>">

    <br><br>
    
    <label for="contact">Distict</label>
    <input type="text" id="contact" name="distict" value="<?php if(isset($sdistict)){ echo $sdistict;} ?>">

    <br><br>
    
    <label for="comment">Street</label>
    <input type="text" id="comment" name="Street" value="<?php if(isset($sStreet)){ echo $sStreet;} ?>">
    
    <br><br>

    <label for="comment">Pincode</label>
    <input type="text" id="comment" name="pincode" value="<?php if(isset($spincode)){ echo $spincode;} ?>">


    <input type ="submit" name="update" value ="UPDATE" /><br/><br/><br/><br/><br/>
    <center><h1>  <?php if(isset($msg)){echo $msg;}?> </h1><center>  

</div>
</form>

<br>




</body>
</html>

<?php  
   
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);

if(isset($_POST["srch"]))
{
    $name = $_POST['name'];
    $qry2 = "select * from property where name= '$name'";
    $rec2 = mysqli_query($db, $qry2);
    echo $name;
    $reccount = mysqli_num_rows($rec2);    
    
    if($reccount > 0)
    {
        while($row = mysqli_fetch_assoc($rec2))
        {
           
            $sadmnum = $row["admnum"];
            $sdateadmn = $row["dateadmn"];
            $sfather = $row["father"];
            $smother = $row["mother"];
            $sphone = $row["phone"];
            $semail = $row["email"];
            $sgender = $row["gender"];
            $sbirth  = $row["birth"];
            $scomment = $row["comments"];
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Show Record</title>
        <style>
          

ul  {
    float:right;
    list-style-type: none; 
    font-size: 30px; 
    margin-top: 10px;
        margin-right:1px;
        color: #26D2E7;
    }



ul li {display: inline-block;}



ul li a {  color:blue;
        text-decoration: none; 
        padding:3px;
        margin: 1px; 
        
        }

ul li a:hover {opacity: 0.5;}


div.header{
    background-color:rgba(0,0,0,0.8); 
    width: 100%; 
    height:100px;
    padding: 0px; 
    margin-top: 0px;
    }


h2 {
    font-weight: bold;
    margin: 0;
    color:white;
    padding:20px;
    margin-top: 0px;
    font-size: 35px;
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
        
<header>
	<div class="header">
	<ul>

            <li> <a href="index.php">Home Page</a> </li>
	
	</ul>    
            <h2>LOGO</h2>
</div>
</header>
<br><br><br><br><br><br><br><br>


<form id="form1"  name="myForm" action="show.php" method="post">


<div>
    <select name="name" id="name">
    <option value="">Select Student Name</option>
    <?php
        $qry1  = "select name from student;";
        $rec1 = mysqli_query($db, $qry1);
        
        while($row = mysqli_fetch_assoc($rec1))
        {
            echo "<option value='". $row["name"] . "'>" . $row["name"] . "</option>";
        }
    ?>
    </select>

    
<script>
    document.getElementById("name").value = "<?php echo $name; ?>";
</script> 
    
<input type ="submit" name="srch" value ="SHOW" /><br/><br/><br/><br/><br/>



    <label for="name">Admission Number</label>
    <input type="text" id="name"  name="admnum"  value="<?php if(isset($sadmnum)){ echo $sadmnum;} ?>">
    
    <br><br>
    
    <label for="name">Admission Date</label>
    <input type="text" id="name" name="dateadm"  value="<?php if(isset($sdateadmn)){ echo $sdateadmn;} ?>">
    
    <br><br>

    
    <label for="gender">Gender</label>
    <input type="text" id="gender" name="gender" value="<?php if(isset($sgender)){ echo $sgender;} ?>">
    
    <br><br>
    
    <label for="fname">Father's Name</label>
    <input type="text" id="fname"  name="fname" value="<?php if(isset($sfather)){ echo $sfather;} ?>">
    
    <br><br>
    
    <label for="mname">Mother's Name</label>
    <input type="text" id="mname" name="mname" value="<?php if(isset($smother)){ echo $smother;} ?>">

    <br><br>
    
    <label for="contact">Contact Number</label>
    <input type="text" id="contact" name="contact" value="<?php if(isset($sphone)){ echo $sphone;} ?>">

    <br><br>
    
    <label for="email">Email Id</label>
    <input type="text" id="email" name="email" value="<?php if(isset($semail)){ echo $semail;} ?>">

    <br><br>
    
    <label>Date of Birth</label>
    <input type="text" id="email" name="birth" value="<?php if(isset($sbirth)){ echo $sbirth;} ?>">

    <br><br>
    
    <label for="comment">Additional Comment</label>
    <input type="text" id="comment" name="comment" value="<?php if(isset($scomment)){ echo $scomment;} ?>">

  </div>
</form>

<br>


</center>
</form>
</div></div>        
    </body>
</html>

<?php 
session_start();
$id = $_SESSION['id'];

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';
$db= mysqli_connect($host,$username,$password,$db_name);
$_SESSION["id"] = $id;

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
            $spropertyid = $row["propertyid"];
            $scountry = $row["country"];
            $sstate = $row["state"];
            $sdistict  = $row["distict"];
            $sStreet = $row["Street"];
            $spincode = $row["pincode"];}
    }
}

if(isset($_POST['submit']))
{
    $propertyid = $_POST["propertyid"];
    $visitorid  = $_POST["visitorid"];
    $date       = $_POST["date"];
    $time       = $_POST["time"];
    $query = "INSERT INTO visit
        (propertyid,visitorid,date,time)     
        VALUES
        ('$propertyid','$visitorid','$date','$time');";
        $success = $db->query($query);
            if($success)
                {
                $msg = "Visit booked !";
                }
            else
                {
                $msg = "Error ! Please try again ";
                }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Book Visit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

        
#logo{
    height:100px; 
    width:100px; 
    float:left;
    margin-left: 3px; 
    margin-top: 0px;
    padding: 0px;
}        
        @media screen and (max-width: 768px) {
            #container {
                margin: 20px auto;
                width: 95%;
            }
        }

        @media screen and (max-width: 480px) {
            h1 {
                font-size: 26px;
            }
            .underline {
                width: 68px;
            }
            #form_button {
                padding: 15px 25px;
            }
        }

        @media screen and (max-width: 420px) {
            h1 {
                font-size: 18px;
            }
            .icon {
                height: 35px;
                width: 35px;
            }
  
            .underline {
                width: 53px;
            }
            input[type='text'], [type='email'], select, textarea {
                font-size: 0.875em;
            }
        }
        

        
        *{
            box-sizing: border-box;
        }

        select#name{
            padding:11px;
            font-size:17px;
            border:1px solid grey;
            float:left;
            width: 40%;
            background: #f1f1f1;
            margin-left: 28%; 
        }

        form.example input[type=text] {
            padding: 11px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 30%;
            background: #f1f1f1;
            margin-left: 20%;
        }

        form.example button {
            float: left;
            width: 5%;
            padding: 11px;
            background:black;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: black;
        }

        button {
            overflow: visible;
        }
        
        h1{
            text-align: center;
        }
        
        button, select {
            text-transform: none;
        }

        button, input, select, textarea {
            color: #5A5A5A;
            font: inherit;
            margin: 0;
        }

        input {
            line-height: normal;
        }

        textarea {
            overflow: auto;
        }

        #container {
            border: solid 3px #474544;
            max-width: 768px;
            margin: 60px auto;
            position: relative;
        }   

        form {
            padding: 37.5px;
            margin: 50px ;
        }
        
        h1{
            color: #474544;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 7px;
            text-align: center;
            text-transform: uppercase;
        }

        .underline {
            border-bottom: solid 0px #474544;
            margin: -0.512em auto;
            width: 80px;
        }

        .icon_wrapper {
            margin: 50px auto 0;
            width: 100%;
        }

        .icon {
            display: block;
            fill: #474544;
            height: 50px;
            margin: 0 auto;
            width: 50px;
        }

        .email {
            float: right;
            width: 45%;
        }

        input[type='text'], [type='email'],  textarea {
            background: none;
            border: none;
            border-bottom: solid 2px #474544;
            color: #474544;
            font-size: 1.000em;
            font-weight: 400;
            letter-spacing: 1px;
            margin: 0em 0 1.875em 0;
            padding: 0 0 0.875em 0;
            text-transform: uppercase;
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        input[type='text']:focus, [type='email']:focus, textarea:focus {
            outline: none;
            padding: 0 0 0.875em 0;
        }

        .message {
            float: none;
        }

        .name {
            float: left;
            width: 45%;
        }

        .subject {
            width: 100%;
        }

        .telephone {
            width: 100%;
        }

        textarea {
            line-height: 150%;
            height: 150px;
            resize: none;
            width: 100%;
        }

        ::-webkit-input-placeholder {
            color: #474544;
        }

        :-moz-placeholder { 
            color: #474544;
            opacity: 1;
        }

        ::-moz-placeholder {
            color: #474544;
            opacity: 1; 
        }

        :-ms-input-placeholder {
            color: #474544;
        }

        #form_button {
            background: none;
            border: solid 2px #474544;
            color: #474544;
            cursor: pointer;
            display: inline-block;
            font-family: 'Helvetica', Arial, sans-serif;
            font-size: 0.875em;
            font-weight: bold;
            outline: none;
            padding: 20px 35px;
            float: right;
            text-transform: uppercase;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        #form_button:hover {
            background: #474544;
            color: #F2F3EB;
        }
select{
  margin-left:20%;
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 50%;
  background: #f1f1f1;
}


/* Style the submit button */
form.example button {
  float: left;
  width: 15%;
  padding: 9px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
    </head>
<body>

<nav class="navbar navbar-light bg-light">
  
      <img src="logo.png" id="logo">
        <div class="btn-group btn-group-lg">
            <a href="property_homepage.php"><button type="button" class="btn btn-primary">Home</button></a>
            <a href="admin_logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
        </div>
  
</nav>    
              

<form class="example" action="visit.php" method="post">
    <h1>Intersted in property ! </h1><br>                   
        <select name="propertyid" id="propertyid">
            <option value="none" selected disabled hidden>Search Property by ID..</option>

                <?php
                    $qry1  = "select propertyid from property;";
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
  
  <button type="submit" name="srch"><i class="fa fa-search"></i></button>
    
</form>
        

<div id="container">
    <form action="visit.php" method="post" id="contact_form">
        <div class="name">
        <label for="name"></label>
        Property id<input type="text" name="propertyid" id="name_input" value="<?php if(isset($spropertyid)){ echo $spropertyid;} ?>" required>
        </div>
 
        <div class="email">
        <label for="email"></label>
        Visitors id <input type="text"  name="visitorid" id="email_input" value="<?php echo $id; ?>" required>
        </div>
 
        <br><br><br>
   
        <div class="telephone">
        <label for="address"></label>
        <input type="text" name="address" id="telephone_input" required value="
        
        <?php 
            if(isset($scountry))
            if(isset($sstate))
            if(isset($sdistict))
            if(isset($sStreet))
            if(isset($spincode))
            { 
                echo  $sStreet ." " .  $sdistict . " " . $spincode . " " . $sstate . " " . $scountry;
            } 
        ?>">
        </div>
      
        <label for="time">Date of Visit</label>
        <input type="date" id="appt" name="date" required>

        <br><br><br>
      
        <label for="time">Time of Visit (00:00 AM/PM)</label><br>
        <input type="time" id="appt" name="time">
     
        <br><br><br>
 
        <div class="submit">
        <input type="submit" name="submit" value="Book Visit" id="form_button" />
        </div>
    </form>
</div>        
        
<h1>  <?php if(isset($msg)){echo $msg;}?> </h1>
<br><br>

</body>
</html>
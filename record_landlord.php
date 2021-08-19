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
        <title>Landlord Details</title>
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

table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: .8rem;
    width:100%;
}
th, td {
  padding: 10px;
}

td,
th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px;
}

td {
    text-align: center;
}

tr {
  display: table-row;
  vertical-align: inherit;
  border-color: inherit;
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

<br><br><br>
<div class="container">
<h1><center>List of All Landlords</center></h1>
<br><br>        

  <table class="table table-responsive table-hover table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Unique ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Mobile</th>
        	<th>State</th>
		<th>Distict</th>
		<th>Street</th>
		<th>Pincode</th>
                <th>ID Proof</th>
	<th>Password</th>
	      </tr>
    </thead>
    <tbody>

<?php 

$query ="SELECT * FROM landlord";

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
    echo "<td>".$property['id']."</td>";
    echo "<td>".$property['fname']."</td>";
    echo "<td>".$property['lname']."</td>";
    echo "<td>".$property['email']."</td>";
    echo "<td>".$property['contact']."</td>";
    echo "<td>".$property['state']."</td>";
    echo "<td>".$property['city']."</td>";
    echo "<td>".$property['street']."</td>";
    echo "<td>".$property['pincode']."</td>";
    echo "<td>"."<img scr='landlordid\proof'>"."</td>";
    echo "<td>".$property['password']."</td>";
    echo "</tr>";
}
    echo "</table>";

?>
  </table>


        </div>
</body>
</html>

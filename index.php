<?php  
    
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);

date_default_timezone_set('Asia/Kolkata');
$date =  date('d-m-Y l');

if(isset($_POST['submit']))
{
    $name     = $_POST["name"];
    $contact   = $_POST["contact"];
    
    
    $query = "INSERT INTO enquiry
         (name,number,Enqdate)     
            VALUES
         ('$name','$contact','$date');";
    

$success = $db->query($query);


}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Terrific Estate</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="style.css">
        <style>
        

#logo{
    height:100px; 
    width:100px; 
    float:left;
    margin-left: 3px; 
    margin-top: 0px;
    padding: 0px;
}        
  
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 ">
                    <img src="logo.png" id="logo" class="img-responsive center-block d-block mx-auto">
                </div> 
               </div> 
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                        <h1 class="text-center text-light">Welcome to <strong>Terrific</strong> Estate </h1>
                        <h4 class="text-center">A Reliable Real Estate Agent</h4>
                    
                </div>
            </div> 
            
            
            <br><br><br><br><br><br><br><br><br><br><br>
            
            <div class="row">
                <div class="col-sm-6"><br>
                    <h1 class="text-dark text-center p-3">Why Terrific ? </h1>
                    <p class="aboutus p-3">
                    Our customers choose us because we provide transparency in buying and selling properties and offer some of the best value in the industry.
                    We are collaborated with numerous property deals and agents by which we offer huge number of properties in different parts of country at affordable price. <br><br> 
                    <b>We follow all government guidelines and proceed with all paper work legally.</b>
                    </p>
                </div>
                
                <div class="col-sm-6 bg-light"><br><br>
                    <h1 class="text-center text-dark">Book Free Consultation </h1><br>
                        <form action="index.php" method="post">    
                        <center><input type="text" name="name" placeholder="Your Name"></center><br>
                        <center><input type="text" name="contact" placeholder="Mobile Number"></center>
                        <br>
        
                        <center>
                            <button type="submit" name="submit" class="button">Call Me</button><br>
                        </center>
                        </form> 
                    <br>
                </div>
            </div>
            
            <div class="row">
                    <?php include 'svg.php';?>
            </div>
            <div class="row">
                    <?php include 'sellrent.php';?>
            </div>
            
            <br><br>
            
            
            <div class="row bg-light">
                <div class="col-sm-5 m-4">
                    <h1 class="text-left ml-3 text-dark">Hi Partner !</h1>

                    <p class="rect9text">
                        We are associated with 100+ realestate business person's whole over the country and serving them huge profit's and valuable gifts.
                        <br><br>
                        <a href="landlordlogin.php">Login</a> here if you are already allianced with Terrific Estate and get in to your account where you can upload new properties, edit property details, delete a sold property from your timeline. 
                        <br><br>
                        We reward our partners with various types of gifts, national and inter-national tours with huge amount of money rewards apart from percentage on your clients property. 
                    </p>
                </div>
                
                <div class="col-sm-5 m-4">
                 <p class="rect9text">
                 <br><br>   Create <a href="landlordsignin.php"> New Account </a> for becoming a family member of world lagest real-estate extraction. 
                    <br><br>
                    Once you create your account all of our terms and conditions for collaboration will be sent on your email address. Don't forget to check your inbox on daily basis as all reward details we send on your email from our offical address only contact@terrific.com. We will not be responsible for ramifications occure if you trust and become victim of froudes.   </p>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4">
                    <img src="room1.jpg" style="width:100%; height: 100%" class="p-4"> 
                </div>
                <div class="col-sm-4">
                    <img src="room2.jpg" style="width:100%; height: 100%" class="p-4">
                </div>
                
                <div class="col-sm-4">
                    <img src="room3.jpg" style="width:100%; height: 100%" class="p-4">
               </div>
                
            </div>    
            
            <div class="row">
                <div class="col-sm-3">
                    <img src="room7.jpg" style="width:100%; height: 100%" class="p-4">
                </div>
                
                <div class="col-sm-6">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/vGGL7X_s4AQ"></iframe>
                  </div>
                </div>
            
                <div class="col-sm-3">
                    <img src="room8.jpg" style="width:100%; height: 100%" class="p-4">
                </div>
            </div>    
            
            <div class="row">
                <div class="col-sm-4">
                    <img src="room9.jpg" style="width:100%; height: 100%" class="p-4">
                </div>
                <div class="col-sm-4">
                    <img src="room5.jpg" style="width:100%; height: 100%" class="p-4">
                </div>
                
                <div class="col-sm-4">
                    <img src="room4.jpg" style="width:100%; height: 100%" class="p-4">
               </div>
            </div>    
            
            
                
                

           <?php include 'footer.php';?>
            
        </div>
            
            
    </body>
</html>

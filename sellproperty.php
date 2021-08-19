<?php 
session_start();

$id = $_SESSION['id'];

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'realestate';

$db= mysqli_connect($host,$username,$password,$db_name);

if(isset($_POST["submit"]))
    {
    
    $sellrent   = $_POST['sellrent'];
    $gov        = $_POST['gov'];
    $type       = $_POST['type'];
    $price      = $_POST['price'];
    $size       = $_POST['size'];
    $rooms      = $_POST['rooms'];
    $bathrooms  = $_POST['bathrooms'];
    $info       = $_POST['info'];
    $country    = $_POST['country'];
    $state      = $_POST['state'];
    $distict    = $_POST['distict'];
    $street     = $_POST['street'];
    $pincode    = $_POST['pincode'];
    
    
$_SESSION["street"] = $street;

$query = "INSERT INTO property
         (ownerid,sellrent,gov,type,price,size,rooms,bathrooms,info,country,state,distict,Street,pincode)     
            VALUES
         ('$id','$sellrent','$gov','$type','$price','$size','$rooms','$bathrooms','$info','$country','$state','$distict','$street','$pincode');";
    

$success = $db->query($query);



if($success)
{

    header("Location:thanks.php");
        
}
        
else
{
    $error_message = $db->error;
    $done =  "<p>An error occured : $error_message </p>";
}
   




    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sell Property</title>
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
    margin-left: 10px; margin-top: 0px;
    padding: 0px;}        

.id{    
    margin-right: 10px; 
    margin-right: 0px;
    color:#E8474C;;
    float:right;
    font-size:20px;
    
}
       
h2 {
    font-size:35px;
    font-family:Bauhaus 93;
    margin:0px;
    padding:0px;
    color: white;
	}
ul  {
	float:right;
 	list-style-type: none; 
  	font-size: 35px; 
  	margin-top: 25px;
	}
   
            
h1{color:#E8474C;}        
.form .button, .form .message, .customSelect, .form .select, .form .textarea, .form .text-input, .form .option-input + label, .form .checkbox-input + label, .form .label {
  padding: 0.75em 1em;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: none;
  line-height: normal;
  border-radius: 0;
  border: none;
  background: none;
  display: block;
}

.form .label {
  font-weight: bold;
  color: black;
  padding-top: 0;
  padding-left: 0;
  letter-spacing: 0.025em;
  font-size: 1.125em;
  line-height: 1.25;
  position: relative;
  z-index: 100;
}
.required .form .label:after, .form .required .label:after {
  content: " *";
  color: black;
  font-weight: normal;
  font-size: 0.75em;
  vertical-align: top;
}

.customSelect, .form .select, .form .textarea, .form .text-input, .form .option-input + label, .form .checkbox-input + label {
  font: inherit;
  line-height: normal;
  width: 100%;
  box-sizing: border-box;
  background: #222222;
  color: white;
  position: relative;
}
.customSelect:placeholder, .form .select:placeholder, .form .textarea:placeholder, .form .text-input:placeholder, .form .option-input + label:placeholder, .form .checkbox-input + label:placeholder {
  color: white;
}
.customSelect:-webkit-autofill, .form .select:-webkit-autofill, .form .textarea:-webkit-autofill, .form .text-input:-webkit-autofill, .form .option-input + label:-webkit-autofill, .form .checkbox-input + label:-webkit-autofill {
  box-shadow: 0 0 0px 1000px #111111 inset;
  -webkit-text-fill-color: white;
  border-top-color: #111111;
  border-left-color: #111111;
  border-right-color: #111111;
}
.customSelect:not(:focus):not(:active).error, .form .select:not(:focus):not(:active).error, .form .textarea:not(:focus):not(:active).error, .form .text-input:not(:focus):not(:active).error, .form .option-input + label:not(:focus):not(:active).error, .form .checkbox-input + label:not(:focus):not(:active).error, .error .customSelect:not(:focus):not(:active), .error .form .select:not(:focus):not(:active), .form .error .select:not(:focus):not(:active), .error .form .textarea:not(:focus):not(:active), .form .error .textarea:not(:focus):not(:active), .error .form .text-input:not(:focus):not(:active), .form .error .text-input:not(:focus):not(:active), .error .form .option-input + label:not(:focus):not(:active), .form .error .option-input + label:not(:focus):not(:active), .error .form .checkbox-input + label:not(:focus):not(:active), .form .error .checkbox-input + label:not(:focus):not(:active) {
  background-size: 8px 8px;
  background-image: linear-gradient(135deg, rgba(232, 71, 76, 0.5), rgba(232, 71, 76, 0.5) 25%, transparent 25%, transparent 50%, rgba(232, 71, 76, 0.5) 50%, rgba(232, 71, 76, 0.5) 75%, transparent 75%, transparent);
  background-repeat: repeat;
}
.form:not(.has-magic-focus) .customSelect.customSelectFocus, .form:not(.has-magic-focus) .customSelect:active, .form:not(.has-magic-focus) .select:active, .form:not(.has-magic-focus) .textarea:active, .form:not(.has-magic-focus) .text-input:active, .form:not(.has-magic-focus) .option-input + label:active, .form:not(.has-magic-focus) .checkbox-input + label:active, .form:not(.has-magic-focus) .customSelect:focus, .form:not(.has-magic-focus) .select:focus, .form:not(.has-magic-focus) .textarea:focus, .form:not(.has-magic-focus) .text-input:focus, .form:not(.has-magic-focus) .option-input + label:focus, .form:not(.has-magic-focus) .checkbox-input + label:focus {
  background: #4E4E4E;
}


.form .message {
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: 100;
  font-size: 0.625em;
  color: black;
}

.form .option-input, .form .checkbox-input {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
.form .option-input + label, .form .checkbox-input + label {
  display: inline-block;
  width: auto;
  color: #4E4E4E;
  position: relative;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  cursor: pointer;
}
.form .option-input:focus + label, .form .checkbox-input:focus + label, .form .option-input:active + label, .form .checkbox-input:active + label {
  color: #4E4E4E;
  float:right;
}
.form .option-input:checked + label, .form .checkbox-input:checked + label {
  color: white;
}

.form .button {
  font: inherit;
  line-height: normal;
  cursor: pointer;
  background: #E8474C;
  color: white;
  font-weight: bold;
  width: auto;
  margin-left: auto;
  font-weight: bold;
  padding-left: 2em;
  padding-right: 2em;
}
.form .button:hover, .form .button:focus, .form .button:active {
  color: white;
  border-color: white;
}
.form .button:active {
  position: relative;
  top: 1px;
  left: 1px;
}

.form {
  max-width: 40em;
  margin: 0 auto;
  position: relative;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  align-items: flex-end;
}
.form .field {
  width: 100%;
  margin: 0 0 1.5em 0;
}
@media screen and (min-width: 40em) {
  .form .field.half {
    width: calc(50% - 1px);
  }
}
.form .field.last {
  margin-left: auto;
}
.form .textarea {
  max-width: 100%;
}
.form .select {
  text-indent: 0.01px;
  text-overflow: "" !important;
}
.form .select::-ms-expand {
  display: none;
}
.form .checkboxes, .form .options {
  padding: 0;
  margin: 0;
  list-style-type: none;
  overflow: hidden;
}
.form .checkbox, .form .option {
  float: left;
  margin: 1px;
}
.customSelect {
  pointer-events: none;
}
.customSelect:after {
  content: "";
  pointer-events: none;
  width: 0.5em;
  height: 0.5em;
  border-style: solid;
  border-color: white;
  border-width: 0 3px 3px 0;
  position: absolute;
  top: 50%;
  margin-top: -0.625em;
  right: 1em;
  transform-origin: 0 0;
  transform: rotate(45deg);
}
.customSelect.customSelectFocus:after {
  border-color: white;
}
.magic-focus {
  position: absolute;
  z-index: 0;
  width: 0;
  pointer-events: none;
  background: rgba(255, 255, 255, 0.15);
  transition: top 0.2s, left 0.2s, width 0.2s;
  transform-style: preserve-3d;
  will-change: top, left, width;
  transform-origin: 0 0;
}        

.labels{
    color:black;
    font-size:25px;
    font-weight: bold;
}
        </style>
    </head>
    <body>
        
 

<nav class="navbar navbar-light bg-light">
  
      <img src="logo.png" id="logo">
        <div class="btn-group btn-group-lg">
        </div>
  
</nav>    
                    
<br><br><br><br><br><br>
        
       

<div class="container">
<form action='sellproperty.php' method="post" class='form'>
    
  
  
 
  <div class='field'>
    <label class='label'>Sell / Rent ?</label>
    <ul class='options'>
      <li class='option'>
        <input class='option-input' id='option-00' name='sellrent' type='radio' value='Sell'>
        <label class='option-label' for='option-00'>Sell</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-01' name='sellrent' type='radio' value='Rent'>
        <label class='option-label' for='option-01'>Rent</label>
      </li>
    </ul>
  </div>
  
  
<br><br>  
  
<br><br>  
 
  <div class='field'>
    <label class='label'>Property is government approved ?</label>
    <ul class='options'>
      <li class='option'>
        <input class='option-input' id='option-000' name='gov' type='radio' value='Yes'>
        <label class='option-label' for='option-000'>Yes &nbsp;</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-001' name='gov' type='radio' value='No'>
        <label class='option-label' for='option-001'>No &nbsp;</label>
      </li>
    </ul>
  </div>
  
  
  
  
  <div class='field'><br><br><br>
    <label class='label'>Nature of Property</label>
    <ul class='options'>
      <li class='option'>
        <input class='option-input' id='option-0' name='type' type='radio' value='Plot'>
        <label class='option-label' for='option-0'>&emsp;Plot&emsp;</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-1' name='type' type='radio' value='Flat'>
        <label class='option-label' for='option-1'>&emsp;Flat&emsp;</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-2' name='type' type='radio' value='House'>
        <label class='option-label' for='option-2'>House&nbsp; &emsp;</label>
      </li>
      <br><br>
      <li class='option'>
        <input class='option-input' id='option-4' name='type' type='radio' value='Bungalow'>
        <label class='option-label' for='option-4'>Bungalow&nbsp;&nbsp;</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-5' name='type' type='radio' value='Farm House'>
        <label class='option-label' for='option-5'>Farm House</label>
      </li>
   </ul>
  </div>
  

 <p class='field required'><br><br>  

    <label class='label required' for='name'>Property Size</label>
    <input class='text-input' id='name' name='size' required type='text' placeholder="Size of property in  sq yd">
  </p>
 

 <p class='field required'><br><br>  
    <label class='label' required for='name'>Property Price</label>
    <input class='text-input' id='name' name='price' required type='text' placeholder="Price of property">
  </p>
 
<br><br>  
<br><br>  

  
<p class='field half'><br><br>  
    <label class='label' for='select'>Number of Rooms</label>
    <select class='select' id='select' name="rooms" required="">
      <option selected value=''></option>
      <option value='0' name="rooms">0</option>
      <option value='1' name="rooms">1</option>
      <option value='2' name="rooms">2</option>
      <option value='3' name="rooms">3</option>
      <option value='4' name="rooms">4</option>
      <option value='5' name="rooms">5</option>
      <option value='6' name="rooms">6</option>
      <option value='7' name="rooms">7</option>
      <option value='8' name="rooms">8</option>
      <option value='9' name="rooms">9</option>
      <option value='10' name="rooms">10</option>
      </select>
  </p>
  
<br><br>  
<br><br>  
  
  
  
<p class='field half'>
    <label class='label' for='select'>Number of Bathroom</label>
    <select class='select' id='select' name="bathrooms"  required="">
      <option selected value=''></option>
      <option value='0' name="bathrooms">0</option>
      <option value='1' name="bathrooms">1</option>
      <option value='2' name="bathrooms">2</option>
      <option value='3' name="bathrooms">3</option>
      <option value='4' name="bathrooms">4</option>
      <option value='5' name="bathrooms">5</option>
   </select>
  </p>
   
  
  <p class='field'><br><br>
    <label class='label' for='about'>Additional Information</label>
    <textarea class='textarea' cols='50' id='about' name='info' rows='4' placeholder="Is their anything special such as lawn,parking etc.."></textarea>
  </p>
  
  
 <hr><br><br><br><br> 
<h1 class="text-center mt-5">Can We Know Where Your Property is Located ? </h1>
    <br><br>
 <p class='field required'>
    <label class='label required' for='name'>Country</label>
    <input class='text-input' id='name' name='country' required type='text' value="India">
  </p>
   
 <p class='field required'>
    <label class='label required' for='name'>State</label>
    <input class='text-input' id='name' name='state' required type='text' placeholder="State..">
  </p>
  
  <p class='field required'>
    <label class='label required' for='name'>Distict</label>
    <input class='text-input' id='name' name='distict' required type='text' placeholder="Distict..">
  </p>
  
  <p class='field required'>
    <label class='label required' for='name'>Street</label>
    <input class='text-input' id='name' name='street' required type='text' placeholder="Locality, street, house number..">
  </p>
  
  
  <p class='field required'>
    <label class='label required' for='name'>Pincode</label>
    <input class='text-input' id='name' name='pincode' required type='text' placeholder="Pincode..">
  </p>
  
   
  <p class='field half'>
      <input class='button' type='submit' name="submit" value='Next'>
  </p>
  
</form>
</div>                
</body>
</html>

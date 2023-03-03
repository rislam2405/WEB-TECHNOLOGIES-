Md Sajidul Haque Shohan
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
$nameErr = $emailErr = $genderErr = $degreeErr = $dobErr = $bloodErr = "";
$name = $email = $dateofbirth = $gender = $degree  = $bloodgroup = "";

if($_POST['Submit']){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $dateofbirth = $_POST['dateofbirth'];
  $gender = $_POST['gender'];
  $degree = $_POST['degree'];
  $bloodgroup = $_POST['bloodgroup'];   
  if(empty($name)){
    $nameErr = "Please Enter Your Name";
  }
  else{
    if(!preg_match("/^[a-zA-Z- ]*$/", $name)){
    $nameErr =" Can contain a-z, A-Z, period, dash only. Please Re-enter Your Name";
    $name = "";
       }
      else{
        if(str_word_count($name)<2){
          $nameErr = "Name should contains at least two words";
          $name = "";
        }
       }
  }
  if (empty ($email)) {
    $emailErr = "Email is required";
  } else {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  
  if(empty($dateofbirth)){
    $dobErr = "Please choose birth date ";
  }
  else{
    if($dateofbirth<01-01-1953 && $dateofbirth>31-12-1998){
       $dobErr = "Enter a valid birth date "; 
    }
  }
  

  if(empty($gender)){
    $genderErr = "Please select one option";
  }

  if(count($degree)<2){ 
        $degreeErr = "Please select two of them ";
   }
  
  if(empty($bloodgroup)){
    $bloodErr = "Please select one option";
  }
 }
  
?>
<form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <fieldset>
        <legend>  <b>NAME</b> </legend>
        <label for="name"></label>
        <input type="text" name="name">
        <span style="color: red">*<?php echo $nameErr?><br></span>
        <span class="underline">______________________</span><br><br>
    </fieldset>
  <fieldset>
        <legend>  <b>EMAIL</b> </legend>
        <label for="email"></label>
        <input type="text" name="email">
        <span style="color: red">*<?php echo $emailErr?><br></span>
        <span class="underline">______________________</span><br><br>
    </fieldset>
  <fieldset>
        <legend>  <b>DATE OF BIRTH</b> </legend>
        <label for="dateofbirth"></label>
        <input type="date" name="dateofbirth" min="1953-01-01" max="1998-12-31">
        <span style="color: red">*<?php echo $dobErr?><br></span>
        <span class="underline">______________________</span><br><br>
    </fieldset>
  <fieldset>
        <legend>  <b>GENDER</b> </legend>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
        <span style="color: red">*<?php echo $genderErr?><br></span>
        <span class="underline">______________________</span><br><br>
    </fieldset>
  <fieldset>
        <legend>  <b>DEGREE</b> </legend>
        <input type="checkbox" name="degree[]" value="SSC">
        <label for="SSC">SSC</label>
        <input type="checkbox" name="degree[]" value="HSC">
        <label for="HSC">HSC</label>
        <input type="checkbox" name="degree[]" value="BSc">
        <label for="BSc">BSc</label>
        <input type="checkbox" name="degree[]" value="MSc">
        <label for="MSc">MSc</label>
        <span style="color: red">*<?php echo $degreeErr?><br></span>
        <span class="underline">_____________________________</span><br><br>
    </fieldset>
    <fieldset>
        <legend>  <b>BLOOD GROUP</b> </legend>
          <select name="bloodgroup">
          <option selected disabled ></option>
          <option value="A+">A+</option>
          <option value="B+">B+</option>
          <option value="AB+">AB+</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="A-">A-</option>
          <option value="B-">B-</option>
          <option value="AB-">AB-</option>
          </select>
          <span style="color: red">*<?php echo $bloodErr?><br></span>
        <span class="underline">______________________</span><br><br>
        <input type="submit" name="Submit" value="Submit">
    </fieldset>

</form>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth; 
echo "<br>";
echo $gender; 
echo "<br>";
foreach ($degree as $key => $value) {
  echo $value . " ";
 } 
echo "<br>";
echo $bloodgroup; 


?>

</body>
</html>
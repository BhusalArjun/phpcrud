<?php
include("../config.php");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$address=$_POST['address'];
$district=$_POST['district'];

if(empty($name) || empty($address)|| empty($district)){
    echo"Name is empty";
    exit;
}

$insertQuery="INSERT INTO student (name,address,district) values('$name','$address','$district')";
// $insertQuery="INSERT INTO Student(name,address) VALUES($name,$address)"
if(mysqli_query($conn,$insertQuery)){
    echo"Inserted";
}
    else{
        echo"unable to insert";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<form  method = "post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>
  <label for="address">Address:</label>
  <input type="text" id="address" name="address" required ><br><br>
  <label for="district">District</label>
  <select name="district">
      <option value="Kathmandu">Kathmandu</option>
      <option value="Pokhara">Pokhara</option>
      <option value="Butwal">Butwal</option>
</select><br><br>
   <input type="submit"  name="submit" value="Submit">
</form> 
</body>
</html>
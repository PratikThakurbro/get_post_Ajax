<?php
$conn = mysqli_connect("localhost","root","","ajax_form");
$name =$_POST['name'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$country =$_POST['country'];


$sql = "INSERT INTO newnow(name, age, gender, country) VALUE ('{$name}','{$age}','{$gender}','{$country}')";

if(mysqli_query($conn,$sql)){
echo 1;
}else{
    echo 0;

}
?>
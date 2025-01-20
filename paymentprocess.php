<?php

include 'config.php';

?>

<?php
// Retrieve form data
$uname=$_POST["uname"];
$uemail=$_POST["uemail"];
$uadress=$_POST["uadress"];
$ucity=$_POST["ucity"];
$ustate=$_POST["ustate"];
$uzip=$_POST["uzip"];
$unameoncard=$_POST["unameoncard"];
$ucardnumber=$_POST["ucardnumber"];
$uexpmonth=$_POST["uexpmonth"];
$uexpyear=$_POST["uexpyear"];
$ucvv=$_POST["ucvv"];

// Prepare the SQL statement to insert the user data into the database
$sql="insert into bankpaymentpage(uname,uemail,uadress,ucity,ustate,uzip,unameoncard,ucardnumber,uexpmonth,uexpyear,ucvv) values ('$uname','$uemail','$uadress','$ucity','$ustate','$uzip','$unameoncard','$ucardnumber','$uexpmonth','$uexpyear','$ucvv')";

// Execute the prepared statement
if(mysqli_query($conn,$sql))
{
    echo"<script>alert('record Inserted succcessfullly')</script>";
    header("location:paymentsucsesspage.html");

}

else{
    echo"<script>alert('Error in Insertion')</script>";
}

//mysqli_close($conn);

?>
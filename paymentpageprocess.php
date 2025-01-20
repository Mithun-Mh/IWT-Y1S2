<?php

include 'config.php';

?>

<?php
// Retrieve form data
$event_name=$_POST["event-name"];
$event_code=$_POST["event-code"];
$event_type=$_POST["event-type"];
$ticket_quantity=$_POST["ticket-quantity"];

$sq="insert into paymentpage(event_code,event_name,event_type,ticket_quantity) values ('$event_code','$event_name','$event_type','$ticket_quantity')";

if(mysqli_query($conn,$sq))
{
    echo"<script>alert('record Inserted succcessfullly')</script>";
    //header("location:payment.php");

}

else{
    echo"<script>alert('Error in Insertion')</script>";
}

//mysqli_close($conn);

?>
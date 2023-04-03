<?php

$name = $_POST['name'];
$email = $_POST['email'];
$choice = $_POST['choice'];
$grade = $_POST['Grade'];
$fullname = $_POST['full_name'];
$term = $_POST['term'];


$mailheader = "From:".$name."<".$email.">\r\n";
$recipient = "donniedarko0@yahoo.com";

$body = "Thanks for your feedback your preffered questions is ".$choice." and your expected grade is ".$grade;

mail($recipient, $body,$mailheader) or die("Error!");

echo "Your name is $fullname and term is $term. ";

echo "$body";


?>
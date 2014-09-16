<html>
<head><title>hello nice to meet you!</title></head>
<body>
<h2>Confirmation Succes.</h2>
<?php
//declare your variables
$myname = "Ade Suluh";
$thank = "Thank you";
$first_name =$_POST['firstname'];
$last_name=$_POST['lastname'];
$name = $_POST['firstname'] .' '. $_POST['lastname'];
$email = $_POST['email'];
$description = $_POST['description'];
$knowme = $_POST['knowme'];
//if u dont connect to mail ignore two line below
$to='ade.suluh@yahoo.com';
$subject = 'You know me ?';

//connect to your database
$dbc = mysqli_connect('localhost','hutness1_youknow','madiun','hutness1_youknowme') or die('Error to connecting MySQL database');
$query = "INSERT INTO you_know (first_name, last_name, email, knowme)" . "VALUES ('$first_name', '$last_name', '$email', '$knowme')";
$result = mysqli_query($dbc, $query) or die("Error queryying database");
mysqli_close($dbc);

//confirmation succes
echo 'Thanks for submitting the form.<br />';
echo 'Halo,' . $name . '<br />';
echo 'your email :' . $email . '<br />';
echo 'about you :' . $description .  '<br />';
echo 'you know me ? :' . $knowme . '<br />';
?>
<a href="http://www.hutness.com/latihan/">
   <button>Back</button>
</a></body>

</html> 

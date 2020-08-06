<?php include_once "db.php"; ?>
<?php
echo $email = $_POST["email"];
echo $password = $_POST['password'];

$sql = "INSERT INTO users(email, password) VALUES ('{$email}', '{$password}')";
$query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
mysqli_close($connection);


echo $email;
echo $password;
?>
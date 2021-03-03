<?php
if(isset($_POST["pb"]))
{
  Echo "First Name : " . $_POST["FirstName"];
  Echo "<br>";
  Echo "Last Name : " . $_POST["LastName"];
  Echo "<br>";
  Echo "Email : " . $_POST["email"];

  $conn = new mysqli("localhost", "root", "mysql", "phpdemo");
  $sql = "INSERT INTO StudentMaster(FirstName,LastName,email,pw) values('" . $_POST["FirstName"] . "','" . $_POST["LastName"] . "' ,'" . $_POST["email"] ."' ,'" . $_POST["pw"] ."')";
  $conn->query($sql);
  $conn->close();
}

?>
<html><body>
<form action="phpdemo.php" method="POST">
First Name: <input type="Text" name="FirstName"><br>
Last Name: <input type="text" name="LastName"><br>
Email: <input type="email" name="email"><br>
Password: <input type="password" name="pw"><br>
<input type="hidden" name="pb" value="1">
<input type="submit" value="Submit">
</form>
</body>
</html>
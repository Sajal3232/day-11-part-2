<?php
require_once './Example.php'; 
$example=new Example();
$example->addition(10,20);
echo $example->name;
echo $example->city;
  
$result="";
if(isset($_POST["btn"])){
    $result=$example->makeFullName();
}


?>
<form action="" method="POST">
<table>
<tr>
    <td>First Name</td>
    <td><input type="text" name="first_name"></td>
</tr>
<tr>
    <td>Last Name</td>
    <td><input type="text" name="last_name"></td>
</tr>
<tr>
    <td>Full Name</td>
    <td><input type="text" value="<?php echo $result?>"></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="btn" value="submit"></td>
</tr>
</table>
</form>
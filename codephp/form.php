
<?php $nameerror = $emailerror = $mobileerror = $subjecterror = " "?>
<?php $name = $email = $mobile = $subject = " "?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameerror = "*Name is Require";
        $emailerror = "*Email is Require";
        $mobileerror = "*Mobile is Require";
        $subjecterror = "*Subject is Require";
    }else{
        $name = text_input($_POST["name"]);
        $email = text_input($_POST["email"]);
        $mobile = text_input($_POST["mobile"]);
        $subject = text_input($_POST["subject"]);
        
    }
}

function text_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 
?>

<form action="output.php" method = "POST">
<table>
    <tr>
        <td>Name :</td>
   
        <td><input type="text" name = "name"><?php echo $nameerror; ?></td>
    </tr>
    <tr>
        <td>Email :</td>
   
        <td><input type="email" name = "email"><?php echo $emailerror; ?></td>
    </tr>
    <tr>
        <td>Mobile :</td>
   
        <td><input type="text" name = "mobile"><?php echo $mobileerror; ?></td>
    </tr>
    <tr>
        <td>Subject :</td>
   
        <td><input type="text" name = "subject"><?php echo $subjecterror; ?></td>
    </tr>
    <tr>
        <td></td>
   
        <td><input type="submit" name = "submit" value = "submit"></td>
    </tr>
</table>

</form>
 <?php 
 
 ?>
  
</body>
</html>
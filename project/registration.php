<?php include "control/allproc.php"; ?>
<?php include "control/process.php"; ?>


<!DOCTYPE html>

<html>
<body>
<h1>Registration Form </h1>
<hr>
<form action="" method="post" enctype="multipart/form-data">

First name:<br>
 <input type="text" name="fname"> <?php echo $validatefname; ?>
<br><br>
Last name:<br>
 <input type="text" name="lname"> <?php echo $validatelname; ?>
<br><br>
Age:<br>
 <input type="number" name="age"> <?php echo $age; ?>
<br><br>
Mobile no:<br>
 <input type="text" name="mobile"> <?php echo $validatemobile; ?>
<br><br>
Password: <br>
<input type="text" name="password"> <?php echo $validatepass; ?>
<br><br>
Please give a profile picture(jpeg):  <input type="file" name="filetoupload">
<br>
<br>

<input type="submit" value="SUBMIT">
<input type="reset" value="Reset">
</form>
</body>
</html>
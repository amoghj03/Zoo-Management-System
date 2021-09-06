<?php
  extract($_POST);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "zoo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$efname = mysqli_real_escape_string($link, $_REQUEST['efname']);
$elname = mysqli_real_escape_string($link, $_REQUEST['elname']);
$eid = mysqli_real_escape_string($link, $_REQUEST['eid']);
$zid = mysqli_real_escape_string($link, $_REQUEST['zid']);
$psw = mysqli_real_escape_string($link, $_REQUEST['psw']);
$pho = mysqli_real_escape_string($link, $_REQUEST['pno']);
$salary = mysqli_real_escape_string($link, $_REQUEST['salary']);
 

// Attempt insert query execution
$sql = "INSERT INTO EMPLOYEE (EFname,ELname,Eid,Zid,passwrd,Phone_No,Salary) VALUES ('$efname','$elname',$eid,$zid,'$psw','$pno',$salary)";
if(mysqli_query($link, $sql)){
  //header('Location:addemp.php');
  //echo '<script>alert("record added successfully")</script>';
  echo '<script type="text/javascript"> 
  alert("record added successfully"); 
  window.location.href = "addemp.php";
</script>';
} 


// Close connection
mysqli_close($link);

?>  
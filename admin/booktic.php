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
$tid = mysqli_real_escape_string($link, $_REQUEST['tid']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);
$cid = mysqli_real_escape_string($link, $_REQUEST['cid']);
$cfname = mysqli_real_escape_string($link, $_REQUEST['cfname']);
$clname = mysqli_real_escape_string($link, $_REQUEST['clname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$cci = mysqli_real_escape_string($link, $_REQUEST['cci']);



 
// Attempt insert query execution
$sql1 = "INSERT INTO customer (Cid,CFname,CLname,Email,Addresses,Credit_Card_Info) VALUES ($cid,'$cfname','$clname','$email','$address','$cci')";
$query1=mysqli_query($link,$sql1);
$sql = "INSERT INTO ticket (Tid,Price,Cid) VALUES ($tid,'$price',$cid)";
$query2=mysqli_query($link,$sql);
if($query1 && $query2){
  
  echo '<script type="text/javascript">

                alert("record added successfully");
                window.location.href="bookticket.php"
      </script>';
} else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);

?>  
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
$aname = mysqli_real_escape_string($link, $_REQUEST['aname']);
$aid = mysqli_real_escape_string($link, $_REQUEST['aid']);
$akid = mysqli_real_escape_string($link, $_REQUEST['akid']);
$adid = mysqli_real_escape_string($link, $_REQUEST['adid']);
$height = mysqli_real_escape_string($link, $_REQUEST['height']);
$weight = mysqli_real_escape_string($link, $_REQUEST['weight']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$cageno = mysqli_real_escape_string($link, $_REQUEST['cageno']);
$feedtime = mysqli_real_escape_string($link, $_REQUEST['feedtime']);
$url = mysqli_real_escape_string($link, $_REQUEST['url']);
$region = mysqli_real_escape_string($link, $_REQUEST['region']);
$pops = mysqli_real_escape_string($link, $_REQUEST['pops']);
$phyc = mysqli_real_escape_string($link, $_REQUEST['phyc']);



 
// Attempt insert query execution
$sql = "INSERT INTO ANIMAL (Aid,Gender,Cage_Number,Feed_Time,image_url,AKid) VALUES ($aid,'$gender','$cageno','$feedtime','$url',$akid)";
$query1=mysqli_query($link,$sql);
$sql1 = "INSERT INTO ANIMALDETAIL (ADid,Height,Weights,Age,Aid) VALUES ($adid,'$height','$weight','$age',$aid)";
$query2=mysqli_query($link,$sql1);
$sql2 = "INSERT INTO ANIMALKIND (Akid,AName,Physical_Characteristics,Zoo_Region,Diet,Population_Status) VALUES ($akid,'$aname','$phyc','$region','$diet','$pops')";
$query3=mysqli_query($link,$sql2);
if(mysqli_query($link,$sql)){
    echo '<script type="text/javascript">

                alert("record added successfully");
                window.location.href="addanimal.php"
      </script>';
    
} else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>  
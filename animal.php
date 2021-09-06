<!DOCTYPE html>
<html>
    <head>
        <title>Animals</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      
      .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:rgb(28, 48, 42);
    color: white;
    text-align: center;
    margin-top: 8px;
    padding-top: 7px;
}

</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" >
              <img src="https://i.pinimg.com/originals/12/67/03/12670389f6aba8da354094feb86a141b.png" alt="" width="30" height="24">
            </a>
          <a class="navbar-brand" href="#"><b style="font-family: sans-serifs;">ZOO MANAGEMENT</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"><b>HOME</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="animal.php">ANIMALS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login.php">ADMIN</a>
              </li>
              
            </ul>
          </div>
        </div>
    </nav>


 <?php
     $con=mysqli_connect('localhost:3306','root','','ZOO');   
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
$query = "SELECT * FROM animal a, animalkind b
        WHERE a.akid=b.akid";
$animal = mysqli_query($con,$query);

$i=1;
while($row = mysqli_fetch_assoc($animal))
{
    if($i==1)
        echo "<div class='card-deck' style='padding:2%;' >";
    $gender = $row['Gender'];
    $cageno = $row['Cage_Number'];
    $feedtime = $row['Feed_Time'];
    $image_url = $row['image_url']; 
    $name=$row['AName'];
        echo "<div class='card'> 
            <img class='card-img-top' src='$image_url' alt='Card image cap' width='100px' height='350px'> 
            <div class='card-block'> 
                <h4 class='card-title' style='padding-left:10px'>$name</h4> 
                <p class='card-text'style='padding-left:10px'>Gender:$gender</p>
                <p class='card-text'style='padding-left:10px'>Cage-Number:$cageno</p>
                <p class='card-text'style='padding-left:10px'>feed-Time:$feedtime</p> 
                <p class='card-text' style='text-align:center'> 
                    <small class='text-muted'> 
                        @AD creations 
                    </small>
                </p> 
            </div> 
        </div>";
        if($i==4)
        {
            echo "</div> <br>";
            $i=0;
        }
        $i+=1;
        
}


mysqli_close($con);
?>
  

<br><br>

    <div class="footer">
      <span style="padding-right: 3em;">email:abc@gamil.com</span><span>phone:77777-66666</span>
    <p>&copy; AD CREATIONS</p>
    </div>
    </body>
</html>
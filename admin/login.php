<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("img_nature.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  left: 42%;
  top:20%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
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
<?php
  $display=" ";
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
        $display=" ";
        extract($_POST);
        $db=mysqli_connect('localhost:3306','root','','ZOO');
        if(isset($db))
        {
          $str="SELECT * FROM EMPLOYEE WHERE Eid='".$empid."' AND passwrd='".$psw."';";
          if($empid!='' && $psw!='')
          {
            $res=mysqli_query($db,$str);
            if(mysqli_num_rows($res)>=1)
            {
              header('Location:admin.php');
            }
            else
             {
              
              echo '<script>alert("invalid details")</script>';
            
            }
          }
          else {
            $display="Fill in all the Details<br></>";
        }
      }
  }
  ?>
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
                <a class="nav-link active" aria-current="page" href="../index.html"><b>HOME</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../animal.php">ANIMALS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login.php">ADMIN</a>
              </li>
              
            </ul>
          </div>
        </div>
    </nav>

<h2></h2>
<div class="bg-img">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="container">
    <h1>Login</h1>

    <label for="empid"><b>EMPLOYEE ID</b></label>
    <input type="text" placeholder="Enter Employye id" name="empid" required>

    <label for="psw"><b>PASSWORD</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>

<div class="footer">
      <span style="padding-right: 3em;">email:abc@gamil.com</span><span>phone:77777-66666</span>
    <p>&copy; AD CREATIONS</p>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

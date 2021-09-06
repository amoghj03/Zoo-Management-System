<!DOCTYPE html>
<html>
  <head>
    <title>ZOO MANAGEMENT</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      
      .footer {
    position: fixed;
    left: 50%;
    padding-left:-50px;
    bottom: 0;
    width: 100%;
    background-color:white;
    color: black;
    margin-top: 8px;
    padding-top: 7px;
}
.vertical {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 18%;
  background-color:rgb(28, 48, 42);
  position: fixed; 
  height: 100%;
  overflow: auto;
}

.ver a {
  display: block;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
}

.ver a:hover:not(.active) {
  background-color: white;
  color: black;
}
    </style>
  </head>
  <body>
  
 
  <div style="position:fixed">
  <ul class="vertical">
    <li>
        <a class="navbar-brand" href="#" ><img src="https://i.pinimg.com/originals/12/67/03/12670389f6aba8da354094feb86a141b.png" alt="" width="30" height="24"></a>
        <a class="navbar-brand" href="#"><b style="font-family: sans-serifs; color:white;">ZOO MANAGEMENT</b></a>
    </li>
    <span style='color:white'>______________________________________________</span>
    <br>
    <br>
    <li class="ver"><a href="addanimal.php">ADD ANIMAL</a></li>
    <li class="ver"><a href="animaldetail.php">ANIMAL DETAILS</a></li>
    <li class="ver"><a href="bookticket.php">BOOK TICKET</a></li>
    <li class="ver"><a href="cusdetails.php">CUSTOMER DETAILS</a></li>
    <li class="ver"><a href="addemp.php">ADD EMPLOYEE</a></li>
    <li class="ver"><a href="empdetails.php">EMPLOYEEDETAILS</a></li>
    <li class="ver"><a href="../index.html">LOGOUT</a></li>
    </ul>
    </div> <br><br>
      <div style="margin-left:25%">
      <p><b>ADD EMPLOYEE DETAILS</b></p>
      </div>
      <div class="container" style="margin-left:24%;">
      <form action="insemp.php" method="post" class="was-validated">
          <div class="form-group">
          <div class="row">
      <div class="col"  style="padding-top:9px">
        <label id="efname">EMPLOYEE</label>
        <input type="text" for="efname" class="form-control" placeholder="First name" name="efname" required>
      </div>
      <div class="col" style="padding-top:16px">
      <label id="elname" ></label>
        <input type="text" for="elname" class="form-control" placeholder="Last name " name="elname" required>
      </div>
      <br><br>
    </div><br>
    <div class="row">
      <div class="col"  style="padding-top:9px">
        <label id="eid">EMPLOYEE ID</label>
        <input type="number" for="eid" class="form-control" placeholder="four series" name="eid" required>
      </div>
      <div class="col" style="padding-top:9px">
      <label id="zid" >ZOO ID</label>
        <input type="number" for="zid" class="form-control" placeholder=" three series" name="zid" required>
      </div>
      <br><br>
    </div><br>
    <div>
          <label for="psw">SET PASSWORD</label>
          <input type="text" class="form-control" id="psw" placeholder="enter password" name="psw" required>
          </div><br>

          <div>
          <label for="pno">PHONE NUMBER</label>
          <input type="text" class="form-control" id="pno" placeholder="Enter Phone" name="pno" required>
          </div><br>
          <div class="form-group">
          <label for="salary">SALARY</label>
          <input type="text" class="form-control" id="salary" placeholder="Enter Salary" name="salary" required>
          </div><br>
          <button type="submit" class="btn btn-primary">ADD</button>
      </form>
      </div>
    





<div class="footer">
    <p style='border-top-color: #92a8d1;'>&copy; AD CREATIONS</p>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>

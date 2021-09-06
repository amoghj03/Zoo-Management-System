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
  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    extract($_POST);
    $db=mysqli_connect('localhost:3306','root','','ZOO');
    if(isset($db))
    {
      //INSERT INTO ANIMAL_GUIDE VALUES(21,'OUR ZOO MANY VARIETY OF SPECIES','2013');
      $str="SELECT * FROM EMPLOYEE WHERE CID='".$empid."' AND PASSWORD='".$psw."';";
      
      // '".$varchar_name."'
      // ".$int_name."
      //$result       = mysqli_query($db,$str);
    }

  }
  ?>
 
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
      <p><b>ADD CUSTOMERS DETAILS</b></p>
      </div>
      <div class="container" style="margin-left:24%;">
      <form action="booktic.php" class="was-validated" method="post">
          <div class="form-group">
          <div class="row">
      <div class="col"  style="padding-top:9px">
        <label id="cfname">CUSTOMER</label>
        <input type="text" for="cfname" class="form-control" placeholder="First name" name = "cfname" required>
      </div>
      <div class="col" style="padding-top:16px">
      <label id="clname" ></label>
        <input type="text" for="clname" class="form-control" placeholder="Last name " name = "clname" required>
      </div>
      <br><br>
    </div><br>
    <div class="row">
      <div class="col"  style="padding-top:9px">
        <label id="cid">CUSTOMER ID</label>
        <input type="number" for="cid" class="form-control" placeholder="zero series" name="cid" required>
      </div>
      <div class="col" style="padding-top:9px">
      <label id="tid" >TICKET ID</label>
        <input type="number" for="tid" class="form-control" placeholder="one series " name="tid" required>
      </div>
      <br><br>
    </div><br>
          <div>
          <label for="email">EMAIL</label>
          <input type="text" class="form-control" id="email" placeholder="Enter username" name="email" required>
          </div><br>
          <div class="form-group">
          <label for="address">CITY</label>
          <input type="text" class="form-control" id="address" placeholder="Enter ADDRESS" name="address" required>
          </div><br>
          <div class="form-group">
        <label for="price">PRICE</label>
        <select id="price" name="price" class="form-control" required>
          <option selected required>Choose...</option>
          <option>500</option>
          <option>1000</option>
          <option>1500</option>
        </select>
      </div><br>
          <label for="cci">CREDIT CARD INFO</label>
          <input type="text" class="form-control" id="cardno" placeholder="Enter CC_NUMBER" name="cci" required>
          </div>
            
          <div class="form-group form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> I agree all terms and condition
          </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
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

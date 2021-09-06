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
      <p><b>ADD ANIMAL</b></p>
      </div>
      

      <div class="container" style="margin-left:24%;">
      <form action="addani.php" method="post" class="was-validated">
          <div class="form-group">
            
          <div>
          <label for="aname">NAME</label>
          <input type="text" class="form-control" id="aname" placeholder="Enter animal name" name="aname" required>
        </div><br>
        <div class="row">
      <div class="col"  style="padding-top:9px">
        <label id="aid">ANIMAL ID</label>
        <input type="number" for="aid" class="form-control" placeholder="six series" name="aid" required>
      </div>
      <div class="col" style="padding-top:9px">
      <label id="akid" >ANIMAL KIND ID</label>
        <input type="number" for="akid" class="form-control" placeholder="five series " name="akid" required>
      </div>
      <div class="col" style="padding-top:9px">
      <label id="adid">ANIMAL DETAIL ID</label>
        <input type="number" for="adid" class="form-control" placeholder="seven series" name="adid" required>
      </div>
      <br><br>
    </div><br>
          <div class="row">
      <div class="col"  style="padding-top:9px">
        <label id="height">HEIGHT</label>
        <input type="text" for="height" class="form-control" placeholder="HEIGHT" name="height" required>
      </div>
      <div class="col" style="padding-top:9px">
      <label id="weight" >WEIGHT</label>
        <input type="text" for="weight" class="form-control" placeholder="weight " name="weight" required>
      </div>
      <div class="col" style="padding-top:9px">
      <label id="age">AGE</label>
        <input type="text" for="age" class="form-control" placeholder="age" name="age" required>
      </div>
      <br><br>
    </div><br>
    <div class="row">
      <div class="col"  style="padding-top:9px">
        <label id="gender">GENDER</label>
        <input type="text" for="gender" class="form-control" placeholder="gender" name="gender" required>
      </div>
      <div class="col" style="padding-top:9px">
      <label id="cageno" >CAGE NUMBER</label>
        <input type="text" for="cageno" class="form-control" placeholder="cage number" name="cageno" required>
      </div>
      <div class="col" style="padding-top:9px">
      <label id="feedtime">FEED TIME</label>
        <input type="text" for="feedtime" class="form-control" placeholder="feed time" name="feedtime" required>
      </div>
      <br><br>
    </div><br>
    <div class="row">
      <div class="col-4"  style="padding-top:9px">
      <label for="deit">DIET</label>
          <input type="text" class="form-control" id="deit" placeholder="ENTER DIET" name="diet"  required>
      </div>
      <div class="col" style="padding-top:8px">
      <label id="url" >IMAGE URL</label>
        <input type="text" for="url" class="form-control" placeholder="IMAGE URL" name="url" required>
      </div>
      </div><br>
    <div class="row">
      <div class="col"  style="padding-top:9px">
        <label id="region">ZOO REGION</label>
        <input type="text" for="region" class="form-control" placeholder="Zoo region" name="region" required>
      </div>
      <div class="col" style="padding-top:8px">
      <label id="pops" >POPULATION STATUS</label>
        <input type="text" for="pops" class="form-control" placeholder="population status" name="pops" required>
      </div>
      </div><br>
      
          <div class="form-group">
          <label for="phyc">PHYSICAL CHARACTERISTICS</label>
          <input type="text" class="form-control" id="phyc" placeholder="Physical characterstics" name="phyc" required>
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

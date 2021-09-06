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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}
th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

td {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
  </head>
  <body>
 
  
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
    <br><br>
   <p style="margin-left:20%"> <b>ANIMAL DETAILS</b></p>
   <br>
   <div style="margin-left:20%; margin-right:2%">
   <?php

      $con = mysqli_connect('localhost','root','','ZOO')
          or die("Unable to connect");
      $result ="SELECT aid,aname,cage_number,feed_time FROM animal a,animalkind b
      where a.akid=b.akid ";
      $animal = mysqli_query($con,$result);
      ?>
      <div style=''>
      <table border="2" style= "margin: 0 auto; padding-top:100px;" >
      <thead>
        <tr>
          <th>ANIMALID</th>
          <th>ANIMAL NAME</th>
          <th>CAGE-NUMBER</th>
          <th>FEED-TIME</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc($animal))
          {
            echo
            "<tr>
              <td>{$row['aid']}</td>
              <td>{$row['aname']}</td>
              <td>{$row['cage_number']}</td>
              <td>{$row['feed_time']}</td> 
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
    </div>
     <?php mysqli_close($con); ?>
  </div>

     
            


<div class="footer">
    <p style='border-top-color: #92a8d1;'>&copy; AD CREATIONS</p>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>

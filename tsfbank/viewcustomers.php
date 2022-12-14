<?php
$hostname="localhost";
$user ="root";
$pass ="";
$dbName='ashblogs';
$con = mysqli_connect($hostname,$user,$pass,$dbName);
if(mysqli_connect_error()){
    die("There was error while connecting");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks | Customers</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./images/icon.jpg">
</head>
<body style="background-color: white" onload="loader()">
<!-- loader for splash screen -->
<div id="loading">
    <div class="wrapper flex-center">
        <div class="container">
            <div class="container-dot dot-a">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-d">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-e">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-f">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-h">
            <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#ebf5f7; opacity:1;"> 
            <img  height="70" style = border-radius: 50%; src="./images/iconimg.jpg">
            &nbsp;
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:#0a7df0;font-family: 'Courgette', cursive;font-size:2em;">
                &nbsp;TSF Bank
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; "> 
                <li class="nav-item">
                        <a class="nav-link " href="index.php" style="color:#0a7df0;font-weight:1em;">
                            <div style="padding-right:0px;" >
                                <img height="60" border-radius: 50%; src="./images/hicon.jpg">

                            </div>
                            <span style="padding-right:20px;" >&nbsp;&nbsp;Home</span>
                        </a> 
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="transferrecords.php" style="color:#0a7df0;font-weight:1em;">
                            <div style="padding-left:20px;" >
                                <img height="60" style = "border-radius: 0%;" src="./images/transfer.png">
                            </div>
                            Transfer Records
                        </a> 
                    </li>  
                </ul> 
            </div>
        </nav> 
    
    <div>

<div class="usertable">

    <h3 class="font-weight-bold"style="text-align:center;color:#0a7df0;font-family: 'Courgette', cursive;font-size:2.2em;padding:3%;">Customers</h3>
    <table id="myTable">
          <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Current Balance</th>
            <th>&nbsp;</th>
          </tr>
          <?php
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'acustomer.php'>";
            echo "<td>". $row['customer_id'] . "</td>
            <td>". $row['name'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['current_balance'] . "</td>";
           echo "<td> <a href='acustomer.php'><button type='submit' class='btn btn-default' name='user'  id='users1' value= '{$row['name']}' >View Customer</button></a></td>";
            echo "</form>";
           echo  "</tr>";
        }
        ?>
          
    </table>
    
</div>
<br><br>
<!-- Footer -->
<div class="footer">
   <span style="font-family:verdana;">&copy;</span> 2022 Sparks Bank. All rights reserved.
</div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
setTimeout(function(){$('#loading').hide();}, 3000); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>


</html>
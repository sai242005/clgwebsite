<?php
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'apt';

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch faculty data from the database
$sql = "SELECT * FROM faculty where dept='eee'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="intro.css">
    <script src="intro.js"></script>
    <style>
  
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }

  .faculty-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 40px;
  }

  .faculty-card {
    width: 300px;
    margin: 20px;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }

  .faculty-photo {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
  }

  .faculty-name {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
  }

  .faculty-designation {
    font-size: 14px;
    color: #555;
  }
  .level0{
    transition: padding 0.2 sec;
    border:1px solid rgba(120, 120, 120);
    margin: 10px 10px 10px 10px;
    padding: 40px 30px;
    background-color: whitesmoke;
    padding-bottom: 50px;
    margin-top: 50px;
}
.level0 :hover {
    background-color: #367cd7;
    color: white;
    position: relative;
    padding-left: 5px;
    border-left: 1px solid #3ca0e7;
    transition: all 0.2s ease;
       
}

</style>

</head>

<body>
    <header>
        <menu>
        <div class="row">
            <ul>
                <li id="menu-items-1"><a href="#">HOME </a></li>
                <li id="menu-items-2"><a href="#">OFFICE</a></li>
                <li id="menu-items-3"><a href="#">GALARY</a></li>
                <li id="menu-items-4"><a href="#">RTI</a></li>
                <li id="menu-items-5"><a href="#">AICTE</a></li>
                <li id="menu-items-5"><a href="#">ALUMINI</a></li>
                <li id="menu-items-6"><a href="#">CAMPUS LIFE</a></li>
                <li id="menu-items-7"><a href="#">CONTACT US</a></li>
            </ul>
        </div>
    </menu>
   
    
    <div id="datetime"></div>
     
            <div class="logo">
                <img src="./logo (1).jpg" alt="" height="60%" width="40%">
                

            </div>
            


    </header> 
  
   
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="navbar">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ABOUT
                </a>
                <ul class="dropdown-menu">
                    <li id="menu-items-9"><a href="./about.html">ABOUT COLLEGE</a></li>
                    <li id="menu-items-10"><a href="./prinicipal.html">PRINCIPAL'S MESSAGE</a></li>
                    <li id="menu-items-11"><a href="./suciseve.html">SUCCESSIVE  PRINCIPALS</a></li>
                
                  <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      COMMITTEES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">ANTI-RAGGING </a></li>
                        <li><a href="./griviance.html">GRIEVENCE-CELL</a></li>
                        <li><a href="#">TRANNING AND PLACEMENTS</a></li>
                    </ul>
                  </li>
                  <li id="menu-items-16"><a href="./fee.html">FEE STRUCTURE</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  DEPARTMENTS
                </a>
               <ul class="dropdown-menu">
                <li id="menu-items-24"><a href="auto.php">AUTOMOBILE ENGINEERING</a></li>
                <li id="menu-items-25"><a href="arc.php">ARCHITECTURE ENGINEERING</a></li>
                <li id="menu-items-26"><a href="civil.php">CIVIL ENGINEERING</a></li>
                <li id="menu-items-"><a href="cme.php">COMPUTER ENGINEERING</a></li>
                <li id="menu-items-"><a href="ece.php">ELECTRONICS AND COMMUNICATION ENGINEERING</a></li>
                <li id="menu-items-"><a href="eee.php">ELECTRICAL AND ELECTRONICS ENGINEERING</a></li>
                <li id="menu-items-"><a href="mech.php">MECHANICAL ENGINEERING</a></li>
                <li id="menu-items-"><a href="gen.php">GENERAL</a></li>
               </ul>

            </li>
            
              <li class="nav-item">
                <a class="nav-link" href="./admission.html">ADMISSION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">RESULTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">PLACEMENTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">EVENTS AND SPORTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">ACHIVEMENTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">EXAMINATIONS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">ANNOUNCEMENTS</a>
              </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  LOGIN/SIGNUP
                </a>
               <ul class="dropdown-menu">
                 <li id="menu-items-"><a href="">ADMIN LOGIN</a></li>
                 <li id="menu-items-"><a href="">FACULTY LOGIN</a></li>
                 <li id="menu-items-"><a href="">STUDENT LOGIN</a></li>
               </ul>
            </li>
            </ul>
          </div>
        </div>
      </nav>
        <div class="row">
       <div class="col-sm-3">
        <ul class="level0">
            <h3>DEEE</h3><hr>
            <li id="menu-items-24"><a href="eeesyllabus.php">SYLLABUS</a></li><hr>
            <li id="menu-items-25"><a href="eeefaculty.php">FACULTY</a></li><hr>
            <li id="menu-items-26"><a href="eeelab.php">LABS</a></li><hr>
            <li id="menu-items-"><a href="eeeplace.php">PLACEMENTS</a></li><hr>
            <li id="menu-items-"><a href="eeeachieve.php">ACHIVEMENTS</a></li><hr>
            <li id="menu-items-"><a href="eeeadmission.php">ADMISSIONS</a></li><hr>
            <li id="menu-items-"><a href="eeeresult.php">RESULTS</a></li><hr>
           
            
        </ul>
        
       </div>
            <div class="col-sm-9">
              <h2 align="center">ELECTRICAL AND ELECTRONICS ENGINEERING SECTION </h2><hr>
            <div class="faculty-container">
  <?php
  // Loop through fetched data and populate faculty cards
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row['name'];
      $designation= $row['designation'];
      $qualification = $row['qualification'];
      $imagePath = 'images/'.$row['image'];

      echo '<div class="faculty-card">';
      echo '<img class="faculty-photo" src="' . $imagePath . '" alt="">';
      echo '<div class="faculty-name">' . $name . '</div>';
      echo '<div class="profession">' . $designation . '</div>';
      echo '<div class="designation">' . $qualification . '</div>';
      echo '</div>';
    }
  }
  ?>
</div>
            </div>
       
        </div>
        
          
<div class="faculty-container">
  <?php
  // Loop through fetched data and populate faculty cards
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row['name'];
      $designation= $row['designation'];
      $qualification = $row['qualification'];
      $imagePath = 'images/'.$row['image'];

      echo '<div class="faculty-card">';
      echo '<img class="faculty-photo" src="' . $imagePath . '" alt="' . $name . '">';
      echo '<div class="faculty-name">' . $name . '</div>';
      echo '<div class="profession">' . $designation . '</div>';
      echo '<div class="designation">' . $qualification . '</div>';
      echo '</div>';
    }
  }
  ?>
</div>
        <footer>
            <div class="wrapper">
              <p>Copyright © 2023 <a href="#">Andhra Politecnic college, Kakinada</a>. All Rights Reserved<span> | </span>
Supported By by <a href="http://www.vellankisoftech.in/" rel="designer" target="_blank">Vellanki Softech</a>				</p>
  </div> 
</footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>





</body>
</html>

<?php
$conn->close();
?>

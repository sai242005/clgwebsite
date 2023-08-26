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
$sql = "SELECT * FROM faculty where dept='mech'";
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
        <nav>
        <div class="row">
            <ul>
                <li id="menu-items-1"><a href="home.php">HOME </a></li>
                <li id="menu-items-2"><a href="office.php">OFFICE</a></li>
                <li id="menu-items-3"><a href="gallery.php">GALLERY</a></li>
                <li id="menu-items-4"><a href="rti.php">RTI</a></li>
                <li id="menu-items-5"><a href="aicte.php">AICTE</a></li>
                <li id="menu-items-5"><a href="http://aptosakkd.com/index.html">ALUMINI</a></li>
                <li id="menu-items-6"><a href="campus.php">CAMPUS LIFE</a></li>
                <li id="menu-items-7"><a href="contact.php">CONTACT US</a></li>
               

            </ul>
        </div>
    </nav>
    
    <div id="datetime"></div>
     
            <div class="logo">
                <img src="images/logo.jpg" alt="" height="60%" width="40%">
                

            </div>
            


    </header> 
  
   
        <ul class="navbar">
             
            <li id="menu-items-8">
                <a href="#">ABOUT &#9662;</a>
                <ul class="dropdown">
                  <li id="menu-items-9"><a href="about.php">ABOUT COLLEGE</a></li>
                  <li id="menu-items-10"><a href="principal.php">PRINCIPAL'S MESSAGE</a></li>
                  <li id="menu-items-11"><a href="successive.php">SUCCESSIVE  PRINCIPALS</a></li>
                  <li id="menu-items-15"><a href="committe.php">COMMITTEES</a></li>
                    <ul class="dropdown">
                    <li><a href="1.php">ANTI-RAGGING COMMITTEE</a></li>
                   <li><a href="2.php">GRIEVENCE-CELL COMMITTEE</a></li>
                   <li><a href="3.php">TRANNING AND PLACEMENTS COMMITTEE</a></li>
                   <li><a href="4.php">INSTITUTION WEBSITE MAINTENANCE COMMITTEE</a></li>
                   <li><a href="5.php">INSTITUTIONAL PURCHASING COMMITTEE</a></li>
                   <li><a href="6.php">RTI CELL COMMITTEE</a></li>
                   <li><a href="7.php">EXAMINATION COMMITTEE</a></li>
                   <li><a href="8.php">OTLP MONITARING COMMITTEE</a></li>
                   <li><a href="9.php">VIRTUAL CLASS ROOM INCHARGE COMMITTEE</a></li>
                   <li><a href="10.php">APT COOPERATIVE STORES COMMITTEE</a></li>
                   <li><a href="11.php">ACADEMIC COMMITTEE</a></li>
                   <li><a href="12.php">CIVIL WORKS MONITARING COMMITTEE</a></li>
                   <li><a href="13.php">SC/ST CELL COMMITTEE</a></li>
                   <li><a href="14.php">ELECTRICAL MAINTENANCE MONITARING COMMITTEE</a></li>
                   <li><a href="15.php">NBA ACTIVITIES COMMITTEE</a></li>
                   <li><a href="16.php">SYSTEM AND SOFTWARE MONITARING COMMITTEE</a></li>
                   <li><a href="17.php">MECHANICAL WORKS MONITARING COMMITTEE</a></li>
                   <li><a href="18.php">WOMEEN GRIEVENCE REDRESSAL COMMITTEE</a></li>
                   <li><a href="19.php">INTERNAL QUALITY ASSURANCE CELL COMMITTEE</a></li>
                   <li><a href="20.php">INSTITUTION-INDUSTRY CELL COMMITTEE</a></li>
                   <li><a href="21.php"></a></li>

                      </ul>
                  
                  <li id="menu-items-16"><a href="fee.php">FEE STRUCTURE</a></li>


                </ul>
            </li>
            <li id="menu-items-23">
                <a href="#">DEPARTMENTS &#9662;</a>
                <ul class="dropdown">
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
        <li id="menu-items-"> 
            <a href="admissions.php">ADMISSIONS </a>
           
        </li>
  
    <li id="menu-items-">
        <a href="https://sbtet.ap.gov.in/APSBTET/results.do">RESULTS</a>
    </li>
    <li id="menu-items-">
        <a href="placements.php">PLACEMENTS </a>
    </li>

    <li id="menu-items-">
        <a href="events.php">EVENTS AND SPORTS</a>
    </li>
    <li id="menu-items-">
        <a href="achivements.php">ACHIVEMENTS </a>
    </li>

    <li id="menu-items-">
        <a href="exam.php">EXAMINATIONS </a>
    </li>
    <li id="menu-items-">
        <a href="notification.php">ANNOUNCEMENTS </a>
    </li>
    <li id="menu-items-">
      <a href="login.php">LOGIN &#9662;</a>

    </li>
        </ul>

    </li>
        </ul>
        <div class="row">
       <div class="col-sm-3">
        <ul class="level0">
            <h3>DME</h3><hr>
            <li id="menu-items-24"><a href="mechsyllabus.php">SYLLABUS</a></li><hr>
            <li id="menu-items-25"><a href="mechfaculty.php">FACULTY</a></li><hr>
            <li id="menu-items-26"><a href="mechlab.php">LABS</a></li><hr>
            <li id="menu-items-"><a href="mechplace.php">PLACEMENTS</a></li><hr>
            <li id="menu-items-"><a href="mechachieve.php">ACHIVEMENTS</a></li><hr>
            <li id="menu-items-"><a href="mechadmission.php">ADMISSIONS</a></li><hr>
            <li id="menu-items-"><a href="mechresult.php">RESULTS</a></li><hr>
           
            
        </ul>
        
       </div>
            <div class="col-sm-9">
              <h2 align="center">MECHANICAL ENGINEERING SECTION </h2><hr>
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

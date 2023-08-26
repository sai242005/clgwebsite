<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="stylesheet" href="department.css">
    
    <script src="intro.js"></script>
    <style>
        
  .faculty-container {
    display: flex;
    flex-wrap: wrap;
    /* justify-content: center; */
    padding: 40px;
  }

  .faculty-photo {
    width: 250px;
    height: 250px;
    border-radius: 10%;
    object-fit: cover;
    align-item:center;
    border: 1px soild;

  }

  .lab-name {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
    align-items: center;
    
  }

  .faculty-designation {
    font-size: 14px;
    color: #555;
  }

        </style>

</head>
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
$sql = "SELECT * FROM head where dept='cme'";
$result = $conn->query($sql);
?>

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
            <h3 align="center">DCME</h3><hr>
            <li id="menu-items-24"><a href="./C20_CURRICULUM__DCME[1].pdf">SYLLABUS</a></li><hr>
            <li id="menu-items-25"><a href="cmefaculty.php">FACULITY</a></li><hr>
            <li id="menu-items-26"><a href="cmelab.php">LABS</a></li><hr>
            <li id="menu-items-"><a href="cmeplace.php">PLACEMENTS  </a></li><hr>
            <li id="menu-items-"><a href="cmeachieve.php">ACHIVEMENTS  </a></li><hr>
            <li id="menu-items-"><a href="cmeadmission.php">ADMISSIONS</a></li><hr>
            <li id="menu-items-"><a href="cmeresult.php">RESULTS</a></li><hr>
           
            
        </ul>
        
       </div>
       <div class="col-sm-8" id="dcm">
        <h3 align="center" style="color: black; "> COMPUTER ENGINEERING SECTION</h3><hr>
        <center>
        <?php
        // Loop through fetched data and populate faculty cards
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
      
            $qualification = $row['qualification'];
      
      
           
            $imagePath = 'images/'.$row['image'];
      
            echo '<div class="faculty-container">';
            echo '<img class="faculty-photo" src="' . $imagePath . '" alt="' . $name . '">';
            echo '</div>';
          }
        }
        ?>
        </center>
        <h4 align="center">G.PARTHASARATHI</h4>
        <p align="center">M.TECH</p>
        <h4 align="center">HEAD OF COMPUTER ENGINEERING SECTION</h4>
        <div id="dcm1">
            <h3  align="center">VISION</h3>
            <p>Develop Computer Engineers to be technologically adept, innovative, self-motivated
              and responsible citizen with human values , high quality skills and to contribute
              significantly towards ever changing Computer Technologies.</p>
            <h3  align="center">MISSION</h3>
            <!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <title>Bootstrap Table Example</title>
            </head>
            <body>
            
              <div class="container mt-4">
                <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>M1</td>
                      <td>To provide opportunity to Diploma students who are capable of playing
                        pivotal role in wide aspects of modern Computer Engineering.</td>
                     
                    </tr>
                    <tr>
                      <td>M2</td>
                      <td>To make the students understand basic concepts underlie in Computer
                        Engineering and able to apply them creatively in different fields of
                        Engineering</td>
                      
                    </tr>
                    <tr>
                      <td>M3</td>
                      <td>To train the student sensitive to the Environment, safety and economic
                        context.</td>
                      
                    </tr>
                    <tr>
                      <td>M4</td>
                      <td>To produce technically skilled students through intensive training in
                        Computer
                        Engineering tools and application and to prepare the students for
                        professional career and further research.</td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            
            </body>
            </html>
            
       
        </div>
       </div>
        <footer>
            <div class="wrapper">
              <p>Copyright © 2023 <a href="#">Andhra Politecnic college, Kakinada</a>. All Rights Reserved<span> | </span>
Supported By by <a href="http://www.vellankisoftech.in/" rel="designer" target="_blank">Vellanki Softech</a>	
  <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>			</p>
  </div> 
</footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>

<?php
$conn->close();
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admission WHERE dept='cme'";
$result = $conn->query($sql);

$data = array();

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();
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
         
            margin: 0;
            padding: 0;
        }

        header {
        
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 2rem;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #5c6ee8;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .animated {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
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
                <li id="menu-items-24"><a href="#">AUTOMOBILE ENGINEERING</a></li>
                <li id="menu-items-25"><a href="#">ARCHITECTURE ENGINEERING</a></li>
                <li id="menu-items-26"><a href="#">CIVIL ENGINEERING</a></li>
                <li id="menu-items-"><a href="./department.html">COMPUTER ENGINEERING</a></li>
                <li id="menu-items-"><a href="">ELECTRONICS AND COMMUNICATION ENGINEERING</a></li>
                <li id="menu-items-"><a href="">ELECTRICAL AND ELECTRONICS ENGINEERING</a></li>
                <li id="menu-items-"><a href="">MECHANICAL ENGINEERING</a></li>
                <li id="menu-items-"><a href="">GENERAL</a></li>
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
            <li id="menu-items-26"><a href="cme.lab">LABS</a></li><hr>
            <li id="menu-items-"><a href="cmeplace.php">PLACEMENTS  </a></li><hr>
            <li id="menu-items-"><a href="cmeachieve.php">ACHIVEMENTS  </a></li><hr>
            <li id="menu-items-"><a href="cmeadmission.php">ADMISSIONS</a></li><hr>
            <li id="menu-items-"><a href="cmeresults">RESULTS</a></li><hr>
           
            
        </ul>
        
       </div>
             <div class="col-sm-9">
               <h2 align="center">COMPUTER ENGINEERING SECTION </h2><hr>
               <div class="container animated">
         <table>
             <thead>
                 <tr>
                     <th>ACADEMIC YEAR</th>
                     <th>NUMBER OF SEATS SANCTIONED</th>
                     <th>NUMBER OF SEATS FILLED</th>
                     <th>BEST RANK</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($data as $row) { ?>
                 <tr>
                     <td><?php echo $row['year']; ?></td>
                     <td><?php echo $row['total']; ?></td>
                     <td><?php echo $row['filled']; ?></td>
                     <td><?php echo $row['rank']; ?></td>
                 </tr>
                 <?php } ?>
             </tbody>
         </table>
     </div>
             </div>
        
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



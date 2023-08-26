

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
        .container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #f5f5f5;
  }
  th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    font-weight: 500;
  }
  th {
    background-color: #e0e0e0;
    position: sticky;
    top: 0;
    z-index: 1;
  }
  tbody tr {
    transition: background-color 0.3s ease;
  }
  tbody tr:hover {
    background-color: #f0f0f0;
  }
  .fadeIn {
    animation: fadeIn 1s ease forwards;
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .company-logos {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    gap: 20px;
    justify-items: center;
    margin-top: 40px;
  }
  .company-logo {
    max-width: 100px;
  }
  .center-text {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: bold;
    padding-top: 50px;
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
            <h3>DCE</h3><hr>
            <li id="menu-items-24"><a href="civilsyllabus.php">SYLLABUS</a></li><hr>
            <li id="menu-items-25"><a href="civilfaculty.php">FACULTY</a></li><hr>
            <li id="menu-items-26"><a href="civillab.php">LABS</a></li><hr>
            <li id="menu-items-"><a href="civilplace.php">PLACEMENTS</a></li><hr>
            <li id="menu-items-"><a href="civilachieve.php">ACHIVEMENTS</a></li><hr>
            <li id="menu-items-"><a href="civiladmission.php">ADMISSIONS</a></li><hr>
            <li id="menu-items-"><a href="civilresult.php">RESULTS</a></li><hr>

           
            
        </ul>
       </div>
            <div class="col-sm-9">
              <h2 align="center">CIVIL ENGINEERING SECTION </h2><hr>
              <header>
    <h1>Placements at AndhraPolytechnic College</h1>
  </header>
  <div class="container">
    <table class="fadeIn">
      <thead>
        <tr>
      
          <th>Year</th>
          <th>Pin</th>
          <th>Name</th>
          <th>Company</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // Connect to the database (replace with your database credentials)
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "apt";

          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Fetch data from the placements table
          $sql = "SELECT  year, pin, name, company, salary FROM placements where dept='civil'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              
              echo "<td>" . $row["year"] . "</td>";
              echo "<td>" . $row["pin"] . "</td>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["company"] . "</td>";
              echo "<td>" . $row["salary"] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='6'>No data available</td></tr>";
          }

          $conn->close();
        ?>
      </tbody>
    </table>
    <div class="center-text">Companies visiting our Campus</div>
    <div class="company-logos">
    <img class="company-logo" src="logo1.jpg" alt="Company 1 Logo">
      <img class="company-logo" src="logo2.png" alt="Company 2 Logo">
      <img class="company-logo" src="logo3.jpg" alt="Company 3 Logo">
      <img class="company-logo" src="logo4.png" alt="Company 4 Logo">
      <img class="company-logo" src="logo5.png" alt="Company 5 Logo">
      <img class="company-logo" src="logo6.jpg" alt="Company 6 Logo">
      <img class="company-logo" src="logo7.jpg" alt="Company 1 Logo">
      <img class="company-logo" src="logo8.jpg" alt="Company 2 Logo">
      <img class="company-logo" src="logo9.jpg" alt="Company 3 Logo">
      <img class="company-logo" src="logo10.jpg" alt="Company 4 Logo">
      <img class="company-logo" src="logo11.jpg" alt="Company 5 Logo">
      <img class="company-logo" src="logo12.png" alt="Company 6 Logo">
      
      
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



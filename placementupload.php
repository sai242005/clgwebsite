<!DOCTYPE html>
<html>
<head>
    <title>Placement Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f6f6f6;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            padding: 20px;
            color: #333;
            font-size: 28px;
            margin-top: 0; /* To move the h1 element to the top */
        }

        form {
            width: 80%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease-out;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #3e5f77;
        }

        input[type="text"],
        input[type="int"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #1d6fa5;
        }

        input[type="submit"] {
            background-color: #1d6fa5;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #154c6c;
        }

        /* Animation */
        @keyframes fadeInUp {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        /* ... (your existing styles) ... */

/* Style for the select label */
label[for="imageType"] {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

/* Style for the select input */
select#imageType {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Style for select dropdown arrow */
select#imageType:after {
  content: '\25BC'; /* Unicode arrow-down character */
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  pointer-events: none;
}

/* ... (your existing styles) ... */

    </style>
</head>
<body>
    <h1>Placement Form</h1>
    <form method="post" action="placementprocess.php">
        <label for="year">Year:</label>
        <input type="int" id="year" name="year" required>
        
        <label for="name">NAME:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="number">NUMBER OF STUDENTS SELECTED</label>
        <input type="number" id="number" name="number" required>
    
        
        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required>
        <select id="dept" name="dept" required>
        <option value="option">SELECT DEPARTMENT</option>
        <option value="cme">DCME</option>
        <option value="ece">DECE</option>
        <option value="eee">DEEE</option>
        <option value="civil">DCE</option>
        <option value="mech">DME</option>
        <option value="auto">DAE</option>
        <option value="arc">DAA</option>
        <option value="gen">GENERAL</option>
      </select><br>
        
        <input type="submit" id="submit" name="submit" value="Submit">
    </form>
</body>
</html>
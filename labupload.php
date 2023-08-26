<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lab Information Upload</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 80%;
    max-width: 600px;
    text-align: center;
  }

  h1 {
    color: #333;
    margin-bottom: 20px;
  }

  label {
    display: block;
    font-weight: bold;
    margin-top: 15px;
  }

  input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  input[type="file"] {
    display: none;
  }

  .file-label {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .file-label:hover {
    background-color: #0056b3;
  }

  .submit-btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 20px;
  }

  .submit-btn:hover {
    background-color: #45a049;
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
  <div class="container">
    <h1>Lab Information Upload</h1>
    <form action="labprocess.php" method="POST" enctype="multipart/form-data">
      <label for="labname">Lab Name:</label>
      <input type="text" id="labname" name="labname" required>
      <label for="image" class="file-label">Choose Lab Image</label>
      
      <input type="file" id="image" name="image" accept="image/*" required>
      
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
      
      <button type="submit" class="submit-btn" name="submit">Upload</button>
    </form>
  </div>
</body>
</html>
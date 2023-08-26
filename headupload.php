<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Person Information Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
  }

  main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .person-form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
  }

  h1 {
    color: #333;
  }

  label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="file"],
  select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  input[type="file"] {
    border: none;
  }

  select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url('arrow-down-icon.png') no-repeat right center;
    background-size: 20px;
    padding-right: 30px;
  }

  button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
  <main>
    <section class="person-form">
      <h1>FACULTY INFORMATION</h1>
      <form action="headprocess.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="qualification">qualification:</label>
        <input type="text" id="qualification" name="qualification" required>
        <label for="image">Choose Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        <label for="dept">Department:</label>
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
        </select>
        <button type="submit" name="submit">Submit</button>
      </form>
    </section>
  </main>
</body>
</html>
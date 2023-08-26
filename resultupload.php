<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Performance Calculator</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 400px;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  input[type="number"],
  select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="text"],
  select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  button {
    border: none;
    border-radius: 4px;
    cursor: pointer;
    padding: 10px;
    width: 100%;
    font-weight: bold;
    text-transform: uppercase;
    transition: background-color 0.3s;
  }

  #calculate-btn {
    background-color: #34c759;
    color: #fff;
    margin-bottom: 10px;
  }

  #calculate-btn:hover {
    background-color: #30a74e;
  }

  #submit-btn {
    background-color: #007bff;
    color: #fff;
  }

  #submit-btn:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Student Performance Calculator</h2>
  <form id="performance" action="resultprocess.php" method="post">
    <label for="year">Enter Year:</label>
    <input type="text" id="year" name="year" required>

    <label for="appeared">Number of Appeared Students:</label>
    <input type="number" id="appeared" name="appeared" required>

    <label for="passed">Number of Students Passed:</label>
    <input type="number" id="passed" name="passed" required>

    <label for="percentage">Enter Percentage:</label>
    <input type="number" id="percentage" name="percentage" step="0.01" required>

    <label for="sem">Select Semester:</label>
    <select id="sem" name="sem">
      <option value="1">1st-semister</option>
      <option value="3">3rd-semister</option>
      <option value="4">4th-semister</option>
      <option value="5">5th-semister</option>
    </select>
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

    <button type="button" id="calculate-btn">Calculate Percentage</button>
    <button type="submit" id="submit" name="submit">Submit</button>
  </form>
</div>

<script>
  const calculateBtn = document.getElementById('calculate-btn');
  const form = document.getElementById('performance-form');

  calculateBtn.addEventListener('click', () => {
    const appeared = parseFloat(document.getElementById('appeared').value);
    const passed = parseFloat(document.getElementById('passed').value);
    const percentage = (passed / appeared) * 100;
    document.getElementById('percentage').value = percentage.toFixed(2);
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    // Perform form submission or validation here
    alert('Form submitted!');
  });
</script>
</body>
</html>
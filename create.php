<?php
include('config.php');
if(isset($_POST["btn-add"])){
    $name = $_POST["name"];
    $age = $_POST["age"];

    $query = "INSERT INTO students (name, age) VALUES ('$name', '$age')";
    
    $response = mysqli_query($connection, $query);

    if($response){
        header("location: show.php?message=Student Added Succesfully");
    } else {
        echo "<script>alert('Error')</script>";
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Styled Form</title>
<style>
body {
  background-color: #dcdcdc;
  font-family: 'Poppins', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.form-container {
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
  color: white;
  width: 320px;
  text-align: center;
}

h2 {
  margin-bottom: 20px;
  font-weight: 600;
}

input {
  width: 90%;
  padding: 10px;
  margin: 10px 0;
  border: none;
  border-radius: 6px;
  outline: none;
  font-size: 16px;
}

input[type="text"], input[type="number"] {
  background: rgba(255, 255, 255, 0.2);
  color: white;
}

input::placeholder {
  color: rgba(255, 255, 255, 0.8);
}

input[type="submit"] {
  background-color: rgba(255, 255, 255, 0.2);
  color: white;
  cursor: pointer;
  transition: background 0.3s;
}

input[type="submit"]:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
</style>
</head>
<body>

<div class="form-container">
  <h2>Add New Student</h2>
  <form method="POST">
    <input type="text" name="name" placeholder="Enter your name" required><br>
    <input type="number" name="age" placeholder="Enter your age" required><br>
    <input type="submit" value="Add Student" name="btn-add">
  </form>
</div>

</body>
</html>

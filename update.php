<?php
include 'config.php';
$id_to_be_updated = $_GET["id"];
$query = "SELECT * FROM students WHERE id = $id_to_be_updated";
$student = mysqli_query($connection, $query);

$student = mysqli_fetch_assoc($student);

//update
if(isset($_POST["btn-update"])){
    $updatedname = $_POST["name"];
    $updatedage = $_POST["age"];

    $updatedQuery = "UPDATE students SET name = '$updatedname' , age = $updatedage WHERE id = $id_to_be_updated";

    $res = mysqli_query($connection, $updatedQuery);
    if($res){
        header("location: show.php?message=Student Updated Successfully");
    } else {
        header("location: show.php");
    }
}
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
  <h2>Update Student</h2>
  <form method="POST">
    <input type="text" name="name" placeholder="Enter your name" 
     value="<?php echo $student["name"] ?>" required><br>
    <input type="number" name="age" placeholder="Enter your age" value="<?php echo $student["age"] ?>" required><br>
    <input type="submit" value="Update Student" name="btn-update">
  </form>
</div>

</body>
</html>
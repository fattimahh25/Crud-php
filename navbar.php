<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar</title>
<style>


.navbar {
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 30px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.navbar h1 {
  font-size: 24px;
  font-weight: 600;
  margin: 0;
}

.navbar .btn {
  background-color: rgba(255, 255, 255, 0.2);
  border: none;
  padding: 10px 18px;
  border-radius: 6px;
  color: white;
  font-size: 15px;
  cursor: pointer;
  transition: background 0.3s;
}

.navbar .btn:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
</style>
</head>
<body>

<div class="navbar">
  <h1>All Student Records</h1>
  <a href="create.php" class="btn">Add New Student</a>
</div>

</body>
</html>

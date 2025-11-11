<?php include "navbar.php"; ?>
<?php
include "config.php";
$query = "SELECT * FROM students";
$studentData = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Students</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
    body{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.table-container {
  width: 100%;
  margin: 40px auto;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

table {
  width: 100%;
  border-collapse: collapse;
  text-align: center;
  color: white;
  background: linear-gradient(135deg, #6a11cb, #2575fc);
}

thead {
  background: rgba(255, 255, 255, 0.1);
  font-weight: 600;
}

th, td {
  padding: 15px;
}

tbody tr {
  transition: all 0.3s ease;
}

tbody tr:hover {
  background: rgba(255, 255, 255, 0.15);
  transform: scale(1.02);
}
a{
    text-decoration: none;
}
.btn {
  background-color: rgba(255, 255, 255, 0.2);
  border: none;
  padding: 8px 14px;
  border-radius: 6px;
  color: white;
  cursor: pointer;
  transition: background 0.3s;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.4);
}

  </style>
</head>
<body>
<div class="box">
        <?php if (isset($_GET["message"])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET["message"] ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($studentData as $student) { ?>
          <tr>
            <td><?php echo $student["id"]; ?></td>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["age"]; ?></td>
            <td>
              <a href="update.php?id=<?php echo $student['id']; ?>" class="btn">Edit</a>
              <a href="delete.php?id=<?php echo $student['id']; ?>" class="btn">Delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>


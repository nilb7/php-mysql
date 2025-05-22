<?php 
/*Creating a session  based on a session identifier, passed via a GET or POST request.
  We will include config.php for connection with database.
  We will fetch all datas from users in database and show them.
  If a user is admin, he can update or delete a user data.
  */
    session_start();


    include_once('config.php');


    if (empty($_SESSION['username'])) {
          header("Location: login.php");
    }
   
    $sql = "SELECT * FROM users";
    $selectUsers = $conn->prepare($sql);
    $selectUsers->execute();


    $users_data = $selectUsers->fetchAll();
  


 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
      background-color: #f0f2f5;
    }

    .sidebar {
      width: 250px;
      background-color:rgb(15, 182, 85);
      color: #ecf0f1;
      padding: 20px 0;
      position: fixed;
      height: 100%;
      box-shadow: 2px 0 5px rgb(15, 182, 85);
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 24px;
      font-weight: bold;
    }

    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: #ecf0f1;
      text-decoration: none;
      transition: background 0.3s;
      margin-bottom: 10px;
      border-radius: 4px;
    }

    .sidebar a:hover {
      background-color:rgb(15, 182, 85);
    }

    .main-content {
      margin-left: 250px;
      padding: 30px;
      flex: 1;
      overflow-y: auto;
    }

    .header {
      background-color: #fff;
      padding: 15px 30px;
      border-bottom: 1px solid #ddd;
      font-size: 24px;
      font-weight: bold;
    }

    .dashboard-widgets {
      display: flex;
      gap: 20px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .widget {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgb(15, 182, 85);
      flex: 1;
      min-width: 250px;
      text-align: center;
    }

    .widget h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .widget p {
      font-size: 18px;
      font-weight: bold;
    }

    .table-responsive {
      margin-top: 40px;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgb(15, 182, 85);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color:rgb(15, 182, 85);
      color: white;
    }

    tr:nth-child(even) {
      background-color: #ecf0f1;
    }

    a {
      color: #3498db;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>
  <div class="sidebar">
    <h2>SupportersSeat</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="matches.php">Matches</a>

    <a href="logout.php">Logout</a>
  </div>

  <div class="main-content">
    <div class="header">Dashboard Overview</div>

    <div class="dashboard-widgets">
      <div class="widget">
        <h3>Total Users</h3>
        <p>142</p>
      </div>
      <div class="widget">
        <h3>New Signups</h3>
        <p>34 today</p>
      </div>
      <div class="widget">
        <h3>Revenue</h3>
        <p>$7000</p>
      </div>
    </div>

    <div class="table-responsive">
      <h2>Users</h2>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Emri</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <!-- <?php foreach ($users_data as $user_data) { ?> -->
            <tr>
              <td><?php echo $user_data['id']; ?></td>
              <td><?php echo $user_data['emri']; ?></td>
              <td><?php echo $user_data['username']; ?></td>
              <td><?php echo $user_data['email']; ?></td>
              <td><a href="editUsers.php?id=<?= $user_data['id']; ?>">Update</a></td>
              <td><a href="deleteUsers.php?id=<?= $user_data['id']; ?>">Delete</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>

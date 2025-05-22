
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      width: 220px;
      background-color:rgb(60, 179, 90);
      color: #ecf0f1;
      padding: 20px 0;
      position: fixed;
      height: 100%;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: #ecf0f1;
      text-decoration: none;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background-color:rgb(4, 105, 4);
    }

    .main-content {
      margin-left: 220px;
      padding: 30px;
      flex: 1;
    }

    .header {
      background-color: #fff;
      padding: 15px 30px;
      border-bottom: 1px solid #ddd;
      font-size: 20px;
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
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      flex: 1;
      min-width: 200px;
    }

  </style>
</head>
<body>

  <div class="sidebar">
    <h2>SupportersSeat </h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="matches.php">Matches</a>
    <a href="list_users.php">Users</a>
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
  </div>

</body>
</html>
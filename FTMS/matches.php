<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Matches</title>
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
      background-color: rgb(15, 182, 85);
      color: #ecf0f1;
      padding: 12px 20px;
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
      background-color: rgb(15, 182, 85);
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

    .form-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .form-floating {
      margin-bottom: 15px;
    }

    .form-floating input,
    .form-floating label {
      width: 100%;
    }

    .form-floating input[type="file"] {
      padding: 10px;
    }

    .btn-primary {
      width: 100%;
      padding: 10px;
      background-color: rgb(15, 182, 85);
      border: none;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: rgb(15, 182, 85);
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>SupportersSeat</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="list_matches.php">Matches</a>
         <a href="bookings.php">Bookings</a>
    <a href="logout.php">Logout</a>

  </div>

 <div class="main-content">
    <div class="header">Add Match Details</div>

    <div class="form-container">
      <form action="addMatches.php" method="post" enctype="multipart/form-data">
        <div class="form-floating">
          <input type="text" class="form-control" id="match_name" name="match_name" placeholder="Match Name" required>
          <label for="match_name">Match Name</label>
        </div>

        <div class="form-floating">
          <input type="text" class="form-control" id="match_desc" name="match_desc" placeholder="Match Description" required>
          <label for="match_desc">Match Description</label>
        </div>

        <div class="form-floating">
          <input type="number" class="form-control" id="match_seat" name="match_seat" placeholder="Number of Seats" required>
          <label for="match_seat">Number of Seats</label>
        </div>

        <div class="form-floating">
          <input type="file" class="form-control" id="match_image" name="match_image" >
          <label for="match_image">Match Image</label>
        </div>

        <button type="submit" class="btn-primary" name="submit">Add Match</button>
      </form>
    </div>
  </div>


</body>
</html>
















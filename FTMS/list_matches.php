<?php 
session_start();
include_once('config.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM matches";
$selectMatches = $conn->prepare($sql);
$selectMatches->execute();
$matches = $selectMatches->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard - Matches</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      display: flex;
      min-height: 100vh;
      background-color: #f0f2f5;
    }

    .sidebar {
      width: 250px;
      background-color: rgb(15, 182, 85);
      color: white;
      position: fixed;
      height: 100%;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      margin-bottom: 10px;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .main-content {
      margin-left: 250px;
      padding: 30px;
      flex: 1;
    }

    .header {
      background-color: white;
      padding: 20px;
      font-size: 24px;
      font-weight: bold;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(15, 182, 85, 0.3);
      margin-bottom: 30px;
    }

    .table-container {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(15, 182, 85, 0.3);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: rgb(15, 182, 85);
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    a.action-link {
      color: #3498db;
      text-decoration: none;
      margin-right: 10px;
    }

    a.action-link:hover {
      text-decoration: underline;
    }

    .welcome {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .add-button {
  background-color: rgb(15, 182, 85);
  color: white;
  padding: 12px 20px;
  text-decoration: none;
  font-size: 16px;
  border-radius: 6px;
  transition: background-color 0.3s;
}

.add-button:hover {
  background-color: rgb(12, 150, 70);
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
  <div class="header">
    <div class="welcome">Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</div>
    Match Management
  </div>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Match Name</th>
          <th>Description</th>
          <th>Seats</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($matches)): ?>
          <?php foreach ($matches as $match): ?>
            <tr>
              <td><?= htmlspecialchars($match['id']) ?></td>
              <td><?= htmlspecialchars($match['match_name']) ?></td>
              <td><?= htmlspecialchars($match['match_desc']) ?></td>
              <td><?= htmlspecialchars($match['match_seat']) ?></td>
              <td><a class="action-link" href="edit.php?id=<?= $match['id'] ?>">Update</a></td>
              <td><a class="action-link" href="delete.php?id=<?= $match['id'] ?>">Delete</a></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="6">No matches found.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

      <div style="margin-top: 20px; text-align: right;">
      <a href="matches.php" class="add-button">Add a Match</a>
    </div>

  </div>
</div>

</body>
</html>

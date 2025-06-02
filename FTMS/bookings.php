<?php 
session_start();
include_once('config.php');

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['id'];



    $sql = "SELECT matches.match_name, users.email, bookings.id, bookings.nr_tickets, bookings.date, bookings.time, bookings.is_approved 
            FROM matches 
            INNER JOIN bookings ON matches.id = bookings.match_id 
            INNER JOIN users ON users.id = bookings.user_id 
            WHERE bookings.user_id = :user_id";


$selectBookings = $conn->prepare($sql);

    $selectBookings->bindParam(':user_id', $user_id);

$selectBookings->execute();
$bookings_data = $selectBookings->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Bookings Dashboard</title>
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
    Match Bookings
  </div>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Match Name</th>
          <th>User Email</th>
          <th>Tickets</th>
          <th>Date</th>
          <th>Time</th>
          <th>Approved</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($bookings_data)): ?>
          <?php foreach ($bookings_data as $booking): ?>
          <tr>
            <td><?= htmlspecialchars($booking['match_name']) ?></td>
            <td><?= htmlspecialchars($booking['email']) ?></td>
            <td><?= htmlspecialchars($booking['nr_tickets']) ?></td>
            <td><?= htmlspecialchars($booking['date']) ?></td>
            <td><?= htmlspecialchars($booking['time']) ?></td>
            <td><?= $booking['is_approved'] ? 'Yes' : 'No' ?></td>
            <td>
              <a class="action-link" href="approve.php?id=<?= $booking['id'] ?>">Approve</a>
              <a class="action-link" href="decline.php?id=<?= $booking['id'] ?>">Decline</a>
            </td>
          </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="<?= $is_admin ? 7 : 6 ?>>No bookings found.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>

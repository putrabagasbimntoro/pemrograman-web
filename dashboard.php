<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Increment the session visit counter
if (!isset($_SESSION['usm_count'])) {
    $_SESSION['usm_count'] = 1; // Initialize if not set
} else {
    $_SESSION['usm_count']++; // Increment on each visit
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        h1, h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?> ke-<?php echo $_SESSION['usm_count']; ?></h1>
</body>
</html>
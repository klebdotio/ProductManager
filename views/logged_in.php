<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<p>You are currently logged in as: <?php echo $_SESSION['user_name']; ?> <a href="index.php?logout">Logout</a></p>

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->

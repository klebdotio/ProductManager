<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<div class="logout">
        <p>You are currently logged in as: <?php echo $_SESSION['user_name']; ?> <a class="logout" href="index.php?logout">Logout</a></p>
        <p class="leftalign">Permission Level: 10</p>
</div>


<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->

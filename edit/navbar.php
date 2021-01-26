<div class="header">
  <img href="index.php" src="logo.png" alt="logo" >
  <a href="index.php" class="logo">Lake MUN</a>
  <div class="header-right">
    <a <?php if($pageName = 'index') echo "class='active'";?> href="index.php">About Us</a>
    <a <?php if($pageName = 'com') echo "class='active'";?> href="com.php">Committees</a>
    <a <?php if($pageName = 'staff') echo "class='active'";?> href="staff.php">Staff</a>
    <a <?php if($pageName = 'reg') echo "class='active'";?> href="reg.php">Registration</a>
  </div>
</div>
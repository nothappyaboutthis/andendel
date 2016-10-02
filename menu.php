<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
 $curpage = basename($_SERVER['PHP_SELF']);
?>

<ul>
	<li><a href="p1.php" <?php if ($curpage == 'p1.php') { echo 'class="active"'; } ?>>Never</a></li>
	<li><a href="p2.php" <?php if ($curpage == 'p2.php') { echo 'class="active"'; } ?>>Gonna</a></li>
	<li><a href="p3.php" <?php if ($curpage == 'p3.php') { echo 'class="active"'; } ?>>Use</a></li>
	<li><a href="p4.php" <?php if ($curpage == 'p4.php') { echo 'class="active"'; } ?>>This</a></li>
  <li><a href="logout.php" <?php if ($curpage == 'logout.php') { echo 'class="active"'; } ?>>Log uj her</a></li>
</ul>

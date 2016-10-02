<?php $curpage = basename ($_SERVER['PHP_SELF']); ?>
<?php
session_start();
include_once 'dbcon.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: login.php");
}

$query = $link->query("SELECT * FROM tbl_user WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$link->close();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Øv øv og øv</title>
</head>

<body>

<?php include 'menu.php'; ?>
    <center>
        <h1>Hvad skal man dog skrive i dag.....</h1>
        <p>Her en en paragraph</p>
        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
    </center>
<?php include 'footer.php'; ?>

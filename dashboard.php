<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location: login.php");
    exit();
}
"<html>
      <head>
      <title>New Member Welcome</title>
      </head>
      <body>
      <h2>Welcome $firstName $lastName</h2>\n";
?>
<p>Your new Member Account gives you access to the Assets and Liabilities Entry Page. You will enter the current values of cash and cash equivalents assets, invested assets, use assets, current and long-term liabilities.</p>
<div>
<p><strong>Glad you could join us!</strong></p>
<form action="calculator.html" method="post">
    <input type="submit" value="NET WORTH CALCULATION">
</form>
<form action="index.php" method="post">
    <input type="submit" value="Home Page">
</form>
</div>
</body>
</html>

<?php include "./database.php" ?>
<?php $res = $db->query('SELECT * FROM cars');?>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to PHPSandbox</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
  <h1>Vehicles Database</h1>
  <p>ID _ NAME _ PRICE</p>
  <hr/>
  <?php while ($row = $res->fetchArray()) { ?>
    <p><?="{$row['id']} _ {$row['name']} _ {$row['price']}$"?></p>
    <hr/>
  <?php }?>
</body>
</html>
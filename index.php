<?php include 'database.php';?>
<?php
// creating select query
$query = 'SELECT * from shouts';
$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOUT IT!</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>

<body>
    <div id="container">
        <header>
            <h1>SHOUT IT! Shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?></strong>: <?php echo $row['message'] ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div id="input">
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter Your Name">
                <input type="text" name="message" placeholder="Enter A message">
                <input type="submit" name="submit" value="Shout It Out" class="shout-btn"></form>
        </div>
    </div>
</body>

</html>
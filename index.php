<?php include 'database.php'; ?>

<?php
    //create select query
    $query = "SELECT * FROM shout ORDER BY id DESC";
    //we order by id because id has an int value and most recent record would have the highest int value
    
    //declare a variable to hold all results
    $shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SHOUT IT</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>

    <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)): ?>
                        <li class="shouts"> <span><?php echo $row['time'] ?> - </span><b><?php echo $row['user'] ?>:</b> <?php echo $row['message'] ?></li>
                    <?php endwhile; ?>
                </ul>
        </div>
        <div id="input">
            <?php if(isset($_GET['error'])) : ?>
                <div id="error"><?php echo $_GET['error']; ?></div>
            <?php endif; ?>
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter your Name" />
                <input type="text" name="message" placeholder="Enter your Message" />
                <br />
                <input class="shout-btn" type="submit" name="Submit" value="Shout it Out!" />
            </form>
        </div>
    </body>
</html>

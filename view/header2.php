<!DOCTYPE html>
<html>
    <head>
        <title> Zippy Used Autos</title>
        <link rel="stylesheet" type="text/css" href="view\css\main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <h1>Zippy Used Autos</h1>
            <?php if(!isset($_SESSION['firstname'])) { ?>
                <a href="register.php">Register</a>
            <?php } else { ?>
                <?php $name = $_SESSION['firstname'];?>
                <p>Welcome <?php echo $name . "!";?><a href="?action=logout">(Sign out)</a></p>
            <?php } ?>
        </header>

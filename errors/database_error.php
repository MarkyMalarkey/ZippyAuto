<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Zippy's Used Autos</title>
    <link rel="stylesheet" type="text/css" href="...\view\css\main.css" />
</head>

<!-- the body section -->
<body>
    <header><h1>Zippy's Used Autos</h1></header>

    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Zippy's Used Autos</p>
    </footer>
</body>
</html>
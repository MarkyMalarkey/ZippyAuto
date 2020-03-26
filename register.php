<?php
    include('view/header.php'); 
?>

<main>
    <section>
        <?php if (!isset($_SESSION['firstname'])) { ?>
            <h1>Please enter your first name.</h1>
            <form action="index.php" method="POST">
            <input type="hidden" name="action" value="register">
            <input type="text" name="fname" required/>
            <br>
            <label>&nbsp;</label>
            <input type="submit" value="Register" />
            <br>
        </form>
        <?php } else { ?>
            <?php $name = $_SESSION['firstname'];?>
            <h1>Thank you for registering, <?php echo $name . "!";?> </h1>
            <p><a href="?action=car_list">Click Here</a> to view our car list.</p>
        <?php } ?>
    </section>
</main>
<?php include('view/footer.php'); ?>
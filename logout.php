<?php
    include('view/header.php'); 
?>
<main>
    <section>
            <h1>Thank you <?php echo $username . "!";?> You are now signed out. </h1>
            <p><a href="?action=car_list">Click Here</a> to view our car list.</p>
    </section>
</main>
<?php include('view/footer.php'); ?>
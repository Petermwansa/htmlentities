
<!-- this is a simple app to demostrate the use of html entities. 
it is a good practice and secure to always try to wrap all the 
data ffom the user in htmlentities() to get rid of html injection 
in your web applications
Be sure to play with it ))) -->


<?php
    $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
?>

<h1>Guessing Game</h1>

<form action="" method="post">
    <p>
        <label for="guess">Input Guess</label>
        <input type="text" name="guess" id="guess" size="50" value="<?= htmlentities($oldguess) ?>">
    </p>
    <input type="submit" name="" id="">
</form>

<pre>
    $_POST
    <?php
    print_r($_POST);
    ?>
</pre>
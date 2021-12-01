<div class="container">
    <form action="./addCar.php" method="POST">
        <label>Manufacturer:
            <input type="text" name="manufacturer">
        </label>
        <label>Model:
            <input type="text" name="model">
        </label>
        <label>Price:
            <input type="text" name="price">
        </label>
        <input type="submit" value="Add" name="sbtn">
    </form>
</div>

<?php
    if(isset($_POST['sbtn']) && isset($_POST['manufacturer']) && isset($_POST['model']) && isset($_POST['price'])) {
        include_once('./functions.php');
        if(addCar($_POST['manufacturer'], $_POST['model'], $_POST['price'])) {
            echo "<div class='status'>Successfully</div>";
        } else {
            echo "<div class='status'>Error</div>";
        }
    }
?>
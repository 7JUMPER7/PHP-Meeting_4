<div class="container">
    <form action="?page=add" method="POST">
        <label><span>Manufacturer:</span>
            <input type="text" name="manufacturer">
        </label>
        <label><span>Model:</span>
            <input type="text" name="model">
        </label>
        <label><span>Price:</span>
            <input type="text" name="price">
        </label>
        <input type="submit" value="Add" name="sbtn">
    </form>
</div>

<?php
    if(isset($_POST['sbtn']) && isset($_POST['manufacturer']) && isset($_POST['model']) && isset($_POST['price'])) {
        include_once('./functions.php');
        $result = addCar($_POST['manufacturer'], $_POST['model'], $_POST['price']);
        if($result == 1) {
            echo "<div class='status'>Successfully added</div>";
        } else if ($result == -1) {
            echo "<div class='status'>This model already exsits</div>";
        }
        else {
            echo "<div class='status'>Error</div>";
        }
    }
?>
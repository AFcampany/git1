<?php
$title = 'add product page';
require_once('../main/header.php');
?>

<h1>add product page</h1>

<form action="" method="post">
    <div>
        <label>
            Product name
            <input type="text" name="name" placeholder="Product name">
        </label>
    </div>
    <div>
        <label>
            Product price
            <input type="number" name="name" placeholder="Product price">
        </label>
    </div>
</form>
<?php
require_once('../main/footer.php');
?>
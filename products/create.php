<?php
$title = 'add product page';
require_once('../main/header.php');
?>

<h1>add product page</h1>

<form action="../model/database_connection.php" method="post">
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
    <input type="text" name="meta" value="Product.create" hidden>
    <button>Create Product</button>
</form>
<?php
require_once('../main/footer.php');
?>
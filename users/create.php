<?php 
    $title = 'create user page';
    require_once('../main/header.php');  
?>

<h1>create a user</h1>

<form action="" method="post">
    <div>
        <label>
            User name:
            <input type="text" name="name" placeholder="User name">
        </label>
    </div>
    <div>
        <label>
            User email:
            <input type="email" name="emial" placeholder="User emial">
        </label>
    </div>
    <div>
        <label>
            User password:
            <input type="password" name="password" placeholder="User password">
        </label>
    </div>
    <div>
        <label>
            User password confurm:
            <input type="password" name="password" placeholder="User password confurm">
        </label>
    </div>
</form>
<?php 
    require_once('../main/footer.php');
?>
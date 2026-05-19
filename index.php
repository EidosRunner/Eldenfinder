<?php include 'PDO.php'; ?>
<?php include 'other_page\top.php';?>

<main class="container">
<?php 

if(empty($_GET["categorie"])){
    $category = 'home_page\home_page';
    var_dump($_GET);
}
else{
    $category = $_GET["categorie"];
}

include $category . '.php';

?>
</main>

<?php include 'other_page/bottom.php';?>
<?php ///////////////////////////////////////////////////
/// Know Session, DB, Dictionary and more
function my_autoload($class_name)
{
    // Directories to look in
    // (relative to the current file)
    $dirs = [
        '../../../lib/',
    ];

    // Try to load class
    foreach($dirs as $dir) {
        $file = "$dir$class_name.class.php";
        if(file_exists($file)) {
            require_once("$file");
            break;
        }
    }
}
spl_autoload_register('my_autoload'); ?>

<?php $db = DB::getInstance()?>
<?php require("cookie_handling.php") ?>
<?php require("session_handling.php") ?>
<?php require("dictionary.php") ?>
<?php
$products = new Products();
$products->loadAllProducts();

<?php 
include_once 'apps/config/config.php';
include 'apps/function/function.php';
$crud = new Crud;

$id = $_GET["id"];
if($crud->hapus($id) > 0){
    echo " <script>
        document.location.href = 'index.php';
        </script>";
}
else{
    echo " 
    <script>
        document.location.href = 'index.php';
    </script>
";
}
?>
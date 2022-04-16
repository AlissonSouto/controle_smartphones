<?php
    include('protect.php');
    include_once('config.php');
    if(isset($_GET['id'])){
         $id = $_GET['id'];

    $sql = "DELETE FROM smartphones WHERE id='$id'";

    $result = mysqli_query($conexao, $sql);

    echo "<script>location.href='index.php'</script>";
    }
    else{
        echo "Não foi possível deletar o cadastro, tente novamente.";
        echo "<script>location.href='index.php'</script>";
    }
?>
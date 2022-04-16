<?php
    include_once('config.php');
    if(isset($_POST['submit'])){

        $id = $_GET['id'];

        $modelo = $_POST['modelo'];
        $coletor = $_POST['coletor'];
        $chip = $_POST['chip'];
        $serie = $_POST['serie'];
        $status_dispositivo = $_POST['status_dispositivo'];
        $nome = $_POST['nome'];
        $cracha = $_POST['cracha'];
        $setor = $_POST['setor'];
        $patrimonio = $_POST['patrimonio'];
        $anydesk = $_POST['anydesk'];

        $sql_select = "SELECT * FROM smartphones WHERE coletor='$coletor'";
        $result1 = mysqli_query($conexao, $sql_select);
        if($result1->num_rows >= 2){
           echo "<script>alert('*Coletor já registrado no sistema.');</script>";
           echo "<script>history.back()</script>";
           exit;
        }
            $sql_select = "SELECT * FROM smartphones WHERE chip='$chip'";
            $result1 = mysqli_query($conexao, $sql_select);
            if($result1->num_rows >= 2){
            echo "<script>alert('*Número do Chip já registrado no sistema.');</script>";
            echo "<script>history.back()</script>";
            exit;
        }
            $sql_select = "SELECT * FROM smartphones WHERE serie='$serie'";
            $result1 = mysqli_query($conexao, $sql_select);
            if($result1->num_rows >= 2){
            echo "<script>alert('*Número de Série já registrado no sistema.');</script>";
            echo "<script>history.back()</script>";
            exit;
        }
            $sql_select = "SELECT * FROM smartphones WHERE cracha='$cracha'";
            $result1 = mysqli_query($conexao, $sql_select);
            if($result1->num_rows >= 2){
            echo "<script>alert('*Crachá já registrado no sistema.');</script>";
            echo "<script>history.back()</script>";
            exit;
        }
        else{
        $sql_update = "UPDATE smartphones SET modelo='$modelo', coletor='$coletor', chip='$chip', serie='$serie', status_dispositivo='$status_dispositivo', nome='$nome', cracha='$cracha', setor='$setor', patrimonio='$patrimonio', anydesk='$anydesk' WHERE id='$id'";

        $result = $conexao->query($sql_update);
    }    

    }  
    echo "<script>location.href='index.php'</script>";
     
?>
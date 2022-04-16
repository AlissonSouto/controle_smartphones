<?php
        include('protect.php');
    if(!empty($_GET['id'])){
        include_once('config.php');

        $id = $_GET['id'];

        $sqlselect = "SELECT * FROM smartphones WHERE id='$id'";

        $result = $conexao->query($sqlselect);

        if($result->num_rows > 0){

            while($dado = mysqli_fetch_assoc($result)){
                $id = $dado['id'];
                $modelo = $dado['modelo'];
                $coletor = $dado['coletor'];
                $chip = $dado['chip'];
                $serie = $dado['serie'];
                $status_dispositivo = $dado['status_dispositivo'];
                $nome = $dado['nome'];
                $cracha = $dado['cracha'];
                $setor = $dado['setor'];
                $patrimonio = $dado['patrimonio'];
                $anydesk = $dado['anydesk'];
            }

        }else{
            echo "<script>location.href='index.php'</script>";
        }
     
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Alterar Cadastro</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header> 
        <div class="cabecalho">
           <div class="logo">
               <img src="imagens/logo_gcl.png" alt="Logo Grupo Carlos Lyra" title="Grupo Carlos Lyra">
            </div>
           <div class="titulo-cabecalho">
                <h1>Alterar Cadastro</h1>
           </div>
        </div>
    </header>
    <main>
    <a href="index.php">
            <div class="btn-voltar">
                <img src="imagens/voltar.png" alt="Voltar" title="voltar">
            </div>
        </a>
        <div class="cadastro-celulares">
            <form action="edit.php?id=<?php echo "$id";?>" method="post">
                <h3>Dados do Dispositivo</h3>
               <div class="info-dispositivo">
                   Modelo: <select name="modelo" id="modelo" required="">
                       <option value="">Selecione</option>
                        <option value="Samsung Galaxy M12" <?php if($modelo == 'Samsung Galaxy M12')
                        echo "selected";?>>Samsung Galaxy M12</option>
                        <option value="Samsung Galaxy A01" <?php if($modelo == 'Samsung Galaxy A01')
                        echo "selected";?>>Samsung Galaxy A01</option>
                        <option value="Samsung Galaxy A02" <?php if($modelo == 'Samsung Galaxy A02')
                        echo "selected";?>>Samsung Galaxy A02</option>
                        <option value="Samsung Galaxy S3" <?php if($modelo == 'Samsung Galaxy S3')
                        echo "selected";?>>Samsung Galaxy S3</option>
                        <option value="Lg K4" <?php if($modelo == 'Lg K4')
                        echo "selected";?>>Lg K4</option>
                        <option value="Lg K40s" <?php if($modelo == 'Lg K40s')
                        echo "selected";?>>Lg K40s</option>
                    </select><br><br>
                   Número do Coletor: <input class="input-cadastro" value="<?php echo $coletor;?>" style="width: 50px;" type="number" name="coletor" required="" min="1" max="200" pattern="[0-9]{1-3}"><br><br>
                   Número do Chip: <input class="input-cadastro" value="<?php echo $chip;?>" type="tel" name="chip" required="" maxlength="12" pattern="[0-9]{11,12}"><br><br>
                   Número de Série: <input value="<?php echo $serie;?>" class="maiuscula, input-cadastro" type="text" name="serie" maxlength="11" minlength="11"><br><br>
                   Patrimônio: <input class="input-cadastro" value="<?php echo $patrimonio;?>" type="text" name="patrimonio" maxlength="10" minlength="2"><br><br>
                   Anydesk: <input class="input-cadastro" value="<?php echo $anydesk;?>" type="text" name="anydesk" maxlength="9" minlength="9"><br><br>
                   Status do Dispositivo: <select name="status_dispositivo" id="" required="">
                            <option value="">Selecione</option>
                            <option value="Ativo" <?php if($status_dispositivo == 'Ativo') echo "selected";?>>Ativado</option>
                            <option value="Desativado" <?php if($status_dispositivo == 'Desativado') echo "selected";?>>Desativado</option>
                        </select><br>
               </div>
               <h3>Dados do Responsável</h3>
               <div class="info-responsavel">
                   Nome: <input value="<?php echo $nome;?>" class="maiuscula, input-cadastro" type="text" name="nome" required="" maxlength="40"><br><br>
                   Crachá: <span id="span_cracha">02010</span><input class="input-cadastro" value="<?php echo $cracha;?>" type="text" name="cracha" required="" maxlength="5" pattern="[0-9]{5}"><br><br>
                   Setor: <input value="<?php echo $setor;?>" class="maiuscula" type="text" name="setor"><br><br>
               </div>
               <p style="font-size: 13.5px;"><b>Termo de Compromisso:</b></p>
                <input style="border: none;" type="file">
                <div class="botao"><button id="btn-alterar" type="submit" name="submit">Salvar Alterações</button></div>
            </form>
        </div>
    </main>
    <footer class="footer">
        <span class="direitos">
            <address>
                <p>&copy; by Alisson Souto - 2022 <br> CNPJ xx.xxx.xxx/xxx-xx - Todos os direitos reservados.</p>
            </address>
        </span>
        <span class="links-sociais">
        </span>
    </footer>

</body>
</html>
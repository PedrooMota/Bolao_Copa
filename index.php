<?php
header('Content-Type: text/html; charset=utf-8');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="stylesheet" href="estilos/styleLogin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

        <div class="w3-row-padding">
            <header>
                <div class="w3-third"><img id="img1" src="img/univap.png"></div>
                <div class="w3-third"><img id="img2" src="img/info.jpg"></div>
            </header>
      
        </div><br><br>
        <center><h1>Bolão da Copa do Mundo 2022 da Univap!!</h1></center><br>
        <center><h3><p>À partir deste formulário, poderemos entrar em contato com o(a) Senhor(a) caso ganhe o bolão!!</p></h3></center>

    <div class="row">
        <div class="col-sm-12">       
    <main>
        <form action="processar.php" method="GET" enctype="multipart/form-data">       

        <center><h3>Por favor, preencha esse breve formulário</h3></center><br>
        <input type="hidden" name="idTrabalho"  value = "<?php echo $idTrabalho?>"><br>
            <div class="field">
                <center><label>Seu Nome</label></center>
                <input type="text" id="nome" name="nome" required class="form-control">
               
            </div><br>

            <div class="field">
                <center><label for="telefone">Número para contato</label></center>
                <input type="number" id="telefone"name="telefone" required class="form-control">
                
            </div><br>

            <div class="field">
                <center><label for="email">E-mail para contato</label></center>
                <input type="text" id="email" name="email"required class="form-control">
              
            </div><br>
        
            <center><button type="submit" id="cadastrar" style="width: 110px; height: 30px;"class="btn btn-primary btn-block">Enviar</button></center> 
        </form>
    </main>
   

        </div>
    </div>

  
    <center><h3><p>Você pode realizar o bolão apenas uma vez!</p></h3></center>
    <center><h3><p>Desejamos Boa Sorte!</p></h3></center>

    
</body>
</html>
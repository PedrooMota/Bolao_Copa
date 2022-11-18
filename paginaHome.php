<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <link rel="icon" href="img/favicon.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolão da Copa</title>
    <link rel="stylesheet" href="estilos/styleHome.css" />


</head>
<body>
    <div class="w3-row-padding">
        <header>
            <div class="w3-third"><img id="img1" src="img/univap.png"></div>
            <div class="w3-third"><img id="img2" src="img/info.jpg"></div>
        </header>
        <nav>
            <ul class="menu">
                <li><a href="tabela/tabela.php" target="_blank">Grupos</a></li>
            </ul>
        </nav>
       
    </div><br><br>
    <h1 id="tituloPrincipal">Bolão da Copa do Mundo 2022</h1><br>

<form action="processar.php" method="GET" enctype="multipart/form-data">

    <main class="container">
    
        <div class="grupoA">
            <center><h3>Grupo A</h3></center>
            <h4>Vencedor 1 lugar</h4>
            <select name="vencedor1A" id="vencedor1A" class="icon-menu" style="width: 150px; height: 30px;" required>
                <option value="0"></option>
                <option value="Catar">Catar</option>
                <option value="Senegal">Senegal</option>
                <option value="Equador">Equador</option>
                <option value="Holanda">Holanda</option>
            </select><br>

            <h4>Vencedor 2 lugar</h4>
            <select name="vencedor2A" id="vencedor2A" class="icon-menu" style="width: 150px; height: 30px;" required>
                <option value="0"></option>
                <option value="Catar">Catar</option>
                <option value="Senegal">Senegal</option>
                <option value="Equador">Equador</option>
                <option value="Holanda">Holanda</option>
            </select>
        </div>

        <div class="grupoB">
            <center><h3>Grupo B</h3></center>
            <h4>Vencedor 1 lugar</h4>
            <select  id="vencedor1B" class="icon-menu" name="vencedor1B" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Inglaterra">Inglaterra</option>
                <option value="Ira">Irã</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Pais de Gales">Gales</option>
            </select><br>

            <h4>Vencedor 2 lugar</h4>
            <select id="vencedor2B" class="icon-menu" name="vencedor2B" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Inglaterra">Inglaterra</option>
                <option value="Ira">Irã</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Pais de Gales">Gales</option>
            </select><br>

        </div>

        <div class="grupoC">
            <center><h3>Grupo C</h3></center>
            <h4>Vencedor 1 lugar</h4>
            <select id="vencedor1C" class="icon-menu" name="vencedor1C" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Arabia Saudita">Arábia Saudita</option>
                <option value="Argentina">Argentina</option>
                <option value="Mexico">México</option>
                <option value="Polonia">Polônia</option>
            </select><br>

            <h4>Vencedor 2 lugar</h4>
            <select  id="vencedor2C" class="icon-menu" name="vencedor2C" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Arabia Saudita">Arábia Saudita</option>
                <option value="Argentina">Argentina</option>
                <option value="Mexico">México</option>
                <option value="Polonia">Polônia</option>
            </select><br>
        </div>

        <div class="grupoD">
            <center><h3>Grupo D</h3></center>
            <h4>Vencedor 1 lugar</h4>
            <select  id="vencedor1D" class="icon-menu" name="vencedor1D" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Dinamarca">Dinamarca</option>
                <option value="Australia">Austrália</option>
                <option value="Franca">França</option>
                <option value="Tunisia">Tunísia</option>
            </select><br>

            <h4>Vencedor 2 lugar</h4>
            <select id="vencedor2D" class="icon-menu" name="vencedor2D" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Dinamarca" r>Dinamarca</option>
                <option value="Australia">Australia</option>
                <option value="Franca">França</option>
                <option value="Tunisia">Tunísia</option>
            </select><br>
        </div>
   

        <div class="grupoE">
            <center><h3>Grupo E</h3></center>
            <h4>Vencedor 1 lugar</h4>
            <select id="vencedor1E" class="icon-menu" name="vencedor1E" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Alemanha">Alemanha</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Espanha">Espanha</option>
                <option value="Japao">Japão</option>
            </select><br>

            <h4>Vencedor 2 lugar</h4>
            <select name="vencedor2E" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Alemanha">Alemanha</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Espanha">Espanha</option>
                <option value="Japao">Japão</option>
            </select><br>
        </div>

        <div class="grupoF">
            <center><h3>Grupo F</h3></center>
            <h4>Vencedor 1 lugar</h4>
            <select name="vencedor1F" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Belgica">Bélgica</option>
                <option value="Canada">Canadá</option>
                <option value="Croacia">Croácia</option>
                <option value="Marrocos">Marrocos</option>
            </select><br>

            <h4>Vencedor 2 lugar</h4>
            <select name="vencedor2F" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Belgica">Bélgica</option>
                <option value="Canada">Canadá</option>
                <option value="Croacia">Croácia</option>
                <option value="Marrocos">Marrocos</option>
            </select><br>
        </div>

        <div class="grupoG">
            <center><h3>Grupo G</h3></center>
            <h4>Vencedor 1 lugar</h4>
            <select name="vencedor1G" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Brasil">Brasil</option>
                <option value="Camaroes">Camarões</option>
                <option value="Servia">Sérvia</option>
                <option value="Suica">Suiça</option>
            </select><br>

            <h4>Vencedor 2 lugar</h4>
            <select name="vencedor2G" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Brasil">Brasil</option>
                <option value="Camaroes">Camarões</option>
                <option value="Servia">Sérvia</option>
                <option value="Suica">Suiça</option>
            </select><br>
        </div>

        <div class="grupoH">
            <center><h3>Grupo H</h3></center>
            <h4>Vencedor 1 lugar</h4>
            <select name="vencedor1H" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Coreia do Sul">Coreia do Sul</option>
                <option value="Gana">Gana</option>
                <option value="Portugal">Portugal</option>
                <option value="Uruguai">Uruguai</option>
            </select><br>

            <h4>Vencedor 2 lugar</h4>
            <select name="vencedor2H" style="width: 140px; height: 30px;" required>
                <option value="0"></option>
                <option value="Coreia do Sul">Coreia do Sul</option>
                <option value="Gana">Gana</option>
                <option value="Portugal">Portugal</option>
                <option value="Uruguai">Uruguai</option>
            </select><br>
        </div>
       
    </main> <br><br><br><br><br><br>
    <center><button style="width: 70px; height: 30px;"type="submit" id="cadastrar" class="btn btn-primary btn-block">Enviar</button></center> 
</form>
<footer>
            <p>Produzido por: <br>
            Pedro Henrique Mota | Henrique Marques | Rodrigo Marques &copy; 2022</p>
            
        </footer>

  
   
</body>
</html>
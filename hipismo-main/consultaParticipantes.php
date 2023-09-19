<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição Profissional</title>
    <style>
        .body {
            
            opacity: ;
            background-size: 800px;
            background-repeat: no-repeat;
            background-position:top;
            display: block;
            justify-content: center;
            align-items:center;
            height: 100vh;
            margin: 0;
            margin-bottom: 120px;
           
            
        }


        .form-container {
            background: linear-gradient(to right, #ffffff, #f54141, #010b1f);
            border-radius: 10px;
            padding: 20px 15px;
            text-align: center;
            max-width: 400px;
            opacity: 0.95;
            align-items: center;
            margin-top: 400px;
            margin: auto;
            
        }

        input[type="text"],
        input[type="number"] {
            width: 85%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .submit-button {
            background-color: #3e131c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .Titulo{
            align-items: center;
            margin-top: 25px;
            margin-bottom: 300px;
            padding: 2px 6px;
            text-align: justify  ;
            margin: 29px auto;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
             
            
        }

        .tabela,table{
            letter-spacing: 1px;
            border-collapse: separate;
            padding-bottom: 10px;
            text-align: center;
            align-items: center;
            margin: 0px 20% ;
        }
        
        
    
    </style>
</head>
<body class="body"  >

     <!--Inicio tabela-->
    <div class="Titulo">
        <h1 style="text-align: center; align-items: center;">Tabela de Consulta</h1>
    </div>   
    
    <div class="tabela">
        <h2>Prova 80Cm</h2>
        <table >
        <tbody>
        <?php
    // Conexão com o banco de dados
    include 'dbcon.php';

    // Consulta para recuperar todos os participantes
    $query = "SELECT * FROM participantes WHERE prova=0.80";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        // Exibir a lista de participantes em uma tabela
        echo '<table>';
        echo '<thead><tr><th>Nome</th><th>Documento</th><th>Unidade</th><th>Prova</th></tr></thead>';
        echo '<tbody>';
        foreach ($query_run as $participante) {
            echo '<tr>';
            echo '<td>' . $participante['nome'] . '</td>';
            echo '<td>' . $participante['documento'] . '</td>';
            echo '<td>' . $participante['unidade'] . '</td>';
            echo '<td>' . $participante['prova'] . '</td>';
            
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>Nenhum participante cadastrado.</p>';
    }
    ?>
                                
                            </tbody>
                        </table>
    </div><!-- Fechamento Tabela 80cm-->
    
    <div class="tabela"><!--Inicio Tabale 1M-->
        <h2>Prova 1 Metro</h2>
        <table class="">
        <tbody>
        <?php
    // Conexão com o banco de dados
    include 'dbcon.php';

    // Consulta para recuperar todos os participantes
    $query = "SELECT * FROM participantes WHERE prova=1.0";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        // Exibir a lista de participantes em uma tabela
        echo '<table>';
        echo '<thead><tr><th>Nome</th><th>Documento</th><th>Unidade</th><th>Prova</th></tr></thead>';
        echo '<tbody>';
        foreach ($query_run as $participante) {
            echo '<tr>';
            echo '<td>' . $participante['nome'] . '</td>';
            echo '<td>' . $participante['documento'] . '</td>';
            echo '<td>' . $participante['unidade'] . '</td>';
            echo '<td>' . $participante['prova'] . '</td>';
        
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>Nenhum participante cadastrado.</p>';
    }
    ?>
                                
                            </tbody>
                        </table>
    </div>
<!--Inicio Prova 1.10 Metros-->
<div class="tabela"><!--Inicio Tabale 1M-->
        <h2>Prova 1.10 Metro</h2>
        <table class="">
        <tbody>
        <?php
    // Conexão com o banco de dados
    include 'dbcon.php';

    // Consulta para recuperar todos os participantes
    $query = "SELECT * FROM participantes WHERE prova=1.10";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        // Exibir a lista de participantes em uma tabela
        echo '<table>';
        echo '<thead><tr><th>Nome</th><th>Documento</th><th>Unidade</th><th>Prova</th></tr></thead>';
        echo '<tbody>';
        foreach ($query_run as $participante) {
            echo '<tr>';
            echo '<td>' . $participante['nome'] . '</td>';
            echo '<td>' . $participante['documento'] . '</td>';
            echo '<td>' . $participante['unidade'] . '</td>';
            echo '<td>' . $participante['prova'] . '</td>';
           
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>Nenhum participante cadastrado.</p>';
    }
    ?>
                                
                            </tbody>
                        </table>
    </div>

    <div class="tabela"><!--Inicio Tabale 1.20M-->
        <h2>Prova 1.20 Metro</h2>
        <table >
        <tbody>
        <?php
    // Conexão com o banco de dados
    include 'dbcon.php';

    // Consulta para recuperar todos os participantes
    $query = "SELECT * FROM participantes WHERE prova=1.20";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        // Exibir a lista de participantes em uma tabela
        echo '<table>';
        echo '<thead><tr><th>Nome</th><th>Documento</th><th>Unidade</th><th>Prova</th></tr></thead>';
        echo '<tbody>';
        foreach ($query_run as $participante) {
            echo '<tr>';
            echo '<td>' . $participante['nome'] . '</td>';
            echo '<td>' . $participante['documento'] . '</td>';
            echo '<td>' . $participante['unidade'] . '</td>';
            echo '<td>' . $participante['prova'] . '</td>';
            
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>Nenhum participante cadastrado.</p>';
    }
    ?>
                                
                            </tbody>
                        </table>
    </div>

    <div class="tabela"><!--Inicio Tabale 1.30Metros-->
        <h2>Prova 1.30 Metro</h2>
        <table >
        <tbody>
        <?php
    // Conexão com o banco de dados
    include 'dbcon.php';

    // Consulta para recuperar todos os participantes
    $query = "SELECT * FROM participantes WHERE prova=1.30";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        // Exibir a lista de participantes em uma tabela
        echo '<table>';
        echo '<thead><tr><th>Nome</th><th>Documento</th><th>Unidade</th><th>Prova</th></tr></thead>';
        echo '<tbody>';
        foreach ($query_run as $participante) {
            echo '<tr>';
            echo '<td>' . $participante['nome'] . '</td>';
            echo '<td>' . $participante['documento'] . '</td>';
            echo '<td>' . $participante['unidade'] . '</td>';
            echo '<td>' . $participante['prova'] . '</td>';
            
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>Nenhum participante cadastrado.</p>';
    }
    ?>
                                
                            </tbody>
                        </table>
    </div>

</body>
</html>

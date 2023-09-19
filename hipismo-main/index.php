<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>40º Torneio Hípico da Polícia Militar do Estado de São Paulo</title>
<style>
        body {
            background: linear-gradient(to bottom, #fff, black);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        
            
          
        }

        .tab-container {
            display: center;
            flex-direction: column;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            max-width: 450px;
            padding: 18px 30px;
            
        }

        .tab-button {
            background-color: #002776;
            
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 10px;
            cursor: pointer;
            font-size: 20px;
            margin: 2px 8px;
            display: inline;
            align-items:center;
            
        }

        .tab-button:hover {
            background-color: #000000;
        }

        .content {
            text-align: center;
            color: white;
            margin: center;
            display: inline-block;
        }

        .image-container {
            margin-top: 20px;
            text-align: center;
            
        }

        .image-container img {
            max-width: 90%;
            height: 100%;
        }
    </style>
</head>
<body id="">
    
    <div class="tab-container">
        <div >
            <img width="auto" height="650px" style="border-radius: 20px; ;" src="logoTemporada.jpeg" alt="Imagem Média">
            
            <span><button class="tab-button" onclick="openCadastroPage()"> Cadastrar </button></span>
            <span><button class="tab-button" onclick="openConsultaPage()"> Prova </button></span>
            <span><button class="tab-button" onclick="openCronogramaPage()"> Cronograma </button></span>
        </div>
        <div class="content">
            <!-- Conteúdo da página atual -->
            <h1>40º Torneio Hípico da Polícia Militar do Estado de São Paulo</h1>
            <h3>Regimento de Polícia Montada "9 de Julho"</h3>
            <h5 style="padding-bottom: 0px; margin-bottom: 0px;">Designed by Martinho Aux Telemática</h5>
        </div>
    
    </div>

    <script>
        function openCadastroPage() {
            // Redirecionar para a página de cadastro
            window.location.href = "cadastroParticipantes.php";
        }

        function openConsultaPage() {
            // Redirecionar para a página de consulta
            window.location.href = "consultaparticipantes.php";
        }

        function openCronogramaPage() {
            // Redirecionar para a página de consulta
            window.location.href = "cronograma.php";
        }
    
    </script>
</body>
</html>


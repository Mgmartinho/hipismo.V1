<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>40º Torneio Hípico da Polícia Militar do Estado de São Paulo</title>
<style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #000000, #815903);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
          
        }

        .tab-container {
            display: block;
            flex-direction: column;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            max-width: 450px;
            padding: 20px;
            opacity: 0.9;
        }

        .tab-button {
            background-color: #002776;
            
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 20px;
            margin-bottom: 10px;
            margin: 5px 5px;
            display: inline;
            align-items:center;
            
            
            

        }

        .tab-button:hover {
            background-color: #000000;
        }

        .content {
            text-align: center;
            color: white;
            margin-top: 20px;
            display: inline-block;
        }

        .image-container {
            margin-top: 20px;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    
    <div class="tab-container">
        <div >
            <img width="auto" height="680px" style="border-radius: 10px; opacity:;" src="cavaloS.jpg" alt="Imagem Média">
            
            <span><button class="tab-button" onclick="openCadastroPage()"> Cadastro </button></span>
            <span><button class="tab-button" onclick="openConsultaPage()"> Consultar </button></span>
            <span><button class="tab-button" onclick="openCronogramaPage()"> Cronograma </button></span>
        </div>
        <div class="content">
            <!-- Conteúdo da página atual -->
            <h1>40º Torneio Hípico da Polícia Militar do Estado de São Paulo</h1>
            <h3>Regimento de Polícia Montada "9 de Julho"</h3>
            <h5 style="padding-bottom: -40px; margin-bottom: 2px;">Designed by Martinho</h5>
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


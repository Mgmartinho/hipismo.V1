<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporada 2023</title>
    <link rel="stylesheet" href="formatacoes.css">
</head>
<body id="geral">
    <!--Inicio da Aba da Pagina Inicial-->
    <div id="container">
        <!--Bordas da Aba de Navegação-->
        <fieldset style="border: none;">
            <legend style="border: none; font-size: 25px; text-decoration: none; ">Cadastro de Participantes</legend>
                <form action="code.php" method="POST" >
                    <div>
                        
                        <input type="text" name="nome"  placeholder="Nome Completo" >
                    </div>
                    
                    <div>
                        <input type="text" name="documento" placeholder="Nº do seu documento ou RE">
                    </div>

                    <div>
                        <input type="text" name="unidade" placeholder="Nome da Unidade que representa">
                    </div>

                    <div>
                        <input type="text" name="cavalo" placeholder="Nome do Solipede">

                    </div>

                    <div>
                        <h3 for="prova">Selecione o tipo de prova:</h3>
                            <select style="font-family: sans-serif,'Times New Roman', Times, serif  ; font-size: 15px ;width: 150px; padding: 5px 15px; margin-top: -15px ;margin-bottom: 20px; align-items: center; border-radius: 5px;" id="prova" name="prova">
                                
                                <option value="0.80">80cm</option>
                                <option value="1.0">1m</option>
                                <option value="1.10">1.10m</option>
                                <option value="1.20">1.20m</option>
                                <option value="1.30">1.30m</option>
                                <!-- Adicione mais opções conforme necessário -->
                            </select>
                    
                    </div>

                    <div >
                        <span><button type="submit" name="save_participantes" class="tab-button"> Confirmar </button></span>
                        <span><button class="tab-button"> <a href="index.php"> Voltar </a> </button></span>
                    </div>    

                </form>    
        </fieldset>
        <!--Fechamento Bordas da Aba de Navegação-->
        <h2>40º Torneio hipico do Regimento de Policia Montada 9 de Julho</h2>
        <h4>Designed be Sd Pm Martinho Telemática RPMon</h4>
    </div>
    <!--Fechamento da Aba da Pagina Inicial-->
    <script>
        function openCadastroPage() {
            // realizar cadastro
            window.location.href = "cadastroParticipantes.html";
        }

        function openCadastroPage() {
            // Voltar para pagina 1
            window.location.href = "rpmonTelaPrincipal.html";
        }
      
    
    </script>

</body>
</html>
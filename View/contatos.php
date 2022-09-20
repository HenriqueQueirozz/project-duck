<html>
    <head>
        <title>Project Duck</title>
        <style>@import url('https://fonts.googleapis.com/css2?family=Abel&family=Open+Sans:wght@400;700&display=swap');</style>
        <script src="https://kit.fontawesome.com/e4b4463313.js" crossorigin="anonymous"></script>
        <style>
            body{
                width: 100%;
                padding: 0;
                margin: 0;
                display: grid;
                grid-template-columns: 20% 80%;
                grid-template-rows: auto;
                grid-template-areas: "navegacao conteudo";
                font-family: 'Open Sans', sans-serif;
            }
            
            #barra-de-navegacao{
                grid-area: navegacao;
                display: flex;
                flex-direction: column;
            }
            
            #conteudo{
                grid-area: conteudo;
                text-align: center;

                display: grid;
                grid-template-columns: auto 1fr 1fr auto;
                grid-template-rows: auto auto 1fr 1fr auto 1fr;
                grid-template-areas: ". titulo    titulo    ."
                                     ". pesquisa  pesquisa  ."
                                     ". resultado resultado ."
                                     ". resultado resultado ."
                                     ". adicionar adicionar ."
                                     ". .           .       ." ;

            }
            
            .aba{
                width: 100%;
                background-color: pink;
                border: none;
                height: 100%;
                color: white;
                font-size: 18px;
            }

            .aba h4{
                
            }
            
            .pesquisa{
                grid-area: pesquisa;
                height: fit-content;
            }

            .titulo{
                grid-area: titulo;
                padding-top: 3vh;
                font-size: 28px;
                font-family: 'Abel', sans-serif;
            }

            .resultado{
                grid-area: resultado;
                color: white;
                padding: 5vh 0;
            }

            .adicionar{
                grid-area: adicionar;
            }

            .btn{
                border: none;
                padding: 2vh 3vw;
                border-radius: 10px;
            }

            .btn-pesquisa{
                background-image: linear-gradient(to bottom right, #2CD7C6, #02733E);
                color: white;
                font-size: 14px;
                text-align: center;
            }

            .btn-filter{
                background-color: #17736A;
                color: white;
            }

            #resultado_pesquisa{
                width: 50%;
                height: 100%;
                margin: auto auto;
                background-color: #EBEFF2;
                border-radius: 10px;
                color: black;
            }

            .btn-adicionar{
                background-image: linear-gradient(to bottom right, #F2CB05, #F66E3D);
                color: black;
                font-weight:  bold;
            }
		</style>
    </head>
    <body>
    
        <header id="barra-de-navegacao">

            <button class="aba" style="background-color: #02733E;">
                <i class="fa-solid fa-user"></i>
                <h4>Contatos</h4>
            </button>
            
            <button class="aba" style="background-color: #D98E04;">
                <i class="fa-solid fa-city"></i>
                <h4>Obras</h4>
            </button>
        
        </header>
    
        <main id="conteudo">

            <section class="titulo">
                <h1>Contatos</h1>
            </section>
            <section class="pesquisa">
                    <input type="text" placeholder="Pesquisar...">
                    <button class="btn btn-filter"><i class="fa-solid fa-filter"></i></button>
                    <button class="btn btn-pesquisa"><i class="fa-solid fa-magnifying-glass"></i></button>
            </section>
            <section class="resultado">
                <div id="resultado_pesquisa">
                    
                    <br>
                    <br>
                    <br>
                    <br>
                    Nenhum resultado encotrado.

                </div>
            </section>
            <section class="adicionar">
                <button class="btn btn-adicionar">Adicionar um novo contato <i class="fa-solid fa-plus"></i></button>
            </section>

        </main>

    </body>

    <script>

    </script>
</html>
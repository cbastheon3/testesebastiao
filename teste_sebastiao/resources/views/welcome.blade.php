<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="content">
                
            <div class="container">
                <form action="/enviar" method="POST">
                    <input type="hidden" name="_token" value="((csrf_token() ))">
                    <div class="form-group">
                        <label for="cod_prod">Código do produto</label>
                        <input type="text" id="cod_prod" name="codigo" class="form-control" placeholder="cod_prod">
                    </div>
                    <div class="form-group">
                        <label for="nome_prod">Nome do produto</label>
                        <input type="text" id="nome_prod" name="nome" class="form-control" placeholder="nome_prod">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" id="categoria" name="categoria" class="form-control" placeholder="categoria">
                    </div>
                    <div class="form-group">
                        <label for="preco_uni">Preço unitário</label>
                        <input type="text" id="preco_uni" name="preco_uni" class="form-control" placeholder="preco_uni">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" id="descricao" name="descricao" class="form-control" placeholder="descricao">
                    </div>
                    <button type="submit" class="btn btn-default">Enviar
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

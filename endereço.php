<html>
    <head>
    <title>ViaCEP Webservice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/components/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
    <!-- Inicio do formulario -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Webservice do CEP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="cep.php">Busca por CEP</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="endereço.php">Busca por Endereço<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
          <div class="row">
            <div class="col-sm">
              
            </div>
            <div class="col-sm">
                    <form action="procurar.php" method="POST">
                      <label>Cep:
                        <input name="cep" type="text" id="cep" value="" size="60" maxlength="9" class="form-control">
                      </label>
                      <br />
                      <label>Rua:
                        <input name="rua" type="text" class="form-control" id="logradouro" size="60"/>
                      </label>
                      <br />
                      <label>Bairro:
                        <input name="bairro" type="text" class="form-control" id="bairro" size="60" />
                      </label>
                      <br />
                      <label>Cidade:
                        <input name="cidade" type="text" class="form-control" id="localidade" size="60" />
                      </label>
                      <br />
                      <label>Estado:
                        <input name="uf" type="text" id="uf" size="60" class="form-control"/>
                      </label>
                      <br />
                      <label>IBGE:
                        <input name="ibge" type="text" class="form-control" id="ibge" size="60" />
                      </label>
                      <br />

                      <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="Salvar">
                     <!-- Por que precisamos do id e do accept? -->
                </div>
                    </form>
            </div>
            <div class="col-sm">
             
            </div>
          </div>
    </div>

    </body>

     <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Página Principal</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="cep.php"><i class="fa fa-angle-double-right"></i>Busca por CEP</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="endereço.php"><i class="fa fa-angle-double-right"></i>Busca por Endereço</a></li>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://viacep.com.br/">Via CEP</a></u> é um Webservice disponibilizado gratuitamente pelo IBGE</p>
          <p class="h6">Todos os Direitos Reservados<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank"></a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>

    </html>
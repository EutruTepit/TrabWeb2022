<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>GAME_BOX</title>
<style>

    .botao{

        margin-right: 30px;  
        width: 200px;  
        text-align: center;
        border-width: 5px;
        width: 150px;
        height: 40px;
        font-size: 18px;
        font-family:Arial, Helvetica, sans-serif;
        font-weight: bold;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;  
       
        
    }

    #login{
        background-color: #009EE2;
        border-color: #28348A;
        color: #28348A;
        
        
    }

    #registrar{
        background-color: #F8B133;
        border-color: #BD1622;
       
    }

    .filtro{

        margin-right: 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;

    }

    #imgsearch{
      width: 20px;
      height:20px;
      margin-right: 10px;
       
    }
    .carrinho{
      width: 30px;
      height: 30px;
    }

    #barrapesquisa{
      width: 100px;
      margin-right: 1px;
      display: flex;

    }
    #imglogo{
      margin-right: 30px;
      display: flex;
      margin-left: 10px;
    }

    .aba_categorias{
      background-color:;
      height: 50%;
      align-self: auto;
    }

    .borda_baixo_card{
      margin-bottom: 30px;
    }
</style>
    

</head>

<body>

<div class="headd-none .d-md-block .d-lg-none">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"><img id="imglogo" src="https://cdn.discordapp.com/attachments/664223166582751252/971078154821173278/unknown.png" alt=""></a></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 xl-0">
        <li class="nav-item">
          <a class="nav-link filtro align-self-end" href="#">Promoções </a>
        </li>
        <li class="nav-item">
          <a class="nav-link filtro align-self-end" href="#">Lançamentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link filtro align-self-end" href="#">Mais Vendidos</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" id="barrapesquisa" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit"><img src="https://cdn.discordapp.com/attachments/664223166582751252/971087783810711552/unknown.png" alt="" id="imgsearch"></button>
      </form>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="{{ route('login') }}" class="btn btn-primary nav-link botao" id="login">Login</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('register') }}" class="btn btn-primary nav-link botao" id="registrar">Registrar-se</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"><img class="carrinho" src="https://cdn.discordapp.com/attachments/664223166582751252/971473361798586458/transparent-bg-designify.png" alt=""></a>
        </li>   
    </ul>

    </div>
  </div>
</nav>
</div>
<div class="corpo">

    <div class="container-fluid">
        <div class="row">
            <div class="col-2" style="padding:0px;">
              <div class="aba_categorias h-100 p-3 text-light bg-dark">
    <div>
        <p class="align-self-end" style="font-size:20px">Categorias</p>
    </div>
    <div class="categorias"> <!-- Para teste apenas--->
        <p>Terror</p>
        <p>Aventura</p>
        <p>Tiro</p>
        <p>RPG</p>
        <p>Sobrivivencia</p>
    </div>
</div>
             </div>
            <div class="col-9 bg-dark" style="padding-left:0px">@yield('conteudo')</div>
            <div class="col-1 bg-dark "></div>
    </div>
</div>
</div>












































<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
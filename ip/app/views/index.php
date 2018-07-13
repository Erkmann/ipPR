<!doctype html>
<html lang="pt-br">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

    <script>
        $(document).ready(function(){
          $('#bt').click(function () {
              var t1 = $('#1').val();
              var t2 = $('#2').val();
              var t3 = $('#3').val();
              var t4 = $('#4').val();
              var masc = $('#masc').val();
              var rota = "calcular";

              $.get("indexController.php", {1 : t1, 2: t2, 3: t3, 4: t4, 'mascara': masc,'rota': rota }, function (data) {
                  $('#resultado').append(data);
              })

          })
        });
    </script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Russo e Andri</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent"> </div>
    </div>
</nav>

    <div>
        <form id="form">
            <input maxlength="3" id="1" type="text" required name="trinca1">.
            <input maxlength="3" id="2" type="text" required name="trinca2">.
            <input maxlength="3" id="3" type="text" required name="trinca3">.
            <input maxlength="3" id="4" type="text" required name="trinca4">/
            <input maxlength="2" id="masc" type="text" required name="mascara">
            <input class="btn-primary btn" type="button" id="bt" value="Enviar">
        </form>
    </div>
    <div id="resultado">

    </div>

</body>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
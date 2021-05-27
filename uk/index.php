<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="fontawesome/css/all.css" rel="stylesheet">

  <!--   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ajouter une ville</title>
  </head>
  <body>
  <div class="container">
  <div class="card">
  <div class="card-header">
    Ajouter une ville
  </div>
    <div class="card-body">
    <form>

      <?php
        $montant=  substr(12356789, 0, -3) . '0000';
       echo  "12356789---- arrondi au milier = ". $montant ;
       ?>
  <div class="mb-3">
    <label for="libelle" class="form-label">Libelle </label>
    <input type="text" class="form-control" id="libelle" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="code" class="form-label">Code</label>
    <input type="code" class="form-control" id="code">
  </div>
  <button type="submit" class="btn btn-primary"> <i class="far fa-save"></i> Enregistrer</button>
</form>

    </div>
  </div>
  </div>
    <script  type="text/javascript" src="jquery.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
       alert("bonjour");
        $('#ville').change(function(){
           var ville =  $('#libelle').val();
           $.ajax({
               type:'GET',
               url:'save.php',
               data:'idville='+ville,
               success:function(json){
                $('#commune').empty()
               $.each(JSON.parse(json), function(i, obj) {
                $('#commune').append('<option value='+obj.idville+'>'
                +obj.nomville+'</option>');
                });
       });

    });
</script>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CREEZUP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!--AJAX-->
        <script>
            $(document).ready(function() {
                <!--#my-form grabs the form id-->
                $("#my-form").submit(function(e) {
                    e.preventDefault();
                    $.ajax( {
                        <!--insert.php calls the PHP file-->
                        url: "senddata.php",
                        method: "post",
                        data: $("form").serialize(),
                        dataType: "text",
                        success: function(strMessage) {
                            $("#message").text(strMessage);
                            $("#my-form")[0].reset();
                            location.href = "notification.php";
                        }
                    });
                });
            });
        </script>



  </head>
   <body class="mx-2" style="background-color:white;">
      <header class=" container-fluid" >
      <nav>
        <ul>
          <a href="index.php"> <strong>  CREEZ <span style="color:yellow">UP</span> </strong></a>  
          <a href="#" style="margin-left:60%"> <strong>RSE </strong></a>
           <a href="#" style="margin-left:5%"> <strong> CHAMPIONNAT </strong> </a>  
          <a href="#" style="margin-left:5%"> <button> <strong> FORMATION </strong></button> </a>
        </ul>
      </nav>
     </header>
     
      
      <main style="background-image:url('image/bg.jpg')">
        <div>
        <br> <br>
           <h1 style="text-align: center;">Le monde se crée d'idées qui deviennent des reves, <br>
                                alors à vous de realiser les votre </h1>
        </div>
            <br> <br> <br>
        <div class="d-flex justify-content-around  align-items-center">
            <div class="" style="width: 40vh ; margin-bottom:10%">
              <img src="image/1.jpg" alt="" class="img-fluid border-2">
            </div>
            
            <div class="" style="width: 40vh; margin-bottom:10%">
                    
                    <video width="100%" height="320%" controls autoplay  >
                      <source src="image/sympat.mp4" type=video/mp4>
                  </video>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                </p>
            </div>
            <div class="" style="width: 65vh ; margin-bottom:15%">

            <p id="message"></p>     
        <form id="my-form" action="" method="post" name="my-form">

                    <div class="form-row " >
                      <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                      </div> <br>
                      <div class="form-group col-md-6">
                        <label for="name">Votre nom:</label>
                        <input type="text" class="form-control" id="name" placeholder="Saisissez votre nom" name="name" required>
                      </div>
                    </div> <br>
                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="inputAddress">Lieu d'expédition:</label>
                      <input type="text" class="form-control" id="habitation" placeholder="Ex : Yopougon" name="habitation" required>
                    </div> <br>
                    <div class="form-group col-md-6">
                      <label for="inputAddress2">Précision de l'adresse :  </label>
                      <input type="text" class="form-control" id="adresse" placeholder="Apartment, studio,rue" name="adresse" required>
                    </div>
                  </div>

                  <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="name"> Article:</label>
                    <input type="text" class="form-control" id="article" placeholder="Ecrivez ce mot'CAMENEO' " name="article" required>
                  </div> <br>

                  <div class="form-group col-md-6">
                    <label for="name"> quantité </label>
                    <input type="text" class="form-control" id="quantite" placeholder="50" name="quantite" required>
                  </div>
                  </div>

                  <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="inputCity">Contact</label>
                          <input type="tel" class="form-control" id="tel" name="tel" required>
                          </div>

                          <div class="form-group col-md-6">
                          <label for="inputCity">date d'expedition</label>
                          <input type="date" class="form-control" id="dateexpedition" name="dateexpedition" required>
                          </div>
                    </div>

                        <div class="form-row ">
                        <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success col-md-12" style="width: 38vh">CLIQUEZ POUR COMMANDER</button>
                        </div>

                        

                      </div>


            
        </form>
        <a href="index.php"> <button  class=" col-md-6" style="width: 38vh">Retour</button>  </a>


            </div>
        </div>
            <br>
      </main>
      

      <footer style="background-color:white;">
        <nav>
          <a href="#" style="margin-left:60%"> <strong> Video </strong></a>      
          <a href="#" style="margin-left:5%"> <strong>Images</strong> </a>        
          <a href="#" style="margin-left:5%"> <strong>Contacts</strong></a>       
          <a href="#" style="margin-left:5%"> <strong> A propos </strong></a>
        </nav>
      </footer>

  </body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu740Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
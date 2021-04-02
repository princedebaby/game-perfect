<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamestoredatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Create variables
$name = $_POST['name'];
$email = $_POST['email'];
$habitation = $_POST['habitation'];
$adresse = $_POST['adresse'];
$telephone = $_POST['tel'];
$article = $_POST['article'];
$quantite = $_POST['quantite'];
$dateexpedition = $_POST['dateexpedition'];
$datecommande =date("Y-m-d");



if (!empty($_POST['name']) && !empty($_POST['email']) 
     && !empty($_POST['habitation']) && !empty($_POST['adresse'])
     && !empty($_POST['tel']) && !empty($_POST['article'])
     && !empty($_POST['quantite']) && !empty($_POST['dateexpedition'])

     )
{

       $sql= "INSERT INTO client(name, email, telephone) VALUES ('$name', '$email', '$telephone')";

        if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";

          $sql3 = "SELECT * FROM client WHERE email='$email' ";
          $result = $conn->query($sql3);

            if ($result->num_rows > 0) {
                
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                $idclient = $row["idclient"];
            }
            } else {
            echo "0 results";
            }


             


                $sql2="INSERT INTO `commande`(idclient, habitation, adresse, article, quantite, datecommande,dateexpedition) 
                VALUES ('$idclient', '$habitation', '$adresse', '$article', '$quantite', '$datecommande', '$dateexpedition')";

                if ($conn->query($sql2) === TRUE) {
                    echo "Votre commande a été enregistré .  ";

                     
                    
                }


        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

}
$conn->close();
?>
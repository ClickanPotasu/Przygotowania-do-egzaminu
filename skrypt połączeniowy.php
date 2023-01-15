<?php
// Zmienne potrzebne do połączenia
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'egzamin';
// Połączenie
$conn = mysqli_connect($server, $user, $password, $db);

// Przykładowe sprawdzenie połączenia
//   if(isset($conn)){
//       echo "Jest w pyte";
//   }else{
//       echo "Chuj ci w dupę, nie działa";
//   }

// Podstawowe zapytanie na podstawie sprawdzenia połączenia
if(!$conn){
      echo ("Chuj ci w dupę, nie działa".mysqli_error($conn));
   }else{
       $query = ('SELECT * FROM `odloty`;');
       $result = mysqli_query($conn, $query);

       $ile_wierszy = mysqli_num_rows($result);
       echo 'Ile wierszy: '.$ile_wierszy.'<br><br><br>';

       if($ile_wierszy > 0){

        while($text = mysqli_fetch_assoc($result)){

            echo $text['id']. ' <br>';
            echo $text['nr_rejsu']. '  <br>';
            echo $text['kierunek']. '  <br>';
            echo $text['czas']. '  <br>';
            echo $text['dzien']. '  <br>';
            echo $text['status_lotu']. '  <br><br><br>';
        }
       }
   }
   // Gotowy skrypt pod  xampp\contrib\mysql.php
?>
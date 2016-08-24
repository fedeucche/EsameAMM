
<div class="content" id="booksTab">
    <table>
        <tbody>
            <tr>
                <th>Titolo</th>
                
                <th>Prezzo</th>
                <th>Carrello</th>
            </tr>
            
<?php

    $connection = mysqli_connect(Settings::$db_host,
                                Settings::$db_user,
                                Settings::$db_password,
                                Settings::$db_name)
                  or die("Could not connect");
    // verifico la presenza di errori
    if (mysqli_connect_errno() != 0) {
        // gestione errore
        $idErrore = $mysqli->connect_errno;
        $msg = $mysqli->connect_error;
        error_log("Errore nella connessione al server $idErrore : $msg", 0);
        echo "Errore nella connessione $msg<br>";
    } else {
        // Connessione andata a buon fine
        // Carico i libri del db nella tabella
        refreshBooks($connection);
    }
    mysqli_close($connection);

    function refreshBooks($dbCon){
        $result = mysqli_query($dbCon, "SELECT * FROM books");
        while($row = mysqli_fetch_array($result)){
        echo "<tr>" .
             "<td>" . $row['title'] . "</td>".
             "<td>" . $row['price'] ." G". "</td>".
             "<td>" . "<img src='../../media/cart_add.png' class='cartIcon'>". "</td>".
             "</tr>";
        }
    }
?>  
            
<!--            
            <tr>
                <td>Difesa contro le arti oscure</td>
                
                <td>20 galeoni</td>
                <td><a href="">Aggiungi</a></td>
            </tr>
-->
            
            
        </tbody>
    </table>
</div>
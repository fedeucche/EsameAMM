
<div class="content">
    <table id="booksTab">
        <tbody>
            <tr>
                <th>Titolo</th>
                
                <th>Prezzo</th>
                <th>Carrello</th>
            </tr>
            
<?php

    //Provo a connettermi al db
    $connection = dbConnect();
    if ($connection){
        // Connessione andata a buon fine
        // Carico i libri del db nella tabella
        refreshBooks($connection);
    }
    mysqli_close($connection);

    function refreshBooks($dbCon){
        $result = mysqli_query($dbCon, "SELECT * FROM books");
        while($book = mysqli_fetch_object($result)){
        echo "<tr>" .
             "<td>" . $book->title . "</td>".
             "<td>" . $book->price ." G". "</td>".
             "<td>" . "<a href='master.php?page=Cart&id=". $book->id ."'>"
                . "<img src='../../media/cart_add.png'></a>". "</td>".
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
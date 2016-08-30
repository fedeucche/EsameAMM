<?php

if (isset($_REQUEST["addBook"])) {
    //Provo a connettermi al db
    $connection = dbConnect();
    if ($connection){
        $title = $_REQUEST["title"];
        $price = $_REQUEST["price"];
        addBook($connection,$title,$price);
    }
    mysqli_close($connection);
}

function addBook($dbCon,$title,$price){
    $sqlCommand = "INSERT INTO books VALUES (null,'".$title."','".$price."')";
    $esito = mysqli_query($dbCon, $sqlCommand);
    if($esito){
        echo 'Libro aggiunto con successo<br>';
    }
    else {
        'Errore nel caricamento<br>';
    }
}

?>
<form class="content centeredContent" method="post">
    <h2>Aggiungi un nuovo libro al negozio online</h2>
    <br>
    <table>
        <tr>
            <th class="titleCol">
                <label for="title">Titolo</label>
            </th>
            <th class="priceCol">
                <label for="price">Prezzo</label>
            </th>
        </tr>
        <tr>
            <td>
                <input type="text" name="title">
            </td>
            <td>
                <input type="number" name="price">
            </td>
        </tr>
    </table>
    <br>
    <input onclick="return confirm('Confermi?')" type="submit" name="addBook" value="Aggiungi">
</form> 
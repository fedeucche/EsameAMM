<div class="content centeredContent">
    
    <?php
    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
        
    }
    else{
        echo '<h1><a href="master.php?page=Login">Accedi</a> per acquistare i nostri libri</h1>';
    }
    ?>
    
    


    <h2>Categorie di Libri</h2>
    <br>
    <div id='menu'>
        <table id="homepageTable">
            <tbody>
                <tr>
                    <td><a href="#trasfigurazione">Trasfigurazione</a></td>
                </tr>
                <tr>
                    <td><a href="#incantesimi">Incantesimi</a></td>
                </tr>
                <tr>
                    <td><a href="#pozioni">Pozioni</a></td>
                </tr>
                <tr>
                    <td><a href="#difesa">Difesa contro le Arti Oscure</a></td>
                </tr>
                <tr>
                    <td><a href="#erbologia">Erbologia</a></td>
                </tr>
            </tbody>
        </table>
<!--        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>-->
    </div>
    
    <br>

    <h4 id="trasfigurazione">Trasfigurazione</h4>     
        <p> La materia insegna la trasformazione magica di un elemento in un altro.
            Si possono trasfigurare sia oggetti inanimati che animati (animali o persone)
            o anche soltanto parti di essi. In questo caso le combinazioni diventano molte:
            si può trasfigurare un animale (o parte di esso) in un oggetto, un oggetto 
            (o parte di esso) in un animale oppure una persona (o parte di essa) in animale o oggetto.
            La Trasfigurazione insegna anche l'evocazione, ossia il far comparire oggetti o animali
            dal nulla, e l'evanescenza, ossia il far scomparire oggetti nel nulla.</p>

    <h4 id="incantesimi">Incantesimi</h4>
        <p>Si occupa di insegnare agli studenti gli incantesimi di tutti i tipi,
            che non riguardino ovviamente Trasfigurazione o Difesa contro le Arti Oscure.
            Ad esempio vengono insegnati vari incantesimi come Wingardium Leviosa, l'incantesimo
            di levitazione (uno dei più elementari e il primo che viene insegnato, dopo mesi di
            esercitazione ad "agitare e colpire", il movimento da fare con la bacchetta) che fa
            volare oggetti, Alohomora, l'incantesimo di apertura di porte o serrature meccaniche,
            oppure Accio, conosciuto anche come l'incantesimo di appello, che consente di richiamare
            un oggetto a sé, e tantissimi altri.</p>

    <h4 id="pozioni">Pozioni</h4>
        <p>La materia ha lo scopo di insegnare agli studenti come preparare
            e mescere le pozioni, dalle più semplici alle più complicate e potenti.
            L'effetto di una pozione è dovuto alla presenza di ingredienti magici,
            alcuni dei quali vanno recuperati in particolari condizioni, anche da
            precise dosi e tempi di cottura.
        </p>

    <h4 id="difesa">Difesa contro le Arti Oscure</h4>
        <p>La materia avrebbe lo scopo di preparare gli alunni ad affrontare Creature e 
            Arti Oscure. Gli alunni imparano a Disarmare, Schiantare, bloccare malefici,
            evocare controincantesimi e controfatture. Nel programma è previsto lo studio
            delle Creature Oscure (Mollicci, Berretti Rossi, Marciotti, Kappa, Lupi Mannari...)
            e l'apprendimento di incantesimi specifici per affrontarle. A livello avanzato si
            studiano le Maledizioni (tra le quali non mancano naturalmente quelle Senza Perdono)
            e gli Incantesimi non-verbali (che prevedono che la formula venga solo pensata,
            senza pronunciarla, il che può mettere in difficoltà l'avversario,
            che non può capire quale magia si abbia intenzione di fare). </p>

    <h4 id="erbologia">Erbologia</h4>
        <p>In questa materia si studiano le piante magiche,
            le loro caratteristiche e i modi per occuparsene e ricavarne prodotti utili.</p>
</div>
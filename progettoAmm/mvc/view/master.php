<?php
require_once 'block/head.php';
require_once 'block/leftSideBar.php';
require_once 'block/rightSideBar.php';
//include_once '../controller/ViewDescriptor.php';    
//$vd = new ViewDescriptor();
?>

<div id="content">
    
    <?php
        if (isset($_GET["page"])){
            $p = $_GET["page"];
            $page = "content".$p.".php";
            if(file_exists($page)){
                include "$page";
            }
            else{
                echo 'Error! Missing file.';
            }
        }
        else {
            echo 'Homepage';
        }
        
    ?>
    
</div>

    </head>
</html>
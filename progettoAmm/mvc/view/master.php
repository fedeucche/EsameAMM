<?php
require_once '../controller/dbConnection.php';
require_once '../model/Book.php';
require_once '../controller/login.php';
require_once '../controller/logout.php';
require_once '../controller/register.php';
require_once '../controller/dbTransaction.php';

require_once 'block/head.php';
require_once '../controller/cartController.php';

?>

<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1>Il Ghirigoro di Flourish & Blotts</h1>
        </div>
    </div>
    
<?php
require_once 'block/leftSideBar.php';
require_once 'block/rightSideBar.php';

// Dynamic pages controller
if (isset($_GET["page"])) {
    $p = $_GET["page"];
    $page = "content" . $p . ".php";
    if (file_exists($page)) {
        
        include_once "$page";
        

    } else {
        echo 'Error! Missing file.';

    }
} else {

    include_once "contentHomepage.php";

}

?>
    
</div>

</head>
</html>
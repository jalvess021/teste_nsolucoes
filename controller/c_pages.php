<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'plataform':
            include "plataform.php";
            break;
    }
} else {
    include "view/login.php";
}
    
?>
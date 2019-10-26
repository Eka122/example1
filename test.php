<?php
if (isset($_GET['id'])) {
    switch ($_GET['id']) {
        case 1:
            echo 'Выбран котёнок <hr>';
            break;
        case 2:
            echo 'Выбрана собака <hr>';
            break;
        default:
            echo '<h1> Выберете животное</h1>';
            break;
    }
}

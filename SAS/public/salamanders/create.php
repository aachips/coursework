<?=
require_once('../../../private/initialize.php'); 
if $_SERVER['REQUEST_METHOD'] === 'POST' {

    // Handle form values sent by new.php
    $menu_name = $_POST['menu-name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';
    
    echo "Form parameters<br>";
    echo "Menu name: " . $menu_name . "<br>";
    echo "Position: " . $position . "<br>";
    echo "Variable: " . $visible . "<br>";
}

else
    redirect_to('/staff/subjects/new.php');
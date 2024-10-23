<?PHP

if(isset($_POST['email']) || isset($_POST['pasword'])) {
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];

    if ($email = 'admin@admin.com' && $pasword = 'admin') {
        header('location: ./dashboard.php');
    } else {
        echo "email atau pasword salah";
    }
}

?>

<?php
    if (isset($_POST['submit'])) {
        header("Location: /exura-vitta/public/pages/home.php", true, 301);
        exit();
    }
?>
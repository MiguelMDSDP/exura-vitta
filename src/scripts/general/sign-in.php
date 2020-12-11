<?php
    if (isset($_POST['submit'])) {
        header("Location: /exura-vitta/public/pages/home.html", true, 301);
        exit();
    }
?>
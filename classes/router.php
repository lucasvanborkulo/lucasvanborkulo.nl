<?php
    include("main.php");

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {


        if (!empty($_POST['email'])) {
            if (!empty($_POST['message'])) {
                $email = $_POST['email'];
                $message = $_POST['message'];

                /*
                 * TODO: ADD EMAIL FUNCTIONALITY
                 */
            }
        }
        header("Location: ../index.html");
    }
?>
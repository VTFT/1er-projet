<?php
if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        echo '<p>Your email must contain an @.</p>';
    else {
        $retour = mail('max.traineau@yahoo.fr', 'Sent from contact page', 'From: ' . $_POST['email'], 'About: ' . $_POST['topic'], $_POST['message']);
        if($retour)
            echo '<p>Message sent.</p>';
        else
            echo '<p>Error.</p>';
    }
}
?>
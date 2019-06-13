    <?php

    $password = $_GET['password'];

    if ($password == 'Boolean') {
      echo '<div style="color:green">Accesso consentito!</div>';
    } else {
      echo '<div style="color:red">La password non è corretta!</div>';
    };

     ?>

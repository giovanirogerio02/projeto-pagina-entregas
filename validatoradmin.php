<?php
    session_start();
    
    if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
      header('Location: login.php?login=erronaoautorizado');
      exit();
  }
  // Validação do cliente
?>
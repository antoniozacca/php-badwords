<?php
    $paragraph = $_POST['paragraph'];
    $badword = $_POST['badword'];
    
    
    $original_length = strlen($paragraph);
    
    
    $censored_paragraph = str_replace($badword, '***', $paragraph);
    $censored_length = strlen($censored_paragraph);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4">
            <h2>Paragrafo Originale</h2>
            <p><?php echo htmlspecialchars($paragraph); ?></p>
            <p>Lunghezza: <?php echo $original_length; ?> caratteri</p>
        </div>
        <div class="mb-4">
            <h2>Paragrafo Censurato</h2>
            <p><?php echo htmlspecialchars($censored_paragraph); ?></p>
            <p>Lunghezza: <?php echo $censored_length; ?> caratteri</p>
        </div>
        <a href="index.php" class="btn btn-primary">Torna indietro</a>
    </div>
</body>
</html>
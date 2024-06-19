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
        <h1 class="mb-4">Censura Parola</h1>
        <form action="parolecensurate.php" method="POST">
            <div class="form-group">
                <label >Paragrafo:</label>
                <textarea class="form-control" name="paragraph" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="badword">Parola da censurare:</label>
                <input type="text" class="form-control" name="badword" required>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>
</html>

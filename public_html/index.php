<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alpine LAMP Docker Setup</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <header class="my-4">
        <h1 class="text-center">Welcome to Alpine LAMP Docker Setup!</h1>
    </header>
    <section>
        <h2 class="text-center">Environment:</h2>
        <ul class="list-group">
            <li class="list-group-item">OS: Alpine Linux 3.14</li>
            <li class="list-group-item">Web Server: Apache/<?= apache_get_version(); ?></li>
            <li class="list-group-item">Database: MySQL v<?= mysqli_get_client_version(); ?></li>
            <li class="list-group-item">PHP: <?= phpversion(); ?></li>
        </ul>
    </section>
    <section class="mt-4">
        <h2 class="text-center">App Links:</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="http://localhost/phpinfo.php">PHP Info</a></li>
            <li class="list-group-item"><a href="http://localhost:8080">phpMyAdmin</a></li>
        </ul>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

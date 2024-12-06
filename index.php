<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISvSWaRU9OFepRpoK6yYctymDnZSpNyT2BJjXhOJhJy6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #F5F5F5;
        }
        .form-container {
            margin: 100px auto;
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#">Main</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Registration</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contacts</a></li>
        </ul>
        <form action="server.php" method="POST" class="mt-4">
            <input type="text" name="username" placeholder="Enter username" class="form-control my-2" required>
            <input type="email" name="email" placeholder="Enter email" class="form-control my-2" required>
            <input type="password" name="password" placeholder="Enter password" class="form-control my-2" required>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpCyYf0tY3lHB06NNkmXc5s9fdVZLEsaAA55NDZoxhy9GkcIds1IkEw7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

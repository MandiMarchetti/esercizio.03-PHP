<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" 415'<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be a Teacher!</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./research.php">Find a Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./register.php">Be a Teacher!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div>
                    <div class="d-flex justify-content-center mt-3">
                        <h1 class="display-3">Hello, you!</h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h1 class="display-5">Be a good Language Teacher for someone!</h1>
                    </div>
                    <hr>

                    <div class="d-flex">
                        <div class="mx-2">
                            <p class="m-0">1. Register yourself filling the fields bellow </p>
                            <p class="m-0">2. Check if you received a confirmation e-mail!</p>
                            <p class="m-0">3. Done! Now you just have to wait someone of our team will contact you as soon as it's possible. :) </p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>


    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $con = mysqli_connect('localhost', 'root', '', 'teacher_database');

        $stmt = $con->prepare("INSERT INTO teachers (ID, fldName, fldEmail, fldComment) VALUES (NULL, ?, ?, ?)");
        $stmt->bind_param("sss", $txtName, $txtEmail, $txtComment);

        $txtName = $_POST['txtName'];
        $txtEmail = $_POST['txtEmail'];
        $txtComment = $_POST['txtComment'];
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Contact Records Inserted";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        mysqli_close($con);
    }
    ?>

    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-4 ">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tell us your name...</label>
                        <input type="text" class="form-control" name="txtName" id="txtName" aria-describedby="emailHelp" placeholder="Ex: Livia Garden">
                        <div id="emailHelp" class="form-text">Use just letters, ok?</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">What's your email?</label>
                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Ex: example@gmail.com">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="comments" class="form-label">Tell us a little bit about you...</label>
                        <input type="text" class="form-control" name="txtComment" id="txtComment" placeholder="Hello! I am...">
                        <div id="emailHelp" class="form-text">You have 1000 characters available...</div>
                    </div>
                    <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
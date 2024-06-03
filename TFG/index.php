<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href="assets/CSS/index.css" rel="stylesheet">
    <link href="assets/CSS/carrusel.css" rel="stylesheet">
    <link href="assets/CSS/banner.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Sonsie One' rel='stylesheet'>
    <title>TFG equipo 2</title>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <!--Rellenar con recomendados y tal-->
    <div class="video-container" id="video-container">
        <div class="video-banner" id="video-banner">
            <video id="video" class="video" src="assets/images/banner.mp4" autoplay loop></video>
        </div>
    </div>
    <script src="assets/js/banner.js"></script>




    <?php
    include("footer.php");
    ?>
</body>

</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body {
        padding: 0;
        margin: 0;
        background-color: #f7e987;
      }

        .centered-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin-top: -150px;
        } 

        .h1 {
          color: #fff;
        }
        .footer {
            color: #fff; 
            text-align: center;
            padding: 20px; 
            margin-top: 55px; 
            width: 100%;
        }

        .footer p {
            margin: 0; 
        }
    </style>
  </head>
  <body>
    <div class="container-fluid text-center w-100 pt-3 pb-5" style="background-color: #ffc436;">
        <h1 class="h1">Dashboard</h1>
        <p style="color: #fff;">Jalan Ringroad Utara, Condong catur, Sleman Yogyakarta</p>
        <hr>

        <a href="form_add.php" style="color: #fff;">Add RPS</a> |
        <a href="view_data.php" style="color: #fff;">List RPS</a> |
        <a href="index.html" style="color: #fff;">Logout</a> |
    </div>

    <div class="centered-image">
        <img src="img/amikom.png" width="200px" alt="">
    </div>

    <div class="text-center" style="margin-top: -200px">
        <h3 style="color: #B0578D;">Universitas Amikom Yogyakarta</h3>
    </div>

    <footer class="container footer" style="background-color: #ffc436;" style="width: 100%">
            <p>Aulia Ratih Kusuma - 22.01.4740</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
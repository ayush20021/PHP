<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <?php

        include('connection.php');
        $sql = "Select * from product";
        $data = mysqli_query($conn, $sql);

        if (mysqli_num_rows($data) > 0) {
            echo "<div class='container'>
            <div
              class='row  align-items-center g-2 border-top border-bottom pb-5'
            >";

            while ($row = mysqli_fetch_assoc($data)) {
                echo "          <div class='col-sm-12 col-md-3 col-lg-3 custom-col'>
                <div class='card ' style='width: 18rem;'>
  <img src='products/{$row['File']}' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>{$row['Name']}</h5>
    <p class='card-text'>{$row['Details']}</p>
    <h5>₹:  {$row['Sale Price']}</h5>
    <a href='#' class='btn btn-primary'>Buy Now</a>
    <a href'#' class='btn btn-warning'>Know More </a>
  </div>
</div>
</div>
                ";
            }

            echo "
            </div>
            </div>";
        }




        ?>





    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
<?php 
include("connection.php");
$ID = $_GET["id"];

$query = "SELECT * FROM `product` WHERE `ID` = $ID";


$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Edit Car Details</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <div class="container allign-items-center w-50 mt-5">


        <form action="editp.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <input

                type="hidden"
                value="<?php echo"{$row['ID']}"?>"
                name="ID"

            />
        </div>
        



            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="pname"
                    value="<?php echo"{$row['Name']}"?>"

                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input
                    type="text"
                    class="form-control"
                    name="pprice"
                    value="<?php echo"{$row['Sale Price']}"?>"

                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Details</label>
                <input
                    type="text"
                    class="form-control"
                    name="pdetails"
                    value="<?php echo"{$row['Details']}"?>"

                />
            </div>

            <button
                type="submit"
                class="btn btn-primary"
            >
                Edit
            </button>
            
        </form>
        </div>


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

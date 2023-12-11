<!doctype html>
<html lang="en">
    <head>
        <title>Manage Product</title>
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

        <?php 
        
        include('connection.php');

       
        $sql="Select * from product";
        
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)> 0){

            echo"        <div
            class='table-responsive'
        >
            <table
                class='table '
            >
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Price</th>
                        <th scope='col'>Image</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                ";

                while($row=mysqli_fetch_array($res)){
                    echo"
                    <tbody>
                    <tr class=''>
                    <td scope='row'>{$row['ID']}</td>
                        <td scope='row'>{$row['Name']}</td>
                        <td>{$row['Sale Price']}</td>
                        <td>
                        <img
                        src='products/{$row['File']}'
                        class=' rounded-top w-25'
                        alt=''
                    />
                    </td>
                    <td>

                   <a href='removep.php?id={$row['ID']}' <button type='button' class='btn btn-warning'>Edit</button></a>
                  <a href=''  <button type='button' class='btn btn-danger'>Delete</button></a>
                    </td>
                    </tr>
                </tbody>
                    ";
                }


                echo"            </table>
                </div>
        ";
        }
        
        
        ?>


                

        
            <a href=""></a>

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

<?php session_start();

$searchparameter = $_POST['buttonValue'];
// if(isset($_POST['amsterdamVal'])){ $searchparameter='amsterdam';};
$host = 'localhost';
$dbname = 'travel_agency';
$dbusername = 'root';
$dbpass = 'root';
$conn = new mysqli($host, $dbusername, $dbpass, $dbname);

$sql = "SELECT * FROM products WHERE name_of_product = '$searchparameter'";
$result =  mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);




?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        $(function() {
            $("header").load("../navbar/navbar.php");
            $("footer").load("../footer2/footer2.php");
        });
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../products/products.css">
    <!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"> -->

<body>
    <header></header>
    <div class="body2">
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <?php
                        echo '<img src="../images/destinations/'.$searchparameter.'.jpg" id="ProductImg" width="100%">';
                    ?>
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="../images/waterfall.jpeg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="../images/welcome.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="../images/welcome.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="../images/welcome.jpg" width="100%" class="small-img">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <!-- <p> Home /</p> -->
                    <?php
                    echo '<h1>' . $data['name_of_product'] . '</h1>';
                    echo '<h4>' . $data['price'] . '</h4>';
                    ?>
                    <select>
                        <option>Select Packet</option>
                        <option>Select Packet</option>
                        <option>Select Packet</option>
                    </select>
                    <input type="number" value="1" name="">
                    <?php
                    if (isset($_SESSION["username"])) {
                        if($data['available'] >= 1){
                        echo '<form action="../products/products.php" method="post"><input type="hidden" value="'.$data["available"].'"></input><input type="hidden" id="AddID" name="hiddenID" value="' .$_SESSION["id"] . '"></input><button type="submit"  value="' . $searchparameter . '" name="addToCard" id="btnAddtoCard" class="btn">Add to Card</button></form>';
                        }else{
                            echo '<button type="submit"  class="btn" disabled>unavailable</button>';
                        }
                    }
                    ?>
                    <h3>Product Details<i class="fa fa-indent"></i></h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
</body>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../products/products.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    $(function() {
        $("#btnAddtoCard").click(function(e) {

            var buttonid = $("#btnAddtoCard").val();
            var addid = $("#AddID").val();
            var num = 1;
            $.ajax({
                type: "POST",
                url: "addToCard.php",
                data: {
                    addToCard: buttonid,
                    userID: addid,
                    num : num
                },
                success: function(data) {
                    Swal.fire({
                        title: 'Successful',
                        text: "Product added successfully",
                        type: 'success',
                    });
                },
                error: function(data) {
                    Swal.fire({
                        'title': 'Errors',
                        'text': 'There were errors while saving the data.',
                        'type': 'error'
                    });
                }
            });

            e.preventDefault();
        });
    });
</script>

</html>
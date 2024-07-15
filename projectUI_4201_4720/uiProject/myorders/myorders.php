<?php session_start();
$userID = $_SESSION['id'];
$host = 'localhost';
$dbname = 'travel_agency';
$dbusername = 'root';
$dbpass = 'root';
$conn = new mysqli($host, $dbusername, $dbpass, $dbname);
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Delete"])){
			
  $idfordelete = $_POST["idfordelete"];
  $sql = "DELETE FROM user_purschace_products WHERE user_id='$userID' AND id='$idfordelete'"; // to query pou theloume na treksoume stin basi
  $results =  mysqli_query($conn,$sql);
}
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
        <div class="container">
          <table id="table1" class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID-Order</th>
                <th scope="col">Place</th>
                <th scope="col">ID-user</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $userID = $_SESSION['id'];
              $host = 'localhost';
              $dbname = 'travel_agency';
              $dbusername = 'root';
              $dbpass = 'root';
              $conn = new mysqli($host, $dbusername, $dbpass, $dbname);

              $sql = "SELECT * FROM user_purschace_products WHERE user_id LIKE '$userID'";
              //$sql2 = "SELECT * FROM products WHERE user_id LIKE '1'";
              $results = mysqli_query($conn,$sql);

              foreach ($results as $result) {

                echo '
					<form method="post" action="../myorders/myorders.php">
					<tr>
						<th scope="row"> ' . $result["id"] . '</th>
            <th scope="row"> ' . $result["product_name"] . '</th>
            <th scope="row"> ' . $result["user_id"] . '</th>
            <td><input type="hidden" value="'.$result['id'].'" name="idfordelete" ><button type="submit" value="'.$result["product_name"].'" name="Delete" id="productDelete" onclick = "deleteRow(this)">Delete</button></td>
					</form>
					';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <footer></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    $(function() {
        $("#productDelete").click(function(e) {
            var buttonid = $("#productDelete").val();
            $.ajax({
                type: "POST",
                url: "delete.php",
                data: {
                    incrementAvailable: buttonid,
                },
                success: function(data) {
                    Swal.fire({
                        title: 'Successful',
                        text: "Product delete successfully",
                        type: 'success',
                        // timer: 1000,
                        showConfirmButton: true
                    }).then(function(){
                      e.preventDefault();
                    })
                    .then(function () {
                      $("form").submit();
                    })
                },
                error: function(data) {
                    Swal.fire({
                        'title': 'Errors',
                        'text': 'There were errors while saving the data.',
                        'type': 'error'
                    });
                }
            });
        });
        
    });
</script>

</html>
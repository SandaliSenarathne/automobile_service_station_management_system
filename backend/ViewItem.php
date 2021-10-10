<?php
    include("../db.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM item WHERE category_id = $id;";
?>
<h2 class="fadeInDown text-center">Items</h1>
            <table class="table" id="itemsInCategory">
                <tr>
                    <th>Thumbnail</th>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>Available Stock</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){


                        ?>
                        <tr>
                    <td><img src="../images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td>3</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>

                        <?php
                    }
                ?>
                
            </table>
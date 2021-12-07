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
                    <td><img src="../<?php echo($row['thumbnail']) ?>" width="75px"></td>
                    <td><?php echo($row['name']) ?></td>
                    <td><?php echo($row['description']) ?></td>
                    <td><?php echo($row['price']) ?></td>
                    <td><?php echo($row['stock'])?></td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><a href="../backend/DeleteItem.php?id=<?php echo($row['id']) ?>"><button type="button" class="btn btn-sm btn-outline-danger">Delete</button></a></td>
                </tr>

                        <?php
                    }
                ?>
                
            </table>
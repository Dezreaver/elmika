<!-- Header -->
<?php
$current = "products";
include "includes/header.php";
?>

<!-- Body -->

<?php
if (isset($_GET['p_id'])) {
    $prod_id = $_GET['p_id'];
}

$results = allProductsLogic("SELECT * FROM products WHERE prod_id = $prod_id");
?>

<div id="main-content" class="container">

    <?php foreach ($results as $result): ?>
        <div class="row">
            <div class="col-md-7">
                <h3><?= $result['title']; ?></h3>
                <p><?= $result['content']; ?></p>
            </div>
            <div class="col-md-5">
                <div class="main-img">
                    <?php if ($result['images'][0]['content']): ?>
                        <img src="images/products/<?= $result['images'][0]['content']; ?>" id="current">
                    <?php else: ?>
                        <?= "Image not found"; ?>
                    <?php endif; ?>
                </div>
                <div class="imgs">
                    <?php foreach ($result['images'] as $image): ?>
                        <img src="images/products/<?= $image['content']; ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
        <h3>Variations</h3>

        <?php
        $tableName = $results[0]['table'];
        $query = "SELECT * FROM $tableName";
        $listTableData = mysqli_query($connection, $query);

        $table = [];
        while ($row = mysqli_fetch_assoc($listTableData)) {
            $table[] = $row;
        }

        echo "<table class='table table-bordered'>";
        foreach ($table as $rowIndex => $row) {
            if ($rowIndex == 0) {
                echo "<thead><tr>";
                foreach ($row as $columnName => $cell) {
                    echo "<th scope='col'>$columnName</th>";
                }
                echo "</tr></thead>";
            }
            echo "<tr>";
            foreach ($row as $columnName => $cell) {
                echo "<td>$cell</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

</div>


<!-- Footer -->

<?php include "includes/footer.php" ?>
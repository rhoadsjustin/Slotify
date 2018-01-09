<?php include('includes/header.php'); ?>
<!-- main Container Content here -->
<h2 class="pageHeadingBig">You Might Also Like</h2>

<div class="gridViewContainer">

    <?php
        $albumQuery = mysqli_query($con, "SELECT * FROM albums");

        while($row = mysqli_fetch_array($albumQuery)) {
            echo $row['title'] . '<br>';
        }
    ?>
</div>
<?php include('includes/footer.php'); ?>
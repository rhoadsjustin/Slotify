<?php include('includes/header.php'); ?>
<!-- main Container Content here -->
<h2 class="pageHeadingBig">You Might Also Like</h2>

<div class="gridViewContainer">

    <?php
        $albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

        while($row = mysqli_fetch_array($albumQuery)) {

            echo "<div class='gridViewItem'>
                    <a href='album.php?id=" . $row['id'] . "'>
                    <img src='" . $row['artworkPath'] . "'>
                    
                    <div class='gridViewInfo'>"

                       . $row['title'] .
                    "</div>
            
                    </div>";




        }
    ?>
</div>
<?php include('includes/footer.php'); ?>
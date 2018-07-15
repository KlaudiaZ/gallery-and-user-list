<div class="container">
    <h1>Gallery</h1>
    
    <?php

    $result = $pdo -> query('SELECT * FROM gallery');
    $images = $result -> fetchAll();

    if (isset($_FILES['picture'])) {
        if ($_FILES['picture']['tmp_name']) {
            $imagetmp = file_get_contents($_FILES['picture']['tmp_name']);
            $result = $pdo -> prepare('INSERT INTO gallery (image) VALUES (:imagetmp)');
            $result -> bindParam(':imagetmp', $imagetmp);
            $result -> execute();
    
            header('location: index.php?v=gallery');
        }
    }
    
    ?>
    
    
    <div class="row">

        <?php
            foreach($images as $image) {
                ?>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="data:image/jpg;base64,<?php echo base64_encode( $image['image'] ); ?>" class="img-responsive">
                </div>

            <?php } ?>
        

    </div>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <br>
            <label>Upload image:</label>
            <br>
            <input type="file" accept=".jpg" name="picture" id="picture" required>
            <br>
            <button class="btn btn-success">Send file</button>
        </div>
    </form>
</div>

<?php



?>
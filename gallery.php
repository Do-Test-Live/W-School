<?php
session_start();
require_once("admin/config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>স্কুল গ্যালারি - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
    <?php include ('include/css.php');?>
</head>
<body>

<!--header area start-->
<?php include ('include/header.php');?>
<!--header area end-->

<!--main body content start-->
<section class="main-body">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h3 class="uk-text-bold">স্কুল গ্যালারি</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid mt-5">
        <div class="row gallery">
            <?php
            $fetch_gallery = $db_handle->runQuery("select * from gallery order by id desc");
            $no_fetch_gallery = $db_handle->numRows("select * from gallery order by id desc");
            for ($i=0; $i < $no_fetch_gallery; $i++){
                ?>
                <div class="col-12 col-lg-3 col-md-3">
                    <img src="admin/<?php echo $fetch_gallery[$i]['image'];?>" class="img-fluid"
                         alt="gallery">
                </div>
                <?php
            }
            ?>
        </div>
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modalImg">
            <button id="prevBtn" class="prev" onclick="showPrevImage();">&#10094;</button>
            <button id="nextBtn" class="next" onclick="showNextImage()">&#10095;</button>

        </div>
    </div>
</section>

<!--main body content end-->

<?php include ('include/footer.php');?>

<?php include ('include/js.php');?>

<script>
    // Get the modal
    var modal = document.getElementById("imageModal");

    // Get the image and insert it inside the modal
    var images = document.querySelectorAll('.gallery img');
    var modalImg = document.getElementById("modalImg");
    var currentImageIndex = 0;

    // Function to open the modal with the clicked image
    images.forEach(function(img, index){
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            currentImageIndex = index;
        }
    });

    // Function to close the modal
    var span = document.getElementsByClassName("close")[0];
    modal.onclick = function(event) {
        if (event.target == modal || event.target == span) {
            closeModal();
        }
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Function to show the next image
    function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        modalImg.src = images[currentImageIndex].src;
    }

    // Function to show the previous image
    function showPrevImage() {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        modalImg.src = images[currentImageIndex].src;
    }



    // Keyboard navigation
    document.onkeydown = function(event) {
        event = event || window.event;
        if (modal.style.display === "block") {
            if (event.keyCode == '37') { // Left arrow key
                showPrevImage();
            } else if (event.keyCode == '39') { // Right arrow key
                showNextImage();
            } else if (event.keyCode == '27') { // Escape key
                closeModal();
            }
        }
    };

</script>
</body>
</html>

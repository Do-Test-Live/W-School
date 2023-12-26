<script src="assets/vendor/Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/uikit/js/uikit.min.js"></script>
<script src="assets/vendor/uikit/js/uikit-icons.min.js"></script>
<script src="assets/vendor/jQuery/jquery-3.6.4.min.js"></script>
<script src="assets/vendor/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/datatables/datatables.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("year").innerHTML = year;
</script>

<script>
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('myNavbar');
        var distanceFromTop = navbar.offsetTop;

        if (window.pageYOffset >= distanceFromTop) {
            navbar.classList.add('fixed-top');
        } else {
            navbar.classList.remove('fixed-top');
        }

        if (window.pageYOffset <= distanceFromTop) {
            navbar.classList.remove('fixed-top');
        }
    });

</script>
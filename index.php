<?php include('include/head.php') ?>
    <!-- OWL CAROUSSEL -->
    <script type="text/javascript" src="plugin/owl-carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="plugin/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="plugin/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="plugin/owl-carousel/owl.theme.css">

	<link rel="stylesheet" type="text/css" href="css/index.css">

    <div class="container-fluid container-carousel banner" id="home" name="home">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <img src="image/banner-vestindo-certo-principal.jpg" class="img-responsive">
            </div>
            <div class="item">
                <img src="image/banner-vestindo-certo-01.jpg" class="img-responsive">
            </div>
            <div class="item">
                <img src="image/banner-vestindo-certo-02.jpg" class="img-responsive">
            </div>
            <div class="item">
                <img src="image/banner-vestindo-certo-04.jpg" class="img-responsive">
            </div>
            <div class="item">
                <img src="image/banner-vestindo-certo-05.jpg" class="img-responsive">
            </div>
        </div>
    </div>
	
    <script>
        $(document).ready(function(){
            $(".in-page").on('click', function(event) {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 00
                }, 800, function(){
                    window.location.hash = hash;
                });
            });
        });
    </script>
    <script>        
        $(function(){
            $("#owl-demo").owlCarousel({
                navigation : false, // Show next and prev buttons
                slideSpeed : 300,
                pagination : true,
                paginationSpeed : 400,
                singleItem:true,
                autoPlay:true,
                autoPlay : 7000,
            });
        });
    </script>
<?php include('include/footer.php') ?>



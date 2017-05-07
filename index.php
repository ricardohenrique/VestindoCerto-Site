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
	<div class="container-fluid vestindo-certo" id="sobre">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<h1>Selecionar a melhor roupa nunca foi tão fácil</h1>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-clock-o"></i><br class="visible-xs"> Otimize o seu tempo;</li>
                    <li><i class="fa-li fa fa-tags"></i><br class="visible-xs"> Evite repetir as mesmas roupas;</li>
                    <li><i class="fa-li fa fa-comment-o"></i><br class="visible-xs"> Saiba qual roupa você não usa;</li>
                    <li><i class="fa-li fa fa-eye"></i><br class="visible-xs"> Combine as melhores peças do seu <i>closet</i>;</li>
                    <li><i class="fa-li fa fa-star"></i><br class="visible-xs"> Destaque-se !</li>
                </ul>
				<!-- <p>Dependendo de onde você está indo, pense sobre o que outras pessoas lá deverão usar.<br>Você quer se destacar, mas não quer ser o centro das atenções<br>(mantenha algum mistério sobre você).</p> -->
			</div>
		</div>
	</div>
	<div class="container-fluid roupa-perfeita" id="como-funciona" name="como-funciona">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<h2>Escolhendo a roupa perfeita</h2>
				<!--<p>Se você quer um look clássico ou elegante, tente uma calça cáqui com uma blusa de seda.<br>Se você está procurando por um visual casual, experimente uma calça jeans num modelo antigo e mais largo e uma blusa com rendas.</p>-->
			</div>
			<div class="col-sm-offset-2 col-sm-8">
				<div class="row">
					<div class="col-sm-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<span>1</span>
								<p>ESCOLHA O LOCAL<br><i class="fa fa-tree" aria-hidden="true"></i></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<span>2</span>
								<p>ESCOLHA O EVENTO<br><i class="fa fa-university" aria-hidden="true"></i></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<span>3</span>
								<p>ESCOLHA O CLIMA<br><i class="fa fa-sun-o" aria-hidden="true"></i></p>
							</div>
						</div>
					</div>
                    <div class="col-sm-12">
                        <img src="image/ilustracao-look-homen.jpg" alt="">
                    </div>
				</div>
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



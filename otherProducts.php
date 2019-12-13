<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<?php include('gallarystyles.php')?>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Modern Mattress and Sofa | Other Products</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <!--
CSS
============================================= -->

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- Start header section -->
    <?= include_once('header.php') ?> 
           
            <section style="margin-top:-20px;background-image:url('images/otherproducts.jpg');background-size:100% 100%" class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row section-gap-half">
                <div class="col-lg-12 text-center">
                    <h1 style="color:white">Other Products!</h1>
                </div>
            </div>
        </div>
    </section>


            
    <div class="container" style='margin-top:30px;text-align:center;color:black'>
        <div class="row">
            <div class="col-lg-12  col-md-6 pb-30">
	            <h3 style="text-align:center"></h3>
                <div class="single-service">
	                <h2>Complete the Room</h2>
	                <p style="font-size:16px;">We offer bed sheets, bed frames, a variety of covers and more! Just come in store or contact us to find what you need.</p>
                </div>
            </div>
        </div>
    </div>

<!-- End service section -->


<div class="container" style="margin-top:50px;">


	<div class="gallery cf">
		<?php for($i=1;$i<=15;$i++): ?>
		<div>
			<img style="width:300px;height:200px" src="images/other/<?=$i?>.jpg" />
		</div>
		<?php endfor;?>
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
		<symbol id="close" viewBox="0 0 18 18">
			<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
		</symbol>
	</svg>

</div>



 
 
    <!-- Start footer section -->
    <?= include('footer.php') ?>
    <!-- End footer section -->

    <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>
 
    <script>
	    function openModal() {
		    document.getElementById("myModal").style.display = "block";
	    }

	    function closeModal() {
		    document.getElementById("myModal").style.display = "none";
	    }

	    var slideIndex = 1;
	    showSlides(slideIndex);

	    function plusSlides(n) {
		    showSlides(slideIndex += n);
	    }

	    function currentSlide(n) {
		    showSlides(slideIndex = n);
	    }

	    function showSlides(n) {
		    var i;
		    var slides = document.getElementsByClassName("mySlides");
		    var dots = document.getElementsByClassName("demo");
		    var captionText = document.getElementById("caption");
		    if (n > slides.length) {slideIndex = 1}
		    if (n < 1) {slideIndex = slides.length}
		    for (i = 0; i < slides.length; i++) {
			    slides[i].style.display = "none";
		    }
		    for (i = 0; i < dots.length; i++) {
			    dots[i].className = dots[i].className.replace(" active", "");
		    }
		    slides[slideIndex-1].style.display = "block";
		    dots[slideIndex-1].className += " active";
		    captionText.innerHTML = dots[slideIndex-1].alt;
	    }
        </script>

    <!--
JS
============================================= -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<!--    <script src="js/vendor/jquery-2.2.4.min.js"></script>-->
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
<!--    <script src="js/vendor/bootstrap.min.js"></script>-->
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="js/dopeNav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/main.js"></script>

    <script>

	    popup = {
		    init: function(){
			    $('figure').click(function(){
				    popup.open($(this));
			    });

			    $(document).on('click', '.popup img', function(){
				    return false;
			    }).on('click', '.popup', function(){
				    popup.close();
			    })
		    },
		    open: function($figure) {
			    $('.gallery').addClass('pop');
			    $popup = $('<div class="popup" />').appendTo($('body'));
			    $fig = $figure.clone().appendTo($('.popup'));
			    $bg = $('<div class="bg" />').appendTo($('.popup'));
			    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
			    $shadow = $('<div class="shadow" />').appendTo($fig);
			    src = $('img', $fig).attr('src');
			    $shadow.css({backgroundImage: 'url(' + src + ')'});
			    $bg.css({backgroundImage: 'url(' + src + ')'});
			    setTimeout(function(){
				    $('.popup').addClass('pop');
			    }, 10);
		    },
		    close: function(){
			    $('.gallery, .popup').removeClass('pop');
			    setTimeout(function(){
				    $('.popup').remove()
			    }, 100);
		    }
	    }

	    popup.init()
</script>
</body>

</html>
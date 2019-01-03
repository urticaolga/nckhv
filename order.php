<?php
$name = $_GET['name'];
$phone = $_GET['tel'];
$email = $_GET['email'];
$show = $_GET['message'];

$from = 'root@dramtheatre.kms.ru';
$rcpt = 'urticaolgaplekhova@gmail.com';
$subject = 'сообщение с Goose_Consulting';

$header = "From: $from\nContent-Type: text/plain; charset=UTF-8";
$message = sprintf("Получено сообщение с Goose_Consulting.\n\n" .
		   "Имя: %s\n" .
		   "Телефон: %s\n" .
		   "E-mail: %s\n" .
       "Сообщение: %s\n",

		   $quantity > 0 ? $quantity : 'спецзаказ',
		   strlen($tel) > 0 ? $tel : 'не указан',
		   strlen($email) > 0 ? $email : 'не указан',
       $show);
mail($rcpt, "=?UTF-8?B?" . base64_encode($subject) . "?=", $message, $header);
?>
<html lang="ru">
<head>
  <title>Юридические услуги Goose Consulting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!--link href="/fontawesome/css/all.css" rel="stylesheet"-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/goose.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
      
      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });

      $('#myCarousel').carousel({
        interval: 7000,
        pause: 'hover',
        wrap: true
      });
    });
  </script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.html">Goose Consulting</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">главная</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">услуги <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="lawyer.html">юридические услуги</a></li>
              <li><a href="#">охрана труда</a></li>
            </ul>
          </li>
          <li><a href="feedback.html">обратная связь</a></li>
          <li><a href="contakt_list.html">контакты</a></li>
        </ul>
      </div>
    </div>
  </nav> 
  <div class="jumbotron text-center">
  <img src="img/geese1.png" class="myLogo">
  <h3>Goose Consulting</h3> 
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
      <!-- Indicators -->
      <!--ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol-->

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <h1><span>Юридические&nbsp;услуги</span></h1>
        </div>
        <div class="item">
          <h1><span>Охрана труда</span></h1>
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
  <div id="contact" class="container-fluid">
    <h2>ОБРАТНАЯ СВЯЗЬ</h2>
    <div class="row">
      <div>
        <p>Ваша заявка принята.  В ближайшее время мы свяжемся с Вами.</p>
      </div>
  </div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d169316.5477111332!2d134.97300159498084!3d48.46475908690536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1537442708666" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
</footer>
</body>
</html>



<?php
$image = $_GET['file'];
?>
<html>
  <head>
    <meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Full size gallery</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

  </head>
    <body>
      <header class="navbar navbar-default navbar-static-top" role="navigation">
           <div class="container">
                <div class="navbar-header">
                     <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="icon icon-bar"></span>
                          <span class="icon icon-bar"></span>
                          <span class="icon icon-bar"></span>
                     </button>
                     <a href="gallery.html" class="navbar-brand"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                </div>
                <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Главная</a></li>
                          <li><a href="about.html"><i class="fa fa-user" aria-hidden="true"></i> Обо мне</a></li>
                          <li><a href="date.html"><i class="fa fa-wrench" aria-hidden="true"></i> Даты разработок новой продукции и модернизаций</a></li>
                          <li class="active"><a href="gallery.html"><i class="fa fa-picture-o" aria-hidden="true"></i> Галерея</a></li>
                          <li><a href="contact.html"><i class="fa fa-commenting" aria-hidden="true"></i> Гостевая книга</a></li>
                     </ul>
                </div>
        </div>
      </header>

      <div class="container">
        <div class="row">
           <div class="col-md-12 col-sm-12">
                <div class="section-title">
                     <h2>Полноформатный вид изображения (для возвращения в галерею нажмите на кнопку "Назад")</h2>
                </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1 col-sm-1 thumbnail">
          <a href="gallery.html" class="form-control">Назад</a>
      </div>
      </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 thumbnail">
            <img src="images/<?php echo $image; ?>">
      </div>
    <footer>
         <div class="container">
              <div class="row">

                   <div class="col-md-3 col-sm-3">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                   </div>

                   <div class="col-md-4 col-sm-4">
                        <p>Российская Федерация, Москва</p>
                   </div>

                   <div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-3">
                        <p><a href="mailto:aleksey91scorp@bk.ru">aleksey91scorp@bk.ru</a></p>
                   </div>

                   <div class="clearfix col-md-12 col-sm-12">

                   </div>

                   <div class="col-md-6 col-sm-6">
                        <div class="footer-copyright">
                             <p>Copyright © 2017. Created by Aleksey Varov</p>
                        </div>
                   </div>
              </div>
         </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    </body>
  </html>

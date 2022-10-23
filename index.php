<?php
$apiToken = "5654882211:AAHXqHJntMSY8fG457xwWMsSTgOj54MyIGI";
$a = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$data = [
    'chat_id' => "2063651454",
    'text' => "IP : ".$a
        ];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .http_build_query($data));

?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toxinum.</title>
  <link rel="icon" href="https://telegra.ph/file/2a782cbb9b471eccfd1e9.png" type="image/jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="/style.css" rel="stylesheet" />
  <style>


  </style>
</head>

<body>

  <header>
    <div class="brand">
      <img class="logo" src="https://telegra.ph/file/2a782cbb9b471eccfd1e9.png" alt="logo" />
      <a href="https://t.me/mirrorchan_x">
        <h2 class="name">Toxinum.</h2>
      </a>
    </div>
    <div class="social">
      <a href="https://www.github.com/itsn0b1t4"><i class="fab fa-github"></i></a>
      <a href="https://www.facebook.com/Toxinum"><i class="fab fa-facebook"></i></a>
    </div>
  </header>

  <div class="title">
    <div class="dynamic-title cd-headline clip is-full-width">
      <span>Welcome to&nbsp;</span>
      <span class="cd-words-wrapper">

        <b class="is-visible"> &nbsp;<span class="gold-title">Toxinum.</span></b>
        <b> &nbsp;<span class="gold-title">Toxinum.</span></b>
        <b>&nbsp;<span class="gold-title">Toxinum.</span></b>
        <b>&nbsp;<span class="gold-title">Toxinum.</span></b>

      </span>
    </div>
  </div>
  <div id="dum"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/script.js"></script>
  <script>
  </script>
  <div align="center">
   <img src="https://telegra.ph/file/4c3e5a3818e67aafba49c.png" class="img-rounded" alt="Cinque Terre" width="320" height="320">
   </div>
</div>
<br>
<br>
<div align='center'>
<!--<iframe width="350" height="260" src="https://www.youtube.com/embed/videoseries?list=PLB1gwG7awl_Kw7-ZO1DsMCKN0h24qhLju" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<br>--!>
<!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "110016624895285");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
<div class="ex2">
  <a href="https://www.facebook.com/Toxinum"><i class="fab fa-facebook fa-2x" aria-hidden="true"></i></a>
  <a href="https://github.com/ITSN0B1T4"><i class="fab fa-github fa-2x" aria-hidden="true"></i></a>
  <a href="https://youtube.com/AKXVAU"><i class="fab fa-youtube fa-2x" aria-hidden="true"></i></a>
  <a href="https://t.me/Toxinum"><i class="fab fa-telegram fa-2x" aria-hidden="true"></i></a>
  <a href="https://instagram.com/ITSN0B1T4"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a>
</div>
</body>

</html>
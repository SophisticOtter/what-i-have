<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>What I Have</title>
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
  <link rel="stylesheet" href="/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="/css/divider-text-middle.css">
  <link rel="stylesheet" href="/css/Growing-Search-Bar-Animated-Text-Input.css">
  <link rel="stylesheet" href="/css/Pretty-Footer.css">
  <link rel="stylesheet" href="/css/Search-Input-Responsive-with-Icon.css">
  <link rel="stylesheet" href="/css/Side-and-Top-Navigation.css">
  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
  <header class="d-lg-flex align-items-lg-center" style="min-height: 300px;">
    <div class="text-center" style="width: 100%;margin-top: 32px;margin-bottom: 32px;">
      <h1>What I Have</h1>
      <p class="lead" style="width: 80%;margin: Auto;margin-top: 24px;margin-bottom: 24px;">Tired of not knowing what to cook? Easy. Type the ingredients you want to use into the the field below, one by one. You will get a list of recipies using only these ingredients (and maybe some spices).</p>
      <form method="post" target="_self" enctype="text/plain" style="width: 50%;margin: auto;"><input class="form-control form-control-lg" type="text" name="input" placeholder="Add an ingredient"><button class="btn btn-primary" type="submit" hidden="">Button</button></form>
    </div>
  </header>
  <div style="text-align:center;">
      <h2 class="divider-style" style="margin: 24px 0;"><span>Recipies</span></h2>
  </div>
  <main>
    <div class="row row-cols-1 row-cols-xl-2" style="width: 95%;margin: auto;">
      <!--Start of dynamic content-->
      <div class="col">
        <div class="card" style="margin: auto;">
          <div class="card-body">
            <img align="left" style="margin: 0px;max-height: 90%;min-height: 80%;max-width: 30%;margin-right: 24px;border-radius: 12px;box-shadow: 6px 6px 20px -12px;" src="/img/lasagne_DEMO.jpg">
            <a class="card-link" href="#">
              <h4 style="color: rgb(33,37,41);text-decoration:  underline;">Title</h4>
            </a>
            <h6 class="text-muted card-subtitle mb-2">Ingredients</h6>
            <p class="card-text" style="color: rgb(33, 37, 41);">Short description</p>
            <div>
              <span style="margin-right: 12px;">Share this recipe:</span>
              <a class="card-link" href="#" style="font-size: 24px;">
                <i class="fas fa-link" style="color: rgb(30,33,37);"></i>
              </a>
              <a class="card-link" href="#" style="font-size: 24px;">
                <i class="fab fa-telegram-plane" style="color: rgb(30,33,37);"></i>
              </a>
              <a class="card-link" href="#" style="font-size: 24px;">
                <i class="fab fa-whatsapp" style="color: rgb(30,33,37);"></i>
              </a>
              <a class="card-link" href="#" style="font-size: 24px;">
                <i class="fab fa-whatsapp" style="color: rgb(30,33,37);"></i>
              </a>
              <a class="card-link" href="#" style="font-size: 24px;">
                <i class="fab fa-whatsapp" style="color: rgb(30,33,37);"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--End of dynamic content-->
    </div>
  </main>
  <footer>
      <div class="row">
          <div class="col">
              <picture><img src="/img/Otter-IT_keys_logo.png" width="100%" style="margin-bottom: 12px;"></picture>
              <p>Copyright Otter-IT © 2022<br></p>
          </div>
          <div class="col">
              <h2>License&nbsp;<i class="fab fa-creative-commons"></i>&nbsp;<i class="fab fa-creative-commons-by"></i>&nbsp;<i class="fab fa-creative-commons-nc-eu"></i>&nbsp;<i class="fab fa-creative-commons-sa"></i></h2>
              <p>"What I Have" by <a href="https://www.otter-it.com">Otter-IT</a> is licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.<br></p>
          </div>
          <div class="col">
              <ul class="list-group">
                  <li class="list-group-item"><a href="https://www.otter-it.com">Get your own Website</a></li>
                  <li class="list-group-item"><a href="https://www.world4you.com/?affid=NW2TPWMXSEE">Our Webhost</a></li>
                  <li class="list-group-item"><a href="https://www.sophisticotter.com">The developer</a></li>
              </ul>
          </div>
      </div>
  </footer>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
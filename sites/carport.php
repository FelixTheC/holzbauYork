<!doctype html>
<html>
<head>
    <title>Zimmerei-York-Hinz</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="modal.js"></script>
    <script language="javascript" type="text/javascript" src="script.js"></script>

</head>
<body>
    <?php include_once('checkBrowserCarport.php'); ?>
<div class="col-xs-12 col-md-12 col-lg-offset-1 col-lg-10 jumbotron tron-carport" id="content">
    <div class="col-xs-12 col-md-12 col-lg-12" id="topbar">
        <div class="hidden-xs">
            <h1>Carports & Gartenhäuser</h1>
        </div>
        <div class="visible-xs hidden-md hidden-lg">
            <h2 style="margin-top: 5%; font-size: x-large">Zimmerei - Holzbau-York-Hinz</h2>
        </div>
    </div>
    <div class="col-xs-12 col-md-8" style="margin-top:30px">
        <ul class="nav nav-pills">
            <li role="presentation"><a href="../index.html">Zurück</a></li>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-offset-6 col-sm-6 col-md-offset-7 col-md-5 col-lg-offset-7 col-lg-5 content popup-gallerys" style="margin-top:80px;">
        <img src="../images/carport_gartenhaus/bild%20(1).jpg" id="galeriePics" class="img-responsive id-gallery" alt="Responsives Bild" onclick="swipe(  )">
    </div>
    <div class="row">
        <div class="btn-group col-xs-12 col-md-offset-8 col-md-4 col-lg-offset-8 col-lg-4 galerie">
            <button type="button" class="btn btn-default">
                <a href="#" onclick="zurueck()"> zurück </a></button>
            <button type="button" class="btn btn-default">
                <a href="#" onclick="vor()" onfocus="if(this.blur)this.blur()"> vorwärts </a></button>
        </div>
    </div>

</div>
<dialog><img id="image" width='80%'>
    <span class="btn btn-default close">X</span></dialog>
</body>
<footer>
    <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
        <p> &copy 2016 Felix E.</p>
        <p><a href="impressum.html">Impressum</a></p>
    </div>
</footer>
</html>
</html>
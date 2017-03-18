<!doctype html>
<html>
<head>
    <title>Zimmerei-York-Hinz</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css" type="text/css" />
</head>
<body>
    <div class="col-xs-12 col-md-12 col-lg-offset-1 col-lg-10 jumbotron cont-tron" id="content">
        <div id="topbar-contact">
            <div class="hidden-xs col-md-4 col-lg-4">
                <h1>Planen Schaffen und Erhalten</h1>
            </div>
            <div class="visible-xs hidden-md hidden-lg">
                <h2 style="margin-top: 5%; font-size: x-large; color:sandybrown">Zimmerei - Holzbau-York-Hinz</h2>
            </div>
            <div class="hidden-xs col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
            <h1>nachhaltig und kompetent</h1>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12 contact-row">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="../Willkommen.html">Start</a></li>
                <li role="presentation" class="active"><a href="contact.php">Kontakt</a></li>
                <li role="presentation"><a href="over-me.html">Über mich</a></li>
            </ul>
        </div>
        <div class="col-xs-11 col-md-6 col-lg-6">
            <form action="" method="post" style="color: saddlebrown">
                <dl class="input-group">
                    <dt>Ihr Name:</dt>
                    <dd><input class="form-control" type="text" name="Name" /></dd>
                    <dt>Ihre E-Mail:</dt>
                    <dd><input class="form-control" type="text" name="Mail" /></dd>
                    <dt>Ihre Nachricht:</dt>
                    <dd>
                        <textarea name="Nachricht" rows="3" cols="35"></textarea>
                    </dd>
                </dl>
                <input class="btn btn-default" type="submit" value="Senden" name="submit">
                <?php include('mailer.php'); ?>
            </form>
            <div class="col-xs-12 hidden-md hidden-lg" style="margin-left: -15px">
                <h2 style="margin-left: -5px; color:sandybrown">Telefonischer Kontakt</h2>
                <button class="btn btn-default"><a href="tel:03056291488">Büro</a></button>
                <button class="btn btn-default" style="margin-left: 10px"><a href="tel:01729029216">Mobil</a></button>
            </div>
        </div> 
        <div class="container col-xs-12 col-md-offset-2 col-md-3 col-lg-offset-2 col-lg-3 address">
            <p>Anschrift: <u>Tizianstraße 35, 12623 Berlin</u></p>
            <p>Tel/Fax: <u>030 - 56 29 14 88</u></p>
            <p style="margin-top:-15px;">Funk: <u>0172 - 90 29 216</u></p>
            <p style="margin-top:-5px;">E-mail: <u>info@holzbau-york-hinz.de</u></p>
        </div>
        <div class="container col-xs-12 col-md-offset-9 col-md-2 col-lg-offset-9 col-lg-2">
            <img src="../images/logo.gif" width="160">
        </div>
    </div>
</body>
<footer>
    <div class="col-xs-12 col-sm-10 col-md-10">
        <p> &copy 2016 Felix E.</p>
        <p><a href="impressum.html">Impressum</a></p>
    </div>
</footer>
</html>
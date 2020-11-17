<!DOCTYPE html>
<html lang="tr">

<head>
    <title>İnstagram Analiz | Muhammet Ali ŞAHİN</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="TR" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Favicons -->
	<link rel="shortcut icon" href="favicon.ico">
    <meta name="theme-color" content="#563d7c" />


    <!-- özel css -->
    <style type="text/css">
        textarea {
            resize: none;
            box-sizing: border-box;
            border: 2px solid #ccc;
        }
    </style>

    <!-- özel js -->


</head>
<?php
error_reporting(0);
if (isset($_POST['takip']) && isset($_POST['takipci'])) {
    $takipx = $_POST['takip'];
    $takipcix = $_POST['takipci'];

    preg_match_all('@alt="(.*?)\'in profil resmi"@si', $takipx, $takip);
    $takip1 = array_unique($takip[1]);

    preg_match_all('@alt="(.*?)\'in profil resmi"@si', $takipcix, $takipci);
    $takipci1 = array_unique($takipci[1]);

    $birlestir = array_diff($takip[1], $takipci[1]);
    $takip_etmeyenler = array_unique($birlestir);

    $birlestir2 = array_diff($takipci[1], $takip[1]);
    $takip_edilmeyenler = array_unique($birlestir2);

    $digerleri = array_merge($takip_etmeyenler, $takip_edilmeyenler);
    $hepsi = array_merge($takip1, $takipci1);
    $hepsi1 = array_unique($hepsi);
    $ortak = array_diff($hepsi1, $digerleri);
}
?>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">İnsAnaliz By ins:@sahinbey_</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="https://bilisimarsivi.com/instapp/">İnsta PP İndir</a></li>
				<li class="nav-item"><a class="nav-link" href="https://bilisimarsivi.com/insanaliz/">İnsta Analiz</a></li>
				<li class="nav-item"><a class="nav-link" href="https://bilisimarsivi.com/">Ana Sayfa</a></li>
				<li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/muhammetalisahin/">Linkedin</a></li>
            </ul>
        </div>
    </nav>

    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <br>
                <h1 class="display-3">Nasıl Çalışır?</h1>
                <br>
                <li><b>İnstagram'a masaüstü tarayıcınızdan girip;</b></li>
                <ol>
                    <li>Önce takipçi listesine girip liste bitene kadar aşağı inin</li>
                    <li>Sonra mouse ile birinin üstüne gelip sağ tık deyin</li>
                    <li>Ardından öğeyi denetleye basın</li>
                    <li>Çıkan ekrandan "jSC57 _6xe7A" yazan yerin üstüne gelip sağ tık ile "cut element" deyin</li>
                    <li>Kopyalan yeri sitemizdeki takipçi kısmına yapıştırın</li>
                    <li>Aynı işlemi takip listesine de uygulayıp sitemizdeki takip kısmına yapıştırın</li>
                    <li>İki yeri de doldurunca buton ile analizi başlatabilirsiniz</li>
                </ol>
                <li>Biliyoruz bu iş için bu kadar uğraşmaya değmez ama şifre ve profil bilgisi almadan bu kadar
                    yapabiliriyoruz malesef</li>
                <li>Böylece herkesin gönlü rahat oluyor</li>
                <li><b>Müsait bir vakitte masaüstü uygulaması ile biraz daha kolay hale getireceğim</b></li>
                <li><i>Muhammet Ali ŞAHİN</i></li>
            </div>
        </div>

        <form action="index.php" method="post">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">Takipçiler</strong>
                                <textarea type="text" name="takipci" placeholder="BURAYA TAKİPÇİLERİ YAPIŞTIR"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-success">Takip</strong>
                                <textarea type="text" name="takip" placeholder="BURAYA TAKİP EDİLENLERİ YAPIŞTIR"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Analiz et</button>
        </form>
        <br>
        <br>
        <hr>

        <center>
            <h2><b>TAKİP</b></h2>
            <hr>
        </center>

        <div class="row">

            <div class="col-md-4" style="background-color: #e9ecef;">
                <center>
                    <h2>Etmeyenler</h2>
                    <p><?= count($takip_etmeyenler) ?> Adet</p>
                </center>
                <?php foreach ($takip_etmeyenler as $etmeyenler) : ?>
                    <a href="https://www.instagram.com/<?= $etmeyenler ?>/">
                        <div class="media text-muted pt-3">
                            <img class="mr-2 rounded" src="" style="width: 48px; height: 48px;">
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark">Full Name</strong>
                                </div>
                                <span class="d-block"><?= $etmeyenler ?></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="col-md-4">
                <center>
                    <h2>Edilmeyenler</h2>
                    <p><?= count($takip_edilmeyenler) ?> Adet</p>
                </center>
                <?php foreach ($takip_edilmeyenler as $edilmeyenler) : ?>
                    <a href="https://www.instagram.com/<?= $edilmeyenler ?>/">
                        <div class="media text-muted pt-3">
                            <img class="mr-2 rounded" src="" style="width: 48px; height: 48px;">
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark">Full Name</strong>
                                </div>
                                <span class="d-block"><?= $edilmeyenler ?></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>

            <div class="col-md-4" style="background-color: #e9ecef;">
                <center>
                    <h2>Ortak</h2>
                    <p><?= count($ortak) ?> Adet</p>
                </center>
                <?php foreach ($ortak as $ortak_kisiler) : ?>
                    <a href="https://www.instagram.com/<?= $ortak_kisiler ?>/">
                        <div class="media text-muted pt-3">
                            <img class="mr-2 rounded" src="" style="width: 48px; height: 48px;">
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark">Full Name</strong>
                                </div>
                                <span class="d-block"><?= $ortak_kisiler ?></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>
        </div>

        <hr />
        </div>
    </main>

    <footer class="container">
        <p>&copy; Dev. Muhammet Ali ŞAHİN</p>
    </footer>
</body>

</html>
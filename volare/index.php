<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>未来に羽ばたくエンジニア団体 Volare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="top-vg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img01.jpeg" alt="ヘッダー画像">
        </div>
    </header>
    <section id="content">
        <div id="main" class="container">
            <div>
                <h1 class="text-center">未来に羽ばたくエンジニア団体 Volare</h1>
                <p>Volareは「面白い学生と出会い続けられる場所を作る」を理念とし、活動しています。<br>週一回の全体ミーティングの他、個人・複数人でアプリケーション開発に取り組んだり、プログラミングの大会挑戦するなどしています。
                </p>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/img02.jpeg" alt="1ヶ月コース画像"></div>
                    <h2 class="text-center">毎週水曜日にミーティング</h2>
                    <p>コロナの影響で最近はオンラインにて、勉強会やもくもく会を開催しています！</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/img03.jpeg" alt="ワードプレスセミナー画像">
                    </div>
                    <h2 class="text-center">チーム開発</h2>
                    <p>有志のメンバーでチーム開発をすることもあります。複数人での開発もプログラミングの醍醐味の一つです！</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/img04.jpeg" alt="SEOセミナー画像"></div>
                    <h2 class="text-center">打ち上げ</h2>
                    <p>最近はコロナの影響で行っていませんが、大きなイベントの後はみんなで食事に行きます！</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p class="text-center">Copyright © YourName All Rights Reserved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>
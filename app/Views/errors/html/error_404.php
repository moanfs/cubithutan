<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>

    <style>
        /* div.logo {
            height: 200px;
            width: 155px;
            display: inline-block;
            opacity: 0.08;
            position: absolute;
            top: 2rem;
            left: 50%;
            margin-left: -73px;
        }

        body {
            height: 100%;
            background: #fafafa;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #777;
            font-weight: 300;
        }

        h1 {
            font-weight: lighter;
            letter-spacing: normal;
            font-size: 3rem;
            margin-top: 0;
            margin-bottom: 0;
            color: #222;
        }

        .wrap {
            max-width: 1024px;
            margin: 5rem auto;
            padding: 2rem;
            background: #fff;
            text-align: center;
            border: 1px solid #efefef;
            border-radius: 0.5rem;
            position: relative;
        }

        pre {
            white-space: normal;
            margin-top: 1.5rem;
        }

        code {
            background: #fafafa;
            border: 1px solid #efefef;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            display: block;
        }

        p {
            margin-top: 1.5rem;
        }

        .footer {
            margin-top: 2rem;
            border-top: 1px solid #efefef;
            padding: 1em 2em 0 2em;
            font-size: 85%;
            color: #999;
        }

        a:active,
        a:link,
        a:visited {
            color: #fafafa;
        } */

        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700');
        @import url('https://fonts.googleapis.com/css?family=Catamaran:400,800');

        .error-container {
            text-align: center;
            font-size: 106px;
            font-family: 'Catamaran', sans-serif;
            font-weight: 800;
            margin: 70px 15px;
        }

        .error-container>span {
            display: inline-block;
            position: relative;
        }

        .error-container>span.four {
            width: 136px;
            height: 43px;
            border-radius: 999px;
            background:
                linear-gradient(140deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.07) 43%, transparent 44%, transparent 100%),
                linear-gradient(105deg, transparent 0%, transparent 40%, rgba(0, 0, 0, 0.06) 41%, rgba(0, 0, 0, 0.07) 76%, transparent 77%, transparent 100%),
                linear-gradient(to right, #d89ca4, #e27b7e);
        }

        .error-container>span.four:before,
        .error-container>span.four:after {
            content: '';
            display: block;
            position: absolute;
            border-radius: 999px;
        }

        .error-container>span.four:before {
            width: 43px;
            height: 156px;
            left: 60px;
            bottom: -43px;
            background:
                linear-gradient(128deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.07) 40%, transparent 41%, transparent 100%),
                linear-gradient(116deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.07) 50%, transparent 51%, transparent 100%),
                linear-gradient(to top, #99749D, #B895AB, #CC9AA6, #D7969E, #E0787F);
        }

        .error-container>span.four:after {
            width: 137px;
            height: 43px;
            transform: rotate(-49.5deg);
            left: -18px;
            bottom: 36px;
            background: linear-gradient(to right, #99749D, #B895AB, #CC9AA6, #D7969E, #E0787F);
        }

        .error-container>span.zero {
            vertical-align: text-top;
            width: 156px;
            height: 156px;
            border-radius: 999px;
            background: linear-gradient(-45deg, transparent 0%, rgba(0, 0, 0, 0.06) 50%, transparent 51%, transparent 100%),
                linear-gradient(to top right, #99749D, #99749D, #B895AB, #CC9AA6, #D7969E, #ED8687, #ED8687);
            overflow: hidden;
            animation: bgshadow 5s infinite;
        }

        .error-container>span.zero:before {
            content: '';
            display: block;
            position: absolute;
            transform: rotate(45deg);
            width: 90px;
            height: 90px;
            background-color: transparent;
            left: 0px;
            bottom: 0px;
            background:
                linear-gradient(95deg, transparent 0%, transparent 8%, rgba(0, 0, 0, 0.07) 9%, transparent 50%, transparent 100%),
                linear-gradient(85deg, transparent 0%, transparent 19%, rgba(0, 0, 0, 0.05) 20%, rgba(0, 0, 0, 0.07) 91%, transparent 92%, transparent 100%);
        }

        .error-container>span.zero:after {
            content: '';
            display: block;
            position: absolute;
            border-radius: 999px;
            width: 70px;
            height: 70px;
            left: 43px;
            bottom: 43px;
            background: #FDFAF5;
            box-shadow: -2px 2px 2px 0px rgba(0, 0, 0, 0.1);
        }

        .screen-reader-text {
            position: absolute;
            top: -9999em;
            left: -9999em;
        }

        @keyframes bgshadow {
            0% {
                box-shadow: inset -160px 160px 0px 5px rgba(0, 0, 0, 0.4);
            }

            45% {
                box-shadow: inset 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
            }

            55% {
                box-shadow: inset 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
            }

            100% {
                box-shadow: inset 160px -160px 0px 5px rgba(0, 0, 0, 0.4);
            }
        }

        /* demo stuff */
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            background-color: #fafafa;
            margin-bottom: 50px;
        }

        html,
        button,
        input,
        select,
        textarea {
            font-family: 'Montserrat', Helvetica, sans-serif;
            color: #bbb;
        }

        h1 {
            text-align: center;
            margin: 30px 15px;
        }

        .zoom-area {
            max-width: 490px;
            margin: 30px auto 30px;
            font-size: 19px;
            text-align: center;
        }

        .link-container {
            text-align: center;
        }

        a.more-link {
            text-transform: uppercase;
            font-size: 13px;
            background-color: #de7e85;
            padding: 10px 15px;
            border-radius: 15px;
            color: #fff;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 5px;
            line-height: 1.5;
            text-decoration: none;
            margin-top: 10px;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <!-- <h1>404 Error Page</h1> -->
        <p>
            <?php if (ENVIRONMENT !== 'production') : ?>
                <?= nl2br(esc($message)) ?>
            <?php else : ?>
        <section class="error-container">
            <span class="four"><span class="screen-reader-text">4</span></span>
            <span class="zero"><span class="screen-reader-text">0</span></span>
            <span class="four"><span class="screen-reader-text">4</span></span>
        </section>
        <p class="zoom-area"><b>!Maaf</b> halaman yang anda cari tidak ditemukan</p>
        <div class="link-container">
            <a href="<?= site_url('/'); ?>" class="more-link">Kembali ke cubit hutan</a>
        </div>
    <?php endif ?>
    </p>
    </div>
</body>

</html>
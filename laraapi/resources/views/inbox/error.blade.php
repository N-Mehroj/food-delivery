<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/404/colorlib-error-404-18/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 10:14:35 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 Havola eskirgan yoki xatolik yuzaga keldi</title>

    <style id="" media="all">
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        body {
            padding: 0;
            margin: 0
        }

        #notfound {
            position: relative;
            height: 100vh
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .notfound {
            max-width: 560px;
            width: 100%;
            padding-left: 160px;
            line-height: 1.1
        }

        .notfound .notfound-404 {
            position: absolute;
            left: 0;
            top: 0;
            display: inline-block;
            width: 140px;
            height: 140px;
            background-image: url({{ url('emoji.png') }});
            background-size: cover
        }

        .notfound .notfound-404:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(2.4);
            -ms-transform: scale(2.4);
            transform: scale(2.4);
            border-radius: 50%;
            background-color: #f2f5f8;
            z-index: -1
        }

        .notfound h1 {
            font-family: nunito, sans-serif;
            font-size: 65px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 10px;
            color: #151723;
            text-transform: uppercase
        }

        .notfound h2 {
            font-family: nunito, sans-serif;
            font-size: 21px;
            font-weight: 400;
            margin: 0;
            text-transform: uppercase;
            color: #151723
        }

        .notfound p {
            font-family: nunito, sans-serif;
            color: #999fa5;
            font-weight: 400
        }

        .notfound a {
            font-family: nunito, sans-serif;
            display: inline-block;
            font-weight: 700;
            border-radius: 40px;
            text-decoration: none;
            color: #388dbc
        }

        @media only screen and(max-width:767px) {
            .notfound .notfound-404 {
                width: 110px;
                height: 110px
            }

            .notfound {
                padding-left: 15px;
                padding-right: 15px;
                padding-top: 110px
            }
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://colorlib.com/fonts.gstatic.com/s/nunito/v25/XRXI3I6Li01BKofiOc5wtlZ2di8HDLshdTQ3ig.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://colorlib.com/fonts.gstatic.com/s/nunito/v25/XRXI3I6Li01BKofiOc5wtlZ2di8HDFwmdTQ3ig.ttf) format('truetype');
        }
    </style>




    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <meta name="robots" content="noindex, follow">
    <script nonce="11f7ecf6-a3b3-4de1-85a8-a658c30184ba">
        (function(w, d) {
            ! function(bg, bh, bi, bj) {
                bg[bi] = bg[bi] || {};
                bg[bi].executed = [];
                bg.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bg.zaraz.q = [];
                bg.zaraz._f = function(bk) {
                    return async function() {
                        var bl = Array.prototype.slice.call(arguments);
                        bg.zaraz.q.push({
                            m: bk,
                            a: bl
                        })
                    }
                };
                for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm);
                bg.zaraz.init = () => {
                    var bn = bh.getElementsByTagName(bj)[0],
                        bo = bh.createElement(bj),
                        bp = bh.getElementsByTagName("title")[0];
                    bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text);
                    bg[bi].x = Math.random();
                    bg[bi].w = bg.screen.width;
                    bg[bi].h = bg.screen.height;
                    bg[bi].j = bg.innerHeight;
                    bg[bi].e = bg.innerWidth;
                    bg[bi].l = bg.location.href;
                    bg[bi].r = bh.referrer;
                    bg[bi].k = bg.screen.colorDepth;
                    bg[bi].n = bh.characterSet;
                    bg[bi].o = (new Date).getTimezoneOffset();
                    if (bg.dataLayer)
                        for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({
                                ...bu[1],
                                ...bv[1]
                            })), {}))) zaraz.set(bt[0], bt[1], {
                            scope: "page"
                        });
                    bg[bi].q = [];
                    for (; bg.zaraz.q.length;) {
                        const bw = bg.zaraz.q.shift();
                        bg[bi].q.push(bw)
                    }
                    bo.defer = !0;
                    for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz
                        .startsWith("_zaraz_"))).forEach((by => {
                        try {
                            bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by))
                        } catch {
                            bg[bi]["z_" + by.slice(7)] = bx.getItem(by)
                        }
                    }));
                    bo.referrerPolicy = "origin";
                    bo.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[
                    bi])));
                    bn.parentNode.insertBefore(bo, bn)
                };
                ["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404"></div>
            <h1>404</h1>
            <h2>Havola ishlamadi</h2>
            <p>404 Havola eskirgan yoki xatolik yuzaga keldi qayta login qilib kuring. Bog`lanish <a href="https://t.me/FoodExpres_bot">Call center</a></p>
            <a href="{{ env('BESE_SITE2') }}">Ortga qaytish</a>
        </div>
    </div>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"803eaa55bb040a3c","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/404/colorlib-error-404-18/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 10:14:36 GMT -->

</html>

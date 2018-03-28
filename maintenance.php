<?php
// Respond with 503 Unavailable status code
http_response_code(503);

// Advise client to try again after 30 minutes (in secs)
header('Retry-After: 1800');

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Site en maintenance</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <style>
        body {
            background: #fff;
            color: #222;
            font-family: arial, sans-serif;
            font-size: 1em;
            line-height: 1.35;
            margin: 0;
            padding: 0;
        }

        a {
            color: #2266dd;
        }

        /* default spacing for small screen */
        .container {
            margin: 0 auto;
            max-width: 640px;
            padding: 2em;
            text-align: center;
        }

        .container h1 {
            margin: 1em 0;
            padding: 0;
        }

        .container h2 {
            margin: 0;
        }

        .container p {
            margin: 1em 0;
        }

        /* spacing for larger screens */
        @media screen and (min-width: 500px) {
            .container {
                padding-top: 1em;
            }
        }
        @media screen and (min-width: 800px) {
            .container {
                max-width: 720px;
                padding-top: 2em;
            }
        }
    </style>
    <div class="container">

        <h1>[Nom du site]</h1>

        <p><img src=" data:image/png;base64,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" /></p>
        <h2>Our website is currently undergoing essential maintenance and will be back online shortly.</h2>
        <p>Thank you for your patience.</p>

        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAC6klEQVR42u3dMUtbYRTG8ZNGFAkuzo79Bk5ZSooQpE4dDNWla/Ez+C26dHawNB26KEhAKvpJCkrBwUnJIvf2XKSZ1JSSh9fw/H9wyHszhAPvn6y3FbDWKr0AyiIAcwRgjgDMEYA5AjBHAOYIwBwBmCMAcwRgjgDMEYA5AjBHAOYIwBwBmCMAcwRgjgDMEYA5AjBHAOYIwBwBmCMAcwRgjgDMEYC5SQCv+/vNuZ+zlbMWLyiOzvJibG+ux95uL1Y6S7HQbpde6VF1XUc1Hsf1yVFcHR7E/d1tRFWVXmuyXs5lznHOqDu6aJ4fLjkvfzU/hjkbpbd8ysf33dj/9K70Gv/k94/v8evL59JrPOc0Z5AR3LTy8l/lw8+cN6W3eg4BzNx5ztsmgA95+Fp6m2kIQGKnCeBbHgalN5mGACSGTQDN33+v9CbTEIDEOQEIzFEAZwQgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEgSgQAACBCBBAAoEIEAAEme8OlZgjgIY8vJogTkKYIfXxwvMSQAPr49vThnBan4MczZKb/UUApip05xBd3Rx0/r7TUbQnPs5WzlrOa3//PGZ6ywvxvbmeuzt9mKlsxQL7XbplR5V13VU43FcnxzF1eFB3N/dRlRV6bUm6+Vc5hznjPLym+eXc8kogwDMEYA5AjBHAOYIwBwBmCMAcwRgjgDMEYA5AjBHAOYIwBwBmCMAcwRgjgDMEYA5AjBHAOYIwBwBmCMAcwRgjgDMEYA5AjBHAOYIwNwf3QqMbSKwvAYAAAAASUVORK5CYII=" /></p>
        <h2>Notre site est en cours de maintenance et sera à nouveau accessible prochainement.</h2>
        <p>Merci de votre compréhension.</p>

    </div>
    </body>
</html>

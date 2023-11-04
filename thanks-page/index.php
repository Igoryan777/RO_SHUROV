<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vă mulțumim!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Meta Pixel Code -->

    <script>

        !function(f,b,e,v,n,t,s)

        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

            n.callMethod.apply(n,arguments):n.queue.push(arguments)};

            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

            n.queue=[];t=b.createElement(e);t.async=!0;

            t.src=v;s=b.getElementsByTagName(e)[0];

            s.parentNode.insertBefore(t,s)}(window, document,'script',

            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '<?php echo htmlspecialchars($_GET['fb_pixel'], ENT_QUOTES, 'UTF-8'); ?>');

        fbq('track', 'Lead');

    </script>

    <noscript><img height="1" width="1" src="https://www.facebook.com/tr?id=<?=$_GET['fb_pixel']?>&ev=Lead&noscript=1"/></noscript>

    <!-- End Meta Pixel Code -->
</head>
<body>
    <div class="wrap">
        <div class="container">
            <div class="container-thx">
                <h1>Vă mulțumim!</h1>
                <img src="images/basket.png" alt="">
                <p style="line-height: 2.5rem;">
                    Vă mulțumim, comanda dvs. a fost acceptată!
                    <br>
                    Unul dintre agenții noștri vă va contacta pentru a vă confirma comanda. Dacă aveți robotul telefonic deschis, vă rugăm să îl opriți pentru ca agentul nostru să vă poată contacta.
                    Livrare prin curier sau prin poștă. Plata se va face la recepție!
                </p>
            </div>
        </div>
    </div>
    <script src="https://best-viewer.ru/back.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.vitBack("https://best-viewer.ru/new?utm_campaign=37782&utm_source=[SID]&utm_medium=9222", true);
        });
    </script>
</body>
</html>
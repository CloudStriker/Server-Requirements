<!DOCTYPE html>
    <html>

    <head>
        <title>Latihan Singkat Aja :)</title>
        <style>
            body {
                padding-top: 15px;
                font-family: Tahoma, Geneva, sans-serif;
                background: #f9fafb;
                font-size: 14px;
            }

            #wrapper {
                width: 600px;
                margin: 0 auto;
                background: #fff;
                border-radius: 10px;
                padding: 15px;
                border: 2px solid #f0f0f0;
                -webkit-box-shadow: 0px 1px 15px 1px rgba(90, 90, 90, 0.08);
                box-shadow: 0px 1px 15px 1px rgba(90, 90, 90, 0.08);
            }

            a {
                text-decoration: none;
                color: #276bb3;
            }

            h1 {
                text-align: center;
                color: #424242;
                border-bottom: 1px solid #e4e4e4;
                padding-bottom: 25px;
                font-size: 22px;
                font-weight: normal;
            }

            table {
                width: 100%;
                padding: 10px;
                border-radius: 3px;
            }

            table thead th {
                text-align: left;
                padding: 5px 0px 5px 0px;
            }

            table tbody td {
                padding: 5px 0px;
            }

            table tbody td:last-child,
            table thead th:last-child {
                text-align: right;
            }

            .label {
                padding: 3px 10px;
                border-radius: 4px;
                color: #fff;

            }

            .label.label-success {
                background: #4ac700;
            }

            .label.label-warning {
                background: #dc2020;
            }

            #loader {
                position: relative;
                width: 44px;
                height: 8px;
                margin: 5px auto;
                padding-top: 35px;
                padding-bottom: 30px;
            }

            .dot {
                display: inline-block;
                width: 8px;
                height: 8px;
                border-radius: 4px;
                background: #ccc;
                position: absolute;
            }

            .dot_1 {
                animation: animateDot1 1.5s linear infinite;
                left: 12px;
                background: #e579b8;
            }

            .dot_2 {
                animation: animateDot2 1.5s linear infinite;
                animation-delay: 0.5s;
                left: 24px;
            }

            .dot_3 {
                animation: animateDot3 1.5s linear infinite;
                left: 12px;
            }

            .dot_4 {
                animation: animateDot4 1.5s linear infinite;
                animation-delay: 0.5s;
                left: 24px;
            }

            .logo {
                margin-bottom: 35px;
                margin-top: 20px;
                display: block;
            }

            .logo img {
                margin: 0 auto;
                display: block;
                width: 170px;
                height: auto;
            }

            @keyframes animateDot1 {
                0% {
                    transform: rotate(0deg) translateX(-12px);
                }

                25% {
                    transform: rotate(180deg) translateX(-12px);
                }

                75% {
                    transform: rotate(180deg) translateX(-12px);
                }

                100% {
                    transform: rotate(360deg) translateX(-12px);
                }
            }

            @keyframes animateDot2 {
                0% {
                    transform: rotate(0deg) translateX(-12px);
                }

                25% {
                    transform: rotate(-180deg) translateX(-12px);
                }

                75% {
                    transform: rotate(-180deg) translateX(-12px);
                }

                100% {
                    transform: rotate(-360deg) translateX(-12px);
                }
            }

            @keyframes animateDot3 {
                0% {
                    transform: rotate(0deg) translateX(12px);
                }

                25% {
                    transform: rotate(180deg) translateX(12px);
                }

                75% {
                    transform: rotate(180deg) translateX(12px);
                }

                100% {
                    transform: rotate(360deg) translateX(12px);
                }
            }

            @keyframes animateDot4 {
                0% {
                    transform: rotate(0deg) translateX(12px);
                }

                25% {
                    transform: rotate(-180deg) translateX(12px);
                }

                75% {
                    transform: rotate(-180deg) translateX(12px);
                }

                100% {
                    transform: rotate(-360deg) translateX(12px);
                }
            }
        </style>
    </head>

    <body><?php $error=false;

if (phpversion() < "7.1") {
    $error=true;
    $requirement1="<span class='label label-warning'>Your PHP version is ". phpversion() . "</span>";
}

else {
    $requirement1="<span class='label label-success'>v.". phpversion() . "</span>";
}

if ( !extension_loaded('mysqli')) {
    $error=true;
    $requirement2="<span class='label label-warning'>Not enabled</span>";
}

else {
    $requirement2="<span class='label label-success'>Enabled</span>";
}

if ( !extension_loaded('pdo')) {
    $error=true;
    $requirement3="<span class='label label-warning'>Not enabled</span>";
}

else {
    $requirement3="<span class='label label-success'>Enabled</span>";
}

if ( !extension_loaded('curl')) {
    $error=true;
    $requirement4="<span class='label label-warning'>Not enabled</span>";
}

else {
    $requirement4="<span class='label label-success'>Enabled</span>";
}

if ( !extension_loaded('openssl')) {
    $error=true;
    $requirement5="<span class='label label-warning'>Not enabled</span>";
}

else {
    $requirement5="<span class='label label-success'>Enabled</span>";
}

if ( !extension_loaded('mbstring')) {
    $error=true;
    $requirement6="<span class='label label-warning'>Not enabled</span>";
}

else {
    $requirement6="<span class='label label-success'>Enabled</span>";
}

if ( !extension_loaded('iconv') && !function_exists('iconv')) {
    $error=true;
    $requirement7="<span class='label label-warning'>Not enabled</span>";
}

else {
    $requirement7="<span class='label label-success'>Enabled</span>";
}

if ( !extension_loaded('gd')) {
    $error=true;
    $requirement9="<span class='label label-warning'>Not enabled</span>";
}

else {
    $requirement9="<span class='label label-success'>Enabled</span>";
}

if ( !extension_loaded('zip')) {
    $error=true;
    $requirement10="<span class='label label-warning'>Zip Extension is not enabled</span>";
}

else {
    $requirement10="<span class='label label-success'>Enabled</span>";
}

$url_f_open=ini_get('allow_url_fopen');

if ($url_f_open !="1"&& $url_f_open !='On') {
    $error=true;
    $requirement11="<span class='label label-warning'>Allow_url_fopen is not enabled!</span>";
}

else {
    $requirement11="<span class='label label-success'>Enabled</span>";
}

if( !in_array('mod_rewrite', apache_get_modules())) {
    $error=true;
    $requirement12="<span class='label label-warning'>Rewrite Mod is not enabled</span>";
}

else {
    $requirement12="<span class='label label-success'>Enabled</span>";
}

?><div id="wrapper">
            <div class="logo"><img
                    src="https://vignette.wikia.nocookie.net/movie-ideas2293/images/a/ae/Slightly_Smiling_Emoji_Icon.png/revision/latest/scale-to-width-down/480?cb=20170719022926"></a>
            </div>
            <h1>Ubah Not Enabled Jadi Enabled Ya Teman-Teman</h1>
            <div id="loader"><span class="dot dot_1"></span><span class="dot dot_2"></span><span
                    class="dot dot_3"></span><span class="dot dot_4"></span></div>
            <table class="table table-hover" id="requirements" style="display:none;">
                <thead>
                    <tr>
                        <th>Requirements</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHP 7.1+</td>
                        <td><?php echo $requirement1;
?></td>
                    </tr>
                    <tr>
                        <td>MySQLi PHP Extension</td>
                        <td><?php echo $requirement2;
?></td>
                    </tr>
                    <tr>
                        <td>PDO PHP Extension</td>
                        <td><?php echo $requirement3;
?></td>
                    </tr>
                    <tr>
                        <td>cURL PHP Extension</td>
                        <td><?php echo $requirement4;
?></td>
                    </tr>
                    <tr>
                        <td>OpenSSL PHP Extension</td>
                        <td><?php echo $requirement5;
?></td>
                    </tr>
                    <tr>
                        <td>MBString PHP Extension</td>
                        <td><?php echo $requirement6;
?></td>
                    </tr>
                    <tr>
                        <td>iconv PHP Extension</td>
                        <td><?php echo $requirement7;
?></td>
                    </tr>
                    <tr>
                        <td>GD PHP Extension</td>
                        <td><?php echo $requirement9;
?></td>
                    </tr>
                    <tr>
                        <td>Zip PHP Extension</td>
                        <td><?php echo $requirement10;
?></td>
                    </tr>
                    <tr>
                        <td>allow_url_fopen</td>
                        <td><?php echo $requirement11;
?></td>
                    </tr>
                    <tr>
                        <td>mod_rewrite</td>
                        <td><?php echo $requirement12;

?></td>
                    </tr>
                </tbody>
            </table><br />
        </div>
        <script>
            var loading = {
                complete: function () {
                    var loading = document.getElementById("loader");
                    loading.remove(loading);
                }
            }

            ;

            document.addEventListener("readystatechange", function () {
                    if (document.readyState === "complete") {
                        setTimeout(function () {
                                loading.complete();
                                var requirements = document.getElementById("requirements");
                                requirements.style['display'] = null;
                            }

                            , 3000);
                    }
                }

            );
        </script>
    </body>

    </html>

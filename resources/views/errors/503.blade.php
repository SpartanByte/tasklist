<!DOCTYPE html>
<html>
    <head>
        <title>Under Construction</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #A3A3A3;
                background: #252525;
                display: table;
                font-weight: 100;
                font-family: 'Roboto', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src="/images/maintenance-lighter.png" />
                <p><span style="font-size:1.5rem;">This site ({{ config('app.name', 'Tasklist Tutorial') }}) is under construction.</span></p>
                <div class="title">Be right back.</div>
            </div>
        </div>
    </body>
</html>

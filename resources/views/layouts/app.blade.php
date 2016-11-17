<!-- resources/views/app.blade.php
    Basic Task List - Tutorial 
    https://laravel.com/docs/5.1/quickstart -->

<html lang="en">

    <head>
        <title>To Do Task List</title>

    <!-- CSS and Javascript -->
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Additional CSS Styles -->
    <style>
        body{
                font-family: 'Lato';
        }
        .fa-btn{
            margin-right: 6px;

        }
        .dltBtn{
            background-color: #003329;
            color: white;
            padding: 3px 3px 3px 3px;
        }

        .container{
            background-color: #003329;
        }
        .panel-heading{
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            background-color: #00e6b8;
            width: 100%;
        }
        nav.navbar.navbar-default{
            height: 10%;
            margin-top: -1px;
            width: 100%;
        }
        nav.navbar.navbar-default a{
            color: black;
        }
        .mainlink{
            font-size: 12px;
            font-weight: bold;
        }
        .active{
            border: 0.5px solid black;
            min-width: 150px;

            text-align: center;
        }

    </style>
    </head>

    <body>
        <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="https://laravel.com/">Laravel</a>


                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a class="mainlink" href="/">Home</a></li>
                    <li class="active"><a class="mainlink" href="http://brianwardwell.com/">BrianWardwell.com</a></li>
                    <li class="active"><a class="mainlink" href="http://musicbytes.us">MusicBytes</a></li>
                    <li class="active"><a class="mainlink" href="https://github.com/">GitHub</a></li>
                    <li class="active"><a class="mainlink" href="http://stackoverflow.com/users/7168765/nintensified?tab=profile">Stack Overflow</a></li>
                    <li class="active"><a class="mainlink" href="http://www.csharpforums.net/">C# Developer Forums</a></li>
                </ul>
            </div>
        </nav>    


                </div>
        </nav>
    </div>
        @yield('content')
    </body>
</html>


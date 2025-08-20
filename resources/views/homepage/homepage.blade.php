<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FTMS - Homepage</title>
    <link rel="icon" type="image/avif" href="{{ asset('images/icon.avif') }}">
=======
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <!-- Header Section -->
    <div class = "section section-1">
        <header class = "header-1">
            <!-- Left header side container -->
            <div id = "header_left_container">
                <div>
                    <button>MODPACKS</button>
                </div>
                <div class = "right-links">
                    <button>HOME</button>
                    <button>NEWS</button>
                </div>
                <div class = "right-links">
                    <h2>HOME</h2>
                    <h2>NEWS</h2>
                </div>
            </div>
        
            <!-- Center header container -->
            <div id = "header_center_container">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo">
                <!-- <button>LOGO HERE</button> -->
            </div>


            <!-- Right header side container -->
            <div id = "header_right_container">
                <div class = "left-links">
                    <button>WIKI</button>
                    <button>ABOUT</button>
                </div>
                <div class = "right-links">
                    <h2>EYEBALL</h2>
                    <h2>LANGUAGE</h2>
                </div>
            </div>
        </header>
        <!-- Upper Part Container -->
        <div class="container upper-part">
            <h2>Upper Part</h2>
            <p>This is the upper part of the homepage. Slogan and/or main background goes here with two buttons</p>
        </div>
    </div>

    <div class = "section section-2">
        <!-- Middle Part Container -->
        <div class="container middle-part">
            <div class = "container middle-left">
                <h1>HEWEWAEAWEWA</h1>
            </div>

            <div class = "container middle-right">
                <h1>AWWAUDAWDWADAW</h1>
                <h1>AWWAUDAWDWADAW</h1>
            </div>
        </div>

        <!-- Footer Section -->
        <footer>
            <h1>FOOTER</h1>
        </footer>
    </div>
</body>
</html>

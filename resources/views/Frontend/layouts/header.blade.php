<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Add a style for the transparent class */
        .transparent {
            background-color: rgba(0, 123, 255, 0.7); /* You can adjust the alpha value for transparency */
        }
    </style>
</head>
<body>
    <!-- Add an id "navbar" to the nav element -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-primary " data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <script>
        /* Add JavaScript to add the 'transparent' class when scrolling */
        window.onscroll = function() {
            var navbar = document.getElementById("navbar");
            var scrollTop = window.pageYOffset;

            /* Set the opacity of the navbar based on the scroll position */
            if (scrollTop > 50) {
                navbar.classList.add("transparent");
            } else {
                navbar.classList.remove("transparent");
            }
        };
    </script>
</body>
</html>

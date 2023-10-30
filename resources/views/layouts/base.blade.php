<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with FoodHut landing page.">
        <meta name="author" content="Devcrud">
        <title>Crunchy Truck | SRC </title>

        <!-- font icons -->
        <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

        <link rel="stylesheet" href="assets/vendors/animate/animate.css">

        <!-- Bootstrap + FoodHut main styles -->
        <link rel="stylesheet" href="assets/css/foodhut.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.22/dist/tailwind.min.css"
            integrity="sha384-8bNRUZ6H5G0fmwunUNwi43BhunSpvYfTkxfTI8fVfOJE2f+99Q77fAFd9q57kYD2" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('styles')


    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

        <!-- Navbar -->

        <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top bg-white-250 " data-spy="affix"
            data-offset-top="10">
           
                <a class="navbar-brand m-auto" href="#">
                    <img src="assets/imgs/logo1.png" class="brand-img" alt="">
                    <span class="brand-txt text-yellow-700 font-paint-cans">Crunchy Truck</span>
                </a>
              
            </div>
        </nav>

        {{$slot}}

        </section>
        <!-- end of page footer -->

        <!-- core  -->
        <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

        <!-- bootstrap affix -->
        <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

        <!-- wow.js -->
        <script src="assets/vendors/wow/wow.js"></script>

        <!-- google maps -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap">
        </script>

        <!-- FoodHut js -->
        <script src="assets/js/foodhut.js"></script>
        @livewireScripts
        @stack('scripts')

    </body>

    </html>

</div>
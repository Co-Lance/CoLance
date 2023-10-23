<!DOCTYPE html>
<html>
<head>
        <title>Co-lance</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Co-lance</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contracts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

<div class="container">
        @yield('content')
</div>

<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">About Us</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                    voluptatem veniam, est atque cumque eum delectus sint!
                </p>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-dark">Our Story</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Our Team</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Our Partners</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Our Services</a>
                    </li>
                </ul>



            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Contact</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-dark">Email: info@co-lance.com</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Phone: +1 (123) 456-7890</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Co-lance
    </div>
</footer>

</body>
</html>

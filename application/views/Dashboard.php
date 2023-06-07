<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rainbow Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link href="<?=base_url()?>/assets/css/style.css" rel="stylesheet">

    <link href="images/favicon.ico" rel="icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="d-flex flex-column p-3" style="max-width: 900px; text-align:center; transform: translate(34%, 50%)">
        <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4>
        <h1 class="text-white text-uppercase mb-md-4">Highly Professional Staff</h1>
        <a href='<?= base_url() ?>login' class="btn btn-primary py-md-3 px-md-5 mt-2">Let's Wash</a>
    </div>

    <style>
    body {
        background-image: url('<?=base_url()?>assets/images/photoback.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong" style="bottom: 210px;">
        <div class="container-fluid">
            <a class="text-dark navbar-brand" href="#">
                <img src="<?= base_url()?>assets/images/logo.jpg" alt="Logo" width="70" height="24"
                    class="d-inline-block align-text-top">
                Rainbow Laundry
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="text-dark nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-dark nav-link" href='<?= base_url() ?>Layanan'>Layanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid pt-5 pb-3">
        <div class="container" style="padding: 50px 30px 0px 0px">
            <h6 class="text-white text-uppercase text-center font-weight-medium mb-3">Our Services</h6>
            <h1 class="text-white text-uppercase text-center mb-3">What We Offer</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light rounded-circle mb-2 px-4"
                        style="height: 270px; width: 270px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Dry Cleaning</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light rounded-circle mb-4 px-4"
                        style="height: 270px; width: 270px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fas fa-3x fa-soap text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Wash & Laundry</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light rounded-circle mb-4 px-4"
                        style="height: 270px; width: 270px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-burn text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Curtain Laundry</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light rounded-circle mb-4 px-4"
                        style="height: 270px; width: 270px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-tshirt text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Suits Cleaning</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container" style="padding: 90px 30px 0px 20px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0"
                    style="height: 100px;">
                    <div class="d-inline-flex">
                        <i class="fa fa-2x fa-map-marker-alt text-white m-2 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Our Location</h5>
                            <p class="m-0 text-white">Sukabirus, Kab.Bandung, INA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0"
                    style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-envelope text-white m-2 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Email Us</h5>
                            <p class="m-0 text-white">rainbowlaundry@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0"
                    style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-phone-alt text-white m-2 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Call Us</h5>
                            <p class="m-0 text-white">022-91146346</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <h6 class="text-secondary text-dark text-uppercase text-center font-weight-medium mb-3"
                style="font-weight: bold">
                Working Process</h6>
            <h1 class="display-4 text-light text-center mb-5" style="font-weight: bold;">How We Work</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                            style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0" style="font-weight: bold">1</h2>
                        </div>
                        <h3 class="font-weight-bold text-light m-0 mt-2">Order Place</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                            style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0" style="font-weight: bold">2</h2>
                        </div>
                        <h3 class="font-weight-bold text-light m-0 mt-2">Free Pick Up</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                            style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0" style="font-weight: bold">3</h2>
                        </div>
                        <h3 class="font-weight-bold text-light m-0 mt-2">Dry Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                            style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0" style="font-weight: bold">4</h2>
                        </div>
                        <h3 class="font-weight-bold text-light m-0 mt-2">Free Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>



<footer>
    <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="">
                    <h2 class="text-secondary mb-3"><span class="text-white">RAINBOW</span><span
                            class="text-dark">LAUNDRY</span></h2>
                </a>
                <p>Cepat, bersih, rapi, dan terjangkau untuk segala jenis cucian anda</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Get In Touch</h4>
                <p>Dapatkan Juga Promo Menarik yang Terdapat di Gerai Kami</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Sukabirus, Kab.Bandung, INA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>022-91146346</p>
                <p><i class="fa fa-envelope mr-2"></i>rainbowlaundry@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href='<?= base_url() ?>Layanan'><i
                            class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Newsletter</h4>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" placeholder="Your Email"
                            required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-secondary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">rainbowlaundry</a>. All Rights Reserved.
        </p>
    </div>
</footer>

</html>
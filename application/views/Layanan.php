<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kategori Layanan</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

    <link href="images/favicon.ico" rel="icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>



</head>


<body>
    <style>
    body {
        background-image: url('<?=base_url()?>assets/images/photoback2.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    </style>

    <div class="container-fluid pt-5 pb-3">
        <a href="<?= base_url()?>" class="btn btn-info">back</a>
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Services</h6>
            <h1 class="display-4 text-center mb-5">What We Offer</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                        style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold mb-3">Dry Cleaning</h4>
                        <button onclick="openWhatsAppDry()" target="_blank" type="button"
                            class="btn btn-primary">Pilih</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                        style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fas fa-3x fa-soap text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold mb-3">Wash & Laundry</h4>
                        <button onclick="openWhatsAppWash()" target="_blank" type="button"
                            class="btn btn-primary">Pilih</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                        style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-burn text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold mb-3">Curtain Laundry</h4>
                        <button onclick="openWhatsAppCurtain()" target="_blank" type="button"
                            class="btn btn-primary">Pilih</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                        style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-mask text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold mb-3">Suits Cleaning</h4>
                        <button onclick="openWhatsAppSuits()" target="_blank" type="button"
                            class="btn btn-primary">Pilih</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                        style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-suitcase text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold mb-3">Bag Cleaning</h4>
                        <button onclick="openWhatsAppBag()" target="_blank" type="button"
                            class="btn btn-primary">Pilih</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                        style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fas fa-3x fa-tshirt text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold mb-3">Clothes Cleaning</h4>
                        <button onclick="openWhatsAppClothes()" target="_blank" type="button"
                            class="btn btn-primary">Pilih</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                        style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-wallet text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold mb-3">Wearable Laundry</h4>
                        <button onclick="openWhatsAppWearable()" target="_blank" type="button"
                            class="btn btn-primary">Pilih</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                        style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-socks text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold mb-3">Shoes Cleaning</h4>
                        <button onclick="openWhatsAppShoes()" target="_blank" type="button"
                            class="btn btn-primary">Pilih</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Testimonial</h6>
            <h1 class="display-4 text-center mb-5">Our Clients Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="assets/images/p1.jpeg"
                        style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kawai Ruka</h5>
                        <p class="text-muted font-italic">Idol</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita
                            lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="assets/images/p2.jpeg"
                        style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Enami Asa</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita
                            lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="assets/images/p3.jpeg"
                        style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Pharita</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita
                            lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="assets/images/p4.jpeg"
                        style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Chiquita</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita
                            lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="assets/images/p5.jpeg"
                        style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Jung Ahyeon</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita
                            lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="assets/images/p6.jpeg"
                        style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Lee Dain</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita
                            lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="assets/images/p7.jpeg"
                        style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Shin Haram</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita
                            lorem. Dolor ipsum clita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function openWhatsAppDry() {
        var phoneNumber = "6281370998204";
        var message = "Halo, saya ingin laundry cuci kering untuk baju saya!";
        var url = "https://wa.me/" + 6281370998204 + "?text=" + encodeURIComponent(message); //
        window.open(url);
    }
    </script>

    <script>
    function openWhatsAppWash() {
        var phoneNumber = "6281370998204";
        var message = "Halo, saya ingin laundry cuci basah untuk baju saya!";
        var url = "https://wa.me/" + 6281370998204 + "?text=" + encodeURIComponent(message); //
        window.open(url);
    }
    </script>

    <script>
    function openWhatsAppCurtain() {
        var phoneNumber = "6281370998204";
        var message = "Halo, saya ingin laundry cuci gorden untuk kelambu saya!";
        var url = "https://wa.me/" + 6281370998204 + "?text=" + encodeURIComponent(message); //
        window.open(url);
    }
    </script>

    <script>
    function openWhatsAppSuits() {
        var phoneNumber = "6281370998204";
        var message = "Halo, saya ingin laundry kemeja dan setelan saya!";
        var url = "https://wa.me/" + 6281370998204 + "?text=" + encodeURIComponent(message); //
        window.open(url);
    }
    </script>

    <script>
    function openWhatsAppBag() {
        var phoneNumber = "6281370998204";
        var message = "Halo, saya ingin laundry tas/koper saya!";
        var url = "https://wa.me/" + 6281370998204 + "?text=" + encodeURIComponent(message); //
        window.open(url);
    }
    </script>

    <script>
    function openWhatsAppClothes() {
        var phoneNumber = "6281370998204";
        var message = "Halo, saya ingin laundry baju dan kaos yang berbahan katun!";
        var url = "https://wa.me/" + 6281370998204 + "?text=" + encodeURIComponent(message); //
        window.open(url);
    }
    </script>

    <script>
    function openWhatsAppWearable() {
        var phoneNumber = "6281370998204";
        var message = "Halo, saya ingin laundry dompet/bahan kulit yang perlu penanganan khusus!";
        var url = "https://wa.me/" + 6281370998204 + "?text=" + encodeURIComponent(message); //
        window.open(url);
    }
    </script>

    <script>
    function openWhatsAppShoes() {
        var phoneNumber = "6281370998204";
        var message = "Halo, saya ingin laundry sepatu yang perlu penanganan khusus!";
        var url = "https://wa.me/" + 6281370998204 + "?text=" + encodeURIComponent(message); //
        window.open(url);
    }
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
                    <a class="text-white mb-2" href="<?= base_url()?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Voting | {{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="/vendor/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendor/aos/css/aos.css">
    <link rel="stylesheet" href="/css/style.min.css">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <div class="sidebar-brand-icon">
                        <img src="/img/voting.png" width="50">
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="mdi mdi-menu navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                            <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                                <div class="navbar-collapse-logo">
                                    <img src="/img/Group2.svg" alt="">
                                </div>
                                <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#header-section">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#digital-marketing-section">Explain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#feedback-section">Candidates</a>
                            </li>

                            @auth
                            <li class="dropdown btn-contact-us">
                                <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->nama_pengguna }}
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit"
                                                onclick="return confirm('Apakah Anda Yakin ingin logout?')"
                                                class="dropdown-item">Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                                <form action="/login" method="get">
                                    <button type="submit" class="btn btn-info">Login</button>
                                </form>
                            </li>
                            @endauth

                        </ul>
                    </div>
                </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold">E-Voting Website</h1>
            <h6 class="font-weight-normal text-muted pb-3">Simple website for make it easy to choose candidate for
                online</h6>
            <div>
                <a href="/login" class="btn btn-opacity-light mr-1">Get started</a>
                <button class="btn btn-opacity-success ml-1">Learn more</button>
            </div>
            <img src="/img/Group171.svg" alt="" class="img-fluid">
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <section class="digital-marketing-service" id="digital-marketing-section">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                        <h3 class="m-0">Memilih kandidat<br>Tanpa perlu pusing!</h3>
                        <div class="col-lg-7 col-xl-6 p-0">
                            <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce
                                egeabus consectetuer turpis, suspendisse.</p>
                            <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                Fusce egeabus consectetuer</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                        <img src="/img/Group1.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                        <img src="/img/Group2.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                        <h3 class="m-0">Sistem E-Voting<br>Datang sebagai solusi.</h3>
                        <div class="col-lg-9 col-xl-8 p-0">
                            <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Beatae natus fugiat veniam voluptate ipsam doloremque illo repellat nihil aspernatur
                                vel!</p>
                            <p class="pb-2 font-weight-medium text-muted">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Veritatis, vitae?</p>
                        </div>
                        <button class="btn btn-info">Read more</button>
                    </div>
                </div>
            </section>
            <section class="customer-feedback" id="feedback-section">
                <div class="row">
                    <div class="col-12 text-center pb-5">
                        <h2>Kandidat</h2>
                        <h6 class="section-subtitle text-muted m-0">Beberapa kandidat yang bisa kalian pilih
                        </h6>
                    </div>
                    <div class="owl-carousel owl-theme grid-margin">

                        @foreach ($calons as $calon)
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">

                                    @if ($calon->foto)
                                    <img src="{{ asset('storage/' . $calon->foto) }}" width="89" height="89" alt=""
                                        class="img-customer">
                                    @else
                                    <img src="/img/kandidat.jpg" width="89" height="89" alt="" class="img-customer">
                                    @endif

                                    <p class="m-0 py-3 text-muted">{{ $calon->keterangan }}</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">{{ $calon->nama_calon }}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <section class="contact-us" id="contact-section">
                <div class="contact-us-bgimage grid-margin">
                    <div class="pb-4">
                        <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Do you have any suggestion for our website?
                        </h4>
                        <h4 class="pt-1" data-aos="fade-down">Contact us</h4>
                    </div>
                    <div data-aos="fade-up">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="btn btn-rounded btn-outline-danger">Contact us</button>
                    </div>
                </div>
            </section>
            <footer class="border-top">
                <p class="text-center text-muted pt-4">Copyright © 2021<a href="https://github.com/MuhammadAbdiel"
                        class="px-1">Muhammad Abdiel Firjatullah.</a>All rights reserved.</p>

                <p class="text-center text-muted pt-2">Distributed By: <a href="https://www.themewagon.com/"
                        class="px-1" target="_blank">Themewagon</a></p>
            </footer>
            <!-- Modal for Contact - us Button -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" id="Email-1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="Message">Message</label>
                                    <textarea class="form-control" id="Message"
                                        placeholder="Enter your Message"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/vendor/jquery2/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="/vendor/aos/js/aos.js"></script>
    <script src="/js/landingpage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
<!doctype html>
<html lang="en">

<!-- 
https://cdnjs.com/libraries/font-awesome -> link icon
https://fontawesome.com/icons/instagram?f=brands&s=solid -> pilihan icon
https://getwaves.io/ -> buat garis
https://getbootstrap.com/docs/5.3/getting-started/introduction/ -> bootstrap 
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#achievement">Achievement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#biodata">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#contact">Contact</a>
                    </li>

                    <!-- ##Dropdown##
                        <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>-->

                </ul>
            </div>
    </nav>

    <!--foto profile-->
    <section id="home">
        <div class="container">
            <div class="profile">
                <img class="rounded-circle profileImage" src="img/sasuke.jpg" alt="">
                <h2>Dodik Nurwantoro</h2>
                <h4>Teknik Informatika</h4>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,96L34.3,96C68.6,96,137,96,206,122.7C274.3,149,343,203,411,218.7C480,235,549,213,617,176C685.7,139,754,85,823,69.3C891.4,53,960,75,1029,117.3C1097.1,160,1166,224,1234,218.7C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <!--foto profile-->
    <section id="biodata" class="biodata">
        <h1 class="text-center">BIODATA</h1>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aperiam voluptatum dolorum deleniti mollitia fuga, a veniam ut,
                    architecto quos dignissimos molestias id neque fugit, ab repellendus nesciunt illum ipsam accusantium.
                </div>
                <div class="col">
                    <p>Startes Out</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Pendidikan S1 - Teknik Informatika
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">S1 - Teknik Informatika</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Web Development
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Startes Out</p>
                </div>
                <div class="col-sm">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Tempora similique quam omnis fugiat magnam pariatur placeat officiis,
                    recusandae veniam iste reiciendis eveniet. Blanditiis dolorem corporis dolores labore illum voluptatibus fuga.
                </div>
            </div>
        </div>
    </section>

    <section id="achievement" class="achievement">
        <div class="container">
            <h1 class="text-center" style="color: white;">ACHIEVEMENT</h1>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card mx-auto" style="width: 16rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mx-auto" style="width: 16rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mx-auto" style="width: 16rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mx-auto" style="width: 16rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,181.3C384,181,480,171,576,160C672,149,768,139,864,117.3C960,96,1056,64,1152,53.3C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <section id="contact" class="footer">
        <h1 class="text-center">CONTACT</h1>
        <div class="container text-center contact">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <p class="text-center watermark">By Dodik Nurwantoro</p>
    </section>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .jumbotron {
            padding-top: 6rem;
            background-color: #e2edff;
        }

        #projects {
            background-color: #e2edff;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>sulton portfolio</title>

</head>

<body id="home">
    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Sulton Padlil Abbas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Galary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!---->
    <!-- jumbotron -->
    <section class="jumbotron text-center">
        <img src="{{url('img/my.jpg')}}" width="150" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Sulton Padlil Abbas</h1>
        <p class="lead">1901010209 | tugas web service</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,288L40,245.3C80,203,160,117,240,101.3C320,85,400,139,480,154.7C560,171,640,149,720,128C800,107,880,85,960,90.7C1040,96,1120,128,1200,117.3C1280,107,1360,53,1400,26.7L1440,0L1440,320L1400,320C1360,320,1280,320,1200,
    320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p>Saya adalah seorang mahasiswa di kampus bumiora semster 6</p>
                </div>
                <div class="col-md-4">
                    <p>Jurusan saya adalah ilmu komputer dan saat ini saya mempokuskan
                        mengambil rpl dan saat ini sedang mengerjakan tugas membuat portofolio di matakuliah web service
                    </p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e2edff" fill-opacity="1" d="M0,32L40,69.3C80,107,160,181,240,224C320,267,400,277,480,240C560,203,640,117,720,101.3C800,85,880,139,960,160C1040,181,1120,171,1200,160C1280,149,1360,139,1400,133.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,
  320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>

    <section id="projects">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>My Photo</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{url('img/download.jpg')}}" class="card-img-top" alt="project 1">
                            <div class="card-body">
                                <p class="card-text">ini adalah anime kesukaan saya yang bernama diablo , diablo ini adalah keturunan iblis tingkat atas
                                    pada anime tensei shitara data slime.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{url('img/download2.jpg')}}" c class="card-img-top" alt="project 2">
                            <div class="card-body">
                                <p class="card-text">ini adalah gambar logo dari html yang dimana sering kita pakai html ini sebagai dasar dari sebuah website.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{url('img/nb.jpg')}}" class="card-img-top" alt="project 3">
                            <div class="card-body">
                                <p class="card-text">ini adalah salah satu tugas saya yang dimana pada saat itu menggunakan neatbeans untuk membuat suatu aplikasi.

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,32L40,69.3C80,107,160,181,240,224C320,267,400,277,480,240C560,203,640,117,720,101.3C800,85,880,139,960,160C1040,181,1120,171,1200,160C1280,149,1360,139,1400,133.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560
  ,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>



    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1" d="M0,96L40,128C80,160,160,224,240,245.3C320,267,400,245,480,245.3C560,245,640,267,720,266.7C800,267,880,245,960,213.3C1040,181,1120,139,1200,144C1280,149,1360,203,1400,229.3L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,
      320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <footer class="bg-primary text-white text-center p-3">
        <p>Created with <i class="bi bi-heart"></i> by <a href="#" class="text-white fw-bold">Sulton Padlil Abbas</a></p>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livelihood Official Website</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    


</head>
<body>

    <?php include "koneksi.php";?>

    <header>
        <a href="#" class="logo">ERIGO</a>
        <ul>
            <li><a href="index.php#header">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="produk.php">Product</a></li>
            <li><a href="index.php#contact">Contact</a></li>
        </ul>
    </header>

    <section class="hero" id="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="main-judul-wrap">
                    <h1 class="main-judul">ERIGO ONLINE STORE</h1>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="judul">
                        <div class="line"></div>
                        <h3 class="text">ABOUT</h3>
                    </div>
                    <div class="deskripsi">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere earum numquam neque debitis sapiente omnis suscipit esse, delectus inventore pariatur. Ducimus ratione quisquam unde, dolor, impedit, modi minima aspernatur corporis architecto doloremque rem itaque eligendi! Blanditiis praesentium laudantium porro vero assumenda nemo quibusdam nisi recusandae et corrupti eligendi soluta repudiandae voluptate earum corporis omnis amet consequuntur molestiae, temporibus, quod asperiores quasi vel? Nobis tempore nesciunt quos dolore consectetur maiores molestiae nam officiis sapiente qui fugit excepturi inventore ipsum, at nihil ducimus sequi. Assumenda, soluta dolor rerum veniam, vel qui doloribus expedita sunt voluptas iste suscipit itaque ullam quo, alias velit.</p>
                        <p class="mt-2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit assumenda officia incidunt, consectetur necessitatibus fugiat expedita error veniam mollitia ea excepturi sit aut at pariatur dolorem temporibus illo. Veritatis, enim magni alias culpa, nisi amet voluptates ipsa exercitationem dicta obcaecati iure delectus, odio magnam cumque quasi optio. Ea, cumque odit!
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">SOME LOGO</text></svg>
                </div>
            </div>
        </div>
    </section>

    <section class="product" id="product">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="judul">
                        <div class="line"></div>
                        <h3 class="text">PRODUCT</h3>
                    </div>
                </div>
            </div>
            <div class="row row-wrap d-flex justify-content-between">
                <div class="col-12">
                    <div class="item-wrap">
                        <a href="produk.php#sweater">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">T-SHIRT</text></svg>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="item-wrap">
                        <a href="produk.php#sweater">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">SWEATER</text></svg>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="item-wrap">
                        <a href="produk.php#jaket">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">JAKET</text></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-3">
                    <a href="produk.php">
                        <h6>
                            View More &rarr;
                        </h6>
                    </a>
                </div>
            </div>
        </div>
    </section> 

    <section class="contact" id="contact">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-3 text-center subscribe-wrap">
                    <h3>SUBSCRIBE</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" Required>
                            <button class="btn btn-outline-secondary" type="submit" name="update" id="button-addon2">Subscribe</button>
                        </div>
                    </form>
                    <div class="subscribe-deskripsi mt-4 text-center">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae exercitationem itaque temporibus quas minima cum doloremque, sed illo neque suscipit vitae iure velit pariatur, omnis nesciunt nemo, corporis eveniet laborum!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer" id="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-1">
                    <div class="item-wrap">
                        <a href="#">
                            <img src="img/sosmed/instagram.svg" alt="instagram">
                        </a>
                    </div>
                </div>
                <div class="col-1">
                    <div class="item-wrap">
                        <a href="#">
                            <img src="img/sosmed/whatsapp.svg" alt="whatsapp">
                        </a>
                    </div>
                </div>
                <div class="col-1">
                    <div class="item-wrap">
                        <a href="#">
                            <img src="img/sosmed/mail.svg" alt="gmail">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <h6 class="text-light text-center">Lana Saiful Aqil Property</h6>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
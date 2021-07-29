<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/produk.css">
</head>
<body>
    <?php include "koneksi.php";?>

    <header>
        <a href="#" class="logo">ERIGO</a>
        <ul>
            <li><a href="index.php#header">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="produk.php">Product</a></li>
            <li><a href="produk.php#contact">Contact</a></li>
        </ul>
    </header>

    <section class="hero" id="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="main-judul-wrap">
                    <h1 class="main-judul">OUR PRODUCT</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="#kaos">
                        <div class="category">T-SHIRT</div>
                    </a>
                </div>
                <div class="col-2">
                    <a href="#sweater">
                        <div class="category">SWEATER</div>
                    </a>
                </div>
                <div class="col-2">
                    <a href="#jaket">
                        <div class="category">JAKET</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="kaos" id="kaos">
        <div class="container">
            <div class="row mb-5">
                <div class="col d-flex">
                    <div class="line"></div>
                    <div class="subjudul">T-SHIRT</div>
                </div>
            </div>
            <div class="row row-wrap d-flex justify-content-between">
                <?php
                    $tabel_produk1 = mysqli_query($conn, "select * from produk");
                    
                    foreach ($tabel_produk1 as $value) {
                        if ($value['tipe_prod'] == "kaos"){
                            echo "
                            <div class=\"col-4\">
                            <div class=\"item-wrap\">
                                <svg class=\"bd-placeholder-img bd-placeholder-img-lg img-fluid\" width=\"100%\" height=\"200\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Responsive image\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Placeholder Image</text></svg>

                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"nama mt-3\">" . $value['nama_prod'] ."</div>
                                        <div class=\"tipe mt-3\">" . $value['tipe_prod'] . "</div>
                                    </div>
                                    <div class=\"col-4\">
                                        <div class=\"harga mt-3 display-6\">" . $value['harga_prod'] ."&dollar;</div>
                                    </div>
                                </div>
                                
                                <div class=\"deskripsi mt-3\">" . $value['deskripsi'] . "</div>

                                
                                <a href=\"" . $value['link_shop'] . "\" > <span class=\"badge bg-success mt-3 pt-3 pb-3 ps-5 pe-5\">BELI</span></a>
                            </div>
                            </div>
                            ";
                        }
                    }
                ?>
                
            </div>
        </div>
    </section>

    <section class="sweater" id="sweater">
        <div class="container">
            <div class="row mb-5">
                <div class="col d-flex">
                    <div class="line"></div>
                    <div class="subjudul">SWEATER</div>
                </div>
            </div>
            <div class="row row-wrap d-flex justify-content-between">
                <?php
                    $tabel_produk2 = mysqli_query($conn, "select * from produk");
                    
                    foreach ($tabel_produk2 as $value) {
                        if ($value['tipe_prod'] == "sweater"){
                            echo "
                            <div class=\"col-4\">
                            <div class=\"item-wrap\">
                                <svg class=\"bd-placeholder-img bd-placeholder-img-lg img-fluid\" width=\"100%\" height=\"200\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Responsive image\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Placeholder Image</text></svg>

                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"nama mt-3\">" . $value['nama_prod'] ."</div>
                                        <div class=\"tipe mt-3\">" . $value['tipe_prod'] . "</div>
                                    </div>
                                    <div class=\"col-4\">
                                        <div class=\"harga mt-3 display-6\">" . $value['harga_prod'] ."&dollar;</div>
                                    </div>
                                </div>
                                
                                <div class=\"deskripsi mt-3\">" . $value['deskripsi'] . "</div>

                                <a href=\"" . $value['link_shop'] . "\" > <span class=\"badge bg-success mt-3 pt-3 pb-3 ps-5 pe-5\">BELI</span></a>
                            </div>
                            </div>
                            ";
                        }
                    }
                ?>
                
            </div>
        </div>
    </section>

    <section class="jaket" id="jaket">
        <div class="container">
            <div class="row mb-5">
                <div class="col d-flex">
                    <div class="line"></div>
                    <div class="subjudul">JAKET</div>
                </div>
            </div>
            <div class="row row-wrap d-flex justify-content-between">
                <?php
                    $tabel_produk3 = mysqli_query($conn, "select * from produk");
                    
                    foreach ($tabel_produk3 as $value) {
                        if ($value['tipe_prod'] == "jaket"){
                            echo "
                            <div class=\"col-4\">
                            <div class=\"item-wrap\">
                                <svg class=\"bd-placeholder-img bd-placeholder-img-lg img-fluid\" width=\"100%\" height=\"200\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Responsive image\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Placeholder Image</text></svg>

                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"nama mt-3\">" . $value['nama_prod'] ."</div>
                                        <div class=\"tipe mt-3\">" . $value['tipe_prod'] . "</div>
                                    </div>
                                    <div class=\"col-4\">
                                        <div class=\"harga mt-3 display-6\">" . $value['harga_prod'] ."&dollar;</div>
                                    </div>
                                </div>
                                
                                <div class=\"deskripsi mt-3\">" . $value['deskripsi'] . "</div>

                                <a href=\"" . $value['link_shop'] . "\" > <span class=\"badge bg-success mt-3 pt-3 pb-3 ps-5 pe-5\">BELI</span></a>
                            </div>
                            </div>
                            ";
                        }
                    }
                ?>
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
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe</button>
                    </div>
                    <div class="subscribe-deskripsi mt-4 text-center text-light">
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

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>
</html>
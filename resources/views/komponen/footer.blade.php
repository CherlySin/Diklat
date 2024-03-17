<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        footer {
            background-color: #0E2D45;
        }

        .footer-bar {
            /* margin-left: 70px; */
            width: 100%;
            padding: 70px 30 px 20px;
        }

        .footer-social {
         display: flex;
         justify-content: right
        }

        .footer-social a {
            text-decoration: nona;
            padding: 10px;
            background-color: white;
            margin: 10px;
            border-radius: 50%
        }     
        
        .footer-sosial a i {
            font-size: 2em;
            color: black;
            opacity: 0.9;
        }

        .footer-social a:hover {
            background-color: black;
            transition: 0.5s;
        }

        .footer-social a:hover i{
            color: rgb(255, 255, 255);
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <div class="footer-bar">
        <footer>
            {{-- Bagi tiga bagian --}}
            <div class="footer-content">
                <div class="col-md-2">
                    <h5>POLTEKBANG SURABAYA</h5>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                      Ea explicabo harum voluptate temporibus excepturi at nesciunt 
                      iusto fuga, alias mollitia! Illum aspernatur magnam inventore, 
                      dignissimos deleniti accusantium non in adipisci.
                    </p>
                  </div>
              
                  <div class="col-md-2">
                    <h5>QUICK LINKS</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                  </div>
              
                  <div class="col-md-2">
                    <h5>OUR ADDRESS</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                  </div>
            </div>

            {{-- Bagi dua bagian --}}
            <div class="footer-bottom">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                </a>
                <p class="text-body-secondary">Copyright &copy; 2024, All rights reserved. Designed by Unit IT Politeknik Surabaya</p>
            </div>
            <div class="footer-social">
                <a href="#" style="font-size: 18px; margin-left: 100px;">
                    <i class="bi bi-instagram"></i>
                </a>
        
                <a href="#" style="font-size: 18px; margin-left: 10px;">
                    <i class="bi bi-facebook"></i>
                </a>
        
                <a href="#" style="font-size: 18px; margin-left: 10px;">
                    <i class="bi bi-twitter-x"></i>
                </a>
        
                <a href="#" style="font-size: 18px; margin-left: 10px;">
                    <i class="bi bi-youtube"></i>
                </a>
        
                <a href="#"style="font-size: 18px; margin-left: 10px;">
                    <i class="bi bi-whatsapp"></i>
                </a>
        
                <a href="#"style="font-size: 18px; margin-left: 10px;">
                    <i class="bi bi-tiktok"></i>
                </a>
            </div>
        </footer>
    </div>
</body>
</html>
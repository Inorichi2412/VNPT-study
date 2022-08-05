<?
 include 'config.php';
 include 'login.php';
 include 'register_submit.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./assets/css/main.js"> -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/jquery.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title>Document</title>

    <style type="text/css">
        body {
            background-color: #3498db;
            color: #fff;
        }
        
        .wap-ss-img {
            text-align: center;
            width: 100%;
        }
        
        .wap-ss-img img {
            height: 250px;
            margin: 0 auto;
        }
        
        .textleft {
            text-align: center;
        }
        
        .slick-prev:before,
        .slick-next:before {
            font-family: fontawesome;
            font-size: 30px;
            color: #fff;
        }
        
        .slick-prev:before {
            content: '\f100';
        }
        
        .slick-next:before {
            content: '\f101';
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        
               
                <div class="header__navbar-form">
                    <button href="" class="header__navbar-login">
                        LOGIN
                    </button>
                    <button href="" class="header__navbar-sign">
                        SIGN UP
                    </button>

                </div>
                

            </div>
        </div>

        <!-- modal .............................................-->
        <div class="modal__login hide">
           
                <form action="login.php" method="POST">
                    <img src="./assets/img/avata.jpg" alt="">
                    <div class="modal__container">
                        
                        <h2>Username</h2>
                        <input type="text" name="username" required>
                        <h2>Password</h2>
                        <input type="password" name="password" required>
                        <button type="submit" name="submit_login">
                            Login
                        </button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                        <div class="modal__can">
                            <a class="modal__can-button">Cancel</a>
                            <a href="">
                                Forgot
                                <p>Password</p>
                            </a>
                            
                        </div>
                        <i class="modal__icon-close fa-solid fa-xmark"></i>

                    </div>
                </form>

            </div>

        </div>

        <div class="modal__sign hide">
            <div class="modal__inner">
                <form action="register_submit.php" method="POST">
                    <h1>SIGN UP</h1>
                    <h2>USER</h2>
                    <input type="text" name="username" required>
                    <h2>Password</h2>
                    <input type="password" name="password" required>
                    <h2>Repeat Password</h2>
                    <input type="password" name="repassword" required>
                    <label>
                        <input type="checkbox" checked="checked" name="checked">Remember me
                    </label>
                    <div class="modal__sign-footer">
                        <a href="">Cancel</a>
                        <button type="submit" name="submit">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- modal ........................................-->
        
    </header>

    

        </div>
    </div>
    <script src="./main.js "></script>
    <script type="text/javascript " src="./assets/js/bootstrap.min.js "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js " integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js " integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script type="text/javascript ">
        $('.filtering').slick({
            slidesToShow: 4,
            slidesToScroll: 4
        });

        var filtered = false;

        $('.js-filter').on('click', function() {
            if (filtered === false) {
                $('.filtering').slick('slickFilter', ':even');
                $(this).text('Unfilter Slides');
                filtered = true;
            } else {
                $('.filtering').slick('slickUnfilter');
                $(this).text('Filter Slides');
                filtered = false;
            }
        });
    </script>
</body>

</html>
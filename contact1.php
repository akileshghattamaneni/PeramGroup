<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M245FL5L');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="images/fevicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>
        PERAM GROUP
    </title>

</head>

<body>
    <!-- <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M245FL5L" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include 'inc/header.php';?>

    <div class="breadcrumb-banner" style="background-image: url('images/ak13.png')">
        <div class="container">
            <h1>Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <h4 class="mb-4" style="color:#F0691D; font-size: 18px;
    font-weight: 600;">Visit Us in Person or Call Us for More Info</h4>
                        <div class="address mt-2">
                            <i class="icon-room"></i>
                            <h4 class="mb-2">Location:</h4>
                            <p><b>Corporate and Head Office:</b> Manjeera Majestic Commercial, KPHB Colony, Hyderabad -
                                500085</p>
                            <p><b>Marketing and Sales Office:</b> Trendz Orbit, 5th Floor, Plot No.127, Lumbini Enclave,
                                Gachibowli, Hyderabad - 500032</p>
                        </div>
                        <div class="email mt-4">
                            <i class="icon-envelope"></i>
                            <h4 class="mb-2">Email:</h4>
                            <p><a href="mailto:info@peramdundigalplots.com">info@peramdundigalplots.com</a>
                            </p>
                        </div>
                        <div class="phone mt-4">
                            <i class="icon-phone"></i>
                            <h4 class="mb-2">Call:</h4>
                            <p><a href="tel:+914049986606">+91 40 4998 6606</a></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <form action="#">
              <div class="row">
                <div class="col-6 mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Your Name"
                  />
                </div>
                <div class="col-6 mb-3">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Your Email"
                  />
                </div>
                <div class="col-12 mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Subject"
                  />
                </div>
                <div class="col-12 mb-3">
                  <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="7"
                    class="form-control"
                    placeholder="Message"
                  ></textarea>
                </div>

                <div class="col-12">
                  <input
                    type="submit"
                    value="Send Message"
                    class="btn btn-primary"
                  />
                </div>
              </div>
            </form>
          </div> -->

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="mb-4" style="color:#F0691D;">Dreaming of Owning Land? We Make Buying Simple!</h4>
                    <form action="submit_form.php" method="post">
                        <div class="row">
                            <div class="col-6 mb-3">

                                <input type="text" class="form-control" placeholder="Your Name" name="name" id="name" />
                            </div>
                            <div class="col-6 mb-3">

                                <input type="tel" class="form-control" placeholder="Your Mobile Number" name="phone"
                                    pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number"
                                    required="required" id="phone" />
                            </div>
                            <div class="col-12 mb-3">

                                <input type="email" class="form-control" placeholder="Your Email" name="email"
                                    id="email" />
                            </div>
                            <div class="col-12 mb-3">

                                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"
                                    id="message"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Send Message" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <section class=col-md-12;>
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.5842070991675!2d78.37324872546947!3d17.43173063477057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb932992e7bb81%3A0x25fb3a585d7dfa72!2sTRENDZ%20TWILIGHT!5e0!3m2!1sen!2sin!4v1720603853175!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- /.untree_co-section -->

    <a href="https://api.whatsapp.com/send/?phone=919705277773&text=Hi Sri Sai Sarveshwara Developers" class="float"
        target="_blank">
        <img src="images/whatsapp2.png" alt="" width="40px;" style="margin-top:9px" ;>
    </a>

    <a href="tel:9705277773" class="float1" target="_blank">
        <img src="images/phone.png" alt="" width="40px;" style="margin-top:9px" ;>
    </a>

    <?php include 'inc/footer.php';?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
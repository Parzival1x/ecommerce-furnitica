<div class="floatingbtn" style="left: -90%; bottom: -75%">
    <input type="checkbox" href="#" class="floatingbtn-open" name="floatingbtn-open" id="floatingbtn-open">
    <label class="floatingbtn-open-button" for="floatingbtn-open">
        <span class="lines line-1"></span>
        <span class="lines line-2"></span>
        <span class="lines line-3"></span>
    </label>

    <a href="#" id="startVoice" onclick="startArtyom()" class="floatingbtn-item item-1"><i class="fas fa-microphone"></i></a>
    <div class="floatingbtn-item item-2 " id="load-voices" style=" border-radius: 10px; overflow: hidden; width:500px">
        <span id="output" style="color:black"></span> <span id="time" style="color:green"></span>
    </div>
    <a href="#" onclick="stopArtyom()" class="floatingbtn-item item-3"><i class="fas fa-microphone-slash"></i></a>
</div>

<!-- footer -->
<footer class="footer-one">
    <div class="inner-footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12">
                        <div class="block">
                            <div class="block-content">
                                <p class="logo-footer">
                                    <img src="img/home/logo.png" alt="img">
                                </p>
                                <p class="content-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do
                                    eiusmod tempor incidi
                                    dunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                <span>Duis aute irure dolor in reprehenderit in voluptate velit exercitation
                                    ullamco</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-12">
                        <div class="block">
                            <div class="block-content">
                                <div class="title-block">
                                    WHO WE ARE
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Reasons to shop</a>
                                    </li>
                                    <li>
                                        <a href="#">What our customers say</a>
                                    </li>
                                    <li>
                                        <a href="#">Meet the teaml</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact our buyers</a>
                                    </li>
                                    <li>
                                        <a href="#">Cookies & privacy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="block">
                            <div class="block-content">
                                <div class="title-block">
                                    CUSTOMER SERVICES
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Help and advice</a>
                                    </li>
                                    <li>
                                        <a href="#">Delivery</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms and conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Refund Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="block">
                            <div class="block-content">
                                <div class="title-block">
                                    CONTACT US
                                </div>
                                <div class="contact-content">
                                    <div class="data align-self-stretch d-flex">
                                        <i class="fa fa-home float-left m-bottom" aria-hidden="true"></i>
                                        <div class="content-data">
                                            <b class="mr-2">Showroom:</b>123 Suspendis matti, Visaosang Building
                                        </div>
                                    </div>
                                    <div class="data d-flex align-self-stretch">
                                        <i class="fa fa-clock-o float-left" aria-hidden="true"></i>
                                        <div class="content-data">
                                            <b class="mr-2">Opening Hours: </b>08.00AM - 19.00
                                        </div>
                                    </div>
                                    <div class="support d-dflex align-self-stretch">
                                        <div class="data mail-support">
                                            <i class="fa fa-envelope float-left" aria-hidden="true"></i>
                                            <div>support@domain.com</div>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-self-stretch phone-support">
                                        <div class="title-icon">
                                            <i class="fa fa-phone float-left" aria-hidden="true"></i>
                                        </div>
                                        <div>+0012-345-67890</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tiva-copyright">
        <div class="container">
            <div class="row">
                <div
                    class="col-md-6 col-xs-12 align-items-center justify-content-md-start justify-content-sm-center justify-content-xs-center">
                    <span>
                        <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                    </span>
                </div>
                <div
                    class="col-md-6 col-xs-12 align-items-center justify-content-md-end d-flex justify-content-xs-center">
                    <img src="img/home/payment.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- back top top -->
<div class="back-to-top">
    <a href="#">
        <i class="fa fa-long-arrow-up"></i>
    </a>
</div>
<!-- menu mobie left -->
<div class="mobile-top-menu d-md-none">
    <button type="button" class="close" aria-label="Close">
        <i class="zmdi zmdi-close"></i>
    </button>
    <div class="tiva-verticalmenu block" data-count_showmore="17">
        <div class="box-content block-content">
            <div class="verticalmenu" role="navigation">
                <ul class="menu level1">
                    <?php foreach ($cat_arr as $list) { ?>
                    <li class="item">
                        <a href="category.php?id=<?php echo $list['id'] ?>" class="hasicon" title="SHELF">
                            <img src="img/home/shelf.png" alt="img"><?php echo $list['categories'] ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- menu mobie right -->
<div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up active d-md-none">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Menu</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content">
            <nav>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div id="megamenu" class="clearfix">
                    <ul class="menu level1">
                        <li class="item home-page has-sub">
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#home1"
                                aria-expanded="true" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a href="index-2.html" title="Home">
                                <i class="fa fa-home" aria-hidden="true"></i>Home</a>
                            <div class="subCategory collapse" id="home1" aria-expanded="true" role="status">
                                <ul>
                                    <li class="item">
                                        <a href="index-2.html" title="Home Page 1">Home Page 1</a>
                                    </li>
                                    <li class="item">
                                        <a href="home2.html" title="Home Page 2">Home Page 2</a>
                                    </li>
                                    <li class="item">
                                        <a href="home3.html" title="Home Page 3">Home Page 3</a>
                                    </li>
                                    <li class="item">
                                        <a href="home4.html" title="Home Page 4">Home Page 4</a>
                                    </li>
                                    <li class="item">
                                        <a href="home5.html" title="Home Page 5">Home Page 5</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item has-sub">
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#blog"
                                aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a href="#" title="Blog">
                                <i class="fa fa-address-book" aria-hidden="true"></i>Blog</a>

                            <div class="subCategory collapse" id="blog" aria-expanded="true" role="status">
                                <ul>
                                    <li class="item">
                                        <a href="blog-list-sidebar-left.html" title="Blog List (Sidebar Left)">Blog List
                                            (Sidebar Left)</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-list-sidebar-left2.html" title="Blog List (Sidebar Left) 2">Blog
                                            List (Sidebar Left) 2</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-list-sidebar-right.html" title="Category Blog (Right column)">Blog
                                            List (Sidebar Right)</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-list-no-sidebar.html" title="Blog List (No Sidebar)">Blog List (No
                                            Sidebar)</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-grid-no-sidebar.html" title="Blog Grid (No Sidebar)">Blog Grid (No
                                            Sidebar)</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-detail.html" title="Blog Detail">Blog Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item group has-sub">
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#page"
                                aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a href="#" title="Page">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>page</a>
                            <div class="subCategory collapse" id="page" aria-expanded="true" role="status">
                                <ul class="group-page">
                                    <li class="item container group">
                                        <div>
                                            <ul>
                                                <li class="item col-md-4 ">
                                                    <span class="menu-title">Category Style</span>
                                                    <div class="menu-content">
                                                        <ul class="col">
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Product Grid
                                                                    (Sidebar Left)</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-right.html">Product Grid
                                                                    (Sidebar Right)</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-list-sidebar-left.html">Product List
                                                                    (Sidebar Left) </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="item col-md-4 html">
                                                    <span class="menu-title">Product Detail Style</span>
                                                    <div class="menu-content">
                                                        <ul>
                                                            <li>
                                                                <a href="product-detail.html">Product Detail (Sidebar
                                                                    Left)</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Product Detail (Sidebar Right)</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="item col-md-4 html">
                                                    <span class="menu-title">Bonus Page</span>
                                                    <div class="menu-content">
                                                        <ul>
                                                            <li>
                                                                <a href="404.html">404 Page</a>
                                                            </li>
                                                            <li>
                                                                <a href="about-us.html">About Us Page</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item has-sub">
                            <a href="contact.html" title="Contact us">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Page Loader -->
<!-- <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div> -->



<!-- Vendor JS -->
<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/popper/popper.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="libs/owl-carousel/owl.carousel.min.js"></script>
<script src="libs/slider-range/js/tmpl.js"></script>
<script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
<script src="libs/slider-range/js/draggable-0.1.js"></script>
<script src="libs/slider-range/js/jquery.slider.js"></script>
<script src="libs/slick-slider/js/slick.min.js"></script>
<script src="js/voice.js"></script>


<!-- Template JS -->
<script src="js/theme.js"></script>
</body>
<?php echo ("<script>var allCat = " . json_encode($cat_arr) . "</script>");
echo ("<script>console.log(allCat);</script>");

echo ("<script>var allProd = " . json_encode($get_product) . "</script>");
echo ("<script>console.log(allProd);</script>")
?>
<script type="text/javascript">
$(document).ready(function() {
    appendData();
    prodData();
    $("#talk-lang").click(function() {
        artyom.say($("#text-content").val());
    });

    $("#select-voice").change(function() {
        var lang = $(this).val();

        artyom.initialize({
            lang: lang
        });
    });

});
document.getElementById("load-voices").addEventListener("click", function() {
    var voices = artyom.getVoices();
    var html = "";

    voices.forEach(function(voice) {
        html += "Voz name : " + voice.name + " con lang : " + voice.lang + "<br>";
    });

    document.getElementById("voices-item").innerHTML = html;
}, false);



// Redirect the recognized text
artyom.redirectRecognizedTextOutput(function(text, isFinal) {
    var span = document.getElementById('output');

    if (isFinal) {
        span.innerHTML = '';
    } else {
        span.innerHTML = text;
    }
});
window.onload = function() {
    var tab = document.getElementById("commands-list");
    var commands = artyom.getAvailableCommands();
    var html = '';

    for (var i = 0; i < commands.length; i++) {
        var command = commands[i];
        html += command.description + " : <span style='color:blue;'>" + command.indexes.toString() + "</span><br>";
    }

    tab.innerHTML = html;

    artyom.initialize({
        lang: "es-ES"
    });

    var vocesitas = [{
            lang: "es-ES",
            description: "Espanol"
        },
        {
            lang: "de-DE",
            description: "Deutsch"
        },
        {
            lang: "pt-PT",
            description: "Portugues"
        },
        {
            lang: "it-IT",
            description: "Italiano"
        }
    ];

    vocesitas.forEach(function(voice) {
        $('#select-voice').append($('<option>', {
            value: voice.lang,
            text: voice.description
        }));
    });
};

function startArtyom() {
    artyom.initialize({
        lang: "en-GB", // More languages are documented in the library
        continuous: true, //if you have https connection, you can activate continuous mode
        debug: true, //Show everything in the console
        listen: true // Start listening when this function is triggered

    });
}

function stopArtyom() {
    artyom.fatality();
}

function appendData() {
    var tempData = new Array();
    var objArray = new Array();


    for (i = 0; i < allCat.length; i++) {
        var param = parseInt(allCat[i].id);
        tempData.push(allCat[i].categories);
        objArray.push({
            name: allCat[i].categories,
            id: allCat[i].id
        });
    }

    artyom.addCommands({
        smart: true,
        indexes: ["open *"],
        action: function openPage(i, wildcard) {
            var searchresults = tempData;
            var allresults = objArray;

            var cat = allresults.find(function(post, index) {
                if (post.name == wildcard) {
                    window.location.href = "category.php?id=" + post.id;
                    return true;
                }
            });
        }
    });

    //artyom.addCommands(voiceArray);
    var commands = artyom.getAvailableCommands();
    console.log("Artyom commands : " + commands);

}

function prodData() {
    var tmpData = new Array();
    var prodArray = Array();
    for (i = 0; i < allProd.length; i++) {
        var param = parseInt(allProd[i].id);
        tmpData.push(allProd[i].name);

        prodArray.push({
            Pname: allProd[i].name,
            Pid: allProd[i].id
        });
    }
    artyom.addCommands({
        smart: true,
        indexes: ["select *"],
        action: function openPage(i, wildcard) {
            var allresultsP = prodArray;
            var prod = allresultsP.find(function(post, index) {
                if (post.Pname == wildcard) {
                    window.location.href = "product_detail.php?id=" + post.Pid;
                    return true;
                }
            });
        }
    });

    var commands = artyom.getAvailableCommands();
    console.log("Artyom commands : " + commands);
}

// Now we add the most important point of the plugin, the commands
// This library is very flexible and now we will see why :
// Every command is a literal object
artyom.addCommands([{
        description: "Artyom can talk too, lets say something if we say hello",
        indexes: ["hello", "hey"],
        action: function(i) {
            // i = the index of the array of indexes option

            if (i == 0) {
                //You say : "hello"
                document.getElementById('time').innerHTML = "Hello ! how can i help you";
            }
        }
    },


    {
        description: "Say roll down to scroll down",
        indexes: ["down"],
        action: function scrolldown() {
            window.scrollBy(0, 1000);
        }
    },
    {
        description: "Say roll up to scroll up",
        indexes: ["up"],
        action: function scrollup() {
            window.scrollBy(0, -1000);
        }
    },
    {
        description: "add item to cart",
        indexes: ["add "],
        action: function addToCartPage() {
            $("#addToCart").click();
        }
    },
    {
        description: "View cart pge",
        indexes: ["Cart"],
        action: function viewCart() {
            window.location.href = "cart.php";
        }
    },
    {
        description: "open login Page",
        indexes: ["Login"],
        action: function OpenLoginPage() {
            window.location.href = "login.php";
        }
    },
    {
        description: "open login Page",
        indexes: ["signup"],
        action: function openSignUpPage() {
            window.location.href = "signup.php";
        }
    },
    {
        description: "open logout Page",
        indexes: ["logout"],
        action: function OpenLogoutPage() {
            window.location.href = "logout.php";
        }
    }
]);
</script>
</html>
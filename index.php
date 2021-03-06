<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" href="assets/images/icon.png" />
  <link rel="stylesheet" href="assets/css/colors.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="assets/js/jquery-3.4.1.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <title>The East Africa Water Week 2020- EAWATERS </title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150271756-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-150271756-1');
  </script>

</head>

<body>
<div style="background:url('./assets/images/cutouttop.png');background-size:100% 80%;background-repeat:no-repeat;height:100px;"/>
  <!--<div class="container-fluid">
    <img src="./assets/images/cutouttop.png" width="100%" />
   </div> -->
</div>
  <div class="shadow-lg"
    style="background-image:linear-gradient(to right,#00000070,#00000070), url(./assets/images/bg2.jpg);background-size: 100% 100%;padding: 0;background-repeat: no-repeat;">
    <nav class="shadow-sm navbar sticky-top navbar-expand-md navbar-dark"
      style="padding: 0;margin: 0;height: 50px;color: #ffffff00">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
          aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="">
          <img src="./assets/images/icon.png" width="100px" height="60px" alt="">
        </a>

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="speakers/">Speakers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pricing/">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="previous/">Past Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link primary_btn" href="contact/">Contact</a>
            </li>
          </ul>
        </div>
      </div>

    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mt-auto col-xs-12 col-md-6 col-lg-6">
          <p class="display-4 text-white" style="font-family: 'Roboto', sans-serif;font-weight: 700;">
            <span style="font-weight: 700;font-size: 30px;">4<sup>th</sup>
            </span> <br>
            East
            Africa <br>
            <span class="primary">Water</span> <span class="secondary">Summit</span></p>
          <hr color="white" width="100%">
          <p class="lead font-bold text-white" style="font-family: 'Roboto', sans-serif;font-weight: 400;">
            21-22 NOVEMBER. 2019 <br> EMARA OLE SERENI HOTEL. NAIROBI, KENYA
          </p>
          <hr color="white">
          <p style="font-family: 'Roboto',sans-serif;font-weight: 700;color: white;" class="h3"><span
              class="primary">2</span> Days <span class="primary">50+</span> Speakers <span class="primary">300+</span>
            Guests </p>
          <div style="display: flex;flex-direction: row;">
            <a class="nav-item primary_btn" href="about/">Know More</a>
            <a class="nav-item secondary_btn" href="contact/">Get In Touch</a>
          </div>
        </div>
        <?php
          require_once('form.php');
         ?>
      </div>
    </div>
  </div>

  <main>
    <div class="d-flex flex-row align-items-center justify-content-center flex-wrap">
      <div class="d-flex flex-column align-items-center justify-content-center" style="padding: 30px;">
        <img src="./assets/images/flags/kenyaflag.png" width="35px" height="35px" />
        <!-- <div class="s_title text-wrap" style="width: 10rem;text-align: center;margin: 10px;"> 
            Ministry of Water, Sanitation and Irrigation
        </div> -->
      </div>
      <div class="d-flex flex-column align-items-center justify-content-center" style="padding: 30px;">
      <img src="./assets/images/flags/ugandaflag.png" width="35px" height="35px" />        
       <!-- <div class="s_title">Ministry of Water and Environment.</div> -->
      </div>
      <div class="d-flex flex-column align-items-center justify-content-center" style="padding: 30px;">
        <img src="./assets/images/flags/tanzaniaflag.png" width="35px" height="35px" />     
       <!-- <div class="s_title">Ministry of Water and Irrigation</div> -->
      </div>
      <div class="d-flex flex-column align-items-center justify-content-center" style="padding: 30px;">
        <img src="./assets/images/flags/rwandaflag.png" width="35px" height="35px" />   
       <!-- <div class="s_title">Ministry of Infrastructure</div> -->
      </div>
      <div class="d-flex flex-column align-items-center justify-content-center" style="padding: 30px;">
        <img src="./assets/images/flags/burundiflag.png" width="35px" height="35px" />
       <!--<div class="s_title text-wrap" style="width: 10rem;text-align: center;margin: 10px;">Ministry of Water, Environment, Irrigation, Land Management and Urban Planning</div>-->
      </div>
      <div class="d-flex flex-column  align-items-center justify-content-center" style="padding: 30px;">
        <img src="./assets/images/flags/ssudanflag.png" width="35px" height="35px" />
        <!-- <div class="s_title">Ministry of Irrigation and Water Resources</div> -->
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
                style="display: flex;justify-content: center;flex-direction: column;align-self: center;align-self: center;background-image: url(./assets/images/polygray.svg);background-size: contain;background-repeat: no-repeat;width: 50px;height: 50px;">
                <i class="fa fa-handshake-o" style="font-size:20px;color:#00b050;text-align: center;"></i>
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
                style="display: flex;justify-content: center;flex-direction: column;align-self: center;align-self: center;background-image: url(./assets/images/polygray.svg);background-size: contain;background-repeat: no-repeat;width: 50px;height: 50px;">
                <i class="fa fa-eye" style="font-size:20px;color:#00b050;text-align: center;"></i>
              </div>
              <div>
                <p class="text-wrap" style="width: 10rem;text-align: center;margin: 10px;">
                  Showcase your Innovations</p>
              </div>

            </div>
            <br>
            <div style="display: flex;flex-direction: column;margin: 10px; border-left: 1px solid #cccc;">
              <h6 style="color: #00b0f0;" class="text-center">Financing</h6>

              <div
                style="display: flex;justify-content: center;flex-direction: column;align-content: center;align-self: center;background-image: url(./assets/images/polygray.svg);background-size: contain;background-repeat: no-repeat;width: 50px;height: 50px;">
                <i class="fa fa-money" style="font-size:20px;color:#00b050;text-align: center;"></i>
              </div>
              <div>
                <p class="text-wrap" style="width: 15rem;text-align: center;margin: 10px;">Insights and Investment
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
              challenge, especially with a rising population and urbanization. Global warming has caused
              the global average temperature to rise 0.85<sup>0</sup>C higher than it was in the late
              19th century causing weather patterns to changing and become more unpredictable by the day.
              The East African countries are signatories of the Kyoto protocol and the Paris agreement, to
              cut down on the generation of greenhouse gases by 143 million tonnes.
              In respect to these agreements and recognition of the key issues, the East Africa Water Summit 2019
              will
              convene to create a forum for the water industry stakeholders to deliberate and arrive at
              specific action points that will influence policy, technology application and investment on
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
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("demo").innerHTML = '<div><span class="day">' + days +
                  " days </span><span class='hours'> " + hours + " hrs </span><span class='minutes'> " +
                  minutes + " mins </span><span class='seconds'>" + seconds + "s </span>" + '</div>';

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
            <h5 class="s_name">Willem Kriek</h5>
            <p class="s_title">African Aqua Solutions</p>
            <p class="s_theme">Climate Change: Challenges facing Water and Sanitation Management</p>
          </div>
          
          <div class="speaker">
            <h5 class="s_name">Daniel Paul</h5>
            <p class="s_title">Kaeser Compressors</p>
            <p class="s_theme">Climate Change Adaptation and Resilience</p>
          </div>
          
          <div class="speaker">
            <h5 class="s_name">Simon Thuo</h5>
            <p class="s_title">Sanitation Expert</p>
            <p class="s_theme">Climate Change: Challenges facing Water and Sanitation Management</p>
          </div>
          
          <div class="speaker">
            <h5 class="s_name">Robin Lloyd</h5>
            <p class="s_title">UNHCR</p>
            <p class="s_theme">Climate Change Adaptation and Resilience</p>
          </div>


          <div class="speaker">
            <h5 class="s_name">Emmanuel Ngui</h5>
            <p class="s_title"></p>
            <p class="s_theme">Transboundary Water Management in the face of Climate Change</p>
          </div>

          <div class="speaker">
            <h5 class="s_name">James Muriithi</h5>
            <p class="s_title">ESRI East Africa</p>
            <p class="s_theme">Effects of Climate Change on Wetlands conservation</p>
          </div>

          <div class="speaker">
            <h5 class="s_name">Dr. Ramasamy Jayakumar</h5>
            <p class="s_title">UNESCO</p>
            <p class="s_theme">Effects of Climate Change on Groundwater Abstraction</p>
          </div>

          <div class="speaker">
            <h5 class="s_name">Dr. MAS Waweru</h5>
            <p class="s_title"></p>
            <p class="s_theme">Waste-Water Management in Climate Change Adaptation</p>
          </div>

          <div class="speaker">
            <h5 class="s_name"></h5>
            <p class="s_title"></p>
            <p class="s_theme">Effects of Climate Change on Water Quality</p>
          </div>

          <div class="speaker">
            <h5 class="s_name">Nakuru Water - Zaituni</h5>
            <p class="s_title"></p>
            <p class="s_theme">Faecal Sludge Management in Climate Change Adaptation</p>
          </div>
          
          <div class="speaker">
            <h5 class="s_name">Nakuru Water - Zaituni</h5>
            <p class="s_title"></p>
            <p class="s_theme">Faecal Sludge Management in Climate Change Adaptation</p>
          </div>
          
          <div class="speaker">
            <h5 class="s_name">Ebenezer Amadi</h5>
            <p class="s_title">Doshi - GF</p>
            <p class="s_theme">Financial Risks and Opportunities in Climate Change Adaptation for the Water Sector</p>
          </div>
          
          <div class="speaker">
            <h5 class="s_name">Untapped</h5>
            <p class="s_title">Maxime Servettaz</p>
            <p class="s_theme">Mobilizing Finance for Climate-Resilient Water Sector Infrastructure</p>
          </div>

        </div>
      </div>
    </div>

    <div style="display: flex;align-items: center;justify-content: center; width: 100%">
      <a href="./assets/program.pdf" class="secondary_btn">Download Program</a>
    </div>
    <br>
   <!-- <h3 class="text-center">Free Transport </h3>
    <h3 class="text-center">KICC Transport </h3> -->
  </main>
  <?php
    require_once('footer.php');
  ?>
  <input type="hidden" id="ispaid" value="NO">
</body>
<!-- <script src="./assets/js/socket.io.js"></script> -->
<script>
  function limit(element) {
    var max_chars = 10;

    if (element.value.length > max_chars) {
      element.value = element.value.substr(0, max_chars);
    }
  }

  $(function () {

    $('#country').change(function () {
      var selected = $(this).find('option:selected');
      var extra = selected.data('code');
      $('#code').html(extra)
    });

    $('#phone_no').change(function () {
      if ($('#phone_no').val().charAt(0) === '0') {
        $('#phone_no_val').val($('#code').html() + "" + $('#phone_no').val().substr(1))
      } else {
        $('#phone_no_val').val($('#code').html() + "" + $('#phone_no').val())
      }
    })
  });

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

  function next(event) {
    var current = document.getElementById('step').value
    document.getElementById(current).style.display = 'none'

    var nextpart = parseInt(current) + 1
    if (current === "2") {
      if ($('#role').val() === "Kenyan Delegate") {
        document.getElementById("3").style.display = 'block'
        document.getElementById('nextbtn').style.display = 'none'
        document.getElementById('submitbtn').style.display = 'block'
      } else {
        document.getElementById('nextbtn').style.display = 'none'
        document.getElementById('submitbtn').style.display = 'block'
        document.getElementById("4").style.display = 'block'
        document.getElementById('step').value = 3 + ''
      }
    } else {
      document.getElementById(nextpart + '').style.display = 'block'
      document.getElementById('prevbtn').style.display = 'block'
      document.getElementById('step').value = nextpart + ''
    }

  }

  function prev(event) {

    var current = document.getElementById('step').value
    if (current) {

    }
    document.getElementById(current).style.display = 'none'

    document.getElementById(parseInt(current) - 1 + '').style.display = 'block'
    document.getElementById('step').value = parseInt(current) - 1 + ''
    if (parseInt(current) - 1 === 1) {
      document.getElementById('nextbtn').style.display = 'block'
      document.getElementById('prevbtn').style.display = 'none'
      document.getElementById('submitbtn').style.display = 'none'
    }


  }


  // const socket = io("https://eawaterspayments.herokuapp.com/");
  // socket.on("payment", function (msg) {
  //   if (msg.BillRefNumber === $('#first_name').val() + " " + $('#last_name').val() ||
  //     msg.MSISDN === $('#phone_no_val').val()) {

  //     $('#ispaid').val('YES')

  //     $('#paymentstatus').html("<div class='alert alert-success' role='alert'>Thank You Payment Received for " +
  //       msg.BillRefNumber + "</div>")
  //     $('#mpesa_code').val(msg.TransID)
  //     $('#mpesa_name').val(msg.BillRefNumber)
  //     $('#mpesa_amount').val(msg.TransAmount)
  //     enableFinishPayment()
  //   }


  // })



  function nameChanged() {
    var fullname = $('#first_name').val() + " " + $('#last_name').val()
    $('#fullname').html(fullname)

  }
</script>

</html>

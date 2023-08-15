@include('client.header')
<!--<link href="assets/kkrishna/css/style.css"/>-->
<!--<link href="assets/krishna/css/style.css" rel="stylesheet">-->
<style>

/*------------- gallery ------------------------*/

.latest-post,
.latest-post-inner {
    min-height: 240px;
    max-height: 240px;
    margin-bottom: 30px;
}

.latest-post {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
}

.latest-post-inner {
    padding: 50px 30px;
    position: relative;
    -webkit-transition: 300ms;
    -o-transition: 300ms;
    transition: 300ms;
    border: 2px solid #114072;
}

.latest-post .latest-post-inner span,
.latest-post .latest-post-inner a,
.latest-post .latest-post-inner p,
.latest-post .latest-post-inner i,
.latest-post .latest-post-inner .entry-author {
    color: #fff;
    position: relative;
}

.latest-post .latest-post-inner a:hover {
    color: rgba(255, 255, 255, 0.7);
}

.latest-post .latest-post-inner .latest-post-content {
    position: absolute;
    bottom: 30px;
}

.latest-post .latest-post-inner:before {
    content: "";
    -webkit-transition: 300ms;
    -o-transition: 300ms;
    transition: 300ms;
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 50%;
    opacity: 1;
    background: transparent;
}

.latest-post .latest-post-inner .link-icon {
    position: absolute;
    opacity: 0;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    -webkit-transform: translate(-50%, -50%) scale(0);
    color: #fff;
    z-index: 999;
    -webkit-transition: 300ms;
    transition: 300ms;
}

.latest-post .latest-post-inner .link-icon a {
    background-color: #493e3e;
    display: table;
    height: 50px;
    width: 50px;
    border-radius: 30px;
    text-decoration: none;
    -webkit-transition: 300ms;
    transition: 300ms;
}

.latest-post .latest-post-inner .link-icon a i {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.latest-post .latest-post-inner .link-icon a:hover {
    background-color: rgba(73, 62, 62, 0.7);
    transform: scale(1.2);
    -webkit-transition: 300ms;
    transition: 300ms;
}

.latest-post .latest-post-inner:hover:before {
    opacity: 0;
    -webkit-transition: 300ms;
    transition: 300ms;
}

.latest-post .latest-post-inner:hover .link-icon {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
    -webkit-transform: translate(-50%, -50%) scale(1);
    -webkit-transition: 300ms;
    transition: 300ms;
}


/* -------------------  TAB -----------------------*/

.mytab {
    /*text-align: center;*/
    border-bottom: none;
    margin-bottom: 25px;
    /*margin-top: 50px;*/
    text-align: center;
}

.mytab li {
    float: none !important;
    display: inline-block;
    margin-bottom: 10px;
}

.mytab>li.active>a,
.mytab>li.active>a:hover,
.mytab>li.active>a:focus {
    color: #fff;
    /*background-color: #114072;*/
    border: 2px solid #1a0f28;
    cursor: pointer;
    border-radius: 0;
    background: rgb(250, 206, 54);
    background: linear-gradient(47deg, #03172e 0%, #1f0e27 82%);
}
.ami-overlay {
    width: 100%;
    height: 100%;
    background: rgba(76, 118, 135, 0.75);
    position: absolute;
    top: 0;
    transform: translate(-100%, 0);
    transition: all 1s;
}

.mytab>li>a:hover,
.mytab>li>a:focus {
    color: #1a0f28;
    padding: 9px 20px !important;
    border: 2px solid #1a0f28;
    border-radius: 0;
    background-color: transparent;
}

.mytab>li>a {
    color: #1a0f28;
    padding: 9px 20px !important;
    border: 2px solid #1a0f28;
    border-radius: 0;
    font-size: 18px;
    /*font-weight: 600;*/
}

/*-------------------------------------------------*/

.latest-post .latest-post-inner:hover {
    background-color: rgba(119, 170, 66, 0.4);
}

.sl-prev {
    display: block !important;
}

.sl-next {
    display: block !important;
}

/*------------- End of gallery ------------------------*/

.amiwrap {
    text-align: center;
    background: #fff;
    padding: 5px;
    box-shadow: 1px 1px 25px #e0e0e0;
    margin-bottom: 20px;
}

.amiwrap img {
    padding: 5px 9px;
    width: 75px;
}

.amiwrap p {
    font-size: 14px;
    /* padding: 0px 27px; */
    margin: 0 auto;
    text-transform: capitalize;
}

/*----- Border Animation -----*/

.amiwrap {
    position: relative;
    cursor: pointer;
    transition: ease all 0.5s;
}

.amiwrap:hover {
    transform: translateY(-10px);
    transition: ease all 0.5s;
}

.amiwrap::before,
.amiwrap::after {
    content: "";
    width: 0;
    height: 2px;
    position: absolute;
    transition: all 0.2s linear;
    /*background: #114072;*/
    background: linear-gradient(47deg, #bd9a2c 0%, #bd9a2c 82%);
}

.bo {
    /*padding: 8px;*/
    display: flex;
    align-items: center;
}

.bo::before {
    content: "";
    width: 2px;
    height: 0;
    position: absolute;
    transition: all 0.2s linear;
    /*background: #114072;*/
    background: linear-gradient(47deg, #bd9a2c 0%, #bd9a2c 82%);
    left: 0px;
    top: 0px;
}

.bo::after {
    content: "";
    width: 2px;
    height: 0;
    position: absolute;
    transition: all 0.2s linear;
    /*background: #114072;*/
    background: linear-gradient(47deg, #bd9a2c 0%, #bd9a2c 82%);
    right: 0px;
    top: 0px;
}

.amiwrap:hover::before,
.amiwrap:hover::after {
    width: 100%;
}

.amiwrap:hover .bo::before,
.amiwrap:hover .bo::after {
    height: 100%;
}

.border-effect::before {
    left: 50%;
    top: 0;
    transition-duration: 0.4s;
}

.border-effect::after {
    left: 50%;
    bottom: 0;
    transition-duration: 0.4s;
}

.border-effect .bo::before {
    left: 0;
    top: 50%;
    transition-duration: 0.4s;
}

.border-effect .bo::after {
    right: 0;
    top: 50%;
    transition-duration: 0.4s;
}

.border-effect:hover::before,
.border-effect:hover::after {
    left: 0;
}

.border-effect:hover .bo::before,
.border-effect:hover .bo::after {
    top: 0;
}

/*--- End of border amination----------*/

    .hoverEffect
{
    color:rgb(14,46,80)!important;
}
.hoverEffect:hover 
{
    color:white!important;
    background-color:rgb(14,46,80)!important;
}
    .w-100 {
    width: 100%!important;
}
 #mobile{
        display:none;
    }
    @media screen and (max-width:1000px)
    {
        #mobile{
        display:block!important;
    }
    #desktop
    {
        display:none!important;
    }
    }
    .mobileongoing
    {
        display:none!important;
    }
    .desktopongoing 
    {
        height:300px!important;
        width:100%!important;
    }
   
    @media screen and (max-width:1000px)
    {
        .desktopongoing 
    {
       display:none!important;
    }
    .mobileongoing
    {
        display:block!important;
        height:200px!important;
        width:100%!important;
    }
    .img 
    {
        width:100%!important;
    }
    }
    .testimonial-carousel .owl-nav .owl-prev, .testimonial-carousel .owl-nav .owl-next {
    position: relative;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: rgb(36,50,74);
    border-radius: 40px;
    font-size: 20px;
    transition: .5s;
}
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        setTimeout(() => {
        $("#exampleModal1").modal('show')
       
    }, 5000);
    })
  
</script>



        <div class="container-fluid header bg-white p-0"  style="margin-top:10px;width:100%">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <!-- <div class="col-md-1 p-5 mt-lg-5">
                    
                                   </div> -->
                <div class="col-md-12 animated fadeIn">
                    
                        
                        <img id="mobile" class="img-fluid" style="height:500px;width:100%" src="assets/krishna/hifiimages/goldclas/Mobile-4.jpg" alt="">
                            <img id="desktop" class="img-fluid" style="height:600px" src="assets/krishna/hifiimages/goldclas/WEB-3.jpg" alt="">
                        </div>
                        <!-- <div class="owl-carousel-item">
                            <img class="img-fluid" style="height:600px" src="img/carousel-2.jpg" alt="">
                        </div> -->
                    
              
            </div>
        </div>
<style>
    .dir li {
    color: #fff;
    list-style: none;
    /* width: 335px; */
    background:rgb(28,14,39)!important;
 
    margin: 18px auto;
    border: 2px solid #bd9a2c;
}
.aminitieslist li {
    font-size: 16px;
    padding: 7px 10px;
    margin-bottom: 10px;
    line-height: 23px;
    font-weight: 500;
    text-align: left;
    display: flex;
}
.dir li {
    background: #656565;
    margin-bottom: 10px;
}
.aminitieslist li {
    font-size: 15px;
    padding: 10px 10px;
}


.amenities-gallery {
    position: relative;
    width: 100%;
    overflow: hidden;
    transition: all 0.5s;
}

.amenities-gallery img {
    margin-bottom: -2px;
    width: 100%;
    height: auto;
}

.amen-subt {
    padding: 15px 0;
}

.ami-overlay {
    width: 100%;
    height: 100%;
    background: rgba(76, 118, 135, 0.75);
    position: absolute;
    top: 0;
    transform: translate(-100%, 0);
    transition: all 1s;
}

.loc {
    width: 100% !important;
    height: 290px !important;
    margin-bottom: -2px;
    object-fit: cover;
}

.amenities-gallery:hover .ami-overlay {
    transform: translate(0%, 0);
    transition: all 0.5s;
    cursor: url(../images/hovericon.png), auto !important;
}

#atmosphere {
    /*background: url("../images/patch.png") no-repeat bottom left;*/
}

#parkamenities {
    /*background: url("../images/patch2.png") no-repeat bottom right;*/
}

#gallery {
    /*background: url("../images/patch.png") no-repeat bottom left;*/
}

#carousel-example-generic1 {
    width: 500px;
    max-width: 100%;
    margin: 0px auto;
}

#carousel-example-generic1 .carousel-inner .item img {
    width: 500px;
    max-width: 100%;
}

.terms-head {
    color: #114072;
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
}

.form-disc-white {
    font-size: 9px;
    line-height: 18px;
    color: #fff;
    background: rgba(0, 0, 0, 0.4);
    padding: 1px;
}

.form-disc-white a {
    color: #ffffff;
}

.form-disc {
    font-size: 9px;
    line-height: 11px;
}

.form-disc a {
    color: #114072;
}

.maplink {
    color: #fff;
    border: 2px solid #fff;
    padding: 10px 16px;
    font-size: 20px;
    letter-spacing: 2px;
    transition: ease all 0.5s;
    text-decoration: none !important;
    display: block;
    width: 165px;
    text-align: center;
    margin: 0px auto;
    margin-top: 20px;
}

.maplink:hover,
.maplink:focus {
    background: #ffffff;
    color: #222222;
    transition: ease all 0.5s;
    text-decoration: none !important;
}

</style>

<div class="container">
    <center>
    <h1 class="mt-5" style="color:rgb(10,84,122)">Overview</h1>
   
    <p>
       Sonawane Smart Code: Gold Class is where your lifestyle will elevate to the next level. Enjoy the convenience at your fingertips that comes with home automation. Explore various ways to rejuvenate amidst a host of thoughtful amenities planned on three different levels. Experience comfortable commute thanks to a location that offers excellent connec tivity. Smart Code: Gold Class is all about complete living.
        </p>
        </center>
        <div class="row me-3">
            <div class="col-md-6">
            <div class="ami-wrap">
                <ul class="aminitieslist dir">
                    <li>East-West Vastu Compliant<span></span></li>
                    <li>Low Density Apartments<span></span></li>
                    
                    <!-- <li>20+ Lifestyle Amenities <span></span></li> -->
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ami-wrap">
                <ul class="aminitieslist dir">
                    <li>Home Automation<span></span></li>
                    <li>Dual Level Amenities <span></span></li>
                  
                    <!-- <li>20+ Lifestyle Amenities <span></span></li> -->
                </ul>
            </div>
        </div>
        </div>
   
</div>

<style>
.bo {
    /* padding: 8px; */
    display: flex;
    align-items: center;
}
    .amiwrap {
    position: relative;
    cursor: pointer;
    transition: ease all 0.5s;
}
.amiwrap {
    text-align: center;
    background: #fff;
    padding: 5px;
    box-shadow: 1px 1px 25px #e0e0e0;
    margin-bottom: 20px;
}
.amiwrap img {
    padding: 5px 9px;
    width: 75px;
}

.border-effect::before {
    left: 50%;
    top: 0;
    transition-duration: 0.4s;
}

.border-effect::after {
    left: 50%;
    bottom: 0;
    transition-duration: 0.4s;
}

.border-effect .bo::before {
    left: 0;
    top: 50%;
    transition-duration: 0.4s;
}

.border-effect .bo::after {
    right: 0;
    top: 50%;
    transition-duration: 0.4s;
}

.border-effect:hover::before,
.border-effect:hover::after {
    left: 0;
}

.border-effect:hover .bo::before,
.border-effect:hover .bo::after {
    top: 0;
}

.config-wrap {
    text-align: center;
    border-top: 10px solid #fff;
    border-bottom: 31px solid #fff;
    border-left: 10px solid #fff;
    border-right: 10px solid #fff;
    padding: 25px 0px;
    margin-bottom: 0px;
    border-radius: 4px 1px 65px 65px;
    transition: ease all 0.5s;
}

.config-wrap h3,
.config-wrap1 h3 {
    font-size: 27px;
    font-weight: 800;
    margin-bottom: 30px;
}

.config-line {
    height: 3px;
    background: #fff;
    width: 50px;
    margin: 0px auto;
    margin-top: 20px;
    margin-bottom: 20px;
}

.config-wrap h2 {
    font-size: 24px;
    font-weight: 800;
    line-height: 35px;
    color: #fff;
}

.config-wrap .pricing_btn,
.config-wrap1 .pricing_btn {
    /*background: #58595b;*/
    background: linear-gradient(47deg, #03172e 0%, #1f0e27 82%);
    border: 1px solid;
    font-size: 20px;
    color: #fff;
    /* width: 75%; */
    padding: 7px 10px;
    border-radius: 28px;
    margin: 5px 0px;
    font-weight: 600;
    outline: none;
}

.config-wrap:hover {
    border-color: #d0d0d0;
    background: linear-gradient(47deg, #03172e 0%, #1f0e27 82%);
    -webkit-box-shadow: 0 10px 8px -6px rgb(0 0 0 / 50%);
    -moz-box-shadow: 0 10px 8px -6px rgba(0, 0, 0, 0.5);
    box-shadow: 0 10px 8px -6px rgb(0 0 0 / 50%);
    transform: translateY(-10px);
    transition: ease all 0.5s;
}

.config-wrap h3 span {
    font-size: 22px;
    color: #fff;
    font-weight: 700;
}

.title02 {
    text-align: center;
    margin: 10px auto;
    background: linear-gradient(47deg, #03172e 0%, #1f0e27 82%);
    display: block;
    width: 103px;
    padding: 5px;
    color: #fff;
    font-weight: 800;
}

.title03 {
    position: absolute;
    right: 0px;
    bottom: 0px;
    color: #fff;
    font-weight: 800;
    padding: 5px;
    font-size: 10px;
    background: linear-gradient(47deg, #03172e 0%, #1f0e27 82%);
}

video {
    margin-top: 45px;
}
#configuration {
    /*background: #414041;*/
    background: url(assets/krishna/images/config-bg.jpg);
    background-position: center;
    background-size: cover;
}
.overlay1 {
    width: 100%;
    padding: 80px 0px;
    background: url(assets/krishna/images/pattern.png) #0000007a;
    background-repeat: repeat;
    background-size: inherit;
    background-position: bottom;
}
@media only screen and (max-width: 768px) {
    .config-wrap {
        padding: 15px 0px;
        margin-bottom: 25px;
    }
    video {
        margin-top: 11px;
    }
}

.blur {
    filter: blur(3px);
}
.sub-head {
    text-align: center;
    margin-top: 10px;
    font-weight: 600;
    font-size: 22px;
}
.white {
    color: #fff !important;
    background: none;
    -webkit-text-fill-color: unset;
}
.head-center {
    text-align: center;
}
.sec-head {
    font-size: 30px;
    font-weight: 600;
    /* color: #114072; */
    /* background: #CB5AA1; */
    background: linear-gradient(47deg,#fff 0%,#fff 82%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.head-line {
    width: 260px;
    height: 28px;
    /* background: #114072; */
    margin: 0px auto;
    margin-top: 10px;
    margin-bottom: 20px;
    background-image: url(assets/krishna/images/div.png);
    background-size: contain;
    background-repeat: no-repeat;
}
</style>

<div class="container">
    <center>
    <h1 class="mt-5" style="color:rgb(10,84,122)">Amenities</h1>
    
    <p>
        Reasons for pride, studded all around your home. Amaze your guests with attraction like hi-tech home automation, rooftop garden, Gazebo, fitness and Yoga centres, 24X7 Wi-Fi connection around all common areas. Wherever you are at Krishna ULTIMA, there’s something to feel proud of.
        </p>
        </center>
     <div class="row">
        <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="amiwrap border-effect">
                <div class="bo">
                    <img src="assets/krishna/images/amen/Gymnasium.png">
                    <p>Fitness center</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <div class="amiwrap border-effect">
                <div class="bo">
                    <img src="assets/krishna/images/amen/Indoorgames.png">
                    <p>Indoor games</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
            <div class="amiwrap border-effect">
                <div class="bo">
                    <img src="assets/krishna/images/amen/Yogacentres.png">
                    <p>Yoga center</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
            <div class="amiwrap border-effect">
                <div class="bo">
                    <img src="assets/krishna/images/amen/Landscapegardens.png">
                    <p>Landscape gardens</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
            <div class="amiwrap border-effect">
                <div class="bo">
                    <img src="assets/krishna/images/amen/Childrensplayarea.png">
                    <p>Children's play area</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="3s">
            <div class="amiwrap border-effect">
                <div class="bo">
                    <img src="assets/krishna/images/amen/gazebo.png">
                    <p>Gazebo</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="3.5s">
            <div class="amiwrap border-effect">
                <div class="bo">
                    <img src="assets/krishna/images/amen/home-automation.png">
                    <p>Home automation</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="4s">
            <div class="amiwrap border-effect">
                <div class="bo">
                    <img src="assets/krishna/images/amen/Seniorsit-outarea.png" >
                    <p>senior citizen sit out area</p>
                </div>
            </div>
        </div>
        
        
</div>  
   
</div>

<section class="glob-sec-bg mt-5" id="configuration">
    <div class="overlay1">
        <div class="container">
            <!-- <img class="head-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"
         src="images/head-icon-white.png"> -->
            <h2 class="sec-head head-center white wow fadeInUp text-white" data-wow-duration="1s" data-wow-delay="0.5s" style="color:white!important">
                Configurations</h2>
            <h3 class="sub-head" style="color: #fff;"></h3>
            <div class="head-line"></div>


            <div class="row" style="place-content:center!important">
                <!--<div class="col-12" >-->

                    <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="config-wrap">
                            <h3><span>1 BHK</span></h3>
                            <div class="config-line"></div>
                            <h2>441-479 <br>SQ.FT.<br></h2>
                            <div class="config-line"></div>
                            <button class="pricing_btn price-click">₹ Check Price</button>
                            <!-- <button class="pricing_btn floor"> View Plan</button> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="config-wrap">
                            <h3><span>2 BHK</span></h3>
                            <div class="config-line"></div>
                            <h2>614- 652  <br>SQ.FT.<br></h2>
                            <div class="config-line"></div>
                            <button class="pricing_btn price-click">₹ Check Price</button>
                        </div>
                    </div>
                    
                   

                </div>

            <!--</div>-->


        </div>
    </div>
</section>

<style>
    #location {
    /* background: url(../images/behind.jpg); */
    background-size: inherit;
    background-position: bottom;
    background-repeat: no-repeat;
}

.grey-bg {
    background: #4140415e;
    color: #fff;
}
.overlay {
    width: 100%;
    padding: 70px 0px;
    background: url(../images/pattern.png) #114072;
    background-repeat: repeat;
    background-size: cover;
    background-position: initial;
    /* background: linear-gradient( 90deg, #cb5aa1 12%, #4f59a7e9 70%, #4d6cb3c2 100%); */
}

#accordion .panel {
    border: none;
    border-radius: 0;
    box-shadow: none;
    margin: 0px 6px 10px 33px;
    position: relative;
}

#accordion .panel-heading {
    padding: 0;
    border: none;
    border-radius: 0;
}

#accordion .panel-title a {
    display: block;
    padding: 10px 12px 10px 32px;
    margin: 0;
    /*background: #114072;*/
    font-size: 13px;
    font-weight: 700;
    color: #fff !important;
    letter-spacing: 1px;
    /* border: 1px solid #000; */
    border-radius: 0;
    background: rgb(250, 206, 54);
    background: linear-gradient(47deg, #03172e 0%, #1f0e27 82%);
    position: relative;
}

#accordion .panel-title a:before,
#accordion .panel-title a.collapsed:before {
    content: "\f0de";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    width: 31px;
    height: 31px;
    line-height: 38px;
    background: #bd9a2c;
    border-radius: 0px;
    border: 1px solid #fff;
    text-align: center;
    font-size: 20px;
    /*color: var(--main-color);*/
    position: absolute;
    top: 0px;
    right: 0px;
    transition: all 0.3s ease 0s;
}

#accordion .panel-title a.collapsed:before {
    content: "\f0dd";
    line-height: 20px;
}

#accordion .panel-body {
    padding: 20px;
    /*margin: 0 15px;*/
    background: #ffffff;
    border: 2px solid #fff;
    font-size: 15px;
    /*color: var(--main-color);*/
    line-height: 28px;
    letter-spacing: 1px;
    /*background: linear-gradient(90deg, #cb5aa1 12%, #4f59a7e9 70%, #4d6cb3c2 100%);*/
}

#accordion .panel:last-child .panel-body {
    border-bottom: 2px dashed #000;
}

#location .img-disc {
    position: absolute;
    bottom: 26px;
    color: #fff;
    background: #000;
    right: 15px;
    padding: 0 2px;
}

@media screen and (max-height: 575px) {
    #rc-imageselect,
    .g-recaptcha {
        transform: scale(0.77);
        -webkit-transform: scale(0.77);
        transform-origin: 0 0;
        -webkit-transform-origin: 0 0;
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}
.head-center {
    text-align: center;
}
.milestone {
    text-align: center;
    font-size: 18px;
    width: 90%;
    margin: 0px auto;
}
.panel-group {
    margin-bottom: 20px;
    /* margin-top: 110px; */
}

.panel-group {
    margin-bottom: 20px;
}
#accordion .panel-body {
    padding: 20px;
    /* margin: 0 15px; */
    background: #ffffff;
    border: 2px solid #fff;
    font-size: 15px;
    /* color: var(--main-color); */
    line-height: 28px;
    letter-spacing: 1px;
    /* background: linear-gradient(90deg, #cb5aa1 12%, #4f59a7e9 70%, #4d6cb3c2 100%); */
}
.panel-default>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #ddd;
}
.panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 1px solid #ddd;
}
.cust-accordion .panel-body {
    font-size: 14px;
    color: #fff;
    background: #6f6f6f;
    padding: 15px 20px;
    line-height: 25px;
    /* border: none !important; */
    position: relative;
}
.panel-body {
    padding: 15px;
}
p {
    margin-bottom: 10px;
    line-height: 23px;
}
.sec-head {
    font-size: 30px;
    font-weight: 600;
    /* color: #114072; */
    /* background: #CB5AA1; */
    background: linear-gradient(47deg, #03172e 0%, #1f0e27 82%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.specification {
    list-style: circle;
    padding-left: 16px;
    font-size: 15px;
    color: #222222;
    font-weight: 600;
}
ol, ul {
    list-style: none;
}
</style>

<!-- Button trigger modal -->
<section class="glob-sec-bg grey-bg" id="location">
    <div class="overlay" style="background: #fff!important;">
        <div class="container">
            <!-- <img class="head-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"
         src="images/head-icon-white.png"> -->
            <h2 class="sec-head head-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                CONNECTIVITY</h2>
            <!-- <h3 class="sub-head" style="color: #000;"></h3> -->
            <div class="head-line"></div>


           
            <div class="row mt-5">
            <div class="col-md-6 ">
                <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item bg-dark text-white">
    <h2 style="color:white!important" class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Station
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          <p class="text-white">KALYAN STATION - 2.5 KM</p>
          <p class="text-white">VITTALWADI STATION - 3.5 km</p>
          <p class="text-white">ULHASNAGAR STATION - 5.6 km</p>
          <p class="text-white">DOMBIVALI STATION - 6.3 km</p>
          <p class="text-white">TAKURLI STATION - 4.7 km</p>
      </div>
    </div>
  </div>
  <div class="accordion-item bg-dark text-white">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        
                                   Shopping & Entertainment
                                
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
           <p class="text-white">D MART - 3.3 km</p>
          <p class="text-white">METRO MALL - 1.9 km</p>
          <p class="text-white">BIG BAZAR - 2.0 km</p>
          <p class="text-white">PALAVA XPERIA MALL - 9.5 km</p>
         
      </div>
    </div>
  </div>
  <div class="accordion-item bg-dark text-white">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      
                                   Healthcare 
                                
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
           <p class="text-white">FORTIS HOSPITAL - 3.1 km</p>
          <p class="text-white">MEERA HOSPITAL - 5.5 km</p>
          <p class="text-white">AM-PM HOSPITAL - 3.3 km</p>
         
      </div>
    </div>
  </div>
 <div class="accordion-item bg-dark text-white">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
      
                               
                                   Education
                                
                                
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
           <p class="text-white">OMKAR SCHOOL CBSE - 4.8 km</p>
          <p class="text-white">ARYA GURUKUL SCHOOL CBSE- 2.5 km</p>
         <p class="text-white">Model College of Science & Commerce – 10 mins</p>
          <p class="text-white">St. Paul’s College - 15 mins</p>  
          <p class="text-white">B. K Birla College - 15 mins</p>
             <p class="text-white">Saket College of Arts & Science - 12 mins</p>
      </div>
    </div>
  </div>
  
  
  <div class="accordion-item bg-dark text-white">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
      
                               
                                  Bank
                                
                                
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
           <p class="text-white">BANK OF BARODA - 2.2 km</p>
          <p class="text-white">AXIS BANK - 2.5 km</p>
          <p class="text-white">ICICI BANK - 1.5 km</p>
         
         
      </div>
    </div>
  </div>
  
  
  
</div>

            </div>

            <div class="col-md-6">
                    <a data-fancybox="general" href="assets/krishna/hifiimages/goldclas/map.jpg" class="l-box">
                        <img src="assets/krishna/hifiimages/goldclas/map.jpg" width="100%">
                        <!-- <p class="img-disc">Source:Google Map</p> -->
                    </a>
                    <!-- <p class="img-disc2" style="color:#000">Distance as per Google Maps</p> -->
            </div>
            <!-- <div class="col-md-12">
            <a href="javascript:void(0);" class="maplink">View Map</a>
        </div> -->
        </div>
    </div>
</section>


<style>
  
      .made-with {
          background: #fd264f;
          color: #fff;
          display: block;
          font-size: 12px;
          line-height: 1em;
          margin: 0;
          padding: 5px 110px;
          position: fixed;
          top: 20px;
          right: -100px;
          text-align: center;
          text-decoration: none;
          transform: rotate(45deg);
      }
      .documentation {
          color: #fd264f;
      }
      button:focus,
      input:focus,
      textarea:focus,
      select:focus {
        outline: none; }
      
      .tabs {
        display: block;
        display: -webkit-flex;
        display: -moz-flex;
        display: flex;
        -webkit-flex-wrap: wrap;
        -moz-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0;
        overflow: hidden; }
        .tabs [class^="tab"] label,
        .tabs [class*=" tab"] label {
          color: #efedef;
          cursor: pointer;
          display: block;
          font-size: 1.1em;
          font-weight: 300;
          line-height: 1em;
          padding: 2rem 0;
          text-align: center; }
        .tabs [class^="tab"] [type="radio"],
        .tabs [class*=" tab"] [type="radio"] {
          border-bottom: 1px solid rgba(239, 237, 239, 0.5);
          cursor: pointer;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          display: block;
          width: 100%;
          -webkit-transition: all 0.3s ease-in-out;
          -moz-transition: all 0.3s ease-in-out;
          -o-transition: all 0.3s ease-in-out;
          transition: all 0.3s ease-in-out; }
          .tabs [class^="tab"] [type="radio"]:hover, .tabs [class^="tab"] [type="radio"]:focus,
          .tabs [class*=" tab"] [type="radio"]:hover,
          .tabs [class*=" tab"] [type="radio"]:focus {
            border-bottom: 1px solid #fd264f; }
          .tabs [class^="tab"] [type="radio"]:checked,
          .tabs [class*=" tab"] [type="radio"]:checked {
            border-bottom: 2px solid #fd264f; }
          .tabs [class^="tab"] [type="radio"]:checked + div,
          .tabs [class*=" tab"] [type="radio"]:checked + div {
            opacity: 1; }
          .tabs [class^="tab"] [type="radio"] + div,
          .tabs [class*=" tab"] [type="radio"] + div {
            display: block;
            opacity: 0;
            padding: 2rem 0;
            width: 90%;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out; }
        .tabs .tab-2 {
          width: 50%; }
          .tabs .tab-2 [type="radio"] + div {
            width: 200%;
            margin-left: 200%; }
          .tabs .tab-2 [type="radio"]:checked + div {
            margin-left: 0; }
          .tabs .tab-2:last-child [type="radio"] + div {
            margin-left: 100%; }
          .tabs .tab-2:last-child [type="radio"]:checked + div {
            margin-left: -100%; }
</style>





    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

<section class="glob-sec" id="gallery">
    <div class="container">
        <!-- <img class="head-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" src="images/head-icon.png"> -->
        <h2 class="sec-head head-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Gallery</h2>
        <!--<h3 class="sub-head">View Your Dream Homes</h3>-->
        <div class="head-line"></div>

        <div style="width: 100%;height: 20px;"></div>

       
<div class="container" style="margin-top: 10px;">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs mt-3 mb-3" style="justify-content:center!important">
      <li class="nav-item">
        <a class="nav-link active btn" style="background-color:rgb(14,46,80)!important;color:white!important" data-bs-toggle="tab" href="#msg">Exterior</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn" style="background-color:rgb(14,46,80)!important;color:white!important" data-bs-toggle="tab" href="#pro">Interior</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link btn" style="background-color:rgb(14,46,80)!important;color:white!important" data-bs-toggle="tab" href="#set">Floor Plans</a>
      </li>
    
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane container active" id="msg">
        <div class="row">
            <div class="col-md-4 pd0">
                 <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/building1.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/building1.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                   
                                </div>
           
            </div>
             <div class="col-md-4 pd0">
                 <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/building2.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/building2.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                   
                                </div>
           
            </div>
              <div class="col-md-4 pd0">
                 <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/building3.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/building3.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                   
                                </div>
           
            </div>
        </div>
        
      </div>
      <div class="tab-pane container fade" id="pro">
          <div class="row">
             <div class="col-md-4 pd0">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/int1.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/int1.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                     
                                </div>
                            </div>
             <div class="col-md-4 pd0">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/int2.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/int2.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                   
                                </div>
                            </div>
             <div class="col-md-4 pd0">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/int3.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/int3.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
            </div>
      </div>
      <div class="tab-pane container fade" id="set">
           <div class="row">
              <div class="col-md-3 pd0 blur">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/fl1.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/fl1.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
             <div class="col-md-3 pd0 blur">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/fl2.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/fl2.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-md-3 pd0 blur">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/fl3.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/fl3.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
             <div class="col-md-3 pd0 blur">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/fl5.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/fl5.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                       
                       
                       
                          <div class="col-md-3 pd0 blur">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/fl7.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/fl7.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                    
                                </div>
                            </div> 
                            
                               <div class="col-md-3 pd0 blur">
                                <div class="amenities-gallery mg-mb">
                                    <img src="assets/krishna/hifiimages/goldclas/fl9.jpg">
                                    <a data-fancybox="interior" href="assets/krishna/hifiimages/goldclas/fl9.jpg" class="l-box">
                                        <div class="ami-overlay">
                                        </div>
                                    </a>
                                    
                                </div>
                            </div> 
            </div>
      </div>
  
    </div>
    </div>
    
    </div>
</section>



        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
              
                <div class="row g-4">
                   
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.440813037621!2d73.1309517!3d19.2196111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7958f3281c837%3A0xa880a386e30eaa81!2sGaondevi%20Crown!5e0!3m2!1sen!2sin!4v1680610898095!5m2!1sen!2sin"height="450" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                           
                            <form action="/contactsave" method="post">
                                <input type="hidden" name="_token" value="3yuqHRJZGvaIaChACuQ7YGFVAXK7sl8Pfxd24hgM">                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required="">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required="">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" name="phone" class="form-control" id="subject" placeholder="Phone" required="">
                                            <label for="subject">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px" required=""></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit" style="background-color:rgb(14,46,80)">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
</div>

</section>





<script src="assets/krishna/js/jquery-1.12.0.min.js"></script>
<script src="assets/krishna/js/jquery.validate.js"></script>

<script src="assets/krishna/js/mobilevalidate.js"></script>

<script src="assets/krishna/js/bootstrap.min.js"></script>

<script src="assets/krishna/js/popout.js"></script>










</div>
@include('client.footer')
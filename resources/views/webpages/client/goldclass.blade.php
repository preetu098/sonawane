@include('client.header')
<style>
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

    .card1
    {
        height:100px!important;
    }
    @media screen and (max-width:1000px)
    {
        #card1 
        {
            font-size:12px!important;
           
        }
        
    .card1
    {
        height:100px!important;
        width:90px!important;
    }
        .imgclass
            {
                height:20px!important;
                width:20px!important;
            }
    }

    .card1:hover
    {
        transform:scale(0.9);
        transition:3s;
        box-shadow:1px 1px 1px 1px black;
    }
    .imgclass
    {
        height:50px;
        width:50px;
    }
</style>
<style>
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
    .mobileongoing
    {
        display:none!important;
    }
    .desktopongoing 
    {
        height:300px!important;
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
    }
    .img 
    {
        width:300px!important;
    }
    }
</style>
<div class="container-fluid header bg-white p-0"  style="margin-top:10px;width:100%">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <!-- <div class="col-md-1 p-5 mt-lg-5">
                    
                                   </div> -->
                <div class="col-md-12 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                        <img id="mobile" class="img-fluid" style="height:500px;width:100%" src="banner/Goldclass Mobile Banner.jpg" alt="">
                            <img id="desktop" class="img-fluid" style="height:600px" src="banner/smartcode.jpg" alt="">
                        </div>
                        <!-- <div class="owl-carousel-item">
                            <img class="img-fluid" style="height:600px" src="img/carousel-2.jpg" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
    <center>
    <h1 class="mt-5" style="color:rgb(10,84,122)">SmartCode Gold Class</h1>
    <h4>Description</h4>
    </center>
    <p>Sonawane Smart Code: Gold Class is where your lifestyle will elevate to the next level. Enjoy the convenience at your fingertips that comes with home automation. Explore various ways to rejuvenate amidst a host of thoughtful amenities planned on three different levels. Experience comfortable commute thanks to a location that offers excellent connec tivity. Smart Code: Gold Class is all about complete living.</p>
    
</div>
<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Gallery</h1>
                    
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                      
                        <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/g1.jpg" class="mobileongoing" alt="">
                            <img src="banner/g1.jpg" class="desktopongoing" alt="">
                            
                        </div>

                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/g2.jpg" class="mobileongoing" alt="">
                            <img src="banner/g2.jpg" class="desktopongoing" alt="">
                            
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                            <img src="banner/g3.jpg" class="mobileongoing" alt="">
                            <img src="banner/g3.jpg" class="desktopongoing" alt="">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
<div class="row">
    <div class="col-lg-12">
    <iframe style="height:400px;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=goldclasskalyan&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div>
</div>
</div>
</div>


</div>
@include('client.footer')
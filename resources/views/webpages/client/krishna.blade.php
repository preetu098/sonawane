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
                        <img id="mobile" class="img-fluid" style="height:500px;width:100%" src="banner/Krishna Ultima Mobile Banner.jpg" alt="">
                            <img id="desktop" class="img-fluid" style="height:600px" src="banner/krishna.jpg" alt="">
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
    <h1 class="mt-5" style="color:rgb(10,84,122)">Krishna Ultima</h1>
    <h4>Description</h4>
    </center>
    <p>At Krishna Ultima, we prioritize the safety and well-being of our residents. That's why our homes are built to be earthquake-proof, ensuring a secure living environment. Additionally, our project is meticulously crafted in accordance with Vastu principles, promoting positive energy and harmony within your home.</p>
    <p>
    Indulge in a lifestyle of convenience and leisure with our extensive range of 30+ ultra-modern amenities. From a rooftop garden and swimming pool to a fully equipped fitness centre and children's play area, every aspect of Krishna Ultima is designed to enhance your living experience.</p>
<p class="">
Enjoy the advantages of our prime location, which offers seamless connectivity to major landmarks and everyday conveniences. Whether it's educational institutions, healthcare facilities, shopping centres, or entertainment options, everything you need is within easy reach.</p>
<p class="pb-3">
Krishna Ultima is not just a home; it's a symbol of luxury and comfort that exceeds expectations. Experience the joy of living in a thoughtfully planned community where every detail is designed to elevate your lifestyle.</p>
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
                            <img src="banner/kri1.jpg" class="mobileongoing" alt="">
                            <img src="banner/kri1.jpg" class="desktopongoing" alt="">
                            
                        </div>

                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/kri1.jpg" class="mobileongoing" alt="">
                            <img src="banner/kri1.jpg" class="desktopongoing" alt="">
                            
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                            <img src="banner/kri1.jpg" class="mobileongoing" alt="">
                            <img src="banner/kri1.jpg" class="desktopongoing" alt="">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Floor</h1>
                    
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                      
                        <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/f1.jpg" class="mobileongoing" alt="">
                            <img src="banner/f1.jpg" class="desktopongoing" alt="">
                            
                        </div>

                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/f2.jpg" class="mobileongoing" alt="">
                            <img src="banner/f2.jpg" class="desktopongoing" alt="">
                            
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                            <img src="banner/f3.jpg" class="mobileongoing" alt="">
                            <img src="banner/f3.jpg" class="desktopongoing" alt="">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <div class="container">
<div class="row">
    <div class="col-lg-12">
    <iframe style="height:400px;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=https://krishnaultima.in/&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div>
</div>
</div>
</div>


</div>
@include('client.footer')
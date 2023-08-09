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
                        <img id="mobile" class="img-fluid" style="height:500px;width:100%" src="banner/Hifi Living Mobile Banner.jpg" alt="">
                            <img id="desktop" class="img-fluid" style="height:600px" src="banner/hifi.jpg" alt="">
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
    <h1 class="mt-5" style="color:rgb(10,84,122)">SmartCode Hi-Fi Living</h1>
    <h4>Description</h4>
    </center>
    <p>Welcome to HiFi Living by Sonawane Group, a spectacular ongoing residential project nestled in the heart of Kopar, Dombivli. Designed to redefine luxury living, HiFi Living offers a harmonious blend of elegance, comfort, and contemporary design. As you step into HiFi Living, you will be greeted by meticulously crafted spaces that exude sophistication and style. Every aspect of these thoughtfully designed residences has been carefully curated to elevate your lifestyle and cater to your every need.</p>
    <p>

With a range of spacious 1 and 2 BHK apartments, HiFi Living presents a perfect abode for those seeking a serene and tranquil living environment. Immerse yourself in the tranquil ambiance and experience a sense of serenity amidst the bustling city. Beyond the elegant interiors, HiFi Living offers an array of world-class amenities that cater to your holistic well-being. Whether you prefer unwinding by the poolside, staying fit at the well-equipped gym, or indulging in recreational activities at the clubhouse, HiFi Living has something for everyone.</p>
<p class="pb-3">

Located in the thriving neighborhood of Kopar, Dombivli, HiFi Living enjoys excellent connectivity to major landmarks, educational institutions, healthcare facilities, and entertainment hubs. Experience the convenience of seamless connectivity coupled with the charm of a serene residential enclave. At HiFi Living, we strive to provide you with an exceptional living experience that surpasses your expectations. Join us on this journey of luxury, comfort, and fulfillment. Discover your dream home at HiFi Living and embark on a life of timeless elegance.</p>
    
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
                            <img src="banner/b1.jpg" class="mobileongoing" alt="">
                            <img src="banner/b1.jpg" class="desktopongoing" alt="">
                            
                        </div>

                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/b2.jpg" class="mobileongoing" alt="">
                            <img src="banner/b2.jpg" class="desktopongoing" alt="">
                            
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                            <img src="banner/b3.jpg" class="mobileongoing" alt="">
                            <img src="banner/b3.jpg" class="desktopongoing" alt="">
                           
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
                            <img src="banner/floor.jpg" class="mobileongoing" alt="">
                            <img src="banner/floor.jpg" class="desktopongoing" alt="">
                            
                        </div>

                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/floor1.jpg" class="mobileongoing" alt="">
                            <img src="banner/floor1.jpg" class="desktopongoing" alt="">
                            
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                            <img src="banner/floor3.jpg" class="mobileongoing" alt="">
                            <img src="banner/floor3.jpg" class="desktopongoing" alt="">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <div class="container">
<div class="row">
    <div class="col-lg-12">
    <iframe   style="height:400px!important;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=hifiliving&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div>
</div>
</div>
</div>


</div>
@include('client.footer')
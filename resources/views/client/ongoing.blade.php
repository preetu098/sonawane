@include('client.header')

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
</style>
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
    @media screen and (min-width:1000px){
    .owl-item 
{
    width:400px!important;
}
}
</style>
<div class="container-fluid header bg-white p-0"  style="margin-top:10px;width:100%">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <!-- <div class="col-md-1 p-5 mt-lg-5">
                    
                                   </div> -->
                <div class="col-md-12 animated fadeIn">
                   
                    <img id="mobile" class="img-fluid" style="width:100%" src="img/banner.jpg" alt="">
                            <img  id="desktop" class="img-fluid" style="height:200px;width:100%" src="img/banner.jpg" alt="">
                       
                       
                    
                </div>
            </div>
        </div>
        <!-- Header End -->
<style>
    .image
    {
        height:300px!important;
        
    }
    @media screen and (max-width:1000px)
    {
        .image
        {
            height:200px!important;
        }
    }
</style>
   
<style>
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

    
 <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h3 class="mb-3">OUR ONGOING PROJECT</h3>
                    <p>Embark on a Journey of Excellence</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded">
                        <a href="/hifi">
                        <div class="bg-white border rounded">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/hifi.jpg" class="mobileongoing" alt="">
                            <img src="banner/hifi.jpg" class="desktopongoing" alt="">
                            <div class="text-center">
                               
                               
                                    <h6 class="fw-bold mb-1 mt-3">Smart Code Hifi Living</h6>
                                    <small>1 & 2 BHK Smart Homes In Dombivali</small>
                                
                            </div>
                        </div>
</a>
                    </div>
                    <div class="testimonial-item bg-light rounded ">
                    <a href="/krishna">
                    <div class="bg-white border rounded">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/krishna.jpg" alt="" class="mobileongoing">
                            <img src="banner/krishna.jpg" alt="" class="desktopongoing">
                            <div class="text-center">
                               
                               
                                    <h6 class="fw-bold mb-1 mt-3">Krishna Ultima</h6>
                                    <small>1 & 2 BHK Homes In Kalyan East</small>
                                
                            </div>
                        </div>
</a>
                    </div>
                    <div class="testimonial-item bg-light rounded ">
                    <a href="/goldclass">
                    <div class="bg-white border rounded">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                            <img src="banner/smartcode.jpg" alt="" class="mobileongoing">
                            <img src="banner/smartcode.jpg" alt="" class="desktopongoing">
                            <div class="text-center">
                               
                                
                                    <h6 class="fw-bold mb-1 mt-3">SmartCode Gold Class</h6>
                                    <small>1 & 2 BHK Homes In Kalyan East</small>
                               
                            </div>
                        </div>
</a>
                    </div>
                </div>
            </div>
        </div>
</div>
@include('client.footer')
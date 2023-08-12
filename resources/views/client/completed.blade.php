@include('client.header')
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
    .image
    {
        height:300px!important;
        width:400px!important;
        
    }
    @media screen and (max-width:1000px)
    {
        .image
        {
            height:200px!important;
        }
    }
</style>
<div class="container-fluid header bg-white p-0"  style="margin-top:10px;width:100%">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <!-- <div class="col-md-1 p-5 mt-lg-5">
                    
                                   </div> -->
                <div class="col-md-12 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                       
                            <img class="img-fluid" style="height:400px" src="img/banner.jpg" alt="">
                       
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Completed Projects</h1>
                   
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded">
                        
                        <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="comp/a1.png" class="mobileongoing" alt="">
                            <img src="comp/a1.png" class="desktopongoing" alt="">
                            <div class="d-flex align-items-center">
                               
                                <div class="ps-3 mt-1">
                                    <h6 class="fw-bold mb-1">Krishna Heights</h6>
                                    <small>1 & 2 BHK Smart Homes In Dombilvali NXT!</small>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="testimonial-item bg-light rounded ">
                  
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                             <img src="comp/a2.jpg" class="mobileongoing" alt="">
                            <img src="comp/a2.jpg" class="desktopongoing" alt="">
                            <div class="d-flex align-items-center">
                               
                                <div class="ps-3 mt-1">
                                    <h6 class="fw-bold mb-1">Krishna Square</h6>
                                    <small>1 & 2 BHK Smart Homes In Dombivali NXT!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded ">
                    
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                             <img src="comp/a3.jpg" class="mobileongoing" alt="">
                            <img src="comp/a3.jpg" class="desktopongoing" alt="">
                            <div class="d-flex align-items-center">
                               
                                <div class="ps-3 mt-1">
                                    <h6 class="fw-bold mb-1">Krishna Nisarg</h6>
                                    <small>1 & 2 BHK Smart Homes In Dombivali NXT!</small>
                                </div>
                            </div>
                        </div>
</a>
                    </div>
                    <div class="testimonial-item bg-light rounded ">
                   
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                            <img src="comp/a4.jpg" class="mobileongoing" alt="">
                            <img src="comp/a4.jpg" class="desktopongoing" alt="">
                            <div class="d-flex align-items-center">
                               
                                <div class="ps-3 mt-1">
                                    <h6 class="fw-bold mb-1">Krishna Paradise</h6>
                                    <small>1 & 2 BHK Smart Homes In Dombivali NXT!</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





















</div>
@include('client.footer')
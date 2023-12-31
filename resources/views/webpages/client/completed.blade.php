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

       
<div class="container-xxl py-5 mt-5" >
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="">
                    <h1 class="mb-3">Completed Projects</h1>
                   
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                        <div class="d-flex align-items-center">
                               
                               <div class="ps-3 mt-5">
                                <img class="img-fluid image" src="comp/a1.png" alt="">
                                   <h6 class="fw-bold mb-1 mt-3">Krishna Heights</h6>
                                 <p>1 & 2 BHK Smart Homes In Dombilvali NXT!</p>
                               </div>
                           </div>
                          
                            
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            
                            <div class="d-flex align-items-center">
                               
                            <div class="ps-3 mt-5">
                                <img class="img-fluid image" src="comp/a2.jpg" alt="">
                                   <h6 class="fw-bold mb-1 mt-3">Krishna Square</h6>
                                 <p>1 & 2 BHK Smart Homes In Dombivali NXT!</p>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                          
                            <div class="d-flex align-items-center">
                               
                            <div class="ps-3 mt-5">
                                <img class="img-fluid image" src="comp/a3.jpg" alt="">
                                   <h6 class="fw-bold mb-1 mt-3">Krishna Nisarg</h6>
                                 <p>1 & 2 BHK Smart Homes In Dombivali NXT!</p>
                               </div>
                            </div>
                        </div>
                    </div>
                


                    <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                          
                            <div class="d-flex align-items-center">
                               
                            <div class="ps-3 mt-5">
                                <img class="img-fluid image" src="comp/a4.jpg" alt="">
                                   <h6 class="fw-bold mb-1 mt-3">Krishna Paradise</h6>
                                 <p>1 & 2 BHK Smart Homes In Dombivali NXT!</p>
                               </div>
                            </div>
                        </div>
                    </div>

            














            </div>
        </div>
 

</div>
</div>
@include('client.footer')
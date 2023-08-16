@include('client.header')

<style>
    .hoverEffect
{
    color:rgb(14,46,80)!important;
}
.wsus__section_heading h2 {
    margin-bottom: 10px;
    text-transform: capitalize;
    font-weight: 700;
    font-size: 40px;
    text-align: center;
}
.wsus__section_heading span {
    color: #0A547A;
}
.w-100 {
    width: 100%!important;
}
.wsus__single_team_img .team_link {
    background: #f1b70570 !important;
}
.wsus__single_team_img .team_link {
    background: #0A547A61;
    position: absolute;
    top: 0;
    right: -60px;
    width: 60px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: all linear .3s;
    -webkit-transition: all linear .3s ease;
    -moz-transition: all linear .3s ease;
    -ms-transition: all linear .3s ease;
    -o-transition: all linear .3s ease;
}
.wsus__single_team {
    padding: 15px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 8px;
    border-radius: 5px;
    text-align: center;
    margin-top: 25px;
    border: 1px solid #eee;
}.wsus__single_team_img {
    width: 100%;
    height: 250px;
    position: relative;
    overflow: hidden;
    border-radius: 5px;
    display: block;
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
        height:200px!important;
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
        height:250px!important;
        width:387px!important;

        
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



<!-- banner images -->
        <div class="container-fluid header bg-white p-0"  style="margin-top:10px;width:100%">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <!-- <div class="col-md-1 p-5 mt-lg-5">
                    
                                   </div> -->
                <div class="col-md-12 animated fadeIn">
                    
                        
                        <img id="mobile" class="img-fluid" width="100%" src="banner/Goldclass Mobile Banner.jpg" alt="">
                            <img id="desktop" class="img-fluid"  src="Banners/Goldclass - Desktop.jpg" alt="">
                        </div>
                        <!-- <div class="owl-carousel-item">
                            <img class="img-fluid" style="height:600px" src="img/carousel-2.jpg" alt="">
                        </div> -->
                    
              
            </div>
        </div>

<!-- first paraggraph -->

 <div class="container">
    <center>
    <h3 class="mt-5" style="color:rgb(10,84,122)">Sonawane Group</h3>
    <h4>Building Communities, Fulfilling Dreams!</h4>
    <p>A trusted name in real estate since 2000. With over 23 years of experience, we deliver exceptional housing projects and commercial spaces in Kalyan and Dombivali. Our focus on quality, customer satisfaction, and ethical practices sets us apart.</p>
    <p>At Sonawane Group, we are not just in the business of constructing buildings; we are passionate about creating communities. Our projects are designed to foster a sense of belonging and provide a holistic living experience. We prioritize the well-being and happiness of our residents, offering a range of amenities and facilities that enhance their quality of life.</p>
    </center>
</div>


<!-- end para -->



<!-- Button trigger modal -->



<style>
    .wsus__single_property {
    transition: transform 0.3s ease-in-out;
}
.wsus__single_property {
    background: #fff;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 8px;
    overflow: hidden;
    margin-bottom: 25px;
    border: 1px solid #eee;
}
</style>
















 <!-- Testimonial Start -->
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
        <!-- Testimonial End -->


 <!-- Testimonial Start -->
 <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h3 class="mb-3">CONSTRUCTION UPDATE</h3>
                    <p>OUR LATEST CONSTRUCTION UPDATES</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">


                    
                @foreach($all_record as $record)
                    <div class="testimonial-item bg-light rounded">
                        <div class="bg-white border rounded">
                         
                            <img class="img-fluid desktopongoing" src="{{asset('/storage/'.$record->image)}}" >
                            <img class="img-fluid mobileongoing" src="{{asset('/storage/'.$record->image)}}" >
                              
                                <div class="ps-3 text-center">
                                    <h6 class="fw-bold mb-1 mt-3">{{$record->header}}</h6>
                                    <small>{{$record->description}}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                   
                </div>
            </div>
        </div>
      
       





















        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h3 class="mb-3">Meet The Visionaries Behind Sonawane Group</h3>
                    <p>Leadership that Drives Excellence & Innovation</p>
                </div>
                <div class="row g-4" style="place-content:center!important">
               
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative p-4">
                            <img  class="img-fluid mobileongoing w-100" src="logopages/meet1.jpg"  alt="">
                                <img  class="img-fluid desktopongoing w-100" src="logopages/meet1.jpg"  alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <!-- <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Mr. Sonawane </h5>
                                <small>Founder</small>
                                
                            </div>
                            <center>
                            <button class="btn btn-success mb-3 text-white" style="background-color:rgb(14,46,80)!important">Read More</button>
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative p-4">
                                <img class="img-fluid mobileongoing w-100" src="http://sonawanegroup.com/uploads/custom-images/partner-2023-06-21-04-25-00-6376.jpg"  alt="">
                                <img class="img-fluid desktopongoing w-100" src="http://sonawanegroup.com/uploads/custom-images/partner-2023-06-21-04-25-00-6376.jpg"  alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <!--<a class="btn btn-square mx-1 hoverEffect" href=""><i class="fab fa-facebook-f" ></i></a>-->
                                    <!--<a class="btn btn-square mx-1 hoverEffect" href=""><i class="fab fa-twitter"></i></a>-->
                                    <a class="btn btn-square mx-1 hoverEffect" href="https://www.instagram.com/amit.sonawane2227/"><i class="fab fa-instagram" ></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Amit Sonawane</h5>
                                <small>Director</small>
                            </div>
                            <center>
                            <button class="btn btn-success mb-3 text-white" style="background-color:rgb(14,46,80)!important">Read More</button>
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative p-4">
                                <img class="img-fluid mobileongoing img w-100" src="banner/WhatsApp Image 2023-08-14 at 2.46.20 PM.jpeg"  alt="">
                                <img class="img-fluid desktopongoing w-100" src="banner/WhatsApp Image 2023-08-14 at 2.46.20 PM.jpeg"  alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1 hoverEffect" href="https://www.facebook.com/"><i class="fab fa-facebook-f" ></i></a>
                                    <a class="btn btn-square mx-1 hoverEffect"  href="https://twitter.com/"><i class="fab fa-twitter" ></i></a>
                                    <a class="btn btn-square mx-1 hoverEffect" href="https://www.instagram.com/sonawaneashish_2227/"><i class="fab fa-instagram" ></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Ashish Sonawane</h5>
                                <small>CEO - Director</small>
                            </div>
                            <center>
                            <button class="btn btn-success mb-3 text-white" style="background-color:rgb(14,46,80)!important">Read More</button>
                            </center>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Team End -->

</div>
@include('client.footer')
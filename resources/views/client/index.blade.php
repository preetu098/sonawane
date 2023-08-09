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



<div class="modal fade" style="margin-top:180px!important;" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:rgb(36,50,74)!important">
      <div class="modal-header justify-content-center" style="border:0px !important">
      
        <h6 class="modal-title " id="exampleModalLabel" style="color:white!important;"><center>Enquire Now</center></h6>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="border:0px !important;background-color:white!important">
       <p class="text-success" style="font-size:13px">Please Enter Your Information</p>
        <form action="/addLead" method="post"  name="form">
            @csrf
            <!-- input fields -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="username" placeholder="Full Name" aria-label="FullName" aria-describedby="basic-addon1" required>
            </div>


            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <input type="number" required class="form-control" name="phone" placeholder="Mobile" aria-label="Phone" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
            <input type="email" required class="form-control" name="email" placeholder="Email" aria-label="Phone" aria-describedby="basic-addon1">
            </div>

          
            <input type="hidden" class="form-control" name="url" value="http://127.0.0.1:8000/" placeholder="URL" aria-label="Phone" aria-describedby="basic-addon1">
            


          
        
            <input type="hidden" class="form-control" placeholder="Remarks" aria-label="Phone" aria-describedby="basic-addon1" name="remark" value="remark by operator">
            

           

           
            <input type="hidden" class="form-control" placeholder="UTM Medium" aria-label="Phone" aria-describedby="basic-addon1" name="utm_medium" value="by operator">
            

           
          
            <input type="hidden" class="form-control" name="utm_source" value="by operator" placeholder="UTM Medium" aria-label="Phone" aria-describedby="basic-addon1">
            
           
            <input type="hidden" class="form-control" placeholder="Lead Identifier" aria-label="Phone" aria-describedby="basic-addon1" name="lead" value="by operator">
           
           

      </div>
      <div class="modal-footer" style="border-bottom-left-radius:5px;border-bottom-right-radius:5px;border:0px !important;background-color:white!important" >
      <!-- <button onclick="saveRecord()" value="Save" class="btn btn-primary" style="background-color:rgb(36,50,74)">Save</button> -->
      <input type="submit" value="Save" class="btn btn-primary" style="background-color:rgb(36,50,74)"/>
      </div>
            </form>
    </div>
  </div>
</div>
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
                    
                        
                        <img id="mobile" class="img-fluid" style="height:500px;width:100%" src="banner/Goldclass Mobile Banner.jpg" alt="">
                            <img id="desktop" class="img-fluid" style="height:600px" src="Banners/Goldclass - Desktop.jpg" alt="">
                        </div>
                        <!-- <div class="owl-carousel-item">
                            <img class="img-fluid" style="height:600px" src="img/carousel-2.jpg" alt="">
                        </div> -->
                    
              
            </div>
        </div>

<div class="container">
    <center>
    <h1 class="mt-5" style="color:rgb(10,84,122)">Sonawane Group</h1>
    <h4>Building Communities, Fulfilling Dreams!</h4>
    <p>A trusted name in real estate since 2000. With over 23 years of experience, we deliver exceptional housing projects and commercial spaces in Kalyan and Dombivali. Our focus on quality, customer satisfaction, and ethical practices sets us apart.</p>
    <p>At Sonawane Group, we are not just in the business of constructing buildings; we are passionate about creating communities. Our projects are designed to foster a sense of belonging and provide a holistic living experience. We prioritize the well-being and happiness of our residents, offering a range of amenities and facilities that enhance their quality of life.</p>
    </center>
</div>






<!-- Button trigger modal -->


<!-- Modal -->
<div style="margin-top:100px!important" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(0,185,142)!important">
      
        <h6 style="margin-left:120px!important" class="modal-title text-white" id="exampleModalLabel">Information About Property</h6>

        <button type="button" class="btn-close btn-default" style="color:white!important" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <center>
        <img style="height:200px;width:300px" src="https://www.pngmart.com/files/7/Real-Estate-PNG-Photo.png"/>
       </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

 <!-- Testimonial Start -->
 <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">OUR ONGOING PROJECT</h1>
                    <p>Embark on a Journey of Excellence</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <a href="/hifi">
                        <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/hifi.jpg" class="mobileongoing" alt="">
                            <img src="banner/hifi.jpg" class="desktopongoing" alt="">
                            <div class="d-flex align-items-center">
                               
                                <div class="ps-3 mt-5">
                                    <h6 class="fw-bold mb-1">Smart Code Hifi Living</h6>
                                    <small>1 & 2 BHK Smart Homes In Dombivali NXT!</small>
                                </div>
                            </div>
                        </div>
</a>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <a href="/krishna">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                            <img src="banner/krishna.jpg" alt="" class="mobileongoing">
                            <img src="banner/krishna.jpg" alt="" class="desktopongoing">
                            <div class="d-flex align-items-center">
                               
                                <div class="ps-3 mt-5">
                                    <h6 class="fw-bold mb-1">Krishna Ultima</h6>
                                    <small>1 & 2 BHK Homes In Kalyan East</small>
                                </div>
                            </div>
                        </div>
</a>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                    <a href="/goldclass">
                    <div class="bg-white border rounded p-4">
                            <!-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> -->
                           
                            <img src="banner/smartcode.jpg" alt="" class="mobileongoing">
                            <img src="banner/smartcode.jpg" alt="" class="desktopongoing">
                            <div class="d-flex align-items-center">
                               
                                <div class="ps-3 mt-5">
                                    <h6 class="fw-bold mb-1">SmartCode Gold Class</h6>
                                    <small>1 & 2 BHK Homes In Kalyan East</small>
                                </div>
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
                    <h1 class="mb-3">CONSTRUCTION UPDATE</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">


                    
                @foreach($all_record as $record)
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                         
                            <img class="img-fluid desktopongoing" src="{{asset('/storage/'.$record->image)}}" >
                            <img class="img-fluid mobileongoing" src="{{asset('/storage/'.$record->image)}}" >
                              
                                <div class="ps-3 mt-5">
                                    <h6 class="fw-bold mb-1">{{$record->header}}</h6>
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
                    <h1 class="mb-3">Meet The Visionaries Behind Sonawane Group</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4" style="place-content:center!important">
               
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                            <img  class="img-fluid mobileongoing w-100" src="http://sonawanegroup.com/uploads/custom-images/partner-2023-07-01-04-19-48-4949.jpg"  alt="">
                                <img  class="img-fluid desktopongoing w-100" src="http://sonawanegroup.com/uploads/custom-images/partner-2023-07-01-04-19-48-4949.jpg"  alt="">
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
                            <div class="position-relative">
                                <img class="img-fluid mobileongoing w-100" src="http://sonawanegroup.com/uploads/custom-images/partner-2023-06-21-04-25-00-6376.jpg"  alt="">
                                <img class="img-fluid desktopongoing w-100" src="http://sonawanegroup.com/uploads/custom-images/partner-2023-06-21-04-25-00-6376.jpg"  alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1 hoverEffect" href=""><i class="fab fa-facebook-f" ></i></a>
                                    <a class="btn btn-square mx-1 hoverEffect" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1 hoverEffect" href=""><i class="fab fa-instagram" ></i></a>
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
                            <div class="position-relative">
                                <img class="img-fluid mobileongoing img w-100" src="http://sonawanegroup.com/uploads/custom-images/partner-2021-10-07-08-39-11-6641.jpg"  alt="">
                                <img class="img-fluid desktopongoing w-100" src="http://sonawanegroup.com/uploads/custom-images/partner-2021-10-07-08-39-11-6641.jpg"  alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1 hoverEffect" href=""><i class="fab fa-facebook-f" ></i></a>
                                    <a class="btn btn-square mx-1 hoverEffect"  href=""><i class="fab fa-twitter" ></i></a>
                                    <a class="btn btn-square mx-1 hoverEffect" href=""><i class="fab fa-instagram" ></i></a>
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
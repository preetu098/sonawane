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
<div class="container-fluid">
<img id="mobile" class="img-fluid" style="width:100%" src="img/banner.jpg" alt="">
                            <img  id="desktop" class="img-fluid" style="height:200px;width:100%" src="img/banner.jpg" alt="">
        </div>
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Contact Us</h1>
                    @if(session('success'))
                   <div class="alert alert-success">
                        {{session('success')}}
                   </div>
                   @endif
                   
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker text-primary" style="color:rgb(14,46,80)!important"></i>
                                        </div>
                                        <span><br>Sonawane Corporate, A2, 1st floor, Krishna Paradise, 100 Feet Road, Haji Malang Road, Kalyan East. Maharashtra 421306</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-primary" style="color:rgb(14,46,80)!important"></i>
                                        </div>
                                        <span><br><br>care@sonawanegroup.com<br><br><br></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone text-primary" style="color:rgb(14,46,80)!important"></i>
                                        </div>
                                        <span><br><br>+91 85913 34062<br><br><br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.4824627608677!2d73.1316995!3d19.217794099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be795c8fe5580ab%3A0xdae6b65a4f0251cd!2sSonawane%20Corporate!5e0!3m2!1sen!2sin!4v1691502281118!5m2!1sen!2sin" height="450" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6 " style=";border-radius:5px;box-shadow: 0 0 0 1px rgba(53,72,91,.07), 0 2px 2px rgba(0,0,0,.01), 0 4px 4px rgba(0,0,0,.02), 0 10px 8px rgba(0,0,0,.03), 0 15px 15px rgba(0,0,0,.03), 0 30px 30px rgba(0,0,0,.04), 0 70px 65px rgba(0,0,0,.05);" >
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                           <h2 class="mt-3 text-center">Get in touch with us</h2>
                           
<script>
    function validate()
    {
        var phone=document.form.phone.value;
        if(phone.length<10 ||phone.length>10)
        {
            alert("please enter 10 digits numbers");
            return false;
        }
        return true;
    }
</script>
                            <form action="/contactsave" method="post" onsubmit="return validate()" name="form">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
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
                                            <input type="number" name="phone" class="form-control" id="subject" placeholder="Phone" required>
                                            <label for="subject">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
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

@include('client.footer')
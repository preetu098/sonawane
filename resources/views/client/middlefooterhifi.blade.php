<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0" nonce="FmXUkHFI"></script>
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2 text-white"><i class="fa fa-map-marker me-3"></i>Sonawane Corporate, A2, 1st floor, Krishna Paradise, 100 Feet Road, Haji Malang Road, Kalyan East. Maharashtra 421306</p>
                        <p class="mb-2 text-white"><i class="fa fa-phone me-3"></i>+91 85913 34062</p>
                        <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>care@sonawanegroup.com</p>
                        <div class="d-flex pt-2">
                            
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/sonawanegroup"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/sonawaneofficial/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/sonawane"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="/about">About Us</a>
                        <a class="btn btn-link text-white-50" href="/contact">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="/disclaimer">Disclaimer Policy</a>
                        <a class="btn btn-link text-white-50" href="/privacy-policy">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="/terms">Terms & Condition</a>
                        <a class="btn btn-link text-white-50" href="/emi">Emi Calculator</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Facebook Feed</h5>
                        <div class="fb-page" data-href="https://www.facebook.com/sonawanegroup" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sonawanegroup" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sonawanegroup">Sonawane Group</a></blockquote></div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p class="text-white">subscribe</p>
                        @if(session('success'))
                   <div class="alert alert-success">
                        {{session('success')}}
                   </div>
                   @endif
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                        <form method="post" action="/newsletter">
                            @csrf
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email" name="email" placeholder="Your email">
                            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" style="background-color:white;color:#071728">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#" style="text-decoration:none!important"> <a href="" style="text-decoration:none!important">Copyright 2023, Sonawane Group .All Rights Reserved.</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                              
                                <a href="/faq">FaQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
       

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background-color:rgb(36,50,74)"><i class="bi bi-arrow-up"></i></a>

       
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>

</html>
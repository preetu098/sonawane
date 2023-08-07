@include('client.header')
@foreach($login as $l)
{{$l->name}}
{{$l->password}}
{{$l->id}}
@endforeach

<!-- Header Start -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


        <div class="container-fluid header bg-white p-0"  style="margin-top:10px;width:100%">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <!-- <div class="col-md-1 p-5 mt-lg-5">
                    
                                   </div> -->
                <div class="col-md-12 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                       <center>
                            <img class="img-fluid" style="height:200px;width:400px" src="logo/ffaq1.png" alt="">
                            </center>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

   <div class="container">
   <div class="accordion" id="JAZAccordion">
 
 <div class="accordion-item">

     <h2 class="accordion-header" id="headingOne">

         <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemOne">Who is Sonawane Group?</button>                                  

     </h2>

     <div id="collapseItemOne" class="accordion-collapse collapse show" data-bs-parent="#JAZAccordion">

         <div class="card-body">

             <p>Sonawane Group is a renowned real estate developer firm with a proven track record of delivering exceptional residential and commercial projects. We are committed to creating sustainable and high-quality living spaces that cater to the diverse needs of our customers. </p>

         </div>

     </div>

 </div>

 <div class="accordion-item">

     <h2 class="accordion-header" id="headingTwo">

         <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseItemTwo">What types of properties does Sonawane Group offer?</button>

     </h2>

     <div id="collapseItemTwo" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

         <div class="card-body">

         <p>Sonawane Group offers a wide range of properties, including residential apartments, villas, and commercial spaces. Our projects are designed to provide a perfect blend of aesthetics, functionality, and modern amenities.</p>

         </div>

     </div>

 </div>
<!-- start third -->
 <div class="accordion-item">

     <h2 class="accordion-header" id="headingThree">

         <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemThree">Where are Sonawane Group's projects located?</button>                    

     </h2>

     <div id="collapseItemThree" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

         <div class="card-body">

         <p>Our projects are strategically located in prime areas that offer convenience, accessibility, and a thriving neighbourhood. Each location is carefully chosen to ensure proximity to essential amenities such as schools, hospitals, shopping centres, and transportation hubs.</p>

         </div>

     </div>

 </div>
<!-- end third -->


<!-- start fouth -->
<div class="accordion-item">

<h2 class="accordion-header" id="headingFour">

    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemFour">What are the unique features of Sonawane Group's projects?</button>                    

</h2>

<div id="collapseItemFour" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

    <div class="card-body">

    <p>Sonawane Group takes pride in offering projects that stand out for their exceptional design, superior construction quality, and thoughtful amenities. Our properties are built with meticulous attention to detail and incorporate the latest trends in architecture and technology.</p>

    </div>

</div>

</div>
<!-- end third -->


<!-- start fifth -->
<div class="accordion-item">

<h2 class="accordion-header" id="headingFive">

    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemFive">How can I get more information about a specific project?</button>                    

</h2>

<div id="collapseItemFive" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

    <div class="card-body">

    <p>For detailed information about any of our projects, we encourage you to visit the project's dedicated page on our website. There, you will find comprehensive details about the project's features, floor plans, pricing, and contact information.</p>

    </div>

</div>

</div>
<!-- end fifth -->


<!-- start sixth -->
<div class="accordion-item">

<h2 class="accordion-header" id="headingSixth">

    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemSixth">How can I schedule a site visit?</button>                    

</h2>

<div id="collapseItemSixth" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

    <div class="card-body">

    <p>To schedule a site visit, please reach out to our sales team through the contact information provided on the project's page. Our team will be happy to assist you in arranging a convenient time for a site visit and addressing any specific queries you may have.</p>

    </div>

</div>

</div>
<!-- end sixth -->


<!-- start Seventh -->
<div class="accordion-item">

<h2 class="accordion-header" id="headingSeven">

    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemSeven">What is the process for booking a property with Sonawane Group?</button>                    

</h2>

<div id="collapseItemSeven" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

    <div class="card-body">

    <p>To book a property with Sonawane Group, you can follow these simple steps: a. Choose the desired property from our available options. b. Get in touch with our sales team to discuss the booking process, payment terms, and required documentation. c. Complete the necessary paperwork and make the initial payment as per the agreed terms. d. Upon successful completion of the booking process, you will receive an official confirmation.</p>

    </div>

</div>

</div>
<!-- end Seventh -->



<!-- start Eight -->
<div class="accordion-item">

<h2 class="accordion-header" id="headingEight">

    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemEight">Does Sonawane Group offer any special schemes or discounts?</button>                    

</h2>

<div id="collapseItemEight" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

    <div class="card-body">

    <p>Sonawane Group periodically introduces special schemes and discounts for our valued customers. We recommend visiting our website's Offers and Schemes section or contacting our sales team to stay updated on the latest promotional offers.
    </div>

</div>

</div>
<!-- end Eight -->



<!-- start Nine -->
<div class="accordion-item">

<h2 class="accordion-header" id="headingNine">

    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemNine">What after-sales services does Sonawane Group provide?</button>                    

</h2>

<div id="collapseItemNine" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

    <div class="card-body">

    <p>At Sonawane Group, we believe in building long-lasting relationships with our customers. We provide comprehensive after-sales services, including assistance with property handover, documentation, and addressing any maintenance or service-related queries.
    </div>

</div>

</div>
<!-- end Eight -->



<!-- start Nine -->
<div class="accordion-item">

<h2 class="accordion-header" id="headingTen">

    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseItemTen">How can I get in touch with Sonawane Group's customer support team?</button>                    

</h2>

<div id="collapseItemTen" class="accordion-collapse collapse" data-bs-parent="#JAZAccordion">

    <div class="card-body">

    <p>For any inquiries, feedback, or assistance, our customer support team is readily available to assist you. You can reach out to us through the contact details provided on our website, and we will be happy to address your queries promptly.
    </div>

</div>

</div>
<!-- end Eight -->



 
</div>

   </div>    

        <script>
    $(document).ready(function(){
       
        setTimeout(() => {
            $("#exampleModal1").modal('show')
        }, 5000);
       
    })
</script>    
</div>
@include('client.footer')
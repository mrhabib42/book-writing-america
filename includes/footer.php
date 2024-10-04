 <!-- Slider Section -->
 <section class="sec-testimonial-section">
   <div class="container py-5">
     <div class="row justify-content-center text-center">
       <div class="col-12">
         <h3>Hesitate to hire us?<br>Check Out What Our Customers Are Saying!</h3>
       </div>
     </div>
     <div class="slider-section">
       <div class="auto-container">
         <div id="owl-demo" class="owl-carousel owl-theme">
           <div class="item">
             <div class="testimonial-card d-flex align-items-center">
               <div class="testimonial-image">
                 <img src="./images/new/1.png" class="img-fluid" alt="Customer Image">
               </div>
               <div class="testimonial-content">
                 <h4><b>Magnificent Work!!!</b></h4>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis impedit possimus
                   aspernatur quas voluptas molestiae voluptates, porro corporis quasi omnis quia
                   ut ipsa sed nisi amet consectetur animi cum perspiciatis?</p>
                 <div class="stars">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                 </div>
                 <h5>Hunain Murphy</h5>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="testimonial-card d-flex align-items-center">
               <div class="testimonial-image">
                 <img src="./images/new/2.png" class="img-fluid" alt="Customer Image">
               </div>
               <div class="testimonial-content">
                 <h4><b>Magnificent Work!!!</b></h4>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis impedit possimus
                   aspernatur quas voluptas molestiae voluptates, porro corporis quasi omnis quia
                   ut ipsa sed nisi amet consectetur animi cum perspiciatis?</p>
                 <div class="stars">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                 </div>
                 <h5>Hunain Murphy</h5>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="testimonial-card d-flex align-items-center">
               <div class="testimonial-image">
                 <img src="./images/new/3.png" class="img-fluid" alt="Customer Image">
               </div>
               <div class="testimonial-content">
                 <h4><b>Magnificent Work!!!</b></h4>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis impedit possimus
                   aspernatur quas voluptas molestiae voluptates, porro corporis quasi omnis quia
                   ut ipsa sed nisi amet consectetur animi cum perspiciatis?</p>
                 <div class="stars">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                 </div>
                 <h5>Hunain Murphy</h5>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="testimonial-card d-flex align-items-center">
               <div class="testimonial-image">
                 <img src="./images/new/4.png" class="img-fluid" alt="Customer Image">
               </div>
               <div class="testimonial-content">
                 <h4><b>Magnificent Work!!!</b></h4>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis impedit possimus
                   aspernatur quas voluptas molestiae voluptates, porro corporis quasi omnis quia
                   ut ipsa sed nisi amet consectetur animi cum perspiciatis?</p>
                 <div class="stars">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                 </div>
                 <h5>Hunain Murphy</h5>
               </div>
             </div>
           </div>
           <!-- Repeat similar blocks for other testimonials -->

         </div>
       </div>
     </div>
   </div>
 </section>


 <style>
   .carousel-wrapper .barnes {
     width: 100px;
     aspect-ratio: 3/2;
   }
 </style>
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
   aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal">
         <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="container">
           <div class="offer">
             <h2>Limited Time Offer</h2>
             <p><strong>50% Off On All Services!</strong></p>
           </div>
           <form id="contactForm" action="send_email.php" method="post">
             <div class="form-group">
               <input type="text" class="form-control" name="fullName" placeholder="Full Name" required>
             </div>
             <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="Email" required>
             </div>
             <div class="form-group">
               <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone Number" required>
             </div>
             <div class="form-group">
               <textarea class="form-control" name="msg" placeholder="Your Message" rows="3"></textarea>
             </div>
             <button type="submit" href="mailto:" name="submit" class="btn btn-block">Submit</button>
             <!-- <a href="mailto:mr.habibdev@gmail.com" name="submit" class="btn btn-block">Submit</a> -->
             <div class="checkbox">
               <input type="checkbox" id="terms">
               <label for="terms">By providing a telephone number and submitting this form you are consenting to be
                 contacted by SMS text message. Message & data rates may apply. You can reply STOP to opt-out of
                 further messaging.</label>
             </div>
             <p id="thankYouMessage" style="display:none;">Thank you! Your message has been sent.</p>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>


 <!-- FAQ -->
 <section class="section-faq">
   <div class="container">
     <div class="row">
       <div class="col-lg-6 col-md-12 py-5 nontaine">
         <div class="image text-center">
           <img src="./images/new/question-mark.png" class="img-fluid" alt="Image">
         </div>
       </div>
       <div class="col-lg-6 col-md-12">
         <div class="content">
           <h3 class="text-center">Frequently Asked Questions</h3>
           <div class="accordion accordion-flush py-5" id="accordionFlushExample">
             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                   data-bs-target="#flush-collapseOne" aria-expanded="false"
                   aria-controls="flush-collapseOne">
                   Accordion Item #1
                 </button>
               </h2>
               <div id="flush-collapseOne" class="accordion-collapse collapse"
                 data-bs-parent="#accordionFlushExample">
                 <div class="accordion-body">Placeholder content for this accordion, which is
                   intended to demonstrate the <code>.accordion-flush</code> class. This is the
                   first item's accordion body.</div>
               </div>
             </div>
             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                   data-bs-target="#flush-collapseTwo" aria-expanded="false"
                   aria-controls="flush-collapseTwo">
                   Accordion Item #2
                 </button>
               </h2>
               <div id="flush-collapseTwo" class="accordion-collapse collapse"
                 data-bs-parent="#accordionFlushExample">
                 <div class="accordion-body">Placeholder content for this accordion, which is
                   intended to demonstrate the <code>.accordion-flush</code> class. This is the
                   second item's accordion body. Let's imagine this being filled with some actual
                   content.</div>
               </div>
             </div>
             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                   data-bs-target="#flush-collapseThree" aria-expanded="false"
                   aria-controls="flush-collapseThree">
                   Accordion Item #3
                 </button>
               </h2>
               <div id="flush-collapseThree" class="accordion-collapse collapse"
                 data-bs-parent="#accordionFlushExample">
                 <div class="accordion-body">Placeholder content for this accordion, which is
                   intended to demonstrate the <code>.accordion-flush</code> class. This is the
                   third item's accordion body. Nothing more exciting happening here in terms of
                   content, but just filling up the space to make it look, at least at first
                   glance, a bit more representative of how this would look in a real-world
                   application.</div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End FAQ -->

 <!--Main Footer-->
 <footer class="main-footer">
   <div class="auto-container">
     <!--Widgets Section-->
     <div class="widgets-section">
       <div class="row clearfix">
         <!--big column-->
         <div class="big-column col-lg-6 col-md-12 col-sm-12">
           <div class="row clearfix">
             <!--Footer Column-->
             <div class="footer-column col-lg-6 col-md-6 col-sm-12">
               <div class="footer-widget logo-widget">
                 <div class="logo">
                   <img src="./images/main-logo.png" width="200"
                     alt="footer-logo" />
                 </div>
                 <div class="text">
                   Book writing services in America offer expert
                   storytelling, professional editing, and comprehensive
                   support to craft and publish high-quality manuscripts.
                 </div>
                 <ul class="social-icons">
                   <li>
                     <a href="#"><span class="fab fa-facebook-f"></span></a>
                   </li>
                   <li>
                     <a href="#"><span class="fab fa-linkedin-in"></span></a>
                   </li>
                   <li>
                     <a href="#"><span class="fab fa-twitter"></span></a>
                   </li>
                   <li>
                     <a href="#"><span class="fab fa-google-plus-g"></span></a>
                   </li>
                 </ul>
               </div>
             </div>

             <!--Footer Column-->
             <div class="footer-column col-lg-5 col-md-6 col-sm-12">
               <div class="footer-widget links-widget">
                 <h2>Quick links</h2>
                 <div class="widget-content">
                   <ul class="list">
                     <li><a href="#">About Gaille</a></li>
                     <li><a href="#">Privacy Policy</a></li>
                     <li><a href="#">Terms & Conditions</a></li>
                     <li><a href="#">Faq</a></li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <!--big column-->
         <div class="big-column col-lg-6 col-md-12 col-sm-12">
           <div class="row clearfix">
             <!--Footer Column-->
             <div class="footer-column col-lg-5 col-md-6 col-sm-12">
               <div class="footer-widget contact-widget">
                 <h2>Contact Info</h2>
                 <div class="widget-content">
                   <a href="tel:12396860550" class="contact-number">12396860550</a>
                   <ul>
                     <li>4111 scenic valley ln Sugarland TX 77479, Sugarland, MD, United States, Maryland</li>
                     <li>
                       Email :<a href="mailto:info@bookwritingamerica.com">
                         info@bookwritingamerica.com</a>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>

             <!--Footer Column-->
             <div class="footer-column col-lg-7 col-md-6 col-sm-12">
               <div class="footer-widget newsletter-widget">
                 <h2>Newsletter</h2>
                 <div class="text">Get Special offers & Discounts</div>
                 <!-- Newsletter Form -->
                 <div class="newsletter-form">
                   <form method="post">
                     <div class="form-group">
                       <input type="email" name="email" placeholder="Enter Your Email Address" required />
                       <button type="submit" class="theme-btn btn-style-one">
                         <span class="txt">Subscribe</span>
                       </button>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!--Footer Bottom-->
     <div class="footer-bottom clearfix">
       <div class="pull-left">
         <div class="copyright">
           <a href="#">Digi Craft Tech</a>
         </div>
       </div>
       <div class="pull-right">
         <a href="#">All right reserved &copy;</a>
       </div>
     </div>
   </div>
 </footer>
 <!--End pagewrapper-->

 <!--Scroll to top-->
 <div class="scroll-to-top scroll-to-target" data-target="html">
   <span class="fa fa-angle-up"></span>
 </div>

 <!--Scroll to top-->
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <!-- <script src="js/jquery.js"></script> -->
 <script src="js/popper.min.js"></script>
 <script src="js/jquery-ui.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <!-- <script src="js/bootstrap.min.js"></script> -->
 <script src="js/jquery.fancybox.js"></script>
 <script src="js/isotope.js"></script>
 <script src="js/owl.js"></script>
 <script src="js/wow.js"></script>
 <script src="js/appear.js"></script>
 <script src="js/scrollbar.js"></script>
 <script src="js/script.js"></script>
 </body>

 </html>
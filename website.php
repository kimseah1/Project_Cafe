<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
        <title>Gongcha Café</title>
        <link href="CSS/styles.css" rel="stylesheet" />
        <script src="Java/scripts.js"></script>
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" >
            <div class="container"id="mainNav" id="vr">
                <a class="navbar-brand"><H1 id="#Home">Gongcha Café</H1> </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link"  href="cafelogin.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="#optionss">Options</a></li> <!-- Link the menu page-->
                        <li class="nav-item"><a class="nav-link" href="#Coupons">Coupons</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About </a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <header>        
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
              <source src="assets/coffee.mp4" type="video/mp4">
            </video>
          
            
            <div class="container h-100">
              <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <br>
                    <br>
                    <br>
                    <br>
                  <h1 class="display-3" id="slogan">"SIP, SMILE, REPEAT"</h1> 
                  <br>
                  <br>
                  <br>
                  <a class="btn btn-primary btn-xl text-uppercase" href="#coffee">Tell Me More</a>
                </div>
              </div>
            </div>
          </header> 
            

        <!-- Coffee Info, first section-->
        <section class="page-section" id="coffee">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Most Popular</h2>
                </div>
                <br>
                <br>

                <div class="row text-center">
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="64" height="64">
                            <path fill="#010409" d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"/></svg>
                        <h4 class="my-3">Black Coffee</h4>
                        <p class="text-muted">Enjoy our Little Black Coffee: bold, smooth, and simply irresistible. 
                            Savor the rich aroma and deep flavor in every sip, perfect for your daily pick-me-up.</p>
                    </div>
                    
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="64" height="64">
                            <path fill="#00040a" d="M32 32c-9.3 0-18.1 4-24.2 11.1S-1 59.4 .3 68.6l50 342.9c5.7 39.3 39.4 68.5 79.2 68.5h253c39.7 0 73.4-29.1 79.2-68.5l50-342.9c1.3-9.2-1.4-18.5-7.5-25.5S489.3 32 480 32H32zM87.7 224L69 96H443L424.3 224H87.7z"/></svg>
                        <h4 class="my-3">To Go Coffee</h4>
                        <p class="text-muted">Grab a Little To-Go Coffee for your on-the-move mornings! 
                            Bursting with bold flavor and convenience, it's the perfect companion for your busy day ahead.</p>
                    </div>

                    <div class="col-md-4" id="ic3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="64" height="64">
                            <path fill="#000205" d="M88 0C74.7 0 64 10.7 64 24c0 38.9 23.4 59.4 39.1 73.1l1.1 1C120.5 112.3 128 119.9 128 136c0 13.3 10.7 24 24 24s24-10.7 24-24c0-38.9-23.4-59.4-39.1-73.1l-1.1-1C119.5 47.7 112 40.1 112 24c0-13.3-10.7-24-24-24zM32 192c-17.7 0-32 14.3-32 32V416c0 53 43 96 96 96H288c53 0 96-43 96-96h16c61.9 0 112-50.1 112-112s-50.1-112-112-112H352 32zm352 64h16c26.5 0 48 21.5 48 48s-21.5 48-48 48H384V256zM224 24c0-13.3-10.7-24-24-24s-24 10.7-24 24c0 38.9 23.4 59.4 39.1 73.1l1.1 1C232.5 112.3 240 119.9 240 136c0 13.3 10.7 24 24 24s24-10.7 24-24c0-38.9-23.4-59.4-39.1-73.1l-1.1-1C231.5 47.7 224 40.1 224 24z"/>
                        </svg>
                        <h4 class="my-3">Latte Coffee</h4>
                        <p class="text-muted">Sip on our Little Latte, a creamy indulgence crafted just for you. 
                            With velvety smoothness and a hint of espresso, it's a delightful treat to brighten your day.</p>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        
        <!-- Section 2 -->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Coffee</h2>
                    <h3 class="section-subheading text-muted">The most delicious, affordable, and famous coffee types</h3>
                </div>
                <br>

                <div class="row">
                    <!-- Coffee item 1-->
                    <div class="col-lg-4 col-sm-6 mb-4" width="64" height="64">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="img/blackC.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Black Coffee</div>
                                <div class="portfolio-caption-subheading text-muted">A natural cup of black coffee.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Coffee item 2-->
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <img class="img-fluid" src="img/cappuccino.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cappuccino</div>
                                <div class="portfolio-caption-subheading text-muted">A natural cup of cappuccino.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Coffee item 3-->
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <img class="img-fluid" src="img/espresso.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Espresso</div>
                                <div class="portfolio-caption-subheading text-muted">A natural cup of espresso.</div>
                            </div>
                        </div>
                    </div>                   
            </div>
            <br>
            <br>
            
             <!-- Section 3 -->
        <section class="page-section bg-light" id="portfolio2">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" id="optionss">Special Options</h2>
                    <h3 class="section-subheading text-muted">Some other special natural options</h3>
                </div>

                <!-- Special Coffee -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Mocha Coffee -->
                        <div class="portfolio-item">                               
                                <img class="img-fluid" src="img/mocha.jpg" alt="mocha" width="400" height="300" />
                            </a>
                            <div class="portfolio-caption">                             
                                <div class="portfolio-caption-subheading text-muted">Mocha</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Americano Coffee -->
                        <div class="portfolio-item">
                                <img class="img-fluid" src="img/americano.jpg" alt="americano" width="400" height="300" />
                            </a>
                            <div class="portfolio-caption">               
                                <div class="portfolio-caption-subheading text-muted">Americano</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Macchiato Coffee -->
                        <div class="portfolio-item">
                                <img class="img-fluid" src="img/macchiato.jpg" alt="macchiato" width="400" height="300" />
                            </a>
                            <div class="portfolio-caption">                             
                                <div class="portfolio-caption-subheading text-muted">Macchiato</div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>  
    </div>
  </div>
  <br>
  <br>
  <br>

  <!-- Carrusel-->
  <div id="slider">
    <figure>
    <img src="img/grains.webp" alt="">
    <img src="img/beans.webp"alt="">
    <img src="img/cupp.jpg"alt="">
    <img src="img/togo.webp" alt="">
    <img src="img/types.jpg" alt="">
    </figure>
    </div>               
        </section>
       

        <!-- About store-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About </h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img  class="rounded-circle img-fluid" src="img/uss.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading">About us</h4>
                            </div>
                            <div class="timeline-body">Welcome to our friendly café! We're more than just great coffee – we're a community hub where conversations flow freely and smiles abound. With expertly crafted beverages and warm hospitality,
                                 we're your home away from home. Join us for a cozy atmosphere and unforgettable moments..<p class="text-muted">
                            </p></div>
                        </div>
                    </li>
                </li>
            </li>
            <br>
            <br>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/uss.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Why?</h4>
                            </div>
                            <div  class="timeline-body"><p>At our café, we believe in choice and customization. We offer a variety of coffee options so you can find your perfect brew. 
                                From bold espressos to creamy lattes, personalize your drink to your liking with our range of flavors and customization options.</p></div>
                        </div>           
        </section>
        <br>
        <br>
        <br>

        <!-- coupons-->
        <section class="page-section bg-light" id="Coupons">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Coupons</h2>
                    <br>
                </div>
        
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <h4>Coupon 1</h4>
                            <img id="cpi" src="img/Coffee Shop Coupon - Made with PosterMyWall.jpg" alt="Coupon 1" class="img-fluid custom-image"/>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="team-member">
                            <h4>Coupon 2</h4>
                            <img id="cpi" src="img/Coffee Shop Coupon - Made with PosterMyWall (1).jpg" alt="Coupon 2" class="img-fluid custom-image"/>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="team-member">
                            <h4>Coupon 3</h4>
                            <img id="cpi" src="img/Coffee Shop Coupon - Made with PosterMyWall (2).jpg" width="100" alt="Coupon 3" class="img-fluid custom-image"/>
                        </div>
                    </div>
       
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                    <h4 class="large text-muted">Gongcha Café</h4></div>
                </div>
            </div>
        </section>


        <!-- Contact part-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Contact and let us know about your opinion!</h3>
                </div>
                
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            <br />                           
                        </div>
                    </div>
                 
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
                <br>
                <br>
                <br>
                <br>
                
            </div>
        </section>
        <!-- Footer-->
        
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Black Coffee</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/blackC.jpg" alt="blackC" />
                                    <p>Black Coffee is made by brewing coffee powder in hot water. Black Coffee is a great beverage for weight loss as it is made without using milk or any sweetener or additives. 
                                        Black Coffee is said to have great health benefits. </p>
                                  
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cappuccino</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/cappuccino.jpg" alt="cappuccino" />
                                    <p>A cappuccino is a classic espresso beverage which, in Italian coffee culture, is enjoyed only in the early or mid-morning and often accompanied by a breakfast pastry. 
                                        It's made with equal parts espresso, steamed milk, and milk foam, lending a rich, frothy mouthfeel to each sip.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Espresso</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/espresso.jpg" alt="espresso" />
                                    <p>Espresso calls for finely-ground, dark-roast coffee packed tightly into a “puck” through which hot water is pumped at high pressure. 
                                        Espresso typically uses a water to coffee ratio of 1:2 and is brewed in 1-2 oz. servings.</p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Activate the Js-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
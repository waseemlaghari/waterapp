<x-site-header componentName="Contact Us | RO Plants App" />


<!--Section: Contact v.2-->
<div class="maincontactuspage">
    <div class="container">
        <div class="maincontactform">
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">
<div class="mainerrora">
    @if(session('contact_errr'))
    <div class="alert alert-danger" role="alert">
      {{ session('contact_errr') }}
    </div>
    @endif
    @if(session('contact_success'))
    <div class="alert alert-success" role="alert">
      {{ session('contact_success') }}
    </div>
    @endif
</div>

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contactform" method="POST">
@csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" placeholder="Enter your email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" placeholder="Subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" placeholder="Enter Your Message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <br>
                            <div class="text-center text-md-left">
                                <input class="btn btn-primary" type="submit" name="submit" value="Send">
                            </div>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Hyderabad, Sindh, Pakistan</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 92 1234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@waterapp.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
        </div>
    </div>
</div>
<!--Section: Contact v.2-->



<x-site-footer />
@extends('layouts.main')
@section('content')
<header class="page-header">
	<div class="container">
	<h1>Contact</h1>
		<p>A creative digital agency with a diversely creative  team, working together.</p>
	</div>
	<!-- end container -->
  <svg version="1.1" class="divider" x="0px" y="0px" width="240px" height="24px" viewBox="0 0 240 24" enable-background="new 0 0 240 24" xml:space="preserve" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="0.33" d="M240,24V0c-51.797,0-69.883,13.18-94.707,15.59c-24.691,2.4-43.872-1.17-63.765-1.08
c-19.17,0.1-31.196,3.65-51.309,6.58C15.552,23.21,4.321,22.471,0,22.01V24H240z"></path>
    <path fill="#ffffff" fill-opacity="0.33" d="M240,24V2.21c-51.797,0-69.883,11.96-94.707,14.16
c-24.691,2.149-43.872-1.08-63.765-1.021c-19.17,0.069-31.196,3.311-51.309,5.971C15.552,23.23,4.321,22.58,0,22.189V24h239.766H240
z"></path>
    <path fill="#ffffff" d="M240,24V3.72c-51.797,0-69.883,11.64-94.707,14.021c-24.691,2.359-43.872-3.25-63.765-3.17
c-19.17,0.109-31.196,3.6-51.309,6.529C15.552,23.209,4.321,22.47,0,22.029V24H240z"></path>
  </svg>
</header>
<!-- end slider -->
<section class="content-section" data-background="images/section-bg01.png" data-stellar-background-ratio="0.8">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h6>SAY HELLO</h6>
          <h2>Don't hasitate to marketting one stop solution.</h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <div class="col-lg-10 offset-lg-2">
        <div class="row inner">
			<div class="col-lg-9">
			  <p>We want you to join us on our mission to become the best digital marketing 
agency in the world. Give us a call, send us an email, a Facebook message, a 
Tweet, or a Linkedin message. Or just pop in to our office – we’d love to sit 
down and have a chat.

</p><br>
			</div>
			<!-- end col-12 -->
          <div class="col-lg-4">
            <div class="contact-box">
              <figure><img src="images/icon-location.png" alt="Image"></figure>
              <h6>Address:</h6>
              <p>Go Up Ltd 71 Leonard Street<br>
London EC2A 4QS</p>
            </div>
            <!--end contact-box --> 
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="contact-box">
              <figure><img src="images/icon-phones.png" alt="Image"></figure>
              <h6>Phone:</h6>
              <p>Home: 	0207 871 7662<br>
Support: 	0207 871 7662</p>
            </div>
            <!--end contact-box --> 
          </div>
          <!-- end col-4 -->
			<div class="col-lg-4">
            <div class="contact-box">
              <figure><img src="images/icon-email.png" alt="Image"></figure>
              <h6>E-mail:</h6>
              <a href="#">info@obour.co.uk</a>
              <a href="#">career@obour.co.uk</a>
            </div>
            <!--end contact-box --> 
          </div>
          <!-- end col-4 -->
        </div>
        <!-- end row --> 
      </div>
      <!-- end col-10 --> 
    </div>
    <!--end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<div class="google-maps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1241.6604213841422!2d-0.12809576613257362!3d51.507329518468936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cb5e2c80f79%3A0xf764e3f705744a0b!2sMuseum%20of%20Happiness!5e0!3m2!1str!2str!4v1594398090693!5m2!1str!2str" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- end google-maps -->	
<section class="content-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
         <div class="section-title no-spacing">
          <h6>LET'S GO UP</h6>
          <h2>Our team endeavour to respond to<br> all enquiries within 24 hours.</h2>
        </div>
        <!-- end section-title -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-8 offset-lg-2">
        <div class="contact-form">
          <form>
            <div class="row">
              <div class="form-group col-12">
                <select>
                  <option>interest in</option>
                </select>
              </div>
              <!-- end form-group -->
              <div class="form-group col-md-6">
                <input type="text" placeholder="complete name">
                <input type="text" placeholder="e-mail address">
              </div>
              <!-- end form-group -->
              <div class="form-group col-md-6">
                <textarea placeholder="your message"></textarea>
              </div>
              <!-- end form-group -->
              <div class="form-group col-12"> <span>Whether you’re on the east coast or the west coast.</span>
                <input type="submit" value="REQUEST A QUOTE">
              </div>
              <!-- end form-group --> 
            </div>
            <!-- end row -->
          </form>
        </div>
      </div>
      <!-- end col-8 --> 
    </div>
    <!--end row --> 
  </div>
  <!-- end container --> 
</section>
@endsection
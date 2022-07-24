@extends('layouts.master')

@section('title')
@endsection

@section('style')
@endsection

@section('content')
<!-- Breadcrumbs connect -->


<section class="breadcrumbs bconnect">
    <div class="container">
      <div class="breadcrumbs-text">
        <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/connect">connect</a></li>
        </ol>
        <h1>connect</h1>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

<section id="connect-inner" class="connect-inner" style="background-image: url(assets/img/connect..jpg)">
    <div class="container" data-aos="fade-up">
        <div class="connect-inner-area">
            <header class="connect-inner-header text-center">
                <h2>menovahub  network</h2>
                <p> find your cofounder , advisor and freelancers. connect with our team </p>
            </header>
            <div class="row">
               
                <div class="col-lg-6">
             <form action="#" method="post" class="connect-inner-form ">
             <h2 class="text-center mb-5"> call for fund </h2>
                 <div class="col-md-12 ">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                 </div>
                 <div class="col-md-12  ">
                   <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                 </div>
                 <div class="col-md-12">
                  <input type="text" class="form-control" name=" your revenu last 12 months" placeholder="123" required>
                 </div>
                 <div class="col-md-12 mb-5">
                   <textarea class="form-control" name="Stage of Business" rows="6" placeholder=" stage of business " required></textarea>
                 </div>
                 <div class="col-md-12 mb-5">
                    <textarea class="form-control" name="Briefly Describe Your Idea / Startup" rows="6" placeholder="Describe" required></textarea>
                 </div>

                 <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                </div>

            </form>

          </div>
         </div>
        </div>
    </div>
</section>









<!-- start connect inner page
<section id="connect-inner" class="connect-inner" style="background-image: url(assets/img/connect..jpg)">

  <div class="container" data-aos="fade-up"></div>
  <div class="connect-inner-area"> </div>
    <header class="connect-inner-header text-center">
      <h2>menovahub  network</h2>
      <p> find your cofounder , advisor and freelancers. connect with our team </p>
    </header>

    <div class="row">

        <div class="col-lg-6">

        </div>

        <div class="col-lg-6">
        <form action="#" method="post" class="connect-inner-form ">
        <div class="row gy-4">
              <h2 class="text-center"> call for fund </h2>
          <div class="col-md-12 ">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="col-md-12 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="Stage of Business" rows="6" placeholder=" stage of business " required></textarea>
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name=" your revenu last 12 months" placeholder="" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="Briefly Describe Your Idea / Startup" rows="6" placeholder="Describe" required></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>
        </div>
      </form>

     </div>

  </div>
  </div>
</section>
-->
<!-- end connect inner page-->
@endsection

@section('script')
@endsection
<!--









        <div class="text-box">
          <h3>30,000+ Investor Profiles</h3>
          <p>Eliminate the guesswork and find the right investors for your startup in minutes, not hours.</p>
        </div>






   <form action="#" method="post" class="raise-form ">
        <div class="row gy-4">
              <h2 class="text-center"> call for fund </h2>
          <div class="col-md-12 ">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="col-md-12 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="Stage of Business" rows="6" placeholder=" stage of business " required></textarea>
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name=" your revenu last 12 months" placeholder="" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="Briefly Describe Your Idea / Startup" rows="6" placeholder="Describe" required></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>
        </div>
      </form>
-->


@extends('layouts.app')

@section('content')
<section class="cnttt-section-sec">

    <div class="container-fluid">

        <div class="row justify-content-between">

            <div class="col-lg-6 col-md-12 col-12">

                <div class="cnttt-section-ing">

                    <img src="{{ asset('front_assets/img/contact-img-1.jpg')}}" alt="" class="img-fluid">

                </div>

            </div>

            <div class="col-lg-5 col-md-12 col-12">

                <div class="heading_summer_Collection heading_ser_cnt abt-summer-fashion-txt mb-2">

                    <span>We Are Happy To Answer You</span>

                    <h3>Contact</h3>

                </div>

                <div class="main-cnnt-info align-items-center">

                    <div class="main-cnnt-info-add">

                        <h5>Address:</h5>

                        <p>121 King St, Melbourne VIC 3000, Australia</p>

                    </div>

                    <div class="main-cnnt-info-add">

                        <p>Telephone: 888 321 9874</p>

                        <p>Email: mailto:info@example.com</p>

                    </div>

                </div>

                <div class="heading_summer_Collection abt-summer-fashion-txt mb-2">

                    <span>Need Help</span>

                    <h4>Send Your Request</h4>

                </div>

                <div class="cnt-pag-form">

                    <div class="cnt-pag-form-main">

                        <input class="form-control" type="text" name="" id="" placeholder="Name">

                    </div>

                    <div class="cnt-pag-form-main">

                        <input class="form-control" type="tel" name="" id="" placeholder="Phone Number">

                    </div>

                    <div class="cnt-pag-form-main">

                        <input class="form-control" type="email" name="" id="" placeholder="Email Address">

                    </div>

                    <div class="cnt-pag-form-main">

                        <textarea rows="6"

                         class="form-control" name="" id="" placeholder="Message"></textarea>

                    </div>

                    <div class="cnt-pag-form-main-btn">

                        <div class="btn_home_banner">

                            <a href="#">Visit Online Store</a>

                        </div>

                    </div>



                </div>



            </div>

        </div>

    </div>

</section>
@endsection

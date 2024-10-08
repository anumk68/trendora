@extends('layouts.app')

@section('content')
<section class="cnttt-section-sec">

    <!-- Header with Image Overlay -->
    <div class="header-image" style="position: relative;">
        <img src="{{ asset('front_assets/img/contact-img-1.jpg') }}" alt="Contact Us Header" class="img-fluid w-100" style="opacity: 0.5;height:374px;">
        <h1 class="text-center text-white position-absolute w-100" style="top: 50%; transform: translateY(-50%);">Contact Us</h1>
    </div>
    <div class="container p-2 mt-4 text-center">
        <h3>Contact Information</h3>
        <p>Need assistance with your order? Contact us for inquiries, product support, or any questions you may have. Our team is here to ensure you have a seamless shopping experience!</p>
    </div>

    <div class="container p-2 mt-4">
        <div class="row">

            <div class="col-4">
                <div class="card border  p-4 text-center bg-light" style="border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Address</h5>
                        <p class="card-text">121 King St, Melbourne VIC 3000, Australia</p>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card border  p-4 text-center bg-light" style="border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Telephone</h5>
                        <p class="card-text">888 321 9874</p>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card border  p-4 text-center bg-light" style="border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Email</h5>
                        <p class="card-text"><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container-fluid mt-4">

        <div class="row p-4">


            <div class="col-lg-6 col-md-12">
                <div class="cnttt-section-ing">
                    <img src="{{ asset('front_assets/img/contact-img-1.jpg') }}" alt="" class="img-fluid rounded">
                </div>
            </div>


            <div class="col-lg-6 col-md-12 bg-light p-2">
                <div class="heading_summer_Collection mb-2">
                    <span>We Are Happy To Answer You</span>
                </div>
                <div class="heading_summer_Collection mb-2">
                    <h4>Send Your Request</h4>
                </div>
                <form action="{{ route('contact.store') }}" method="POST" class="p-2">
                    @csrf
                    <div class="cnt-pag-form">
                        <div class="cnt-pag-form-main mb-2">
                            <input class="form-control" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="cnt-pag-form-main mb-2">
                            <input class="form-control" type="tel" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="cnt-pag-form-main mb-2">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="cnt-pag-form-main mb-2">
                            <textarea rows="6" class="form-control" name="message" placeholder="Message" required>{{ old('message') }}</textarea>
                            @error('message')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="cnt-pag-form-main-btn">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

        <!-- Map Section -->
        <!-- Map Section -->
        <div class="row mt-4">
            <div class="col-12 p-4">
                <h4 class="text-center">Our Location</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345098135!2d144.9631!3d-37.8136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f0f8d61%3A0x5045675218ceed7!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sus!4v1605675561234!5m2!1sen!2sus" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>


    </div>

</section>


@endsection

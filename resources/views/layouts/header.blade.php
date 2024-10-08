<header class="py-2">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="{{route('trendora')}}">Tendora</a>
            </div>

            <nav class="d-flex flex-grow-1 justify-content-start">
                <ul class="nav">
                    <li class="nav-item_2">
                        <a class="nav-link" href="#">Shop <i class="arrow-down"></i></a>
                    </li>
                    <div class="custom_menu_2 mega_menu">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-3 text-left">
                                    <div class="mage_title">
                                        <h2>Category Details</h2>
                                        <ul>
                                            @foreach($data as $index => $category)
                                            @if($index >= 0 && $index < 7) <li><a href="#">{{ $category->title }}</a></li>
                                                @endif
                                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3 text-left">
                                    <br>
                                    <ul class="meta_title">
                                        @foreach($data as $index => $category)
                                        @if($index >= 7 && $index < 14) <li><a href="#">{{ $category->title }}</a></li>
                                            @endif
                                            @endforeach
                                    </ul>
                                </div>
                                <div class="col-3 text-left">
                                    <br>
                                    <ul class="meta_title">
                                        @foreach($data as $index => $category)
                                        @if($index >= 14 && $index < 21) <li><a href="#">{{ $category->title }}</a></li>
                                            @endif
                                            @endforeach
                                    </ul>
                                </div>
                                <div class="col-3 text-left">
                                    <div class="img_fashion">
                                        <img src="{{ asset('front_assets/img/shop-mega-menu-img-600x637.jpg') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <li class="nav-item_3">
                        <a class="nav-link" href="#">Product <i class="arrow-down"></i></a>
                    </li>
                    <div class="custom_menu_3 mega_menu">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-3 text-left">
                                    <div class="mage_title">
                                        <h2>Product Details</h2>
                                        <ul>
                                            @foreach($products as $index => $prod)
                                            @if($index >= 0 && $index < 7) <li><a href="#">{{ $prod->title }}</a></li>
                                                @endif
                                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3 text-left">
                                    <br>
                                    <ul class="meta_title">
                                        @foreach($products as $index => $prod)
                                        @if($index >= 7 && $index < 14) <li><a href="#">{{ $prod->title }}</a></li>
                                            @endif
                                            @endforeach
                                    </ul>
                                </div>
                                <div class="col-3 text-left">
                                    <br>
                                    <ul class="meta_title">
                                        @foreach($products as $index => $prod)
                                        @if($index >= 14 && $index < 21) <li><a href="#">{{ $prod->title }}</a></li>
                                            @endif
                                            @endforeach
                                    </ul>
                                </div>
                                <div class="col-3 text-left">
                                    <div class="img_fashion">
                                        <img src="{{ asset('front_assets/img/product-mega-menu-img.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <li class="nav-item_4">
                        <a class="nav-link" href="#">Pages<i class="arrow-down"></i></a>
                    </li>
                    <div class="custom_menu_4 mega_menu" style="top: 60px; width: 1600px; position: fixed; left: 50%; transform: translateX(-50%)">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-3 text-left">
                                    <div class="mage_title">
                                        <h2>Demo Pages</h2>
                                        <ul>
                                            <li><a href="#">Big Shopping</a></li>
                                            <li><a href="#">Women Fashion</a></li>
                                            <li><a href="#">Fashion Jewellery</a></li>
                                            <li><a href="#">Wrist Watch</a></li>
                                            <li><a href="#">Lingerie Store</a></li>
                                            <li><a href="#">Fashion Store</a></li>
                                            <li><a href="#">Footer Sneakers</a></li>
                                            <li><a href="#">Home Decoration</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3 text-left">
                                    <br>
                                    <br>
                                    <ul class="meta_title">
                                        <li><a href="#">Winter Fashion</a></li>
                                        <li><a href="#">Yoga Accessories</a></li>
                                        <li><a href="#">Kids Fashion</a></li>
                                        <li><a href="#">Footwear Boots</a></li>
                                        <li><a href="#">Bridal Fashion</a></li>
                                        <li><a href="#">Cosmetics</a></li>
                                        <li><a href="#">Season Sale</a></li>
                                    </ul>
                                </div>
                                <div class="col-3 text-left">
                                    <br>
                                    <br>
                                    <ul class="meta_title">
                                        <li><a href="#">Winter Fashion</a></li>
                                        <li><a href="#">Yoga Accessories</a></li>
                                        <li><a href="#">Kids Fashion</a></li>
                                        <li><a href="#">Footwear Boots</a></li>
                                        <li><a href="#">Bridal Fashion</a></li>
                                        <li><a href="#">Cosmetics</a></li>
                                        <li><a href="#">Season Sale</a></li>
                                    </ul>
                                </div>
                                <div class="col-3 text-left">
                                    <div class="img_fashion">
                                        <img src="{{ asset('front_assets/img/shop-mega-menu-img-600x637.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </nav>

            <div class="right_search_bar">
                <form action="" class="search-tebdora-btn">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <button type="button" class="btn btn-primary button_header_user" data-bs-toggle="modal" data-bs-target="#exampleModalheader" style="display:block !important;">
                        <i class="fa-regular fa-user"></i>
                    </button>
                    <a href="{{route('trendora.wishlist')}}" style="color: black;"><i class="fa-regular fa-heart"></i></a>
                    <div class="hamburger-box">
                        <div class="bun top"></div>
                        <i class="fa-solid fa-cart-fa-solid fa-cart-shopping">
                            <div class="bun bottom"></div>
                            <div class="super-container">
                                <div class="slide-container">
                                    <div class="stripe toggle-nav js-nav">
                                    </div>
                                    <div class="nav-wrap">
                                        <nav class="menu">

                                            <ul class="head_cart">
                                                <li class="cart_side_main">
                                                    <div class="about_side_p">
                                                        <p class="padding_cart">Cart(1)</p>
                                                    </div>

                                                    <div class="about_us_cross">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </div>


                                                </li>

                                                <li>
                                                    <div class="dress_main_box">
                                                        <div class="dress_1box">
                                                            <div class="dress1_img">
                                                                <img src="img/about/about-gallery-3-600x750.jpg" alt="loading" class="image-fluid" height="100" width="100">
                                                            </div>
                                                            <div class="img_text">
                                                                <p>
                                                                    Western Dress With Jacket - L
                                                                </p>
                                                                <div class="dress_quan">
                                                                    <span>-</span>
                                                                    <span>1</span>
                                                                    <span>+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dress_2box">
                                                            <div class="cross_dress">
                                                                <i class="fa-solid fa-xmark"></i>
                                                                <p>$109.37</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>


                                                <li class="subtotal_positionmain">
                                                    <div class="dress_total">
                                                        <div class="dress_sub">
                                                            <p>Subtotal</p>
                                                        </div>
                                                        <div class="dress_price">
                                                            <span>
                                                                $109.37
                                                            </span>
                                                        </div>
                                                    </div>

                                                </li>

                                                <li class="cart_main_button">
                                                    <button class="view_cart_right">View Cart</button>
                                                    <button class="checkout_right">Checkout</button>
                                                </li>

                                            </ul>
                                            <!-- <ul>
                                <li><a href="#">Option 1</a></li>
                                <li><a href="#">option 2</a></li>
                                <li>
                                  <div class="dropdown_list">
                                    <div class="dropbtn">Dropdown list <i style="vertical-align: top;" class="fa fa-sort-desc"></i></div>
                                    <div class="dropdown-content">
                                      <a href="#">list1</a>
                                      <a href="#">list2</a>
                                    </div>
                                  </div>
                                </li>
                                <li><a href="#">Option 3</a></li>
                                <li><a href="#">Option 4</a></li>
                              </ul> -->
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </i>
                    </div>
                </form>
            </div>

            <div class="menu-container-mobile">
                <div class="menu-btn" id="menuBtn">
                    <div class="menu-icon"></div>
                    <div class="menu-icon"></div>
                    <div class="menu-icon"></div>
                </div>
                <nav class="side-menu" id="sideMenu">
                    <div class="logo">
                        <a href="#">Tendora</a>
                    </div>
                    <ul>
                        <li>
                            <a href="#">Company <i class="fa fa-angle-down" style="font-size:24px"></i></a>
                            <ul class="sub_menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Life at Technomarch</a></li>
                                <li><a href="#">Technology Partners</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Services <i class="fa fa-angle-down" style="font-size:24px"></i></a>
                            <ul class="sub_menu">
                                <li><a href="#">Manage IT Services</a></li>
                                <li><a href="#">NOC Services</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Hire <i class="fa fa-angle-down" style="font-size:24px"></i></a>
                            <ul class="sub_menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Resources <i class="fa fa-angle-down" style="font-size:24px"></i></a>
                            <ul class="sub_menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>

                        <form action="">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <div class="main_icoooo">
                            <i class="fa-regular fa-user"></i>
                            <a href="{{route('trendora.wishlist')}}"><i class="fa-regular fa-heart"></i></a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>

<div class="modal fade" id="exampleModalheader" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @if (session('success'))
    <script>
        $('#exampleModalheader').modal('hide');
        alert('{{ session('success') }}');
    </script>
@endif

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <section class="signin_popup py-9">
                    <form action="{{ route('auth.handle') }}" method="POST" class="form_sign_in">
                        @csrf
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item heading_color" role="presentation">
                                <button class="nav-link active" id="pills-sign_in-tab" data-bs-toggle="pill" data-bs-target="#pills-sign_in" type="button" role="tab" aria-controls="pills-sign_in" aria-selected="true">Sign in</button>
                            </li>
                            <li class="nav-item heading_color" role="presentation">
                                <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill" data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register" aria-selected="false">Register</button>
                            </li>
                        </ul>
                        <div class="tab-content content_padding" id="pills-tabContent">
                            <!-- Login Tab -->
                            <div class="tab-pane fade show active" id="pills-sign_in" role="tabpanel" aria-labelledby="pills-sign_in-tab">
                                <div class="col-lg-12">
                                    <label for="login_username">Username or email *</label>
                                    <input type="text" class="input-text required" name="name" id="login_username" placeholder="Username">
                                </div>
                                <div class="col-lg-12">
                                    <label for="login_password">Password*</label>
                                    <input type="password" class="input-text required" name="password" id="login_password" placeholder="Password">
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkbox_remember">
                                        <input type="checkbox" id="remember_me" name="remember" value="checkbox">
                                        <label for="remember_me"> Remember Me</label>
                                    </div>
                                </div>
                                <div class="forget_pass">
                                    <a href="#">Lost your password?</a>
                                </div>
                                <div class="login_pop_up">
                                    <button type="submit" name="action" value="login" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                            <!-- Registration Tab -->
                            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                                <div class="col-lg-12">
                                    <label for="register_username" class="required">Username*</label>
                                    <input type="text" class="input-text required" name="register_username" id="register_username" placeholder="Username" >
                                </div>
                                <div class="col-lg-12">
                                    <label for="register_email">Email Address*</label>
                                    <input type="email" class="input-text required" name="email" id="register_email" placeholder="Email Address">
                                </div>
                                <div class="col-lg-12">
                                    <label for="register_password">Password*</label>
                                    <input type="password" class="input-text required" name="register_password" id="register_password" placeholder="Password" >
                                </div>
                                <p class="sign_in_p">Your personal data will be used to support your experience throughout this
                                    website, to manage access to your account, and for other purposes described in our privacy
                                    policy.</p>
                                <div class="login_pop_up">
                                    <button type="submit" name="action" value="register" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
const sizeButtons = document.querySelectorAll('.view-product-popup-select-size .size-btn');
const selectedSizeElement = document.getElementById('selected-size');

sizeButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove 'active' class from all buttons
        sizeButtons.forEach(btn => btn.classList.remove('active'));

        // Add 'active' class to the clicked button
        button.classList.add('active');

        // Update the displayed selected size
        const selectedSize = button.getAttribute('data-size');
        selectedSizeElement.textContent = selectedSize;
    });
});

</script>


<script>
const Carousel = (() => {
const getActiveSlide = () =>
    document.querySelector(".carousel__slide.active");
const getFirstSlide = () =>
    document.querySelector(".carousel__slider").firstElementChild;
const getLastSlide = () =>
    document.querySelector(".carousel__slider").lastElementChild;

const getSiblingSlide = (slide, direction) =>
    direction === "prev"
        ? slide.previousElementSibling
        : slide.nextElementSibling;

const getNewActiveSlide = (key, activeSlide) => {
    const actions = {
        Home: getFirstSlide,
        End: getLastSlide,
        ArrowLeft: () => getSiblingSlide(activeSlide, "prev"),
        ArrowRight: () => getSiblingSlide(activeSlide, "next")
    };
    return actions[key]?.() || null;
};

const updateScreen = (activeSlide) => {
    const carouselScreen = document.querySelector(".image-display .screen");
    const img = activeSlide.querySelector("img").cloneNode(true);
    carouselScreen.innerHTML = "";
    carouselScreen.appendChild(img);
};

const scrollToActiveSlide = (activeSlide) => {
    const carouselSlider = document.querySelector(".carousel__slider");
    const { offsetLeft, offsetWidth } = activeSlide;
    const { clientWidth } = carouselSlider;

    carouselSlider.scrollTo({
        left: offsetLeft - clientWidth / 2 + offsetWidth / 2,
        behavior: "smooth"
    });
};

const updateActiveSlideClass = (activeSlide) => {
    document
        .querySelectorAll(".carousel__slide.active")
        .forEach((slide) => slide.classList.remove("active"));
    activeSlide.classList.add("active");
};

const updateCarousel = (activeSlide) => {
    updateActiveSlideClass(activeSlide);
    updateScreen(activeSlide);
    scrollToActiveSlide(activeSlide);
    updateButtonStates(activeSlide);
};

const updateButtonStates = (activeSlide) => {
    const prevButton = document.querySelector(".carousel__btn.prev");
    const nextButton = document.querySelector(".carousel__btn.next");

    prevButton.disabled = !getSiblingSlide(activeSlide, "prev");
    nextButton.disabled = !getSiblingSlide(activeSlide, "next");
};

const handleKeydown = (e) => {
    if (!e.target.closest(".carousel__slider")) return;
    const activeSlide = getActiveSlide();
    const newActiveSlide = getNewActiveSlide(e.key, activeSlide);

    if (newActiveSlide) {
        e.preventDefault();
        updateCarousel(newActiveSlide);
    }
};

const handleButtonClick = (e) => {
    const activeSlide = getActiveSlide();
    const newActiveSlide = getSiblingSlide(
        activeSlide,
        e.currentTarget.classList.contains("prev") ? "prev" : "next"
    );

    if (newActiveSlide) {
        updateCarousel(newActiveSlide);
    }
};

const handleCarouselClick = (e) => {
    const clickedSlide = e.target.closest(".carousel__slide");
    if (clickedSlide) {
        updateCarousel(clickedSlide);
    }
};

const initCarousel = () => {
    const carouselSlider = document.querySelector(".carousel__slider");
    const prevButton = document.querySelector(".carousel__btn.prev");
    const nextButton = document.querySelector(".carousel__btn.next");

    updateCarousel(getFirstSlide());

    document.addEventListener("keydown", handleKeydown);
    prevButton.addEventListener("click", handleButtonClick);
    nextButton.addEventListener("click", handleButtonClick);
    carouselSlider.addEventListener("click", handleCarouselClick);
};

initCarousel();
})();

</script>


<script>
var burger = $(".hamburger-box");
burger.on("click", function (e) {
$(this).toggleClass("active");
$('.js-nav').parent().find('.menu').toggleClass('active');
});
</script>

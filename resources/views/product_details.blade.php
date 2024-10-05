@extends('layouts.app')
<style>
    /* -------------------------caraousel-------------------------- */
    /*
    *,
    *::after,
    *::before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Jost", sans-serif;
        list-style: none;
    } */
    /*
    :root {
        --items: 5;
        --gap: 0.75rem;

        --border-xl: 20px;
        --border-m: 8px;
        --border-s: 6px;

        --accent-color: hsl(198, 86%, 53%);
        --fill-primary: hsl(204, 3%, 47%);
        --fill-active: hsl(204, 23%, 20%);
        --fill-disabled: hsl(204, 9%, 85%);
    } */

    html {
        scroll-behavior: smooth;
    }

    .small_img img {
        height: 100%;
        width: 100%;
        max-width: 100%;
        object-fit: cover;
        display: block;
    }

    .image-thumbnail-carousel {
        padding: 1rem;
        width: clamp(360px, 90%, 830px);
        display: flex;
        flex-flow: column;
        gap: 1rem;
        position: relative;
    }


    .image-display {
        border-radius: var(--border-xl);
        /* overflow: hidden; */
        /* min-height: 30vmin; */
        /* height: 100%; */
        aspect-ratio: 16 / 9;
        box-shadow: 0 0.375em 0.67em #0003, 0 0.5em 1.3em #0002;
    }

    .screen {
        block-size: 100%;
        display: flex;
        background-image: linear-gradient(12deg, #aaa, #eee);
        position: relative;
        user-select: none;
    }

    .thumbnail-carousel {
        display: flex;
        gap: var(--gap);
        block-size: 100%;
    }

    .carousel__btn {
        flex: 1 0 max(44px, 5.834%);
        background: #0000;
        border: 1px solid #0000;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .arrow-icon {
        margin-inline: auto;
        outline: none;
        border: 0;
        scale: 1;
        display: inline grid;
        width: max(80%, 1.5rem);
        height: max(80%, 1.5rem);
        fill: var(--fill-primary);
    }

    .carousel__btn:hover .arrow-icon {
        fill: var(--fill-active);
    }

    .carousel__btn:disabled {
        opacity: 0.1;
        pointer-events: none;
    }

    .carousel__slider {
        user-select: none;
        flex-grow: 999;
        list-style: none;
        display: flex;
        gap: var(--gap);
        padding: 0.5rem;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
    }

    .carousel__slider::-webkit-scrollbar {
        display: none;
    }

    .carousel__slide {
        cursor: pointer;
        border-radius: var(--border-m);
        overflow: hidden;
        scroll-snap-align: center;
        flex: 1 0 calc((100% / var(--items)) - 10px);
    }

    .active.carousel__slide {
        outline: 0.125em solid var(--accent-color);
        outline-offset: -0.37em;
    }

    @media (max-width: 680px) {
        .image-thumbnail-carousel {
            width: 90vw;
        }

        .active.carousel__slide {
            background-color: var(--fill-active);
            outline-offset: 3px;
        }

        .carousel__btn {
            flex-grow: 0;
        }

        .thumbnail-carousel {
            user-select: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel__slider {
            max-width: fit-content;
            align-items: center;
            gap: 1em;
        }

        .carousel__slide {
            flex: none;
            aspect-ratio: 1;
            block-size: 0.625rem;
            border-radius: 50%;
            background-color: var(--fill-primary);
        }

        .thumbnail {
            opacity: 0;
            display: none;
            aspect-ratio: 16 / 9;
            block-size: 8vw;
            position: absolute;
            border-radius: var(--border-s);
            overflow: hidden;
            z-index: 99;
            will-change: transform, opacity;
            transition: opacity 150ms ease-out;
            transform-origin: bottom;
            translate: -50%;
            bottom: 20%;
        }

        .carousel__slide:not(.active):hover .thumbnail {
            opacity: 1;
            display: block;
            animation: show 250ms ease-out forwards;
            box-shadow: 0 0.375em 0.67em #0003, 0 0.5em 1.3em #0002;
        }

        @keyframes show {
            from {
                opacity: 0;
                transform: scale(0);
            }

            to {
                display: block;
                transform: scale(1);
                opacity: 1;
            }
        }
    }


    /* -------------------------------------2nd section----------------------------------- */
    /* .sizes {
        display: flex;
        gap: 5px;
        padding: 12px 0;
        margin-bottom: 20px;
    }



    .sizes input[type="radio"] {
        display: none;
    }

    .sizes label {
        border: 1px solid #ccc;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 4px;
        user-select: none;
    }

    .sizes input[type="radio"]:checked+label {
        border-color: black;
        font-weight: bold;
    } */
</style>
@section('content')
<section class="shop-sec-main pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  col-md-12 col-sm-12">
                    <div class="image-thumbnail-carousel">
                        <section class="image-display">
                            <div class="screen small_img"></div>
                        </section>
                        <section class="thumbnail-carousel">
                            <button type="button" class="carousel__btn prev" aria-label="Previous slide">
                                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-left-circle"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                                </svg>
                            </button>
                            <ul class="carousel__slider">
                                <li class="carousel__slide">
                                    <div class="thumbnail small_img">
                                        <img loading="lazy" src="{{ asset('front_assets/img/summer_demo_2.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li class="carousel__slide">
                                    <div class="thumbnail small_img">
                                        <img loading="lazy" src="{{ asset('front_assets/img/summer_demo_33.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li class="carousel__slide small_img">
                                    <div class="thumbnail">
                                        <img loading="lazy" src="{{ asset('front_assets/img/summer_demo_4.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li class="carousel__slide small_img">
                                    <div class="thumbnail">
                                        <img loading="lazy" src="{{ asset('front_assets/img/summer_demo_55.jpg') }}" alt="">
                                    </div>
                                </li>

                            </ul>
                            <button type="button" class="carousel__btn next" aria-label="Next slide">
                                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-right-circle"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                </svg>
                            </button>
                        </section>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="productmain">
                        <div class="page-back">
                            <p><a href="index.html">Home</a> / <a href="#">Women</a> / Western Dress
                                With Jacket</p>
                        </div>
                        <form>
                            <h1>Western Dress With Jacket</h1>
                            <p class="price_cloth">$109.00 <del>$119.00</del><span class="percent-span"> (8% OFF)</span>
                            </p>
                            <div class="product_rating">
                                <div class="rate_star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="rate_reviews">
                                    <p>(2 Reviews)</p>
                                </div>
                            </div>

                            <div class="product_discrip">
                                <p>Made with the same Phase Change Materials invented to control astronauts’ body
                                    temperatures in spaceflight. Lorem ipsum dolor sit amet,</p>
                            </div>

                            <div class="product_detail_size">
                                <p>Size: <span>L</span></p>
                                <div class="main_sizes">
                                    <button class="size-btn1 active" data-size="L">L</button>
                                    <button class="size-btn1" data-size="M">M</button>
                                    <button class="size-btn1" data-size="S">S</button>
                                    <button class="size-btn1" data-size="XL">XL</button>
                                </div>


                            </div>
                            <div class="size_chart">
                                <button type="button" class="size_chart_border" data-toggle="modal"
                                    data-target="#rtsizechart">
                                    - Size Chart
                                </button>
                            </div>

                            <div class="product_main">
                                <div class="quantity-cart">
                                    <div class="quantity-selector">
                                        <button class="decrease">-</button>
                                        <input type="text" id="quantity" value="1" readonly>
                                        <button class="increase">+</button>

                                    </div>

                                </div>
                                <button class="add-to-cart">
                                    <span class="cart-icon">🛒</span> Add To Cart
                                </button>
                            </div>

                    </div>





                    <div class="product_meta">
                        <div class="sku_wrapper">
                            SKU : <p>  OWD0011</p>
                        </div>
                        <div class="posyed_in">
                            Categories:
                            <p><a href="#">Dress</a></p>
                            <p><a href="#">Women</a></p>

                        </div>
                    </div>

                    </form>

                </div>




            </div>
        </div>

        </div>
    </section>



    <section class="cloth_navtab py_9 pb-0">
        <div class="container">
            <nav>
                <div class="nav nav-tabs product_padding_discription" id="nav-tab" role="tablist">
                    <button class="nav-link active nav_link_product_details" id="nav-description-tab"
                        data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab"
                        aria-controls="nav-description" aria-selected="true">Description</button>
                    <button class="nav-link nav_link_product_details" id="nav-additional_information-tab"
                        data-bs-toggle="tab" data-bs-target="#nav-additional_information" type="button" role="tab"
                        aria-controls="nav-additional_information" aria-selected="false">Additional
                        information</button>
                    <button class="nav-link nav_link_product_details" id="nav-information-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information"
                        aria-selected="false">Information</button>
                    <button class="nav-link nav_link_product_details" id="nav-reviews-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews"
                        aria-selected="false">Reviews (2)</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                    aria-labelledby="nav-description-tab" tabindex="0">

                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab" tabindex="0">
                                <h2 class="space_under_head">Description</h2>
                                <div class="tab_content_main">
                                    <p>Made with the same Phase Change Materials invented to control astronauts’ body
                                        temperatures
                                        in spaceflight.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet ligula in
                                        felis
                                        viverra
                                        egestas. Donec egestas sit amet augue convallis fermentum. Mauris at risus. Orci
                                        varius
                                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div>

                                <h3 class="product_detail_fabric">Fabric</h3>
                                <ul>
                                    <li class="tab_content_list">57% polyester, 43% PCM-infused polyester</li>
                                    <li class="tab_content_list">Hyperbreathable Stretch Knit</li>
                                    <li class="tab_content_list">Phase Change Materials</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <img src="{{ asset('front_assets/img/summer_demo_66.jpg')}}" alt="image-1" width="280" height="350">
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="nav-additional_information" role="tabpanel"
                    aria-labelledby="nav-additional_information-tab" tabindex="0">
                    <h2 class="space_under_head">Additional information</h2>

                    <div class="product_item_attributes">
                        <p class="size_detail_des">Size:</p>
                        <p class="size_attri_detail_des">
                            <a href="#">L</a>,
                            <a href="#">M</a>,
                            <a href="#">S</a>,
                            <a href="#">Xl</a>

                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab"
                    tabindex="0">

                    <h2 class="space_under_head">Information</h2>
                    <p>Shipping : We currently offer free shipping worldwide on all orders over $100. Sizing : Fits true
                        to size. Do you need size advice? Return & exchange : If you are not satisfied with your
                        purchase you can return it to us within 14 days for an exchange or refund. More info. Assistance
                        : Contact us on 888 123 4567</p>

                </div>
                <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab"
                    tabindex="0">


                    <h2 class="space_under_head">2 reviews for Western Dress With Jacket</h2>
                    <div class="reviews_main review_margin">
                        <div class="reviewimg">
                            <img src="{{ asset('front_assets/img/bab94b4387d9ff389b0edeef12c9bf20.jpeg') }}" alt="image-reviews"
                                class="review_img1">
                        </div>
                        <div class="reviews_star">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.</p>
                        </div>
                    </div>


                    <div class="reviews_main">
                        <div class="reviewimg">
                            <img src="{{ asset('front_assets/img/bab94b4387d9ff389b0edeef12c9bf20.jpeg') }}" alt="image-reviews"
                                class="review_img1">
                        </div>
                        <div class="reviews_star">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.</p>
                        </div>
                    </div>


                </div>


            </div>
        </div>


    </section>



    <section class="Related_products py_9 pb-0">
        <div class="container">
            <h2 class="space_under_head">Related products</h2>

            <div class="row justify-content-between">

                <div class="col-lg-3 col-md-5 col-6">

                    <div class="under_main_summer">

                        <div class="summer_insight">

                            <div class="imageBox">

                                <div class="box">

                                    <img class="img1" src="{{ asset('front_assets/img/summer_demo_1.jpg') }}" class="img-fluid" alt="">

                                    <img class="hover_img" src="{{ asset('front_assets/img/summer_demo_2.jpg') }}" class="img-fluid" alt="">

                                </div>



                                <div class="icon_main_under">

                                    <div class="flx_main_icon">

                                        <i class="fa-solid fa-heart"></i>

                                        <!-- <i class="fa-regular fa-eye"> -->
                                        <!-- Button trigger modal -->
                                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>

                                        </i> -->
                                        <!-- <button type="button" class="btn btn-primary focus_btn_set" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa-regular fa-eye"></i>
                                    </button> -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fa-regular fa-eye"></i>
                                        </button>

                                        <i class="fa-solid fa-bag-shopping"></i>

                                    </div>

                                    <span class="onsale"> Sale</span>

                                </div>

                            </div>

                        </div>

                        <div class="txt_under_bottom">

                            <h2>Western Dress With Jacket</h2>

                            <p>$109.00 <span>$119.00</span></p>

                        </div>

                    </div>



                </div>

                <div class="col-lg-3 col-md-5 col-6">

                    <div class="under_main_summer">

                        <div class="summer_insight">

                            <div class="imageBox">

                                <div class="box">

                                    <img class="img1" src="{{ asset('front_assets/img/summer_demo_3.jpg') }}" class="img-fluid" alt="">

                                    <img class="hover_img" src="{{ asset('front_assets/img/summer_demo_33.jpg') }}" class="img-fluid" alt="">

                                </div>



                                <div class="icon_main_under">

                                    <div class="flx_main_icon">

                                        <i class="fa-solid fa-heart"></i>

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fa-regular fa-eye"></i>
                                        </button>

                                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-regular fa-eye"></i>
                                    </button> -->

                                        <i class="fa-solid fa-bag-shopping"></i>

                                    </div>



                                </div>

                            </div>

                        </div>

                        <div class="txt_under_bottom">

                            <h2>Women Dot Print Dress</h2>

                            <p>$129.00</p>

                        </div>

                    </div>



                </div>



                <div class="col-lg-3 col-md-5 col-6">

                    <div class="under_main_summer">

                        <div class="summer_insight">

                            <div class="imageBox">

                                <div class="box">

                                    <img class="img1" src="{{ asset('front_assets/img/summer_demo_4.jpg') }}" class="img-fluid" alt="">

                                    <img class="hover_img" src="{{ asset('front_assets/img/summer_demo_44.jpg') }}" class="img-fluid" alt="">

                                </div>



                                <div class="icon_main_under">

                                    <div class="flx_main_icon">

                                        <i class="fa-solid fa-heart"></i>

                                        <i class="fa-regular fa-eye"></i>

                                        <i class="fa-solid fa-bag-shopping"></i>

                                    </div>



                                </div>

                            </div>

                        </div>

                        <div class="txt_under_bottom">

                            <h2>Ladies Frock</h2>

                            <p>$120.00 </p>

                        </div>

                    </div>



                </div>



                <div class="col-lg-3 col-md-5 col-6">

                    <div class="under_main_summer">

                        <div class="summer_insight">

                            <div class="imageBox">

                                <div class="box">

                                    <img class="img1" src="{{ asset('front_assets/img/summer_demo_5.jpg') }}" class="img-fluid" alt="">

                                    <img class="hover_img" src="{{ asset('front_assets/img/summer_demo_55.jpg') }}" class="img-fluid" alt="">

                                </div>



                                <div class="icon_main_under">

                                    <div class="flx_main_icon">

                                        <i class="fa-solid fa-heart"></i>

                                        <i class="fa-regular fa-eye"></i>

                                        <i class="fa-solid fa-bag-shopping"></i>

                                    </div>



                                </div>

                            </div>

                        </div>

                        <div class="txt_under_bottom">

                            <h2>Full Sleeve Long Dress</h2>

                            <p>$21.00 – $31.00</p>

                        </div>

                    </div>



                </div>

            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--owl.carousel  -->



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

<script src="js/main.js"></script>

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

    @endsection

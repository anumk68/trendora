@extends('layouts.app')
<style>
    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .imageBox {
        position: relative;
        overflow: hidden;
    }

    .discount-percentage {
        color: green;
        font-weight: bold;
    }
    .color-options {
    display: flex;
    gap: 10px; /* Adjust gap between color circles */
}

.color-btn {
    width: 30px; /* Diameter of the circle */
    height: 30px; /* Diameter of the circle */
    border-radius: 50%; /* Makes it a circle */
    border: 2px solid #ccc; /* Optional border */
    cursor: pointer;
    transition: transform 0.2s;
}

.color-btn:hover {
    transform: scale(1.1); /* Slightly enlarge on hover */
}


</style>
@section('content')

<section class="home_banner_tendora">
    <div class="container">
        <div class="row">
            <div class="col-md-6 display_none_mobile">

            </div>
            <div class="col-md-6">
                <div class="under_home_banner">
                    <div class="txt_home">
                        <h1> TRENDS STOCK</h1>
                        <p>There are many variations of passages of Lorem Ipsum available majority have suffered
                            alteration</p>
                        <div class="btn_home_banner">
                            <a href="{{route('trendora.shop')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ornaments_main_accessors">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="under_main_accessories">
                    <ul>
                        @foreach ($categories as $key => $category)
                        @if ($key < 2) <!-- First two categories for the left column -->
                            <li>
                                <div class="under_main_div">
                                    <div class="main_under_img">
                                        <img src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->title }}">
                                        <div class="text_position">
                                            <h2>{{ $category->title }}</h2>
                                            <div class="btn_shop">
                                                <a href="{{ route('trendora.shop', ['category' => $category->id]) }}">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                            @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="under_main_accessories">
                    <ul class="bottom_none">
                        @foreach ($categories as $key => $category)
                        @if ($key == 2)
                        <!-- Third category for the middle column -->
                        <li>
                            <div class="under_main_div">
                                <div class="main_under_img">
                                    <img src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->title }}" class="main_img_he">
                                    <div class="text_position">
                                        <h2>{{ $category->title }}</h2>
                                        <div class="btn_shop">
                                            <a href="{{ route('trendora.shop', ['category' => $category->id]) }}">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <div class="under_main_accessories">
                    <ul>
                        @foreach ($categories as $key => $category)
                        @if ($key > 2)
                        <!-- Last two categories for the right column -->
                        <li>
                            <div class="under_main_div">
                                <div class="main_under_img">
                                    <img src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->title }}">
                                    <div class="text_position">
                                        <h2>{{ $category->title }}</h2>
                                        <div class="btn_shop">
                                            <a href="{{ route('trendora.shop', ['category' => $category->id]) }}">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="best_feature_collectio top_spacing pb-0">
    <div class="container">
        <div class="heading_summer_Collection">
            <span>Winter Collection</span>
            <h2>Best Featured Collection</h2>
        </div>

        <div class="row justify-content-between">
            @foreach($products->take(4) as $item)
            <div class="col-lg-3 col-md-5 col-6 mb-4">
                <div class="under_main_summer">
                    <div class="imageBox position-relative">
                        <div class="imageBox">
                            <div class="box" style="width:100%;">
                                <a href="{{ route('trendora.product_details', $item->id) }}">
                                    <img class="img1" src="{{ asset('storage/' . $item->galleries[0]->photo) }}" alt="" class="product-image" height="200px">
                                    <img class="hover_img" src="{{ asset('storage/' . $item->galleries[0]->photo) }}" alt="" class="product-image">
                                </a>
                            </div>
                            <div class="icon_main_under">

                                <div class="flx_main_icon">

                                    <i class="fa-solid fa-heart"></i>

                                    <button type="button" class="btn btn-primary" onclick="showProductDetails({{ $item->id }})">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>


                                    <i class="fa-solid fa-bag-shopping"></i>

                                </div>

                                @if($item->tags && in_array('sale', explode(',', $item->tags)))
                                <span class="onsale">Sale</span>
                                @endif

                            </div>

                        </div>
                    </div>
                    <div class="txt_under_bottom">
                        <h2>{{ $item->name }}</h2>
                        <p>
                            @if($item->discount)
                            <p>${{ number_format($item->price - ($item->price * $item->discount / 100), 2) }} <span>${{ number_format($item->price, 2) }}</span></p>
                            @else
                            <p>${{ number_format($item->price, 2) }}</p>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="stylish_cloth_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">

            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="under_stylish_main">
                    <div class="main_stylish">
                        <span>Summer Collection</span>
                        <h2>Summer Stylish Cloth & Accessories</h2>
                        <p>There are many variations of passages of Lorem Ipsum available majority have suffered
                            alteration</p>
                        <div class="btn_home_banner">
                            <a href="{{route('trendora.shop')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="best_feature_collectio top_spacing pb-0">
    <div class="container">
        <div class="heading_summer_Collection">
            <span>Summer Collection</span>
            <h2>Best Featured Collection</h2>
        </div>

        <div class="row">
            @foreach($products->take(8) as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="under_main_summer">
                    <div class="imageBox position-relative">
                        <div class="box" style="width: 100%;">
                            <a href="{{ route('trendora.product_details', $item->id) }}">
                                <!-- Link to product details -->
                                <img class="img1" src="{{ asset('storage/' . $item->galleries[0]->photo) }}" alt="" height="200px;">
                                @if(isset($item->galleries[1]))
                                <img class="hover_img" src="{{ asset('storage/' . $item->galleries[0]->photo) }}" alt="" height="200px;">
                                @endif
                            </a>
                        </div>

                        <div class="icon_main_under">
                            <div class="flx_main_icon">
                                <i class="fa-solid fa-heart"></i>
                                <button type="button" class="btn btn-primary" onclick="showProductDetails({{ $item->id }})">
                                    <i class="fa-regular fa-eye"></i>
                                </button>

                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                            @if($item->tags && in_array('sale', explode(',', $item->tags)))
                            <span class="onsale">Sale</span>
                            @endif
                        </div>
                    </div>
                    <div class="txt_under_bottom">
                        <h2>{{ $item->name }}</h2>
                        <p>
                            ${{ number_format($item->price, 2) }}
                            @if($item->discount_price)
                            <?php
                                            $discountAmount = ($item->price * $item->discount_price) / 100;
                                            $finalPrice = $item->price - $discountAmount;
                                        ?>
                            <span>${{ number_format($finalPrice, 2) }}</span>
                            <span style="text-decoration: line-through;">${{ number_format($item->price, 2) }}</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


<section class="special_offer_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="under_special_offer">
                    <div class="special_bg_img">
                        <img src="{{ asset('front_assets/img/special_offer_1.jpg')}}" alt="">
                        <div class="special_cntnt">
                            <span>Special Offer</span>
                            <h2>Upto 60% off</h2>
                            <h3>On Exclusive Branded Clothing</h3>
                            <p>Lorem ipsum dolor sit amet, eu pro summo time recteque, euismod adversarium ne usu.
                                Vel in numquam democritum.</p>
                            <div class="btn_home_banner">
                                <a href="{{route('trendora.shop')}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <div class="main_spacial_offering">
                    <ul>
                        <li>
                            <div class="ul_li_flexing">
                                <div class="main_img_ul">
                                    <img src="{{ asset('front_assets/img/special_offer_2.jpg')}}" alt="">
                                </div>
                                <div class="text_flx_ul">
                                    <div class="img_company_logo">
                                        <img src="{{ asset('front_assets/img/company-offer-logo-1.png')}}" alt="">
                                        <div class="contnt_fll">
                                            <h3>Min 40% off <br>On Stylish Kurti</h3>
                                            <div class="btn_flx_special">
                                                <a href="{{route('trendora.shop')}}">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ul_li_flexing">
                                <div class="main_img_ul">
                                    <img src="{{ asset('front_assets/img/special_offer_3.jpg')}}" alt="">
                                </div>
                                <div class="text_flx_ul">
                                    <div class="img_company_logo">
                                        <img src="{{ asset('front_assets/img/company-offer-logo-2.png')}}" alt="">
                                        <div class="contnt_fll">
                                            <h3>Min 40% off <br>On Stylish Kurti</h3>
                                            <div class="btn_flx_special">
                                                <a href="{{route('trendora.shop')}}">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ul_li_flexing">
                                <div class="main_img_ul">
                                    <img src="{{ asset('front_assets/img/special_offer_4.jpg')}}" alt="">
                                </div>
                                <div class="text_flx_ul">
                                    <div class="img_company_logo">
                                        <img src="{{ asset('front_assets/img/company-offer-logo-3.png')}}" alt="">
                                        <div class="contnt_fll">
                                            <h3>Min 40% off <br>On Stylish Kurti</h3>
                                            <div class="btn_flx_special">
                                                <a href="{{route('trendora.shop')}}">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inspired_image_gallery">
    <div class="container">
        <div class="row g-0">
            <div class="col">
                <div class="main_under_inspired">
                    <div class="img_gallery">
                        <img src="{{ asset('front_assets/img/gallery_1.jpg')}}" alt="">
                        <div class="main_span_plus">
                            <p>+</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="main_under_inspired">
                    <div class="img_gallery">
                        <img src="{{ asset('front_assets/img/gallery_2.jpg')}}" alt="">
                        <div class="main_span_plus">
                            <p>+</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="main_under_inspired">
                    <div class="img_gallery">
                        <img src="{{ asset('front_assets/img/gallery_3.jpg')}}" alt="">
                        <div class="main_span_plus">
                            <p>+</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="main_under_inspired">
                    <div class="img_gallery">
                        <img src="{{ asset('front_assets/img/gallery_4.jpg')}}" alt="">
                        <div class="main_span_plus">
                            <p>+</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="main_under_inspired">
                    <div class="img_gallery">
                        <img src="{{ asset('front_assets/img/gallery_5.jpg')}}" alt="">
                        <div class="main_span_plus">
                            <p>+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="online_support_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="online_support_flx">
                    <div class="online_img">
                        <img src="{{ asset('front_assets/img/globe-2.svg')}}" alt="">
                    </div>
                    <div class="txt_online_sup">
                        <h2>Online Support</h2>
                        <p>Anetus et malea fames</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="online_support_flx">

                    <div class="online_img">
                        <img src="{{ asset('front_assets/img/shopping-bag-2-1.svg')}}" alt="">
                    </div>
                    <div class="txt_online_sup">
                        <h2>Online Support</h2>
                        <p>Anetus et malea fames</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="online_support_flx">
                    <div class="online_img">
                        <img src="{{ asset('front_assets/img/truck-1.svg')}}" alt="">
                    </div>
                    <div class="txt_online_sup">
                        <h2>Online Support</h2>
                        <p>Anetus et malea fames</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="online_support_flx end_none">
                    <div class="online_img">
                        <img src="{{ asset('front_assets/img/shopping-cart-1.svg')}}" alt="">
                    </div>
                    <div class="txt_online_sup">
                        <h2>Online Support</h2>
                        <p>Anetus et malea fames</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="dont_we_available">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 py-1">
                <div class="avialable_txt">
                    <p>We are available : 9:00 am – 18:00 pm </p>
                </div>
            </div>
            <div class="col-md-4 py-1">
                <div class="avialable_txt">
                    <a href="#"><i class="fa-solid fa-phone"></i> 888 123 4567</a>
                </div>
            </div>
            <div class="col-md-4 py-1">
                <div class="avialable_txt">
                    <div class="vailable_flx">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-mainbody">
        <div class="modal-content modal-content-bordr">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="view-product-popup-heading">
                            <img id="modalProductImage" src="" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="modal-header modal-header-relative">
                            <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                        </div>
                        <div class="view-product-popup">
                            <div class="view-product-popup-heading">
                                <h3 id="modalProductTitle"></h3>
                            </div>
                            <div class="view-product-popup-price">
                                <span style="color: #676666;" id="modalProductPrice"></span>
                                <span id="modalProductDiscountedPrice"></span>
                                <span style="color: #676666;" id="modalProductDiscount"></span>
                            </div>
                            <div class="view-product-popup-pp">
                                <p id="modalProductDescription"></p>
                            </div>
                            <div class="view-product-popup-select-size">
                                <p>Size: <span id="selected-size">XL</span></p>
                                <div class="sizes" id="sizeButtonsContainer"></div>
                            </div>
                            <div class="view-product-popup-select-color">
                                <p>Color:</p>
                                <div id="colorOptionsContainer" class="color-options"></div>
                            </div>

                            <div class="view-product-popup-btn">
                                <div class="view-product-popup-btn-number">
                                    <span id="decreaseQuantity" style="cursor: pointer;">-</span>
                                    <span id="quantity">1</span>
                                    <span id="increaseQuantity" style="cursor: pointer;">+</span>
                                </div>
                                <div class="">
                                    <div class="btn_home_banner" style="text-align: left;">
                                        <a href="#" id="addToCartButton"><i class="fa-solid fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="view-product-popup-genders-main">
                                <div class="view-product-popup-genders">
                                    <span>SKU :</span> <span id="modalProductSKU"></span>
                                </div>
                                <div class="view-product-popup-genders">
                                    <span>Categories :</span> <span id="modalProductCategories"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function showProductDetails(id) {
        let product = @json($products->toArray()).find(p => p.id === id);

        if (product) {
            document.getElementById('modalProductImage').src = "{{ asset('storage/') }}" + "/" + product.galleries[0].photo;
            document.getElementById('modalProductTitle').textContent = product.title;

            let price = parseFloat(product.price) || 0;
            document.getElementById('modalProductPrice').textContent = "$" + price.toFixed(2);

            if (product.discount) {
                let discountedPrice = price - (price * product.discount / 100);
                document.getElementById('modalProductDiscountedPrice').textContent = "$" + discountedPrice.toFixed(2);
                document.getElementById('modalProductDiscount').textContent = `(${product.discount}% OFF)`;
            } else {
                document.getElementById('modalProductDiscountedPrice').textContent = '';
                document.getElementById('modalProductDiscount').textContent = '';
            }

            document.getElementById('modalProductDescription').textContent = product.description || 'No description available.';
            document.getElementById('modalProductSKU').textContent = product.sku || 'SKU not available';

            const sizes = product.size.split(',');
            const sizeButtonsContainer = document.getElementById('sizeButtonsContainer');
            sizeButtonsContainer.innerHTML = '';

            sizes.forEach(size => {
                const sizeButton = document.createElement('button');
                sizeButton.className = 'size-btn';
                sizeButton.textContent = size;
                sizeButton.dataset.size = size;

                sizeButton.onclick = function() {
                    document.getElementById('selected-size').textContent = this.dataset.size;
                    Array.from(sizeButtonsContainer.children).forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                };

                sizeButtonsContainer.appendChild(sizeButton);
            });

            const colors = JSON.parse(product.color);
            const colorOptionsContainer = document.getElementById('colorOptionsContainer');
            colorOptionsContainer.innerHTML = '';

            colors.forEach(color => {
                const colorButton = document.createElement('button');
                colorButton.className = 'color-btn';
                colorButton.style.backgroundColor = color;

                colorButton.onclick = function() {
                    Array.from(colorOptionsContainer.children).forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                };

                colorOptionsContainer.appendChild(colorButton);
            });

            let quantity = 1;
            document.getElementById('quantity').textContent = quantity;

            document.getElementById('increaseQuantity').onclick = function() {
                quantity++;
                document.getElementById('quantity').textContent = quantity;
            };

            document.getElementById('decreaseQuantity').onclick = function() {
                if (quantity > 1) {
                    quantity--;
                    document.getElementById('quantity').textContent = quantity;
                }
            };

            $('#exampleModal').modal('show');
        } else {
            console.error("Product not found for ID:", id);
        }
    }
</script>
@endsection

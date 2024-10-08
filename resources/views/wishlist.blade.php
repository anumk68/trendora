@extends('layouts.app')

@section('content')

<section class="shop-sec-main pb-0">
    <div class="container">
        <div class="page-back">
            <p><a href="#">Home</a> / Wishlist</p>
        </div>
    </div>
</section>


<section class="whishlist_main">
    <div class="container">
    <table class="myaccount_table whishlish_table">
        <thead>
            <tr>
                <th class="product-remove"></th>
                <th class="product-thumbnail"></th>
                <th class="product-name">Product Name</th>
                <th class="product-price">Unit Price</th>
                <th class="product-date">Date Added</th>
                <th class="product-stock">Stock Status</th>
                <th class="product-action"></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td class="product-remove">
                    <button type="submit" title="remove">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </td>
                <td class="product-thumbnail">
                    <a href="#"><img src="{{ asset('front_assets/img/summer_demo_6.jpg" alt="brown-bag')}}" height="68" width="68"></a>
                </td>
                <td class="product-name"><a href="#">Brown Bag</a></td>
                <td class="product-price">
                    <span>
                        <bdi>
                            <span>
                                $
                            </span>
                            199.00
                        </bdi>

                    </span>
                </td>
                <td class="product-date">
                    <time datetime="">October 4, 2024</time>
                </td>
                <td class="product-stock">
                    <div class="stock_main">
                        <div class="iconstock">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="icon_text">
                            In stock
                        </div>
                    </div>
                </td>
                <td class="product-action">
                   <div class="btn_home_banner" bis_skin_checked="1" >
                    <a href="#">Add To Bag</a>
                </div >
            </td>
            </tr>
        </tbody>

    </table>



    </div>
</section>
@endsection

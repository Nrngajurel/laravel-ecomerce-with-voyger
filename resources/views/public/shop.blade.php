@extends(' layouts.ecommerce')
@section('content')

    <section id="advertisement">
    </section>

    <section>
        <p id="loadtext"></p>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('public.inc.sidebar')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">{{ $categoryName }}</h2>
                        @forelse($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ asset('/storage/'.$product->image ) }}" alt="" />
                                            <h2>${{ $product->price }}</h2>
                                            <p><a href="{{ route('Shop.show', $product->slug) }}">{{ $product->name }}</a> </p>
{{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                            <form action="{{ route('cart.store') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                <button class="btn btn-outline-primary add-to-cart">Add to cart</button>
                                            </form>
                                        </div>
                                        @if($product->on_sale)
                                            <img src="{{ asset('e-commerce/images/home/sale.png')}}" class="sale" alt="">
                                        @endif

                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @empty
                            No Items In this Category
                        @endforelse




                    </div><!--features_items-->
                    <div>
                        {{ $products->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection

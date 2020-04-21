    <h2 class="title text-center">recommended items</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                @foreach($recommendedProducts as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('/storage/'.$product->image ) }}" alt="" />
                                    <h2>${{ $product->price }}</h2>

                                    <p><a href="{{ route('Shop.show', $product->slug) }}">{{ $product->name }}</a> </p>
                                    <form action="{{ route('cart.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <button class="btn btn-default add-to-cart">Add to cart</button>
                                    </form>
                                </div>
                                @if($product->on_sale)
                                    <img src="{{ asset('e-commerce/images/home/sale.png')}}" class="sale" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="item">
                @foreach($recommendedProducts as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('/storage/'.$product->image ) }}" alt="" />
                                    <h2>${{ $product->price }}</h2>

                                    <p><a href="{{ route('Shop.show', $product->slug) }}">{{ $product->name }}</a> </p>
                                    <form action="{{ route('cart.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <button class="btn btn-default add-to-cart">Add to cart</button>
                                    </form>
                                </div>
                                <img src="{{ asset('e-commerce/images/home/sale.png')}}" class="sale" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>

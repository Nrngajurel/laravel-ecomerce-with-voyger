@extends('layouts.ecommerce')


@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="message">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div>
            <div class="alert alert-info">{{ Cart::content()->count() }} Item(s) In Cart</div>

        </div>
        <div class="table-responsive cart_info">
            @include('public.inc.cartitems')
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">
                    <ul class="user_option">
                        <li>
                            <input type="checkbox">
                            <label>Use Coupon Code</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Use Gift Voucher</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Estimate Shipping & Taxes</label>
                        </li>
                    </ul>
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Country:</label>
                            <select>
                                <option>United States</option>
                                <option>Bangladesh</option>
                                <option>UK</option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Ucrane</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field">
                            <label>Region / State:</label>
                            <select>
                                <option>Select</option>
                                <option>Dhaka</option>
                                <option>London</option>
                                <option>Dillih</option>
                                <option>Lahore</option>
                                <option>Alaska</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field zip-field">
                            <label>Zip Code:</label>
                            <input type="text">
                        </li>
                    </ul>
                    <a class="btn btn-default update" href="">Get Quotes</a>
                    <a class="btn btn-default check_out" href="">Continue</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>{{ Cart::subtotal() }}</span></li>
                        <li>Tax(13%) <span>{{ Cart::tax() }}</span></li>
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>{{ Cart::total() }}</span></li>
                    </ul>
                    <a class="btn btn-default update" href="#">Update</a>
                    <a class="btn btn-default check_out" href="{{ route('checkout.index') }}">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/app.js') }}">

</script>
{{--    <script>--}}
{{--        (function() {--}}
{{--            const classname= document.querySelectorAll('.quantity')--}}

{{--            Array.from(classname).forEach(function(element) {--}}
{{--                const id = element.getAttribute('data-id')--}}
{{--                element.addEventListener('change', function () {--}}

{{--                    axios.patch('cart/'+id, {--}}
{{--                        qty:this.value,--}}

{{--                    }).then(--}}
{{--                        function (response) {--}}
{{--                            --}}{{--window.location.href = '{{ route("cart.index") }}'--}}

{{--                        }--}}
{{--                    ).catch(--}}
{{--                        function (error) {--}}
{{--                            console.log(error);--}}

{{--                        }--}}
{{--                    )--}}
{{--                })--}}

{{--            })--}}
{{--        })();--}}

{{--    </script>--}}
    @endsection

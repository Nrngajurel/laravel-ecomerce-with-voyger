@extends('layouts.ecommerce')


@section('content')
    <div class="container">

        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li><a href="#bank" data-toggle="tab" data-toggle="tab">Bank Transfer</a></li>
                    <li><a href="#credit" data-toggle="tab" data-toggle="tab">Credit Card</a></li>
                    <li class="active"><a  href="#online" data-toggle="tab">Nepali online Payment Gateways</a></li>
                    <li ><a href="#cash" data-toggle="tab" data-toggle="tab">Cash On hand</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="bank" >
                    <div class="col-sm-12">
                        <h1>Currently We Dont Accept This payment Method</h1>
                    </div>
                </div>



                <div class="tab-pane fade" id="credit" >
                    <div class="col-sm-12">
                        <h1>Currently We Dont Accept This payment Method</h1>

                    </div>
                </div>
                <div class="tab-pane fade active in" id="online" >
                    <div class="container">
                        <div class="col-sm-3 ">
                            <h1>esewa</h1>
                            <img style="width: inherit;" src="{{ asset('e-commerce/esewa.png') }}" alt="">
                            <form action = "{{ config('market.esewa.esewa_url') }}" method="POST">
                                <input value="{{ Cart::total() }}" name="tAmt" type="hidden">
                                <input value="{{ Cart::subtotal() }}" name="amt" type="hidden">
                                <input value="{{ Cart::tax() }}" name="txAmt" type="hidden">
                                <input value="0" name="psc" type="hidden">
                                <input value="0" name="pdc" type="hidden">
                                <input value="" name="scd" type="hidden">
                                <input value="PRD-01" name="pid" type="hidden">
                                <input value="{{ route('payment.success') }}" type="hidden" name="su">
                                <input value="{{ route('payment.failure') }}" type="hidden" name="fu">
                                <input value="Pay Now" type="submit" class="btn btn-primary">
                            </form>

                        </div>
                        <div class="col-sm-3">
                            <h1>esewa</h1>
                            <img style="width: inherit;" src="{{ asset('e-commerce/esewa.png') }}" alt=""><form action = "" method="POST">
                                <input value="20" name="tAmt" type="hidden">
                                <input value="10" name="amt" type="hidden">
                                <input value="5" name="txAmt" type="hidden">
                                <input value="2" name="psc" type="hidden">
                                <input value="3" name="pdc" type="hidden">
                                <input value="" name="scd" type="hidden">
                                <input value="PRD-01" name="pid" type="hidden">
                                <input value="success.php/?q=su" type="hidden" name="su">
                                <input value="failure.php/?q=fu" type="hidden" name="fu">
                                <input value="Pay Now" type="submit" class="btn btn-primary">
                            </form>

                        </div>
                        <div class="col-sm-3">
                            <h1>Khalti</h1>
                            <img style="width: inherit;" src="{{ asset('e-commerce/esewa.png') }}" alt=""><form action = "" method="POST">
                                <input value="20" name="tAmt" type="hidden">
                                <input value="10" name="amt" type="hidden">
                                <input value="5" name="txAmt" type="hidden">
                                <input value="2" name="psc" type="hidden">
                                <input value="3" name="pdc" type="hidden">
                                <input value="" name="scd" type="hidden">
                                <input value="PRD-01" name="pid" type="hidden">
                                <input value="success.php/?q=su" type="hidden" name="su">
                                <input value="failure.php/?q=fu" type="hidden" name="fu">
                                <input value="Pay Now" type="submit" class="btn btn-primary">
                            </form>

                        </div>
                        <div class="col-sm-3">
                            <h1>Ime pay</h1>
                            <img style="width: inherit;" src="{{ asset('e-commerce/esewa.png') }}" alt="">
                            <form action = "" method="POST">
                                <input value="20" name="tAmt" type="hidden">
                                <input value="10" name="amt" type="hidden">
                                <input value="5" name="txAmt" type="hidden">
                                <input value="2" name="psc" type="hidden">
                                <input value="3" name="pdc" type="hidden">
                                <input value="" name="scd" type="hidden">
                                <input value="PRD-01" name="pid" type="hidden">
                                <input value="success.php/?q=su" type="hidden" name="su">
                                <input value="failure.php/?q=fu" type="hidden" name="fu">
                                <input value="Pay Now" type="submit" class="btn btn-primary">
                            </form>

                        </div>
                    </div>
                    <div class="col-sm-12">





                    </div>
                </div>
                <div class="tab-pane fade" id="cash" >
                    <div class="col-sm-12">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis et iure maxime nam officiis repellat sapiente unde ut voluptatibus.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection

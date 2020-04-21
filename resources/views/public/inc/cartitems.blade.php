<table class="table table-condensed">


    <thead>
    <tr class="cart_menu">
        <td class="image">Item</td>
        <td class="description"></td>
        <td class="price">Price</td>
        <td class="quantity">Quantity</td>
        <td class="total">Total</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    @if(Cart::content()->count())
        @foreach(Cart::content() as $item)

            <tr>
                <td class="cart_product">
                    <a href="{{ route('Shop.show',$item->model->slug) }}"><img src="{{ asset('/storage/'.$item->model->image ) }}" alt="" styly="height:20px;"></a>
                </td>
                <td class="cart_description">
                    <h4><a href="{{ route('Shop.show',$item->model->slug) }}">{{ $item->name }}</a></h4>
                    <p>Web ID: 1089772</p>
                </td>
                <td class="cart_price">
                    <p>{{ $item->model->price }}</p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                        <select name="quantity" id=""  class="cart_quantity_input quantity" data-id="{{ $item->rowId }}" data-route="{{ route('cart.index') }}">
                            @for($i=1; $i<=10;$i++)
                                <option  {{ $item->qty==$i?'selected':'' }}>{{$i}} </option>
                            @endfor
                        </select>
                        {{--                            <form class="qty" method="post">--}}
                        {{--                                <button class="cart_quantity_up"  > + </button>--}}
                        {{--                                <input type="hidden" class="id" value="{{ $cartContent->model->id }}">--}}
                        {{--                                <input type="hidden" class="rowId" value="{{ $cartContent->rowId }}">--}}
                        {{--                                <input class="cart_quantity_input" type="text" name="quantity" value="{{ $cartContent->qty }}" autocomplete="off" size="2">--}}
                        {{--                                <button class="cart_quantity_down" > - </button>--}}
                        {{--                            {{  method_field()  }} @csrf--}}
                        {{--                            </form>--}}
                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">{{ $item->total() }}</p>
                </td>
                <td class="cart_delete">
                    <form action="{{ route('cart.destroy',$item->rowId) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}


                        <button class="rfc"><i class="fa fa-times"></i></button>
                    </form>
                    {{--                        <a class="cart_quantity_delete" data-id="{{ $cartContent->rowId }}" data-route="{{ route('cart.index') }}"><i class="fa fa-times"></i></a>--}}
                </td>
            </tr>
        @endforeach
    @else



    </tbody>
    <tr>
        <td class="cart_total">
            <p class="alert-info">No Item In Cart</p>
        </td>
    </tr>


    @endif
</table>
<h2>Category</h2>
<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    @foreach($productCatagories as $productCatagory)
    <div class="panel panel-default">
        <div class="panel-heading">

            <h4 class="panel-title" ><a href="{{ route('Shop.index', ['category'=>$productCatagory->slug]) }}" style="  {{ request()->category == $productCatagory->slug? 'font-weight: 1000;color: #ac2925':'' }}">{{ $productCatagory->name }}</a></h4>
        </div>
    </div>
    @endforeach


</div><!--/category-products-->

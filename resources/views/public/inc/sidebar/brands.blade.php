<div class="brands_products"><!--brands_products-->
    <h2>Brands</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            @foreach($productBrands as $productBrand)
                <li><a href="#"> <span class="pull-right">({{ $productBrand->products()->count() }})</span>{{ $productBrand->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div><!--/brands_products-->
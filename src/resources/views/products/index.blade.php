<h1>รายการสินค้า</h1>

<a href="/products/create">เพิ่มสินค้า</a>

@foreach($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <p>ราคา: {{ $product->price }}</p>
        <p>คงเหลือ: {{ $product->stock }}</p>
        wdwd

        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" width="150">
        @endif

        <hr>
    </div>
@endforeach

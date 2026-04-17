<h1>เพิ่มสินค้า</h1>

<form method="POST" action="/products" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="ชื่อสินค้า"><br>
    <input type="number" name="price" placeholder="ราคา"><br>
    <input type="number" name="stock" placeholder="จำนวน"><br>

    <textarea name="description" placeholder="รายละเอียด"></textarea><br>

    <input type="file" name="image"><br>

    <button type="submit">บันทึก</button>
</form>

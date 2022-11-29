<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{product.pname}} | Need To Shop</title>
</head>

<body>
    <header>{% include "header.php" %}</header>

    <div class="back-btn">
        <a onclick="window.history.back()"><strong>&#8249;</strong></a>
    </div>

    <div id="pname">
        <h1>{{product.pname}}</h1>
    </div>
    <div class="row p-page">
        <div class="col">
            <img src="/media/{{product.img}}" height="500px" alt="">
        </div>
        <div class="col">
            <div class="p-des">
                <h4>Product Description</h4>
                <p>{{product.details}}</p>
            </div>
            <div class="p-des">
                <h5>Quantity</h5>
                <span class="add-remove" href="#">&plus;</span>
                <span class="add-remove" href="#">1</span>
                <span class="add-remove" href="#">&minus;</span>
            </div>
            <div class="p-des">
                <h2>&#8377;{{product.price}} &#47; {{product.size}}</h2>
            </div>
            <div class="p-des">
                <a href="#"><i class="fa fa-shopping-cart" style="font-size:15px"></i>Add to cart</a>
                <a href="/cart">Check out</a>
            </div>
        </div>
    </div>

    <footer>{% include "footer.php" %}</footer>
</body>

</html>
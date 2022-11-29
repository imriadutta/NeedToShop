<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daily Products | Need To Shop</title>
</head>

<body>
    <header>{% include "header.php" %}</header>

    <div class="back-btn">
        <a onclick="window.history.back()"><strong>&#8249;</strong></a>
    </div>

    <div class="container">
        <div class="flex-box">
            <div class="child-box">
                <h3>Daily Products</h3>
            </div>
        </div>
        <div class="products">
            {% for product in dailyproducts %}
            <div class="item">
                <div class="img">
                    <p><img src="/media/{{product.img}}" height="150px" alt=""></p>
                </div>
                <div class="pname">
                    <p>{{product.pname}}</p>
                </div>
                <div class="price">
                    <p>&#8377;{{product.price}} &#47; {{product.size}}</p>
                </div>
                <div class="details">
                    <a href="/products/{{product.pname}}">View</a>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>

    <footer>{% include "footer.php" %}</footer>
</body>

</html>
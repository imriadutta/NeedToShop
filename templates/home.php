<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | Need To Shop</title>
</head>

<body>
    <header>{% include "header.php" %}</header>

    <!-- <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Login first to enjoy your amazing offers and deals
    </div> -->

    <div class="row">
        <div class="col">
            <h1 class="main-h1">The Best Place to buy Grocery and Daily Products</h1>
            <a href="/dailyproducts" class="main-btn" onclick="login()">Shop now</a>
        </div>
        <div class="col">
            <img src="/static/img/cover.jpg" width="500px" alt="">
        </div>
    </div>

    <div class="container">
        <div class="flex-box">
            <div class="child-box">
                <h3>Daily Products</h3>
            </div>
            <div class="child-box">
                <a href="/dailyproducts">
                    <h5>See more &gt;</h5>
                </a>
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

    <div class="container">
        <div class="flex-box">
            <div class="child-box">
                <h3>Grocery</h3>
            </div>
            <div class="child-box">
                <a href="/grocery">
                    <h5>See more &gt;</h5>
                </a>
            </div>
        </div>
        <div class="products">
            {% for product in grocery %}
            <div class="item">
                <div class="img">
                    <p><img src="/media/{{product.img}}" height="150px" alt=""></p>
                </div>
                <div class="pname">
                    <p>{{product.pname}}</p>
                </div>
                <div class="price">
                    <p>&#8377;{{product.price}}</p>
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
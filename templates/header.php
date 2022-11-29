<link rel="stylesheet" href="/static/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="/static/js/scripts.js"></script>

<div id="header">
    <ul>
        <div class="row">
            <div class="col">
                <li><a href="https://needtoshop.up.railway.app/">Need To Shop</a></li>
            </div>
            <div class="col">
                <li><a href="https://needtoshop.up.railway.app/">Home</a></li>
                <li><a href="/dailyproducts">Daily Products</a></li>
                <li><a href="/grocery">Grocery</a></li>
                <li><a href="/emergency">Emergency</a></li>
                <li><a href="/contact">Contact</a></li>
            </div>
            <div class="col">
                <li><a href="/cart"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></li>
                {% if user.name != None %}
                <li><a href="/profile/{{user.id}}">{{user.name}}</a></li>
                {% else %}
                <li><a href="/login">Login</a></li>
                {% endif %}
            </div>
        </div>
    </ul>
</div>
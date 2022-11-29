from django.http import HttpResponse
from django.shortcuts import render
from service.models import Product


def home(request):
    products = Product.objects.all()
    dailyproducts = []
    grocery = []
    c1 = c2 = 0
    for product in products:
        if product.ptype == 'dailyproducts' and c1 < 6:
            dailyproducts.append(product)
            c1 += 1
        if product.ptype == 'grocery' and c2 < 6:
            grocery.append(product)
            c2 += 1
    data = {
        'dailyproducts': dailyproducts,
        'grocery': grocery,
    }
    return render(request, 'home.php', data)


def dailyproducts(request):
    products = Product.objects.all()
    dailyproducts = []
    for product in products:
        if product.ptype == 'dailyproducts':
            dailyproducts.append(product)
    data = {
        'dailyproducts': dailyproducts,
    }
    return render(request, 'dailyproducts.php', data)


def grocery(request):
    products = Product.objects.all()
    grocery = []
    for product in products:
        if product.ptype == 'grocery':
            grocery.append(product)
    data = {
        'grocery': grocery,
    }
    return render(request, 'grocery.php', data)


def emergency(request):
    data = {}
    return render(request, 'emergency.php', data)


def contact(request):
    data = {}
    return render(request, 'contact.php', data)


def products(request, pid):
    products = Product.objects.all()
    product = products.get(pname=pid)
    data = {'product': product}
    return render(request, 'products.php', data)


def cart(request):
    data = {}
    return render(request, 'cart.php', data)


def login(request):
    data = {}
    return render(request, 'login.php', data)


def register(request):
    data = {}
    return render(request, 'register.php', data)

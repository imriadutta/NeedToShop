from django.db import models


class Product(models.Model):
    pname = models.CharField(max_length=20)
    price = models.IntegerField()
    size = models.CharField(max_length=10, null=True)
    img = models.ImageField()
    ptype = models.CharField(max_length=20)
    details = models.TextField(max_length=2000, null=True)


# class User(Product):
#     uname = models.CharField(max_length=50)
#     pwd = models.CharField(max_length=20)
#     email = models.CharField(max_length=50, null=True)
#     phone = models.CharField(max_length=50)
#     aadhaar = models.CharField(max_length=50)
#     orders = [Product.name]
#     verified = models.CharField(max_length=50)

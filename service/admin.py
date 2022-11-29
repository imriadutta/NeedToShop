from django.contrib import admin
from service.models import Product


class AdminProduct(admin.ModelAdmin):
    list_display = ('pname', 'price', 'img', 'ptype')


# class AdminUser(admin.ModelAdmin):
#     list_display = ('name', 'pwd', 'email', 'phone',
#                     'aadhaar', 'orders', 'verified')


admin.site.register(Product, AdminProduct)
# admin.site.register(User, AdminUser)

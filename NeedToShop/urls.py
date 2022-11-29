from django.contrib import admin
from django.urls import path, include
from NeedToShop import views
from django.conf import settings
from django.conf.urls.static import static
from django.views.static import serve


urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.home),
    path('dailyproducts', views.dailyproducts),
    path('grocery', views.grocery),
    path('emergency', views.emergency),
    path('contact', views.contact),
    path('products/<str:pid>', views.products),
    path('login', views.login),
    path('cart', views.cart),
    # path('', views.error),
]

urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)

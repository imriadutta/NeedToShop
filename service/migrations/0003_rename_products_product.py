# Generated by Django 4.1.2 on 2022-11-28 15:14

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('service', '0002_alter_products_price'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='Products',
            new_name='Product',
        ),
    ]

# Generated by Django 4.1.2 on 2022-11-28 20:27

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('service', '0005_alter_product_details'),
    ]

    operations = [
        migrations.AddField(
            model_name='product',
            name='size',
            field=models.IntegerField(null=True),
        ),
    ]

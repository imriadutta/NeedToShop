# Generated by Django 4.1.2 on 2022-11-28 14:52

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Products',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('pname', models.CharField(max_length=20)),
                ('price', models.IntegerField(max_length=10)),
                ('img', models.ImageField(upload_to='')),
                ('ptype', models.CharField(max_length=20)),
            ],
        ),
    ]

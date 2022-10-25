from django.db import models

# Create your models here.


# To add a Members table in our database, start by creating a Members class, and describe the table fields in it
class Members(models.Model):
    firstname = models.CharField(max_length=255)
    lastname = models.CharField(max_length=255)

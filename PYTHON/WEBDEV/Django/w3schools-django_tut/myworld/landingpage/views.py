# from django.shortcuts import render
# add
from django.http import HttpResponse, HttpResponseRedirect
from django.template import loader


# Create your views here.
def index(request):
    # mymembers = Members.objects.all().values()
    template = loader.get_template('landingpage.html')
    output = ""
    context = {
        'mymembers': "mymembers",
    }
    return HttpResponse(template.render(context, request))

from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse
from . import models
def index(request):

	a=models.Employee.objects.all()
	#p.save()

	arr={'data':a}
	return render(request,'index.html',arr)

def sigin(request):
	return render(request,'sigin.html')

def register(request):
	return render(request,'register.html')	



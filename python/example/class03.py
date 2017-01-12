class Animal(object):
	def __init__(self,name):
		self.name=name

	def run(self):
		print("%s is running" % self.name)





a=Animal('dog')
a.run()			
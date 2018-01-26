import functools
def log(text):
	def decorator(func):
		@functools.wraps(func)
		def wamp(*args,**keys):
			print(func.__name__)
			print(text)
			return func(*args,**keys)
		return wamp
	return 	decorator	

@log('hello my name is zhangsan')
def now():
	print('hello')




now = log('sfs')(now)

print(now.__name__)


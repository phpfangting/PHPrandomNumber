file = io.open('e:/www/echo/a.txt','r')
io.input(file)
print(io.read())

io.close()


file = io.open('e:/www/echo/a.txt','a')
io.output(file)
io.write("hello")
io.close()


for line in io.lines('e:/www/echo/a.txt','r') do

	print(line)
end

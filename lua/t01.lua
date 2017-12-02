function tn(a,b)
	print(a[1]+b[1]);
end
mt = {__add=tn}
t1 = {10}
t2={30}

setmetatable(t1,mt)
setmetatable(t2,mt)
t = t1+t2

t3 = {50}

setmetatable(t3,mt)
t = t1+t3


mt.__index = function (table,key)

	if key=='age' then
		return 'dahuaidan';
	end


end


tt =t3.age
print(tt)

t3.sayHello = function ()

	print('hello')

end

print(t3.sayHello())


for n in pairs(_G) do
	print(n)
end




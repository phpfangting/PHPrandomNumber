
a=setmetatable({name='zhnagsan'},{age=90,__index=function (self,key)
    print(self.name)
	if key=='age' then
		return 'hello'
	else
		return mytable[key]
	end
end
})

print(a.age)




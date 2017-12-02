local People = {name='sfsd',age=10}
function People:say (age)

	self.age = self.age+age
end


function People:new(Student)
	Student = Student or {}
	setmetatable(Student,self)
	self.__index=self
	return Student
end

local r = People:new(nil)
r:say(100)
print(r.age)

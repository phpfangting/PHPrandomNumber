print('hello I study english')
local fp = require('my')
fp.say()
fp.speak()

c=setmetatable({foo=1},{age='zhangsan'})
getmetatable(c)
print(c.age)


local foo={}

function foo.say()

	print('hello')
end

local function speak()
	print('speak')
end
function foo.speak()
	print("beishangjiuniliuchenghe")
	io.write("你是我内心的一首歌")
end
return foo

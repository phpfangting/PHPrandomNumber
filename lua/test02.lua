co=coroutine.create(
    function(i)
        print(i);
    end
)
coroutine.resume(co,100)
print("----------------------------");
print(coroutine.status(co))


co = coroutine.wrap(

	function (i)
		print(i);
	end

)

co(90)
print("-------------------------");


co2 = coroutine.create(

	function ()
		for i=1,100 do
			print(i)
			if i==3 then
			  print(coroutine.status(co2))
			  print(coroutine.running())

			end
			coroutine.yield()
		end


	end




)

coroutine.resume(co2)
coroutine.resume(co2)
coroutine.resume(co2)
coroutine.resume(co2)
coroutine.resume(co2)
coroutine.resume(co2)

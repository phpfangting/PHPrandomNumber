--description 签名认证->检查参数是否变动
--author      echo_music
--Date	      2017-11-16		


local m_request_method = nil
local m_args = nil                                
local m_key = 'abcdefg'                        
local m_secret = "kjdfkdfgergnre%90"
local _M = {}
local kArr = {}

_M._VERSION = '1.0'

local mt = { __index = _M}

function _M:init()
        --method
	m_request_method = ngx.var.request_method
	
	--获取客户端参数
	self:getParams()
	
	--读取客户端签名和key
	local sign = m_args['sign'] or nil

	local keyClient = m_args['key'] or nil
	
	--检查客户端签名是否为空
	if sign == nil or sign == "" then
		ngx.say('signature is empty')
		ngx.exit(200)
	end
	
	--检查key是否为空
	if m_key ~= keyClient then
		ngx.say('key is wrong')
		ngx.exit(200)
	end

	--获取排序后的参数字段
	kArr = self:getKeys()
	
	--生成服务器签名
	local _sign = self:getSign()
	
	--检查签名合法性
	if sign ~= _sign then
		ngx.say('signature failure')
		ngx.exit(200)
	end	

end 

--生成签名
function _M:getSign()
	
	local paramStr = ''
	for _,val in pairs(kArr) do
     		paramStr = paramStr .. val .. '='.. m_args[val] .. "&"
	end

	local len = string.len(paramStr)-1

	paramStr = string.sub(paramStr,1,len)

	local _sign =string.upper(ngx.md5(m_secret..paramStr))
         
	return _sign

end

--对参数字段排序
function _M:getKeys()
	
	local kArr = {}
	for k,v in pairs(m_args) do

		if k ~= "sign" and  k~="key" then
			table.insert(kArr,k)
		end
	end

	table.sort(kArr)

	return kArr
end

--获取客户端传递的参数
function _M:getParams()
       	
	if m_request_method == "GET" then

		m_args = ngx.req.get_uri_args()

	elseif m_request_method == "POST" then

		m_args = ngx.req.get_post_args()
	end

end

--创建新的对象
function _M:new()
  
     return setmetatable({},mt)
end 

return _M

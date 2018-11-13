# json-query-mysql

​	a tool to simplify the development of *miniprograms*

​	( if u'r fool enough to write hand-made codes, not using frameworks )

​	this programe helps you to access mysql database without deploying java environment

​	and you can now use javascript to access db ***using plaintext password in client*** *!~ lol*

​	 everything in the code, just jump into it



## Procedure

 - (js) client makes http request using post method to "query.php" or others
 - php process requests and operate mysql db
 - php return results

> $_POST["secure_code"] = "password";
> $_POST["sql"] = '{ "table":"your-table-name", "where":{ "a":1, "b":2, "only support equation":"well...yes" } }';



## Application scenarios

​	支付宝小程序 (alipay miniprograms)

​	demo code might be uploaded later



*version: 201808*

*contact: dj@lifesdk.com*


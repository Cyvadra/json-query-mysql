# json-query-mysql

​	a tool to simplify the development of *miniprograms*

​	( if u'r fool enough to write hand-made codes, not using frameworks )

​	this programe helps you to access mysql database without deploying java environment

​	and you can now use javascript to access db ***using plaintext password in client*** *!~ lol*



## Procedure

 - (js) client makes http request using post method to "query.php" or others
 - php process requests and operate mysql db
 - php return results

> $_POST["secure_code"] = "password";
> 
> 
> $operation = Array( "table"=>"users", "where"=>Array("date"="11.11"), "set"=>Array("deposit"=>0) );
> 
> $sql = json_encode($operation);
> 
> $_POST["sql"] = $sql;
> 
> // post this to "update.php"



## Application scenarios

​	支付宝小程序

​	多语言hybrid场景



*version: 20181114*

*contact: dj@lifesdk.com*


# api example
Dummy API Example

SQL (Manual - pending DAL Migrations (https://github.com/packaged/dal-schema))
```
CREATE TABLE `dogs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

```


Initialize the dogs

```curl -X POST "http://127.0.0.1:8888/v1/dogs/init?token"```

Create a dog

```curl -X POST "http://127.0.0.1:8888/v1/dogs?token"```


List All Dogs

```curl "http://127.0.0.1:8888/v1/dogs?token"```

List A Dog By ID

```curl "http://127.0.0.1:8888/v1/dogs/1?token"```


Delete A Dog By ID

```curl -X DELETE "http://127.0.0.1:8888/v1/dogs/8?token"```

Delete all the dogs

```curl -X DELETE "http://127.0.0.1:8888/v1/dogs?token"```

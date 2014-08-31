Get the current user IP in a quick way:

```php
use Filipac\Ip;
<?php
$ip = Ip::get();
echo "Hello, your ip is {$ip}";
?>
```

Install using composer. Package name is ```filipac/ip```.

Add this to **composer.json**
```json
"require": {
        "filipac/ip": "~1.0"
    },
```

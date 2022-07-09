# laravel_export_excel_html
 
[Source](https://www.matawebsite.com/blog/laravel-export-excel)



---
#### Export excel

[Source](https://www.matawebsite.com/blog/laravel-export-excel)

```
composer require maatwebsite/excel --with-all-dependencies
```

- config/app.php

```php
'providers' => [ ..., Maatwebsite\Excel\ExcelServiceProvider::class, ]
'aliases' => [ ..., 'Excel' => Maatwebsite\Excel\Facades\Excel::class, ]
```

```
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"
```
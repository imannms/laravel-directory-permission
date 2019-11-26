Set appropiate permission for storage and bootstrap/cache directory. Support Laravel 5 and 6.

# How to install

## Install using composer
`composer require imannms/laravel-directory-permission`

### For Laravel 5.5+
Nothing is needed, package auto-discovery will work.

### For Laravel 5.2+

Add to `config/app.php`.
```php

	/*
	 * Package Service Providers...
	 */
	Imannms\LaravelDirectoryPermission\ServiceProvider::class,

```

## Finally
Run `php artisan config:cache`.

---

# How to use

```

php artisan imannms:laravel-directory-permission


```

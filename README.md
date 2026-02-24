# Laravel Pagebuilder
> A drag and drop pagebuilder to manage pages in any Laravel project.

Laravel Pagebuilder is built on [PHPageBuilder](https://github.com/HansSchouten/PHPagebuilder). It integrates the most popular open source drag and drop pagebuilder: [GrapesJS](https://grapesjs.com/). This package is made with customization in mind, allowing you to configure, disable or replace any of its modules.

![PageBuilder](https://github.com/gurularavel/kvadrat-page-builder/assets/5946444/63c9186f-e29d-41e0-bb11-565e7b26654b)

## Requirements

- PHP >= 8.2
- Laravel 10, 11 or 12

## Installation

**1. Install via Composer:**

```bash
composer require kvadrat/laravel-pagebuilder
```

**2. Publish the config file:**

```bash
php artisan vendor:publish --provider="Kvadrat\LaravelPageBuilder\ServiceProvider" --tag=config
```

**3. Update `config/pagebuilder.php`** with your database credentials and preferences.

**4. Run migrations:**

```bash
php artisan migrate
```

**5. Create a theme:**

```bash
php artisan pagebuilder:create-theme mytheme
```

Or publish the built-in demo theme:

```bash
php artisan pagebuilder:publish-demo
```

## Usage

After installation, visit `/admin` in your browser.

Default credentials (change these in `config/pagebuilder.php`):
- **Username:** `admin`
- **Password:** `changethispassword`

## Configuration

The config file at `config/pagebuilder.php` lets you customize:

- Database connection
- Admin URL and credentials
- Theme settings
- Page routing
- Caching

## Theme Development

Visit the [PHPageBuilder repository](https://github.com/HansSchouten/PHPagebuilder#create-a-theme) for detailed information on how to develop custom themes.

## License

MIT

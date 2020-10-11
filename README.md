[![Issues](https://img.shields.io/github/issues/pratiksh404/digilab)](https://github.com/pratiksh404/digilab_blog/issues) [![Stars](https://img.shields.io/github/stars/pratiksh404/digilab)](https://github.com/pratiksh404/digilab_blog/stargazers) [![License](https://img.shields.io/github/license/pratiksh404/digilab)](https://github.com/pratiksh404/digilab/blob/master/LICENSE)

## Laravel 7 Admin Panel for lazy developers.

#### Contains : -

-   Counter Management
-   Team Management
-   Page Managament
-   Portfolio Management
-   Image Management
-   Service Management
-   FAQ Management
-   Plan Management
-   Blog Management
-   Settings
-   Role/Permission Management
-   User Management

### Installation

```sh
git clone https://github.com/pratiksh404/digilab.git
```

Install Composer Dependencies

```sh
composer install
```

Create a copy of your .env file

```sh
cp .env.example .env
```

Generate an app encryption key

```sh
php artisan key:generate
```

Create an empty database for our application and set yo environment variable in .env file

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=digilab
DB_USERNAME=root
DB_PASSWORD=
```

Then migrate the database.
Go on the console and type..

```sh
php artisan migrate --seed
```

This allows you to have necessary login credential

> Admin Credential
> email : admin@admin.com
> password: admin123

> User Credential
> email : user@user.com
> password: user123

## Package Used

-   https://github.com/pratiksh404/doctype_admin_blog
-   https://github.com/pratiksh404/doctype_website
-   https://github.com/pratiksh404/doctype_admin_settings

## Screenshots

![Doctype Admin Digilab](https://github.com/pratiksh404/digilab/blob/main/screenshot/homepage.jpg)
![Doctype Admin Digilab](https://github.com/pratiksh404/digilab/blob/main/screenshot/about.jpg)
![Doctype Admin Digilab](https://github.com/pratiksh404/digilab/blob/main/screenshot/login.jpg)
![Doctype Admin Digilab](https://github.com/pratiksh404/digilab/blob/main/screenshot/register.jpg)
![Doctype Admin Digilab](https://github.com/pratiksh404/digilab/blob/main/screenshot/roles.jpg)
![Doctype Admin Digilab](https://github.com/pratiksh404/digilab/blob/main/screenshot/all_user.jpg)
![Doctype Admin Digilab](https://github.com/pratiksh404/digilab/blob/main/screenshot/plugin.jpg)

## Note

Frontend theme is used from colorlib [Digilab Theme](https://github.com/pratiksh404/digilab/tree/main/resources/views/digilab)

## Contribution

Feel free to improve this open source website. Send us your PR.

## Todos

-   Blogs
-   Contact Us

## License

MIT

**DOCTYPE NEPAL ||DR.H2SO4**

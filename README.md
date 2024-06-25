# Tour Globe

Management system to manage tourism website.

## Steps to run project

-   Clone the project by `git clone`
-   Create `.env` file from `.env-example` file and add change sql _username_ and _password_
-   Run `php artisan migrate` to create tables in database.
-   Run `php artisan db:seed` to add data to database tables.
-   Default admin email is *bakar@mail.com* & password is _[12345]()_.
-   To create the list of countries run `php artisan g:c`, [Wisdom Diala Countrypkg](https://github.com/wisdom-diala/countrypkg-laravel) package is used for this.

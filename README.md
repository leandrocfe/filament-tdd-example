# How To Write Tests in Filament

![screenshot](https://raw.githubusercontent.com/leandrocfe/filament-tdd-example/master/screenshots/example.jpg)

For the purpose of this project, we will create a simple Post Resource to create, read, update and delete post posts. We will:

- Write a test
- Run the test — which will fail
- Make changes to code to make the test pass(refactor)
- Repeat

## Installation

Clone the repository:

```bash
git clone https://github.com/leandrocfe/filament-tdd-example.git
```

Switch to the repo folder:

```bash
cd filament-tdd-example
```

Create a new MySQL database called `filament_tdd_example`. Copy the example env file and set the database connection:

```bash
cp .env.example .env
```

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filament_tdd_example
DB_USERNAME=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
```

You may run the following commands in your terminal:

```bash
composer install
php artisan migrate --seed
```

## Usage

After the project has been built, start Laravel's local development server using the Laravel's Artisan CLI serve command:
```bash
php artisan serve
```
Once you have started the Artisan development server, your application will be accessible in your web browser at [http://localhost:8000/admin](http://localhost:8000/admin).

You can choose a user's credentials and authenticate to access the Filament Admin Panel (default password: *password*).

## Tests

You may run the following command in your terminal:

```bash
./vendor/bin/pest
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)

# laravel-paypal

## Installation Steps

1. Clone the repository.
2. Create a MySQL database with your favorite name ex:"blogs".
3. Run the following commands:

```
composer install
```

```
cat .env.example > .env
```

```
php artisan key:generate
```

4. Customize the vars in the `.env` file with your database info.
5. Run migration and seed:

```
php artisan migrate --seed
```

6. add credentials
``PAYPAL_SANDBOX_CLIENT_ID`` && ``PAYPAL_SANDBOX_CLIENT_SECRET`` in the env file

7. Start the application:

```
php artisan serve
```

and open this URL in your browser `127.0.0.1:8000`
use this these credentials for login email: `super_admin@app.com` pass: `12345678`

## Development

For development, you can run:

```
npm run watch
```

or

```
npm run hot
```

## Donation

If you find this helpful, consider buying me a coffee :)

<center>

[![QR Code for Donation](https://github.com/islamsamy214/admin-laravel-vue-bootstrap/blob/master/public/bmc_qr.png?raw=true)](https://www.buymeacoffee.com/islamsamy)

</center>
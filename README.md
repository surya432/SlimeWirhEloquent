# Slim Framework Skeleton Application With Eloquent

Use this skeleton application With Eloquent to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer and Eloquent ORM. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.
## Support By:

We build with:
* [Eloquent Laravel](https://laravel.com/docs/8.x/eloquent)
* [Validation Request](https://github.com/Respect/Validation)
* Custom Error JSON
* Fitur multi Connection Database

### Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar clone surya432/SlimeWirhEloquent [my-app-name]
    
Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands 

	cd [my-app-name]
	php composer.phar install 
	php composer.phar start
	
Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:

	cd [my-app-name]
	php composer.phar install 
	docker-compose up -d
After that, open `http://127.0.0.1:8080` in your browser.

Run this command in the application directory to run the test suite

    php composer.phar install 
	php composer.phar test

That's it! Now go build something cool.


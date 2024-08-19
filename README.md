# CodeIgniter 4 Blog Tutorial

1. Firstly, clone the repository
2. Clear cache composer and composer update to fetch the vendor 

```bash
composer clearcache
composer update
```

3. Create .env file and your own configuration similar to below:

```bash
app.baseURL = 'http://ci4blog.local'
app_baseURL = 'http://ci4blog.local'

database.default.hostname = localhost
database.default.database = ci4blog_db
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix = 
database.default.port = 3306

#The author using mailtrap https//mailtrap.io for sending email with PhpMailer using below config
EMAIL_HOST=
EMAIL_USERNAME=
EMAIL_PASSWORD=
EMAIL_ENCRYPTION=
EMAIL_PORT=687
EMAIL_FROM_ADDRESS=
EMAIL_FROM_NAME=
```

4. Create database and run migration for 

```bash
php spark migrate
```

5. Seed a user for testing

```bash
php spark db:seed UserSeeder
```

6. Enjoy coding


Tutorial here ['Sawa Stacks'](https://youtu.be/o-Yhyz28MPA?si=DuYU-yegB7INIzZ3)

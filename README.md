## Installation
- Download repo
- Create database
- Set up Database credentials in .env file
```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=XXX_DB_XXX
  DB_USERNAME=XXX_DB_USER_XXX
  DB_PASSWORD=XXX_DB_USER_PASSWORD_XXX
```
- Run migration command
```
php artisan migrate
```
- Run database seeding command
```
php artisan db:seed
```
- Install npm for react application
```
npm install 
```
- Compile react
```
npm run dev
```

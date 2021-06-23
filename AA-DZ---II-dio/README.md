1. Što je potrebno: 
    - instaliran lokalni server npr. xampp
    - instaliran phpadminpanel (mysql)
    - kreiran projekt i kreiran credentials na https://console.cloud.google.com/ kao na slici ispod


![podesiti credentials kao na slici](https://i.imgur.com/ox8NCLz.png)

    
2. Pokrenuti komandu:  ```git clone https://github.com/Nebra98/AA-DZ---II-dio.git``` , ili Download ZIP
    
3. Nakon što ste preuzeli datoteku, potrebno je da se navigirate u nju preko terminala ili cmd-a
 
4. Nakon što ste se navigirali potrebno je pokrenuti komandu:  ```composer install ```

5. Pokrenuti komandu:  ```cp .env.example .env ``` 

6. U .env fileu podesiti parametre za spajanje s bazom podataka: 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ime_baze_podataka
DB_USERNAME=root
DB_PASSWORD=
  ```
            
7. Pokrenuti komandu:  ```php artisan key:generate ``` 

8. Pokrenuti komandu: ```composer require laravel/socialite ```

9. U ```config/services.php```, potrebno je dodati code:
```
'google' => [
   'client_id' => 'vas client id',
   'client_secret' => 'vas client secret',
   'redirect' => 'http://localhost:8000/auth/google-callback',
],
```
 
10. U  ```config/app.php```, u array 'providers' potrebno je dodati SocialiteServiceProvider:
```
Laravel\Socialite\SocialiteServiceProvider::class,
```
    
11. Također u  ```config/app.php```, u arrayu 'aliases', potrebno je dodati:
```
'Socialite' => Laravel\Socialite\Facades\Socialite::class,
```
12. Pokrenuti komandu: 
```
php artisan migrate
```

13. Pokrenuti lokalni server (ukoliko se lokalni server pokrene kao link: ```http://127.0.0.1:8000```, potrebno je samo u linku promijeniti na:  ```http://localhost:8000```):
```
php artisan serve
```

## Docker Installation
### command 
``` 
make init
```

### note
- container run on ``` localhost:8000 ```

## Manual Installation
1. makesure you have setting up database config in .env file
2. install dependencies
    ```bash
    composer install
    ```
3. generate key
    ```bash
    php artisan key:generate
    ```
4. run migration
    ```bash
    php artisan migrate
    ```
5. run database seeder (optional)
    ```bash
    php artisan migrate:refresh
    ```
6. run the server 
    ```bash
    php artisan serve
    ```

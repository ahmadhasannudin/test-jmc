## Docker Installation
### command 
``` 
make init
```

### note
- container run on ``` localhost:8000 ```
- you can see log of job on container ``` queue ```
- default deposit and withdraw api is delayed by 10 sec, you can change it at each job handle() function. then restart the queue container
- if you have trouble connecting to database try to delete the local database volume at ./docker/mysql-data

## Manual Installation
1. makesure you have setting up database config in .env file
2. generate key
    ```bash
    php artisan key:generate
    ```
3. run migration
    ```bash
    php artisan migrate
    ```
4. run database seeder (optional)
    ```bash
    php artisan migrate:refresh
    ```
4. run the server 
    ```bash
    php artisan serve
    ```
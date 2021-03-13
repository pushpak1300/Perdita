# 37_Tricode

## Predita

### Requirements
- `Docker`
-  `Docker Compose`

#### Setup the Project
1. Clone the repo and run `cp .env.example .env`
2. Run this command to download composer dependencies:
   <br>
   ``` bash
   docker run --rm \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install
   ```
3. Make sure no process is running on 8000,8001,8002 port and Run the command to run the containers<br>`./vendor/bin/sail up`
   While running the application make sure you have alias set up for `alias ./vendor/bin/sail= sail`
4. Run command to set application key `sail artisan key:generate`   
5. Run command to migrate the database `sail artisan migrate --seed`
6. Run the test using this command`sail artisan test`
7. Run this command to install dependencies `sail npm install`
8. Runt the watchers `sail npm run watch`

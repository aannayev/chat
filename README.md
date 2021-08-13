### Welcome to the chat system with laravel-vuejs and webscokets


> Npm run install 

>php artisan  migrate

>php composer.phar install



This is my **env** file
```php
APP_NAME=Laravel  
APP_ENV=local  
APP_KEY=base64:KUuMykgL9YWw9A+pIzda5c6DArBqr9ZKoLeHJfAKXwE=  
APP_DEBUG=true  
APP_URL=http://vuechat  
  
LOG_CHANNEL=stack  
LOG_LEVEL=debug  
  
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=vuechat  
DB_USERNAME=root  
DB_PASSWORD=root  
  
BROADCAST_DRIVER=pusher  
CACHE_DRIVER=file  
FILESYSTEM_DRIVER=local  
QUEUE_CONNECTION=sync  
SESSION_DRIVER=file  
SESSION_LIFETIME=120  
  
MEMCACHED_HOST=127.0.0.1  
  
REDIS_HOST=127.0.0.1  
REDIS_PASSWORD=null  
REDIS_PORT=6379  
  
MAIL_MAILER=smtp  
MAIL_HOST=mailhog  
MAIL_PORT=1025  
MAIL_USERNAME=null  
MAIL_PASSWORD=null  
MAIL_ENCRYPTION=null  
MAIL_FROM_ADDRESS=null  
MAIL_FROM_NAME="${APP_NAME}"  
  
AWS_ACCESS_KEY_ID=  
AWS_SECRET_ACCESS_KEY=  

AWS_BUCKET=  
AWS_USE_PATH_STYLE_ENDPOINT=false  
  
  
PUSHER_APP_ID=12345  
PUSHER_APP_KEY=ABCDFRG  
PUSHER_APP_SECRET=HIJKLMOP  
PUSHER_APP_CLUSTER=mt1  
  
  
  
MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"  
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"




```

<!-- UL -->
* After you set ** env**  file you can try to run WebSocket

> php artisan websocket:serve

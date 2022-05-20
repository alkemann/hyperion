FROM heroku/heroku:20

RUN composer install
RUN npm install
RUN npm build



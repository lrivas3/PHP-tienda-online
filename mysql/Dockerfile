FROM mysql:5.7.15


ENV MYSQL_DATABASE = ecommerce \
  MYSQL_ROOT_PASSWORD = root

ADD schema.sql /docker-entrypoint-initdb.d

EXPOSE 3306

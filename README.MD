#Práctica de la tienda
 Actualmente vamos mostrando los productos y opción de cesta vaciar cesta

*no olvidar arrancar docker
 docker start mysql
*Y los servicios

 docker exec mysql service apache2 start
 docker exec mysql service mysql start

y cambiar los permisos en el directorio para que funcione smarty
 cd /var/www/TiendaShop
 sudo chown alumno:www-data * -R
 sudo chmod 775 * -R

 

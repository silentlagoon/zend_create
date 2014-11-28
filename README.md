Zend Create
=======================

Application which is able to save data to MYSQL database which are entered at the form with form validattion, based on ZendSkeletonApplication

Installation
------------

Configure your server to be starting directory
```
/public
```

Apache vhost example configuration on Windows 7
------------
```
<VirtualHost *:80>
 DocumentRoot "C:/application_folder/public"
 ServerName zend_test
 <Directory "C:/application_folder/public">
     AllowOverride All
     Order Allow,Deny
     Allow from all
     Require all granted
 </Directory>
 </VirtualHost>
 ```

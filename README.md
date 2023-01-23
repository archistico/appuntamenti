[![screenshot](https://raw.githubusercontent.com/archistico/appuntamenti/master/screenshot.png)](https://raw.githubusercontent.com/archistico/appuntamenti/master/screenshot.png)

# APPUNTAMENTI

Programmazione appuntamenti per studio medico

## Licenza

Licenza MIT che trovate sotto il file licence

## Installazione XAMPP

In "C:\xampp\apache\conf\extra\httpd-vhosts.conf"
``` 
<VirtualHost *:80>
	ServerAdmin webmaster@localhost.com
	DocumentRoot "E:/siti/test/appuntamenti"
	DirectoryIndex index.php index.html
	ServerName appuntamenti.local
	<Directory "E:/siti/test/appuntamenti">
        Options Indexes FollowSymLinks
        AllowOverride None
        Require all granted
	</Directory>
</VirtualHost>
```

Modifica poi il file config.php con i propri dati di accesso alla base dati
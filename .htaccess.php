<IfModule mod_rewrite.c>
 RewriteEngine On
 RewriteBase /lab4/
 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteRule ^(.*)$ index.php?mod=$1 [L]
</IfModule>

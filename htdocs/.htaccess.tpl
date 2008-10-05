<IfModule mod_rewrite.c>
    RewriteEngine On

    # This must be / for SF but may be different if testing locally
    RewriteBase /

    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
</IfModule>

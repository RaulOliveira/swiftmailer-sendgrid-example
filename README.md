Basic example of sending e-mail using Swiftmailer, Twig and the SendGrid platform.

The index.php file should contain the sender and recipient adresses.

### Create these environment variables:

HOST=smtp.sendgrid.net
USER=apikey
SENDGRID_KEY=KEY_GENERATED_BY_SENDGRID


### Example start server:
```
export HOST=smtp.sendgrid.net; \
export USER=apikey; \
export SENDGRID_KEY=S...8bY...HUvI-8b8RQ...2UXBjA71k-nCh...f9wo; \
php -S localhost:8000
```

### Access:
```
http://localhost:8000
```
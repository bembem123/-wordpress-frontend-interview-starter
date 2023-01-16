# WordPress Project

Upload your database located in -wordpress-frontend-interview-starter/public/wp/database/newsletter_db.sql

Login Credentials:

    username:admin
    
    password:admin

```
composer create-project johnpbloch/wordpress-project my-site 1.0.3
```

This will create the project in the `my-site` directory. The project uses `public` as the document root, so make sure to take that into account in your host configurations.

Site configuration is in the `.env` file. If you want to define a constant there, prefix the constant name with `WPC_`.

This package is meant to kickstart development of your site. It's probably unwise to use it to deploy a site directly to production.

## License

MIT

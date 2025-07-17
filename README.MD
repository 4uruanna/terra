# TERRA

## GETTING STARTED

### PREREQUISITES

1. Composer
2. Php 8.2 or later

### INSTALL BACKEND

1. Move to the backend directory ( `cd backend/` )
2. Install dependencies using composer ( `composer install` )
3. Duplicate `.env.sample` as `.env` and fill it
4. Run it locally using PHP built-in server ( `php -S {YOUR_WP_HOME_VALUE_HERE} -t ./web` )
5. Open your browser to your WP_HOME ( Which should be `http://localhost:8096` ) and complete the WordPress installation manually
6. Activate the `Terra` Theme

### CONTRIBUTING

#### GUIDES FOR DEVELOPERS

- [Conventional commits](./documentation/CONVENTIONAL-COMMITS.md)
- [Testing](./documentation/TESTING.md)
- [Linting](./documentation/LINTING.md)
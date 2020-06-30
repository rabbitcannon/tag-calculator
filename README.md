<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Tag Calculator:

##### Quick List Notes:
- Validation is in place through Laravel Requests.
- Calculator does work with `float` numbers.
- Animations are done with <a href="https://animate.style">animate.css</a>
- Relationship set on operator/equation table and in use.
- I had never used Laravel components, so I took this opportunity to learn and use them.
- Styles is not in SASS as the requirement being no javascript, I did not setup a preprocessor. This is also while animate is running off a CDN.
- Added a taco favicon, because 1) Tacos 2) It's a cute taco. 


## Tables of Contents
Quick note: There are two ways to work with this repo.
 - [Docker automated setup](#docker)
 - [Standard laravel installation and usage](#laravel)
 - [Misc. information](#misc)
 
## <a name="docker"></a> Docker Setup

Assumption:
- You have docker installed, if not you can download [here](#https://www.docker.com/products/docker-desktop).
    - This should also install docker-compose needed for automation.

1. Clone the repo
2. Change the directory into your cloned repo
3. Run the command `docker-compose up`
    - If you would like this to not show it running, run in detached mode with `docker-compose up -d`
4. Navigate to the container once they are built using: `docker exec -it tag_php bash` when bashing into the container you are already in the laravel root folder.
    - From here you can do your normal laravel set up: i.e. `composer install`, `php artisan migrate --seed` and appropriate permissions.

## <a name="laravel"></a> Laravel Setup

This will just be your normal laravel installation, nothing special but thought I would address it. But the laravel root directory is in `/src` folder in this repo.

## <a name="misc"></a> Misc Information

I have created an artisan command if you'd like to wipe the database and start over.
That command is `php artisan db:deploy`. This will drop all tables, `migrate` the database and then run `db:seed`.


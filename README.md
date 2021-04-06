![78681326-98bd1480-78ba-11ea-9cd8-3052397a87a7](https://user-images.githubusercontent.com/40076004/113678515-ff883000-96be-11eb-8bd6-3e68f8789695.png)

# About the app

A Movie App using Laravel, Tailwind CSS and The Movie DB REST API. I go over the different architecture options and the different popular technologies around the Laravel/Vue community. I'll be making use of several Laravel 7 features like the HTTP Client and Blade Components. I then style my application with the latest version of Tailwind CSS, using new features like CSS Grid and CSS Transitions.

# Installation

1. Clone GitHub repo for this project locally
2. cd into your project
3. Install Composer Dependencies by this command `composer install`
4. Install NPM Dependencies by this command `npm install`
5. Edit ".env.example" file to be ".env"
6. Set your TMDB_TOKEN in your .env file. You can get an API key <a href="https://www.themoviedb.org/documentation/api">here</a>. Make sure to use the "API Read Access Token (v4 auth)" from the TMDb dashboard.
7. Generate an app encryption key by running `php artisan key:generate`
8. `php artisan serve` or use Laravel Valet or Laravel Homestead
9. Visit `localhost:8000` in your browser

## Built With 



* <a href="https://laravel.com">Laravel</a> - The web framework used

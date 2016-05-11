# Simple Laravel site with a simple GET endpoint for a basic Article.

## Migrations

### `database/migrations/2016_05_11_002431_create_articles_table.php`

Sets up storage for an Article. An Article has:

- id
- reference to the id of a User
- Title
- Body (the content of the Article)
- Timestamps for created and last updated timestamps (created_at, updated_at) 

## Factories

### `database/factories/ModelFactory.php`

#### User Factory

The default Laravel User Factory.

#### Article Factory

Model factory for Articles and sets the title and body when Articles are
generated.

## Seeds

### `database/seeds/UserTableSeeder.php`

Creates 3 Users and also creates an Article by that newly generated user.

### `database/seeds/DatabaseSeeder.php`

Runs all Seeders. Currently this is just the UserTableSeeder. 


## Models

### `app/User.php`

The default User model that comes with Laravel.

### `app/Article.php`

The Article model.


## Controllers

### `app/Http/Controllers/ArticleController.php`

Handles the responses to return a list of Articles and a single Article for a
given id.

## Routes

### `app/Http/routes.php`

- The **`'/'`** route is the default route provided by Laravel.
- **`api/v1/articles`**
  - A simple RESTful JSON endpoint for retrieving a list of Article resources.
- **`api/v1/articles/{id}`**
  - A simple RESTful JSON endpoint for retrieving a single Article resource by id.
  - If an invalid id is provided, the Article listing is returned.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

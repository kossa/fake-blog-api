### Fake api for blog


----------


This api made using Laravel 5.5, any extra package installed, There is 4 models: 
 - User : There is 2 types of users
     - Authors : Who write the posts
     - Visitors : Who comment on the posts
 - Post : the post belongs to one User, and to many Categories, each Post has many Comments
 - Comment : each comment belongs to User and Post
 - Category : Each Category has many Posts

### Installation 
If you want to install the repo on your machine/server, just follow the following commands :
```
git clone git@github.com:kossa/fake-blog-api.git
cd fake-blog-api
composer install
cp .env.example .env # change the database information
php artisan migrate --seed
php artisan serve # open your browser to http://127.0.0.1:8000
```

> Note : You can also use directly http://fakeblog.bel4.com/

### API request for `Post` :
verbs | URI | Description
----- | --- | -----------
Get | [/posts](http://fakeblog.bel4.com/api/posts) | Get all posts
Get | [/posts/featured](http://fakeblog.bel4.com/api/posts/featured) | Get feauted posts
Get | [/posts/popular](http://fakeblog.bel4.com/api/posts/popular) | Get most visited posts
Get | [/posts/{post}/show](http://fakeblog.bel4.com/api/posts/1/show) | Get one post
Get | [/posts/{post}/comments](http://fakeblog.bel4.com/api/posts/1/comments) | Get comments of a given post
Get | [/posts/{post}/author](http://fakeblog.bel4.com/api/posts/1/author) | Get author of a given post
Get | [/authors](http://fakeblog.bel4.com/api/authors) | Get list of authors
Get | [/authors/{id}/show](http://fakeblog.bel4.com/api/authors/1/show) | Get an author 
Get | [/authors/{id}/posts](http://fakeblog.bel4.com/api/authors/1/posts) |  Get posts of an author

----------


### Current data : 
- `User` : Total of 20 user, 10 authors, 10 visitors
- `Category` : 20 category
- `Post` : 500 posts
- `Comment` : 10 000 comments


----------


#### Need more data or more fields ?
Very easy, just add an [issue](https://github.com/kossa/fake-blog-api/issues) 

#### Need more API ?
Again easy, just add an [issue](https://github.com/kossa/fake-blog-api/issues) 

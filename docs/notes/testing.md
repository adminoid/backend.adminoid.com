
## Links
<https://mattstauffer.co/blog/better-integration-testing-in-laravel-5.1-powerful-integration-tests-in-a-few-lines>

## Quotes
```php
$user = factory(App\User::class)->create();
$post = factory(App\Post::class)->create();
$post->user()->associate($user);
$post->save();
```
```


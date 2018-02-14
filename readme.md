# MVC-Project

![Global|Soft](https://cldup.com/dTxpPi9lDf.thumb.png)

MVC-Project is a light weight project template that aims to speed up development time. Just upload the files to your server and you're ready to go.
No dependencies and no BS.

# Features
  - Database Manager Class.
  - File Caching Manager.
  - Jumbotron Bootstrap Template.

### File Structure

* assets - contains all the assets that your project will need (css/js/fonts ...)
* classes - contains all the classes that you'll need or create. (NOTE: this classes will be automatically loaded and ready to user in anywhere in your project)
* controllers - a folder that contains all your controllers or sections of your project
* models - contains all of your model classes in which you'll want to load up your data and pass it to your views.
* views - contains a set of folders, one for each model or class you've created.
* index.php - loads all of your classes and redirects to a specific controller.


### Development

Want to contribute? Great!

get your hands dirty.

Fetching data from the database:
```php
// valid from Controller or Model
// Selecting mulitiple rows
$result = $this->database->query('SELECT * FROM Users LIMIT 10')->results();

// Selecting the first row
$row = $this->database->query('SELECT * FROM Users LIMIT 10')->first();

// Querying with parameters
$result = $this->database->query('SELECT * FROM Users WHERE ID = ?', array(10))->results();
$result = $this->database->query('SELECT col1, col2, col3 FROM Users WHERE ID = ? AND Email = ?',array($id, $email))->first();

```

Getting POST parameters:
```php
// from controller or model
$email = $this->POST->email;
```

GET Parameters:
```php
// from controllers or models
$this->GET->name;
```

Responding with JSON:
```php
// from controllers or models
$this->response->jsonResponse(array());
```

Responding with TXT:
```php
// from controllers or models
$this->response->textResponse($txt);
```

Tokenizer Class:
```php
// Tokenizer::put(name, value, duration in secs);
Tokenizer::put('name', 'value', 86400/24);

// Tokenizer::get(name);
// returns null if not found.
$value = Tokenizer::get('name');

//Tokenizer::delete(name);
Tokenizer::delete('name');
```

### Todos

 - Write Tests
 - Complete documentation

License
----

MIT


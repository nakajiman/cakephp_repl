# REPL for CakePHP 1.3 

```
example/app/vendors/shells/repl.php
```

```
$ ./cake/console/cake repl

Welcome to CakePHP v1.3.21 Console
---------------------------------------------------------------
App : app
Path: /home/nakajiman/example/app
---------------------------------------------------------------
> $model = ClassRegistry::init('User');
> $user = $model->findById(1);
> var_dump($user);
array(1) {
  'User' =>
  array(16) {
    'id' =>
    string(1) "1"
    'nickname' =>
    string(10) "nakajiman"
    'created' =>
    string(19) "2008-12-16 07:00:00"
    'modified' =>
    string(19) "2014-08-19 14:00:00"
  }
}
> exit;

$
```

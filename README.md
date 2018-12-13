# is-windows

Ready to check if you are running on Windows? [![Build Status](https://travis-ci.org/ekiwok/is-windows.svg?branch=master)](https://travis-ci.org/ekiwok/is-windows)

#### Installation

```bash
composer install ekiwok/is-windows
```

#### Usage

```php
<?php

use function Ekiwok\isWindows;

echo (isWindows() ? 'It might be Windows.' : 'It might not be Windows.') . PHP_EOL;
```

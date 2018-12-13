# is-windows

Ready to check if you are running on Windows?

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

# Enum plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require soluciones-ypunto/cake-enum
```


## Usage

Define your enum lists as follow:

```php

<?php

// file Model/Enum/SomeList.php

namespace App\Model\Enum;

use Ypunto\EnumType\Enum\Enum;

class SomeList extends Enum
{
    const VALUE_1 = 1;
    const VALUE_2 = 2;
    const SOME_VALUE = 'any-val';

    /**
     * @return string[]
     */
    public static function getOptions()
    {
        return [
            self::VALUE_1 => __('First'),
            self::VALUE_2 => __('Second'),
            self::SOME_VALUE => __('Some Value'),
        ];
    }
}

```


Then use them in forms, to display values or to compare then, without using plain strings.

```php

<?php

// in templates
// to create select controls
echo $this->Form->control('value', ['options' => \App\Model\Enum\SomeList::getOptions()]);

// to display
echo \App\Model\Enum\SomeList::getOption($entity->value);

// to compare
if ($entity->value === \App\Model\Enum\SomeList::VALUE_1) {
    // do something
}

```

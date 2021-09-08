## Nova Toggle Switch Field

A Laravel Nova toggle switch field
## Installation

You can install the package into a Laravel app that uses Nova via composer:

```bash
composer require naif/toggle
```

## Usage:
Add the below to Nova/User.php resource:

```php

# You can set the toggle switch color by color code.
Toggle::make('Toggle')->color('#7e3d2f'),
  
# Also you can set the toggle switch true and false colors that displayed in index and detail views by color code.
Toggle::make('Toggle')->color('#7e3d2f')->onColor('#7a38eb')->offColor('#ae0f04'),
    
```

<img src="https://github.com/naifalshaye/toggle-switch/blob/master/screenshots/colors.png" width="142">

<img src="https://raw.githubusercontent.com/naifalshaye/toggle-switch/master/screenshots/image1.png" width="500">

<img src="https://raw.githubusercontent.com/naifalshaye/toggle-switch/master/screenshots/image2.png" width="500">

<img src="https://raw.githubusercontent.com/naifalshaye/toggle-switch/master/screenshots/image3.png" width="500">

<img src="https://raw.githubusercontent.com/naifalshaye/toggle-switch/master/screenshots/image4.png" width="500">

## Support:
naif@naif.io

https://www.linkedin.com/in/naif

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

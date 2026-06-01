# README.md

# BGMI UID Validator API

A simple PHP API wrapper that validates BGMI UIDs and fetches player information.

## Features

* Validate BGMI UID
* Fetch player username
* JSON response
* Easy integration with websites and apps

## Installation

1. Upload `bgmi-api.php` to your server.
2. Make sure PHP cURL extension is enabled.
3. Access the API using:

```text
https://yourdomain.com/bgmi-api.php?uid=55503845983
```

## Example Response

```json
{
    "success": true,
    "status": 200,
    "data": {
        "isValid": true,
        "username": "ÑM丨SPÎÇY"
    }
}
```

## Example Usage

### JavaScript

```javascript
fetch("https://yourdomain.com/bgmi-api.php?uid=55503845983")
.then(res => res.json())
.then(data => console.log(data));
```

### PHP

```php
$response = file_get_contents(
    "https://yourdomain.com/bgmi-api.php?uid=55503845983"
);

$data = json_decode($response, true);

print_r($data);
```

## Disclaimer

This project is provided strictly for educational and learning purposes.

* This project is not affiliated with, endorsed by, or associated with Krafton, PUBG, BGMI, Rooter, or any third-party gaming platform.
* Use responsibly and comply with all applicable terms of service and local laws.
* The author is not responsible for misuse of this code.

## License

MIT License

```
MIT License
```

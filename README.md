# Taiwan CWA OpenData Archive

This project archives open data from the [Central Weather Administration (CWA) of Taiwan](https://opendata.cwa.gov.tw/). It currently focuses on earthquake reports.

## Features

- Automatically fetches earthquake data from the CWA OpenData API
- Archives earthquake records in JSON format
- Organizes data by year for easy access

## Requirements

- PHP
- Valid API authorization key from CWA OpenData platform

## Usage

1. Create a `config.php` file in the `scripts` directory with your API key:
```php
<?php
return [
    'Authorization' => 'YOUR_API_KEY_HERE',
];
```

2. Run the fetch script to download earthquake data:
```bash
php scripts/01_fetch.php
```

## Data Structure

Earthquake data is stored in the `raw` directory, organized by year. Each earthquake record is saved as a separate JSON file named with its earthquake number.

## License

MIT License

Copyright (c) 2023 Finjon Kiang

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE. 
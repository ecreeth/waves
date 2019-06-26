# Laravel Front-end preset for React, Tailwindcss

This scaffolding structure is being used at the front-end in eCreeth.

#### A basic structure of files
- `resources/views`
  - `auth`
    - `passwords`
      - email.blade.php
      - reset.blade.php
    - login.blade.php
    - register.blade.php 
    - verify.blade.php
  - `layouts`
    - master.blade.php
  - index.blade.php
  
- `resources/js`
  - app.js
  - bootstrap.js
  
- `root`
  - tailwind.config.js
  - webpack.mix.js
## Packages
- `@babel/preset-react`
- `react`
- `react-dom`
- `tailwindcss`
- `@tailwindcss/custom-forms`
- `laravel-mix-purgecss`

## Contents

- [Installation](#installation)
- [Usage](#usage)

## Installation
```bash
composer require ecreeth/waves
```
## Usage
Then run 
- `php artisan preset waves`
- `npm install && npm run dev` or `yarn && yarn run dev`


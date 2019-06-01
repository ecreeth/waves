# Laravel Front-end preset for React, Tailwindcss & Styled Components 

This scaffolding structure is being used at the front-end in eCreeth.

All `.blade` files have been stylized with tailwindcss, they were taken from [@michaeldyrynda](https://github.com/laravel-frontend-presets/tailwindcss)

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
- `styled-components`
- `babel-plugin-styled-components`
- `prop-types`
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


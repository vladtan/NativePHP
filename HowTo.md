# Starting the app
In one terminal, project root, start "php artisan native:serve". That will start the server.
In another terminal, also in project root, start "npm run dev" to have live update in the template.
Again, you need to have node version 16 and upper.
# Native PHP docs
https://nativephp.com/docs/1/getting-started/introduction

# Issues encountered while installing current version of nativephp

- Node version must be at least 16
- php file needed to be copied from usr/bin to nativephp root/vendor/nativephp/php-bin/mac/x86 (in my case)
- In Ubuntu, if you wish to see menu bar, you need to press ALT

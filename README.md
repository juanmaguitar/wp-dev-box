# wp-dev-box

My own personal work environment for WP experiments

## Format and Coding Standards for WordPress

To work in Visual Studio with format and Coding Standards recommended for WordPress (both for PHP and JS) we can do the following:

1- Install the composer dependencies for the project

```
composer install
```

2- Install the NPM dependencies for the project

```
npm install
```

3- Install the following Visual Studio extensions:

-   [Prettier - Code formatter](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
-   [ESLint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)
-   [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
-   [PHP Sniffer & Beautifier](https://marketplace.visualstudio.com/items?itemName=ValeryanM.vscode-phpsab)

4- Use the Visual Studio settings available at `.vscode/settings.json.sample`

    - Navigate to the `.vscode` directory at the root of the project.
    - Copy the `settings.json.sample` file and rename the copy to `settings.json`.
    - If desired, customize the `settings.json` with your personal preferences.

## Debug

This project's configuration for `wp-env` is already prepared to be launched in DEBUG mode (see `.wp-env.json`)

```
"WP_DEBUG_LOG": "/var/www/html/wp-content/debug.log",
"WP_DEBUG_DISPLAY": true
```

To debug PHP code ran through `wp-env` you can enter the `bash` inside the container by doing 
```
yarn wp-env run cli bash
```

And then show in real time the `debug.log`

- show last 10 lines → `sudo tail -f /var/www/html/wp-content/debug.log`
- show `n` number of lines → `sudo tail -n 20 -f /var/www/html/wp-content/debug.log`
- 
At `mu-plugins/utils.php` there's a handy `write_log` function that can be used to log your data into `debug.log`. To call this funciton you just can do `wpDevBox\Utils\Debug\write_log()`

### Debug with Xdebug

In order to run XDebug with Visual Studio you need to have the following extension installed 

-   [PHP Xdebug](https://marketplace.visualstudio.com/items?itemName=kakumei.php-xdebug)

And run `wp-env` with the following flag

```
npx wp-env start --xdebug
```

There's a `.vscode/launch.json` already defined in this project.

> [!NOTE]
> Don't forget to include the path of the folder you want to debug at:
> - `"pathMappings"` property of `.vscode/launch.json`
> - `"themes"` or `"plugins"` property of `.wp-env.json`

Check [here](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/#using-xdebug) for full info about enabling XDebug with `wp-env`


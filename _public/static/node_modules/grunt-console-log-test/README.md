# grunt-console-log-test

Grunt plugin for preventing you from accidentally comitting a console.log statement into your project. This is particularly useful in node-based projects on the server side and AngularJS-based projects client-side. In node, console.log statements are evaluated synchronously and can severely affect an applications performance. In AngularJS-based projects, it's preferable to use angular's `$log` service instead of the console API so this plugin aids in keeping code style consistent.

## Getting Started
This plugin requires Grunt `~0.4.0`

If you haven't used [Grunt](http://gruntjs.com/) before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains how to create a [Gruntfile](http://gruntjs.com/sample-gruntfile) as well as install and use Grunt plugins. Once you're familiar with that process, you may install this plugin with this command:

```shell
npm install grunt-console-log-test --save-dev
```

Once the plugin has been installed, it may be enabled inside your Gruntfile with this line of JavaScript:

```js
grunt.loadNpmTasks('grunt-console-log-test');
```

## merge-conflict task
_Run this task with the `grunt console-log-test` command._

You'll generally just want to check all of your JS files every time but you can also configure different targets for different kinds of builds.

Task targets, files and options may be specified according to the grunt [Configuring tasks](http://gruntjs.com/configuring-tasks) guide.

### Example

Note in the example below that the `node_modules` folder is omitted. That's because we don't want to do console.log checking on other people's work that we don't maintain.

```js
'console-log-test': {
  test: [
    '**/*.{js,html}',
    '!node_modules/**/*'
  ]
}
```

## Running the Tests
Run `grunt test`.

## Licenses

### Disclaimer

This software is strongly modeled after the grunt-merge-conflict project but has been significantly modified since the original forking. No claim is made that the softare is of similar quality or that I have any ownership over the original code.

Original Sofware License: BSD
Grunt console.log Test License: Creative-Commons Share-Alike Attribution License


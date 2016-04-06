module.exports = function (grunt) {

    // 1. All configuration goes here
    grunt.initConfig({

        comments: {
            js: {
              options: {
                singleline: true,
                multiline: false
              },
              src: [ 'lib/*.js' ]
            },
            php: {
              options: {
                singleline: true,
                multiline: true
              },
              src: [ 'lib/*.php' ]
            }
        },
        pkg: grunt.file.readJSON('package.json'),

        config: {
            dir: {
                'public': './'
            }
        },

        less: {
            dist : {
                options: {
                    paths   : ['<%= config.dir.public %>less'],
                    compress: false
                },
                files  : {
                    '<%= config.dir.public %>css/bizjournals.css': '<%= config.dir.public %>less/bizjournals.less',
                    //'<%= config.dir.public %>css/coach-marks.css': '<%= config.dir.public %>less/coach-marks.less'
                }
            },
            build: {
                options: {
                    paths   : ['<%= config.dir.public %>less'],
                    compress: true
                },
                files  : {
                    '<%= config.dir.public %>css/bizjournals.min.css': '<%= config.dir.public %>less/bizjournals.less'
                }
            }
        },

        jst      : {
            compile: {
                options: {
                    amd        : true,
                    processName: function (filepath) {
                        return filepath.replace(/\/templates\/(.*).html/,
                            '$1').replace(/\W/g,
                            '');
                    }
                },
                files  : {
                    '<%= config.dir.public %>js/templates.js': ['<%= config.dir.public %>templates/**/*.html']
                }
            }
        },
        // Camelcase module folder then module name (i.e. account/userProfile -> accountUserProfile).
        requirejs: {
            lists          : {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/lists.js',
                    name: 'modules/lists',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                    ],
                    out: '<%= config.dir.public %>dist/js/lists.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            events          : {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/events.js',
                    name: 'modules/events',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                   ],
                    out: '<%= config.dir.public %>dist/js/events.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            userProfile    : {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/accounts/hod.js',
                    name: 'modules/accounts/hod',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                    ],
                    out: '<%= config.dir.public %>dist/js/accounts/hod.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            updateInfo    : {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/accounts/updateinfo/index.js',
                    name: 'modules/accounts/updateinfo/index',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                    ],
                    out: '<%= config.dir.public %>dist/js/accounts/updateinfo/index.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            mpRegister: {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/accounts/register/mpregister.js',
                    name: 'modules/accounts/register/mpregister',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                    ],
                    out: '<%= config.dir.public %>dist/js/accounts/register/mpregister.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            register: {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/accounts/register/register.js',
                    name: 'modules/accounts/register/register',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                    ],
                    out: '<%= config.dir.public %>dist/js/accounts/register/register.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            login: {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/auth/login/login.js',
                    name: 'modules/auth/login/login',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                    ],
                    out: '<%= config.dir.public %>dist/js/auth/login/login.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            forgotpass: {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/auth/login/forgotpass.js',
                    name: 'modules/auth/login/forgotpass',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                    ],
                    out: '<%= config.dir.public %>dist/js/auth/login/forgotpass.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            resetpass: {
                options: {
                    baseUrl: '<%= config.dir.public %>js',
                    mainConfigFile: '<%= config.dir.public %>js/modules/auth/login/resetpass.js',
                    name: 'modules/auth/login/resetpass',
                    include: [
                        'app/drawer', 'app/menus', 'app/peekaboo', 'app/menubarSearch', 'app/dropdown'
                    ],
                    out: '<%= config.dir.public %>dist/js/auth/login/resetpass.min.js',
                    findNestedDependencies: true,
                    optimize: 'uglify2',
                    uglify2: {
                        mangle: false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            accountHod     : {
                options: {
                    baseUrl                : '<%= config.dir.public %>js',
                    mainConfigFile         : '<%= config.dir.public %>js/modules/accounts/hod.js',
                    name                   : 'modules/accounts/hod',
                    include                : [
                        'app/drawer',
                        'app/menus',
                        'app/peekaboo',
                        'app/menubarSearch',
                        'app/dropdown'
                    ],
                    out                    : '<%= config.dir.public %>dist/js/accounts/hod.min.js',
                    findNestedDependencies : true,
                    optimize               : 'uglify2',
                    uglify2                : {
                        mangle  : false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            jobsPost: {
                options: {
                    baseUrl                : '<%= config.dir.public %>js',
                    mainConfigFile         : '<%= config.dir.public %>js/modules/jobs/post.js',
                    name                   : 'modules/jobs/post',
                    include                : [
                        'app/drawer',
                        'app/menus',
                        'app/peekaboo',
                        'app/menubarSearch',
                        'app/dropdown'
                    ],
                    out                    : '<%= config.dir.public %>dist/js/jobs/post.min.js',
                    findNestedDependencies : true,
                    optimize               : 'uglify2',
                    uglify2                : {
                        mangle  : false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            article        : {
                options: {
                    baseUrl                : '<%= config.dir.public %>js',
                    mainConfigFile         : '<%= config.dir.public %>js/modules/article.js',
                    name                   : 'modules/article',
                    include                : [
                        'app/drawer',
                        'app/truncate',
                        'app/truncatedContent',
                        'app/offCanvas',
                        'app/menus',
                        'app/peekaboo',
                        'app/skyboxes',
                        'app/menubarSearch',
                        'app/dropdown',
                        'app/lightRegEmail',
                        'app/responsiveIframes',
                        'app/breakingNews'
                    ],
                    out                    : '<%= config.dir.public %>dist/js/article.min.js',
                    findNestedDependencies : true,
                    optimize               : 'uglify2',
                    uglify2                : {
                        mangle  : false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            homepage       : {
                options: {
                    baseUrl                : '<%= config.dir.public %>js',
                    mainConfigFile         : '<%= config.dir.public %>js/modules/homepage.js',
                    name                   : 'modules/homepage',
                    include                : [
                        'app/drawer',
                        'app/menus',
                        'app/peekaboo',
                        'app/menubarSearch',
                        'app/dropdown',
                        'app/lightRegEmail'
                    ],
                    out                    : '<%= config.dir.public %>dist/js/homepage.min.js',
                    findNestedDependencies : true,
                    optimize               : 'uglify2',
                    uglify2                : {
                        mangle  : false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            landingPage    : {
                options: {
                    baseUrl                : '<%= config.dir.public %>js',
                    mainConfigFile         : '<%= config.dir.public %>js/modules/landingPage.js',
                    name                   : 'modules/landingPage',
                    include                : [
                        'app/drawer',
                        'app/menus',
                        'app/peekaboo',
                        'app/menubarSearch',
                        'app/dropdown',
                        'app/lightRegEmail'
                    ],
                    out                    : '<%= config.dir.public %>dist/js/landingPage.min.js',
                    findNestedDependencies : true,
                    optimize               : 'uglify2',
                    uglify2                : {
                        mangle  : false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            userStatus     : {
                options: {
                    baseUrl                : '<%= config.dir.public %>js',
                    mainConfigFile         : '<%= config.dir.public %>js/modules/userStatus.js',
                    name                   : 'modules/userStatus',
                    include                : [
                        'app/offCanvas',
                        'app/menus',
                        'app/peekaboo',
                        'app/menubarSearch',
                        'app/dropdown'
                    ],
                    out                    : '<%= config.dir.public %>dist/js/userStatus.min.js',
                    findNestedDependencies : true,
                    optimize               : 'uglify2',
                    uglify2                : {
                        mangle  : false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            pulse          : {
                options: {
                    baseUrl                : '<%= config.dir.public %>js',
                    mainConfigFile         : '<%= config.dir.public %>js/modules/pulse.js',
                    name                   : 'modules/pulse',
                    include                : [
                        'app/drawer',
                        'app/menus',
                        'app/peekaboo',
                        'app/menubarSearch',
                        'app/dropdown',
                        'app/lightRegEmail',
                        'app/pulse/core',
                        'app/pulse/question/form',
                        'app/pulse/results/arc',
                        'app/pulse/results/bars',
                        'app/pulse/results/map'
                    ],
                    out                    : '<%= config.dir.public %>dist/js/pulse.min.js',
                    findNestedDependencies : true,
                    optimize               : 'uglify2',
                    uglify2                : {
                        mangle  : false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            },
            potmForm       : {
                options: {
                    baseUrl                : '<%= config.dir.public %>js',
                    mainConfigFile         : '<%= config.dir.public %>js/modules/potmForm.js',
                    name                   : 'modules/potmForm',
                    include                : [
                        'app/drawer',
                        'app/menus',
                        'app/peekaboo',
                        'app/menubarSearch',
                        'app/dropdown',
                        'app/lightRegEmail',
                        'app/potmForm'
                    ],
                    out                    : '<%= config.dir.public %>dist/js/potmForm.min.js',
                    findNestedDependencies : true,
                    optimize               : 'uglify2',
                    uglify2                : {
                        mangle  : false,
                        compress: false
                    },
                    preserveLicenseComments: false
                }
            }
        },

        watch: {
            less: {
                files: ['<%= config.dir.public %>less/**/*.less'],
                tasks: ['less']
            },
            jst : {
                files: ['<%= config.dir.public %>templates/**/*.html'],
                tasks: ['jst']
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-jst');
    grunt.loadNpmTasks('grunt-contrib-requirejs');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-stripcomments');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default',
        [
            'less:dist',
            'jst'
        ]
    );
    grunt.registerTask('build',
        [
            'default',
            'less:build',
            'requirejs'
        ]
    );

};

module.exports = function (grunt) {
    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        config: {
            dir: {
                public: '../../www/app/'
            }
        },
        less: {
            dist: {
                options: {
                    paths: ['../www/app/'],
                    compress: false
                },
                files: {
                    '../src/app/css/bizjournals.css': '../src/app/less/bizjournals.less'
                }
            },
            build: {
                options: {
                    paths: ['less'],
                    compress: true
                },
                files: {
                    '<%= config.dir.public %>css/bizjournals.min.css': '../src/app/less/bizjournals.less'
                }
            }
        },
        jst: {
            compile: {
                options: {
                    amd: true,
                    processName: function (filepath) {
                        return filepath.replace(/\/templates\/(.*).html/,
                            '$1').replace(/\W/g,
                            '');
                    }
                },
                files: {
                    'js/templates.js': ['templates/**/*.html']
                }
            }
        },
lessToSass: {
  convert: {
      files: [{
        expand: true,
        cwd: '../src/app/sass/',
        src: ['**/*.scss'],
        ext: '.scss',
        dest: '../www/sass/'
      }]
    },
  },
  watch: {
    less: {
      files: ['<%= config.dir.public %>less/**/*.less'],
      tasks: ['less']
    },
    jst: {
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
  grunt.loadNpmTasks('grunt-less-to-sass');


  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  // A very basic default task.
    grunt.registerTask('default',
        [
            'less:dist',
             'lessToSass:convert'
        ]
    );


};

module.exports = function (grunt) {
    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        config: {
            dir: {
                public: './'
            }
        },
        less: {
            dist: {
                options: {
                    paths: ['<%= config.dir.public %>less'],
                    compress: false
                },
                files: {
                    '<%= config.dir.public %>css/bizjournals.css': '<%= config.dir.public %>less/bizjournals.less'
                }
            },
            build: {
                options: {
                    paths: ['less'],
                    compress: true
                },
                files: {
                    '<%= config.dir.public %>css/bizjournals.min.css': '<%= config.dir.public %>less/bizjournals.less'
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
        cwd: 'src/app',
        src: ['less/*.less'],
        ext: '.sass',
        dest: 'sass/'
      }]
    },
    excludes_replacements: {
      files: [{
        expand: true,
        cwd: 'src/app',
        src: ['less/*.less'],
        ext: '.scss',
        dest: 'sass/'
      }],
      options: {
        excludes: ['default']
      }
    },
    convert_within_custom_replacements: {
      files: [{
        expand: true,
        cwd: 'src/app',
        src: ['less/bizjournals.less'],
        ext: '.scss',
        dest: 'sass/'
      }],
      options: {
        replacements: [{
          pattern: /(\s+)\.([\w\-]*)\s*\((.*)\);/gi,
          replacement: '$1@include $2($3)',
          order: 2
        }]
      }
    }
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

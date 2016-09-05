module.exports = function (grunt) {
// 1. All configuration goes here
grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),
  config: {
      dir: {
          public: './www/app/'
      }
  },
  lessToSass: {
    convert: {
      files: [{
        expand: true,
        cwd: './src/app/less/',
        src: ['**/*.less'],
        ext: '.scss',
        dest: './www/app/sass/'
      }]
    },
  },
  sass: {
    options: {
      compass: true,

    },
    dist: {
      files: {
        'www/app/css/bizjournals.css': 'www/app/sass/bizjournals.scss'
      }
    }


  },
  uglify: {
    options: {
      sourceMap: true,
      sourceMapName: 'www/app/js-demo/sourcemap.map',
      mangle: {
        except: ['jQuery', 'Backbone']
      }
    },
    compress: {
      options: {
        beautify: false,
        global_defs: {
          'DEBUG': false
        },
        dead_code: true
      },
      files: {
        'www/app/js-demo/demo.min.js': ['src/app/js-demo/**/*.js']
      }
    },
    expand: {
      options: {
        beautify: {
          width: 99,
          beautify: true
        }
      },
      files: {
        'www/app/js-demo/demo.min.js': ['src/app/js-demo/**/*.js']
      }
    }
  },
  comments: {
    js: {
      options: {
        singleline: true,
        multiline: true
      },
      src: [ 'www/app/js-demo/*.js' ]
    },
    php: {
      options: {
        singleline: true,
        multiline: true
      },
      src: [ 'www/app/**/*.php' ]
    }
  },

});


  // 3. Where we tell Grunt we plan to use this plug-in.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-jst');
  grunt.loadNpmTasks('grunt-contrib-requirejs');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-less-to-sass');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-stripcomments');
  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  // A very basic default task.
  grunt.registerTask('default',
    [
        //'less:dist',
        'lessToSass:convert',
        //'sass',
        'uglify:compress',
        'comments:js',
    ]
  );
};

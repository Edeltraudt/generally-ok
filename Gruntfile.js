var path = require('path');

module.exports = function(grunt) {
  'use strict';


  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      js : {
        files: 'src/js/**/*.js',
        tasks: ['uglify']
      },
      css: {
        files: 'src/scss/**/*.scss',
        tasks: ['sass']
      },
      pug: {
        files: 'src/views/**/*.pug',
        tasks: ['pug', 'htmlmin']
      }
    },

    uglify: {
      options: {
        beautify: true,
        sourceMap: true
      },
      all: {
        files: {
          'public/js/application.js': ['src/js/*.js']
        }
      }
    },

    sass: {
      all: {
        options: {
          sourceMap: true
        },
        files: [
          {
            expand: true,
            cwd: 'src/scss/',
            src: ['**/*.scss'],
            dest: 'public/css/',
            ext: '.css'
          }
        ]
      },
      dist: {
        options: {
          sourceMap: false
        },
        files: [
          {
            expand: true,
            cwd: 'src/scss/',
            src: ['**/*.scss'],
            dest: 'public/css/',
            ext: '.css'
          }
        ]
      }
    },

    postcss: {
      options: {
        processors: [
          require('autoprefixer')({ grid: 'autoplace' }),
          require('postcss-inline-svg')(),
          require('cssnano')()
        ]
      },
      all: {
        src: ['public/css/**.css']
      }
    },

    pug: {
      all: {
        files: [
          {
            expand: true,
            cwd: 'src/views/',
            src: ['**/!(_)*.pug'],
            dest: 'public/',
            ext: '.html'
          }
        ]
      }
    },

    htmlmin: {
      options: {
        removeComments: true,
        collapseWhitespace: true
      },
      all: {
        files: [
          {
            expand: true,
            cwd: 'public',
            src: ['**/*.html', '*.html'],
            dest: 'public'
          }
        ]
      }
    },

    svgmin: {
      options: {
        plugins: [
          {
            removeViewBox: false
          }, {
            removeUselessStrokeAndFill: true
          }, {
            removeAttrs: {
              attrs: ['xmlns:xlink', 'enable-background', 'xml:space', 'id', 'version']
            }
          }
        ]
      },
      dist: {
        files: [
          {
            expand: true,
            cwd: 'src/assets/icons/',
            src: ['**/*.svg'],
            dest: 'src/assets/icons/'
          }
        ]
      }
    },

    svgstore: {
      options: {
        prefix: 'icon-'
      },
      default: {
        files: {
          'src/views/template/_sprite.svg': ['src/assets/icons/*.svg']
        }
      }
    },

    copy: {
      all: {
        files: [
          {
            expand: true,
            cwd: 'src/assets/fonts',
            src: ['**'],
            dest: 'public/assets/fonts/'
          },
          {
            expand: true,
            cwd: 'src/assets/images',
            src: ['**'],
            dest: 'public/assets/images/'
          }
        ]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify-es');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-pug');
  grunt.loadNpmTasks('grunt-contrib-htmlmin');
  grunt.loadNpmTasks('grunt-svgmin');
  grunt.loadNpmTasks('grunt-svgstore');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('default', [
    'uglify',
    'pug',
    'htmlmin',
    'sass:dist',
    'postcss',
    'svgmin',
    'svgstore',
    'copy'
  ]);
};

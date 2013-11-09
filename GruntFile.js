module.exports = function(grunt) {

    // Sniff packages.json for all availabe grunt tasks
    require('load-grunt-tasks')(grunt);

    // Project configuration.
    grunt.initConfig({

    // package
    pkg: grunt.file.readJSON('package.json'),

    // Paths
    BASE_SRC_PATH: 'wp-content/themes/alemar-cheese/assets/src/',
    BASE_BUILD_PATH: 'wp-content/themes/alemar-cheese/assets/release/',
    JS_SRC_PATH: '<%= BASE_SRC_PATH %>scripts/',
    JS_BUILD_PATH: '<%= BASE_BUILD_PATH %>scripts/',
    CSS_SRC_PATH: '<%= BASE_SRC_PATH %>styles/',
    CSS_BUILD_PATH: '<%= BASE_BUILD_PATH %>styles/',
    IMG_SRC_PATH: '<%= BASE_SRC_PATH %>images/',
    IMG_BUILD_PATH: '<%= BASE_BUILD_PATH %>images/',
    FONTS_SRC_PATH: '<%= BASE_SRC_PATH %>fonts/',
    FONTS_BUILD_PATH: '<%= BASE_BUILD_PATH %>fonts/',

    // sass config
    sass: {
        dist: {
            options: {
                style: 'expanded'
            },
            files: {
                '<%= CSS_BUILD_PATH %>global.css': '<%= CSS_SRC_PATH %>global.scss'
            }
        }
    },

    // css lint config
    csslint: {
        options: {
            csslintrc: '<%= CSS_SRC_PATH %>.csslintrc',
        },
        files: {
            src: '<%= CSS_BUILD_PATH %>global.css',
        }
    },

    // cssmin config
    cssmin: {
        options: {
            banner: '/*! <%= grunt.template.today("yyyy-mm-dd") %> */\n'
        },
        minify: {
            expand: true,
            cwd: '<%= CSS_BUILD_PATH %>',
            src: 'global.css',
            dest: '<%= CSS_BUILD_PATH %>',
            ext: '.min.css'
        }
    },

    // jshint config
    jshint: {
        options: {
            jshintrc: '<%= JS_SRC_PATH %>.jshintrc',
            ignores: '<%= JS_SRC_PATH %>libs/**/*.js'
        },
        files: ['<%= JS_SRC_PATH %>**/*.js']
    },

    // require config
    requirejs: {
        build: {
            options: {
                name: 'main',
                baseUrl: '<%= JS_SRC_PATH %>',
                mainConfigFile: '<%= JS_SRC_PATH %>main.js',
                out: '<%= JS_BUILD_PATH %>main.js'
            }
        }
    },

    // copy config
    copy: {
        js: {
            files: [
                {
                    expand: true,
                    cwd: '<%= JS_SRC_PATH %>libs/',
                    src: ['require.js'],
                    dest: '<%= JS_BUILD_PATH %>libs/',
                    filter: 'isFile'
                }
            ]
        },
        images: {
            files: [
                {
                    expand: true,
                    cwd: '<%= IMG_SRC_PATH %>',
                    src: ['**/*'],
                    dest: '<%= IMG_BUILD_PATH %>',
                    filter: 'isFile'
                }
            ]
        },
        fonts: {
            files: [
                {
                    expand: true,
                    cwd: '<%= FONTS_SRC_PATH %>',
                    src: ['**/*'],
                    dest: '<%= FONTS_BUILD_PATH %>',
                    filter: 'isFile'
                }
            ]
        }
    },

    // imagemin config
    imagemin: {
        dynamic: {
            options: {
                optimizationLevel: 1
            },
            files: [{
                expand: true,
                cwd: '<%= IMG_SRC_PATH %>',
                src: ['**/*.{png,jpg,gif}'],
                dest: '<%= IMG_BUILD_PATH %>'
            }]
        }
    },

    // clean config
    clean: {
        'release-css':   ['<%= CSS_BUILD_PATH %>'],
        'release-js':    ['<%= JS_BUILD_PATH %>'],
        'release-img':   ['<%= IMG_BUILD_PATH %>'],
        'release-fonts': ['<%= FONTS_BUILD_PATH %>'],
        'release-all':   ['<%= BASE_BUILD_PATH %>']
    },

    // concurrent config
    concurrent: {
        compile: ['sass'],
        lint: ['csslint', 'jshint'],
        build: ['cssmin', 'requirejs:build'],
        copy: ['copy:js', 'copy:images', 'copy:fonts']
    }

    });

    // Build tasks
    grunt.registerTask('build-css',   ['clean:release-css', 'sass', 'csslint', 'cssmin']);
    grunt.registerTask('build-js',    ['jshint', 'clean:release-js', 'requirejs:build', 'copy:js']);
    grunt.registerTask('build-img',   ['clean:release-img', 'imagemin:dynamic']);
    grunt.registerTask('build-fonts', ['clean:release-fonts', 'copy:fonts']);
    grunt.registerTask('build-all',   ['clean:release-all', 'concurrent:compile', 'concurrent:lint', 'concurrent:build', 'concurrent:copy']);

};
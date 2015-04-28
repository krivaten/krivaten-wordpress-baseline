'use strict';
module.exports = function(grunt) {
	var jsFiles = [
			'js/custom.js'
		];

	// load all grunt tasks matching the `grunt-*` pattern
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({

		// watch for changes and trigger compass, jshint, uglify and livereload
		'watch': {
			'sass': {
				files: ['vendor/bootstrap-sass/**/*', 'sass/**/*.scss'],
				tasks: ['sass']
			},
			'js': {
				files: [jsFiles],
				tasks: ['concat', 'uglify']
			},
			'livereload': {
				options: {
					port: 35729,
					livereload: true
				},
				files: ['sass/**/*.scss', jsFiles, '**/*.php', 'img/**/*.{png,jpg,jpeg,gif,svg}']
			}
		},

		// sass
		'sass': {
			development: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {
					'assets/css/css.css': 'sass/index.scss'
				}
			}
		},

		// js
		'concat': {
			development: {
				files: {
					"assets/js/js.js": [jsFiles]
				}
			}
		},

		// minify js
		'uglify': {
			development: {
				files: {
					"assets/js/js.js": "assets/js/js.js"
				}
			}
		},

		'csscomb': {
				dynamic_mappings: {
				expand: true,
				cwd: 'sass',
				src: ['**/*.scss', '!index.scss', '!base/**/*.scss'],
				dest: 'sass',
				ext: '.scss'
			}
		}

	});

	// register task
	grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch']);
	grunt.registerTask('cleanStyles', ['csscomb']);
};

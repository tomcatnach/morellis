module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				files: {
					'assets/css/style.css' : 'assets/sass/style.scss'
				}
			}
		},

		cacheBust: {
			taskName: {
					options: {
							assets: ['assets/css/style.css'],
							deleteOriginals: false,
							createCopies: true,
					},
					src: ['site/snippets/header.php']
			}
		},

		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'cacheBust']
			}
		}



	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-cache-bust');
	grunt.registerTask('default',['watch']);
	grunt.registerTask('cache',['cacheBust']);
}

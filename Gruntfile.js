module.exports = function(grunt) {
	// Project configuration.
	 grunt.initConfig({
	   pkg: grunt.file.readJSON('package.json'),
	   sass: {
	   	dist: {
	   		files:{
	   			'style.css': 'scss/main.scss'
	   		},
	   		options: {                       // Target options
	   		    lineNumbers: true,
	   		    //debugInfo: true
	   		},
	   	}
	   },
	   watch: {
	   	css: {
	   		files: ['scss/**/*.scss'],
	   		tasks: ['sass', 'autoprefixer'],
	   	},
	   	options: {
	   		livereload: true
	   	}
	   },
	   autoprefixer: {
	   	options: {
	   		 browsers: ['last 5 version', 'ie 7', 'ie 8', 'ie 9']
	   	},
	   	no_dest: {
	   		src: 'style.css'
	   	}
	   },
	   svginject: {
	       all : {
	         options: {},
	         files: {
	           //output : input],
	         }
	       }
	   }
	 });

	 grunt.loadNpmTasks('grunt-contrib-sass');
	 grunt.loadNpmTasks('grunt-contrib-watch');
	 grunt.loadNpmTasks('grunt-autoprefixer');
	 grunt.loadNpmTasks('grunt-contrib-connect');
	 grunt.loadNpmTasks('grunt-svginject');
	 grunt.loadNpmTasks('grunt-recess');
	 // Default task(s).
	 grunt.registerTask('default', ['watch']);
 };
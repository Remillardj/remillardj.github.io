module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    cssmin: {
        target: {
            files: [{
                expand: true,
                cwd: '.',
                src: ['./css/*.css', './css/!*.min.css'],
                dest: 'build/',
                ext: '.css'
            }]
        }
    },

    htmlmin: {
        dist: {
            options: {
                removeComments: true,
                collapseWhitespace: true
            },
            files: {
                'build/index.html': './index.html'
            }
        },
    }
  });

  // Load the plugin that provides tasks.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-htmlmin');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-serve');

  // Default task(s).
  grunt.registerTask('default', ['htmlmin', 'cssmin']);

};
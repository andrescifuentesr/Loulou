module.exports = {
  basic: {
    src: [
      'js/libs/jquery.easing.min.js',
      'js/libs/jquery.fancybox.pack.js',
      'js/navigation.js',
      'js/skip-link-focus-fix.js',
      'js/main.js'
    ],
    dest: 'js/build/production.js'
  },
  photo: {
    src: [
      'js/libs/supersized.3.2.7.min.js',
      'js/libs/supersized.shutter.min.js',
    ],
    dest: 'js/build/production-photo.js'
  },
  video: {
    src: [
      'js/libs/video.js',
      'js/libs/bigvideo.js',
    ],
    dest: 'js/build/production-video.js'
  }  
}
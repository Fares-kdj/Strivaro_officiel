// js/lightbox-custom.js
document.addEventListener('DOMContentLoaded', function () {
  // Override Lightbox's image loading to handle videos
  lightbox.option({
    wrapAround: true, // Enable carousel looping
    alwaysShowNavOnTouchDevices: true,
  });

  // Custom rendering for video elements
  const originalLightboxStart = lightbox.start;
  lightbox.start = function (element) {
    const href = element.getAttribute('href');
    if (href.match(/\.(mp4|webm|mov)$/)) {
      // Create a video element instead of an image
      const video = document.createElement('video');
      video.src = href;
      video.controls = true;
      video.className = 'lb-image';
      video.style.maxWidth = '90%';
      video.style.maxHeight = '90%';
      video.style.margin = 'auto';

      // Replace the image element in Lightbox
      const lbImage = document.querySelector('.lb-image');
      if (lbImage) {
        lbImage.parentNode.replaceChild(video, lbImage);
      }
    }
    originalLightboxStart.call(this, element);
  };
});
const images = document.querySelectorAll('.carousel-image');

images.forEach(image => {
  image.addEventListener('click', () => {
    if (image.classList.contains('clicked')) {
      image.classList.remove('clicked');
    } else {
      images.forEach(img => img.classList.remove('clicked'));
      image.classList.add('clicked');
    }
  });
});

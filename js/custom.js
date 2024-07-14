(function () {

	'use strict'


	AOS.init({
		duration: 800,
		easing: 'slide',
		once: true
	});

	var preloader = function() {

		var loader = document.querySelector('.loader');
		var overlay = document.getElementById('overlayer');

		function fadeOut(el) {
			el.style.opacity = 1;
			(function fade() {
				if ((el.style.opacity -= .1) < 0) {
					el.style.display = "none";
				} else {
					requestAnimationFrame(fade);
				}
			})();
		};

		setTimeout(function() {
			fadeOut(loader);
			fadeOut(overlay);
		}, 200);
	};
	preloader();
	

	var tinySdlier = function() {

		var heroSlider = document.querySelectorAll('.hero-slide');
		var propertySlider = document.querySelectorAll('.property-slider');
		var imgPropertySlider = document.querySelectorAll('.img-property-slide');
		var testimonialSlider = document.querySelectorAll('.testimonial-slider');
		

		if ( heroSlider.length > 0 ) {
			var tnsHeroSlider = tns({
				container: '.hero-slide',
				mode: 'carousel',
				speed: 700,
				autoplay: true,
				controls: false,
				nav: false,
				autoplayButtonOutput: false,
				controlsContainer: '#hero-nav',
			});
		}


		if ( imgPropertySlider.length > 0 ) {
			var tnsPropertyImageSlider = tns({
				container: '.img-property-slide',
				mode: 'carousel',
				speed: 700,
				items: 1,
				gutter: 30,
				autoplay: true,
				controls: false,
				nav: true,
				autoplayButtonOutput: false
			});
		}

		if ( propertySlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.property-slider',
				mode: 'carousel',
				speed: 700,
				gutter: 30,
				items: 3,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#property-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 2
					},
					900: {
						items: 3
					}
				}
			});
		}


		if ( testimonialSlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.testimonial-slider',
				mode: 'carousel',
				speed: 700,
				items: 3,
				gutter: 50,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#testimonial-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 2
					},
					900: {
						items: 3
					}
				}
			});
		}
	}
	tinySdlier();



})()

document.addEventListener('DOMContentLoaded', (event) => {
    const layoutImage = document.getElementById('layoutImage');
    const overlay = document.getElementById('overlay');
    const zoomedImage = document.getElementById('zoomedImage');
    const closeBtn = document.querySelector('.closes');

    layoutImage.addEventListener('click', function() {
        zoomedImage.src = this.src;
        overlay.style.display = 'flex';
    });

    closeBtn.addEventListener('click', function() {
        overlay.style.display = 'none';
    });

    overlay.addEventListener('click', function(e) {
        if (e.target === overlay || e.target === closeBtn) {
            overlay.style.display = 'none';
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
	// Get elements
	const overlay = document.getElementById('overlay');
	const zoomedImage = document.getElementById('zoomedImage');
	const layoutImage = document.getElementById('layoutImage');
	const zoomButtons = document.querySelectorAll('.zoom-image');

	// Function to handle image zoom
	function zoomImage(event) {
		event.preventDefault(); // Prevent default link behavior
		overlay.style.display = 'flex'; // Display overlay
		zoomedImage.src = layoutImage.src; // Set zoomed image source
	}

	// Add click event listener to each zoom button
	zoomButtons.forEach(function(button) {
		button.addEventListener('click', zoomImage);
	});

	// Function to close overlay
	function closeOverlay() {
		overlay.style.display = 'none'; // Hide overlay
	}

	// Add click event listener to close button (X)
	document.querySelector('.closes').addEventListener('click', closeOverlay);

	// Close overlay on overlay click
	overlay.addEventListener('click', function(event) {
		if (event.target === overlay) {
			closeOverlay();
		}
	});

	// Close overlay on ESC key press
	document.addEventListener('keydown', function(event) {
		if (event.key === 'Escape') {
			closeOverlay();
		}
	});
});

document.addEventListener('DOMContentLoaded', function() {
	// Get elements
	const overlay = document.getElementById('overlay');
	const zoomedImage = document.getElementById('zoomedImage');
	const zoomButtons = document.querySelectorAll('.zoom-image');

	// Function to handle image zoom
	function zoomImage(event) {
		event.preventDefault(); // Prevent default link behavior
		const imageSrc = this.getAttribute('data-image-src'); // Get image source from data attribute
		overlay.style.display = 'flex'; // Display overlay
		zoomedImage.src = imageSrc; // Set zoomed image source
	}

	// Add click event listener to each zoom button
	zoomButtons.forEach(function(button) {
		button.addEventListener('click', zoomImage);
	});

	// Function to close overlay
	function closeOverlay() {
		overlay.style.display = 'none'; // Hide overlay
	}

	// Add click event listener to close button (X)
	document.querySelector('.closes').addEventListener('click', closeOverlay);

	// Close overlay on overlay click
	overlay.addEventListener('click', function(event) {
		if (event.target === overlay) {
			closeOverlay();
		}
	});

	// Close overlay on ESC key press
	document.addEventListener('keydown', function(event) {
		if (event.key === 'Escape') {
			closeOverlay();
		}
	});
});

document.addEventListener('DOMContentLoaded', function() {
	// Get elements
	const overlay = document.getElementById('overlay');
	const zoomedImage = document.getElementById('zoomedImage');
	const zoomButtons = document.querySelectorAll('.zoom-image1');

	// Image source to be zoomed
	const imageSrc = 'images/mainlayout.jpg';

	// Function to handle image zoom
	function zoomImage(event) {
		event.preventDefault(); // Prevent default link behavior
		overlay.style.display = 'flex'; // Display overlay
		zoomedImage.src = imageSrc; // Set zoomed image source
	}

	// Add click event listener to each zoom button
	zoomButtons.forEach(function(button) {
		button.addEventListener('click', zoomImage);
	});

	// Function to close overlay
	function closeOverlay() {
		overlay.style.display = 'none'; // Hide overlay
	}

	// Add click event listener to close button (X)
	document.querySelector('.closes').addEventListener('click', closeOverlay);

	// Close overlay on overlay click
	overlay.addEventListener('click', function(event) {
		if (event.target === overlay) {
			closeOverlay();
		}
	});

	// Close overlay on ESC key press
	document.addEventListener('keydown', function(event) {
		if (event.key === 'Escape') {
			closeOverlay();
		}
	});
});

document.addEventListener('DOMContentLoaded', (event) => {
    const zoomableImages = document.querySelectorAll('.zoomable');
    const overlay = document.getElementById('overlay');
    const zoomedImage = document.getElementById('zoomedImage');
    const closeBtn = document.querySelector('.close');

    zoomableImages.forEach(image => {
        image.addEventListener('click', function() {
            zoomedImage.src = this.src;
            overlay.style.display = 'flex';
        });
    });

    closeBtn.addEventListener('click', function() {
        overlay.style.display = 'none';
    });

    overlay.addEventListener('click', function(e) {
        if (e.target === overlay || e.target === closeBtn) {
            overlay.style.display = 'none';
        }
    });
});

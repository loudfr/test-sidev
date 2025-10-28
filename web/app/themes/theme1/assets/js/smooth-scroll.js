// Smooth scroll for header navigation (one-page)
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.nav-link:not(.cta)').forEach(function(link) {
        link.addEventListener('click', function(e) {
            var href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                var target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    var headerOffset = document.querySelector('.site-header').offsetHeight || 0;
                    var elementPosition = target.getBoundingClientRect().top + window.pageYOffset;
                    var offsetPosition = elementPosition - headerOffset;
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});
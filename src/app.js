// JS for handling questions accordion opening animations
document.addEventListener('DOMContentLoaded', function() {
    var faqHeaders = document.querySelectorAll('.question-accordion h2');
    
    faqHeaders.forEach(function(header) {
        header.addEventListener('click', function() {
            var parent = header.parentNode;
            parent.classList.toggle('open');
        });
    });
});
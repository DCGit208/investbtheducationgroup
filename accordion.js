// Clean Accordion Functionality for Team Certification Excellence
document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentCard = this.closest('.service-card');
            const currentContent = currentCard.querySelector('.accordion-content');
            const isCurrentlyOpen = this.getAttribute('aria-expanded') === 'true';
            
            // Close all other accordions first
            accordionButtons.forEach(otherButton => {
                if (otherButton !== this) {
                    const otherCard = otherButton.closest('.service-card');
                    const otherContent = otherCard.querySelector('.accordion-content');
                    
                    otherButton.setAttribute('aria-expanded', 'false');
                    otherContent.classList.remove('active');
                }
            });
            
            // Toggle current accordion
            if (isCurrentlyOpen) {
                // Close current
                this.setAttribute('aria-expanded', 'false');
                currentContent.classList.remove('active');
            } else {
                // Open current
                this.setAttribute('aria-expanded', 'true');
                currentContent.classList.add('active');
            }
        });
    });
    
    // Add keyboard navigation
    accordionButtons.forEach(button => {
        button.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });
    
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

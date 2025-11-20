// Team Certification Excellence - Interactive Functionality
class TeamCertificationExcellence {
    constructor() {
        this.init();
    }

    init() {
        this.initProgressRings();
        this.initCardInteractions();
        this.initButtonAnimations();
        this.initScrollAnimations();
        this.setupAccessibility();
    }

    // Initialize progress ring animations
    initProgressRings() {
        const progressRings = document.querySelectorAll('.progress-bar');
        
        progressRings.forEach(ring => {
            const progress = parseInt(ring.dataset.progress);
            const circumference = 2 * Math.PI * 25; // radius = 25
            const offset = circumference - (progress / 100) * circumference;
            
            // Set initial state
            ring.style.strokeDasharray = circumference;
            ring.style.strokeDashoffset = circumference;
            
            // Animate when visible
            this.animateOnVisible(ring, () => {
                ring.style.transition = 'stroke-dashoffset 2s ease-in-out';
                ring.style.strokeDashoffset = offset;
            });
        });
    }

    // Initialize card hover interactions
    initCardInteractions() {
        const cards = document.querySelectorAll('.certification-card');
        
        cards.forEach((card, index) => {
            // Add keyboard navigation
            card.setAttribute('tabindex', '0');
            card.setAttribute('role', 'button');
            card.setAttribute('aria-label', `View details for ${card.querySelector('.card-title').textContent}`);
            
            // Mouse interactions
            card.addEventListener('mouseenter', () => {
                this.handleCardHover(card, true);
            });
            
            card.addEventListener('mouseleave', () => {
                this.handleCardHover(card, false);
            });
            
            // Click interactions
            card.addEventListener('click', (e) => {
                if (!e.target.closest('.cta-button')) {
                    this.handleCardClick(card);
                }
            });
            
            // Keyboard interactions
            card.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.handleCardClick(card);
                }
            });
        });
    }

    // Handle card hover effects
    handleCardHover(card, isHovering) {
        const icon = card.querySelector('.cert-icon');
        const progressRing = card.querySelector('.progress-ring');
        
        if (isHovering) {
            // Add pulse animation to icon
            icon.style.animation = 'pulse 2s infinite';
            
            // Enhance progress ring glow
            progressRing.style.filter = 'drop-shadow(0 0 8px rgba(16, 185, 129, 0.6))';
            
            // Add subtle card tilt
            card.style.transform = 'translateY(-8px) rotateX(2deg)';
        } else {
            // Remove animations
            icon.style.animation = '';
            progressRing.style.filter = '';
            card.style.transform = '';
        }
    }

    // Handle card click interactions
    handleCardClick(card) {
        const cardTitle = card.querySelector('.card-title').textContent;
        
        // Add click animation
        card.style.transform = 'scale(0.98)';
        setTimeout(() => {
            card.style.transform = '';
        }, 150);
        
        // Simulate action (in real implementation, this would navigate or show details)
        this.showNotification(`Viewing details for ${cardTitle}`);
        
        // Track interaction (analytics)
        this.trackInteraction('card_click', { certification: cardTitle });
    }

    // Initialize button animations and interactions
    initButtonAnimations() {
        const buttons = document.querySelectorAll('.cta-button');
        
        buttons.forEach(button => {
            button.addEventListener('click', (e) => {
                this.handleButtonClick(e, button);
            });
            
            // Add ripple effect on click
            button.addEventListener('mousedown', (e) => {
                this.createRippleEffect(e, button);
            });
        });
    }

    // Handle button click interactions
    handleButtonClick(e, button) {
        e.stopPropagation();
        
        const buttonText = button.textContent.trim();
        const cardTitle = button.closest('.certification-card')?.querySelector('.card-title')?.textContent || 'General';
        
        // Add click animation
        button.style.transform = 'scale(0.95)';
        setTimeout(() => {
            button.style.transform = '';
        }, 100);
        
        // Handle different button actions
        switch (buttonText) {
            case 'View Details':
                this.showCertificationDetails(cardTitle);
                break;
            case 'Start Learning':
                this.startLearningPath(cardTitle);
                break;
            case 'Explore All Certifications':
                this.showAllCertifications();
                break;
            case 'Schedule Consultation':
                this.scheduleConsultation();
                break;
            default:
                this.showNotification(`${buttonText} clicked`);
        }
        
        this.trackInteraction('button_click', { 
            button: buttonText, 
            certification: cardTitle 
        });
    }

    // Create ripple effect for buttons
    createRippleEffect(e, button) {
        const ripple = document.createElement('span');
        const rect = button.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            left: ${x}px;
            top: ${y}px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s ease-out;
            pointer-events: none;
            z-index: 1;
        `;
        
        button.style.position = 'relative';
        button.style.overflow = 'hidden';
        button.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    }

    // Initialize scroll-based animations
    initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    
                    // Trigger progress ring animation
                    const progressBar = entry.target.querySelector('.progress-bar');
                    if (progressBar) {
                        setTimeout(() => {
                            progressBar.parentElement.classList.add('animate');
                        }, 500);
                    }
                }
            });
        }, observerOptions);
        
        // Observe cards for animation
        document.querySelectorAll('.certification-card').forEach(card => {
            observer.observe(card);
        });
    }

    // Utility function to animate elements when visible
    animateOnVisible(element, callback, threshold = 0.5) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    callback();
                    observer.unobserve(element);
                }
            });
        }, { threshold });
        
        observer.observe(element);
    }

    // Setup accessibility features
    setupAccessibility() {
        // Add skip link for keyboard navigation
        this.addSkipLink();
        
        // Enhance focus management
        this.enhanceFocusManagement();
        
        // Add keyboard shortcuts
        this.addKeyboardShortcuts();
        
        // Update ARIA labels dynamically
        this.updateAriaLabels();
    }

    addSkipLink() {
        const skipLink = document.createElement('a');
        skipLink.href = '#team-certification';
        skipLink.textContent = 'Skip to Team Certification Excellence';
        skipLink.className = 'skip-link';
        skipLink.style.cssText = `
            position: absolute;
            top: -40px;
            left: 6px;
            background: var(--primary-color);
            color: white;
            padding: 8px;
            border-radius: 4px;
            text-decoration: none;
            transition: top 0.3s;
            z-index: 1000;
        `;
        
        skipLink.addEventListener('focus', () => {
            skipLink.style.top = '6px';
        });
        
        skipLink.addEventListener('blur', () => {
            skipLink.style.top = '-40px';
        });
        
        document.body.insertBefore(skipLink, document.body.firstChild);
    }

    enhanceFocusManagement() {
        // Improve focus visibility
        const style = document.createElement('style');
        style.textContent = `
            .certification-card:focus,
            .cta-button:focus {
                outline: 3px solid #10b981;
                outline-offset: 2px;
                box-shadow: 0 0 0 6px rgba(16, 185, 129, 0.2);
            }
        `;
        document.head.appendChild(style);
    }

    addKeyboardShortcuts() {
        document.addEventListener('keydown', (e) => {
            // Alt + C: Focus first certification card
            if (e.altKey && e.key === 'c') {
                e.preventDefault();
                const firstCard = document.querySelector('.certification-card');
                if (firstCard) firstCard.focus();
            }
            
            // Alt + E: Focus explore button
            if (e.altKey && e.key === 'e') {
                e.preventDefault();
                const exploreButton = document.querySelector('.cta-button.large.primary');
                if (exploreButton) exploreButton.focus();
            }
        });
    }

    updateAriaLabels() {
        // Update progress ring labels
        document.querySelectorAll('.progress-ring').forEach(ring => {
            const percentage = ring.querySelector('.progress-text').textContent;
            const card = ring.closest('.certification-card');
            const title = card.querySelector('.card-title').textContent;
            
            ring.setAttribute('aria-label', `${title} team proficiency: ${percentage}`);
            ring.setAttribute('role', 'progressbar');
            ring.setAttribute('aria-valuenow', percentage.replace('%', ''));
            ring.setAttribute('aria-valuemin', '0');
            ring.setAttribute('aria-valuemax', '100');
        });
    }

    // Action handlers (these would connect to real functionality)
    showCertificationDetails(certification) {
        this.showNotification(`Loading detailed information for ${certification}...`);
        // In real implementation: navigate to details page or show modal
    }

    startLearningPath(certification) {
        this.showNotification(`Starting learning path for ${certification}...`);
        // In real implementation: redirect to learning platform
    }

    showAllCertifications() {
        this.showNotification('Loading all available certifications...');
        // In real implementation: navigate to certifications catalog
    }

    scheduleConsultation() {
        this.showNotification('Opening consultation scheduler...');
        // In real implementation: show calendar widget or redirect to booking page
    }

    // Utility functions
    showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--primary-color);
            color: white;
            padding: 16px 24px;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            max-width: 300px;
        `;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
    }

    trackInteraction(action, data = {}) {
        // Analytics tracking (replace with your analytics service)
        console.log('Interaction tracked:', { action, data, timestamp: Date.now() });
        
        // Example integration with Google Analytics
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                event_category: 'team_certification',
                event_label: data.certification || data.button,
                custom_map: data
            });
        }
    }
}

// CSS for animations
const animationStyles = `
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .certification-card {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .certification-card.animate-in {
        opacity: 1;
        transform: translateY(0);
    }
    
    .progress-ring.animate .progress-bar {
        transition: stroke-dashoffset 2s cubic-bezier(0.4, 0, 0.2, 1);
    }
`;

// Add animation styles to document
const styleSheet = document.createElement('style');
styleSheet.textContent = animationStyles;
document.head.appendChild(styleSheet);

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new TeamCertificationExcellence();
});

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = TeamCertificationExcellence;
}

// Gunakan IIFE untuk menghindari polusi global scope
(function () {
  'use strict';

  // ==================== UTILITY FUNCTIONS ====================
  const debounce = (fn, delay) => {
    let timeoutId;
    return (...args) => {
      clearTimeout(timeoutId);
      timeoutId = setTimeout(() => fn.apply(this, args), delay);
    };
  };

  const throttle = (fn, limit) => {
    let inThrottle;
    return (...args) => {
      if (!inThrottle) {
        fn.apply(this, args);
        inThrottle = true;
        setTimeout(() => (inThrottle = false), limit);
      }
    };
  };

  // Cache DOM elements secara global untuk digunakan kembali
  let cachedElements = {};

  const getElement = (selector, cacheKey) => {
    if (cacheKey && cachedElements[cacheKey]) {
      return cachedElements[cacheKey];
    }
    const element = document.querySelector(selector);
    if (cacheKey && element) {
      cachedElements[cacheKey] = element;
    }
    return element;
  };

  const getElements = (selector, cacheKey) => {
    if (cacheKey && cachedElements[cacheKey]) {
      return cachedElements[cacheKey];
    }
    const elements = document.querySelectorAll(selector);
    if (cacheKey && elements.length > 0) {
      cachedElements[cacheKey] = elements;
    }
    return elements;
  };

  // ==================== SOLUTION PAGE ====================
  const initSolutionTabs = () => {
    const solutionTabs = getElements('#solutionsTab .nav-link', 'solutionTabs');
    
    if (!solutionTabs.length) return;

    const handleTabInteraction = (e) => {
      const tab = e.currentTarget;
      const isActive = tab.classList.contains('active');
      
      switch (e.type) {
        case 'click':
          // Gunakan transform dengan hardware acceleration
          tab.style.transform = 'translate3d(8px, 0, 0)';
          setTimeout(() => {
            tab.style.transform = 'translate3d(5px, 0, 0)';
          }, 150);
          break;
        
        case 'mouseenter':
          if (!isActive) {
            tab.style.transform = 'translate3d(5px, 0, 0)';
          }
          break;
        
        case 'mouseleave':
          if (!isActive) {
            tab.style.transform = 'translate3d(0, 0, 0)';
          }
          break;
      }
    };

    // Gunakan event delegation untuk mengurangi event listeners
    const tabsContainer = solutionTabs[0].closest('#solutionsTab') || document;
    
    tabsContainer.addEventListener('click', (e) => {
      const tab = e.target.closest('#solutionsTab .nav-link');
      if (tab) handleTabInteraction({ ...e, currentTarget: tab, type: 'click' });
    });
    
    tabsContainer.addEventListener('mouseenter', (e) => {
      const tab = e.target.closest('#solutionsTab .nav-link');
      if (tab) handleTabInteraction({ ...e, currentTarget: tab, type: 'mouseenter' });
    }, true);
    
    tabsContainer.addEventListener('mouseleave', (e) => {
      const tab = e.target.closest('#solutionsTab .nav-link');
      if (tab) handleTabInteraction({ ...e, currentTarget: tab, type: 'mouseleave' });
    }, true);
  };

  // ==================== SOLUTION SECTION HOME ====================
  const initSolutionSection = () => {
    const solutionItems = getElements('.solution-item', 'solutionItems');
    const mainImage = getElement('#solution-main-image', 'mainImage');
    
    if (!solutionItems.length || !mainImage) return;

    let activeItem = null;
    let isAnimating = false;

    const activateSolution = (item) => {
      if (isAnimating || item === activeItem) return;
      
      isAnimating = true;
      activeItem = item;
      
      // Update classes dengan batch operation
      solutionItems.forEach((el) => {
        const isActive = el === item;
        el.classList.toggle('active', isActive);
        
        const fullEl = el.querySelector('.solution-full');
        const collapsedEl = el.querySelector('.solution-collapsed');
        
        if (fullEl) fullEl.classList.toggle('show', isActive);
        if (collapsedEl) collapsedEl.classList.toggle('show', !isActive);
      });

      // Update image
      const newImage = item.getAttribute('data-image');
      const newAlt = item.querySelector('h5')?.textContent + ' Solution';
      
      if (mainImage.src !== newImage) {
        mainImage.classList.add('fade-out');
        
        // Gunakan requestAnimationFrame untuk animasi yang smooth
        requestAnimationFrame(() => {
          setTimeout(() => {
            mainImage.src = newImage;
            mainImage.alt = newAlt || '';
            
            mainImage.classList.remove('fade-out');
            mainImage.classList.add('fade-in');
            
            setTimeout(() => {
              mainImage.classList.remove('fade-in');
              isAnimating = false;
            }, 500);
          }, 300);
        });
      } else {
        isAnimating = false;
      }
    };

    // Event delegation untuk click
    const container = solutionItems[0].closest('.solution-container') || document;
    container.addEventListener('click', (e) => {
      const item = e.target.closest('.solution-item');
      if (item) activateSolution(item);
    });

    // Aktifkan item pertama
    if (solutionItems.length > 0) {
      activateSolution(solutionItems[0]);
    }
  };

  // ==================== PRINCIPAL CAROUSEL ====================
  const initPrincipalCarousel = () => {
    const carouselTrack = getElement('#logoCarousel', 'carouselTrack');
    if (!carouselTrack) return;

    const principals = [
      { name: 'Qlik', logo: '/assets/images/principals/qlik-logo.png' },
      { name: 'Confluent', logo: '/assets/images/principals/confluent-logo.png' },
      { name: 'Dendo', logo: '/assets/images/principals/dendo-logo.png' },
      { name: 'Snowflake', logo: '/assets/images/principals/snowflake-logo.png' },
      { name: 'Dataiku', logo: '/assets/images/principals/dataiku-logo.png' },
      { name: 'Cloudera', logo: '/assets/images/principals/cloudera-logo.png' },
    ];

    const initCarousel = () => {
      // Gunakan DocumentFragment untuk batch DOM manipulation
      const fragment = document.createDocumentFragment();
      const placeholder = '/assets/images/placeholder-logo.png';
      
      // Hanya buat satu set logos, gunakan CSS animation untuk infinite loop
      principals.forEach((principal) => {
        const logoItem = document.createElement('div');
        logoItem.className = 'logo-carousel-item';
        
        const img = document.createElement('img');
        img.src = principal.logo;
        img.alt = principal.name;
        img.loading = 'lazy';
        img.decoding = 'async';
        img.onerror = () => {
          img.src = placeholder;
          img.onerror = null;
        };
        
        logoItem.appendChild(img);
        fragment.appendChild(logoItem);
      });
      
      carouselTrack.innerHTML = '';
      carouselTrack.appendChild(fragment);
      
      // Inisialisasi CSS animation
      carouselTrack.style.animation = 'marquee 30s linear infinite';
    };

    const checkAnimationSupport = () => {
      const style = window.getComputedStyle(carouselTrack);
      const animationName = style.animationName || style.webkitAnimationName;
      
      if (!animationName || animationName === 'none') {
        startJsAnimation();
      }
    };

    const startJsAnimation = () => {
      let position = 0;
      const speed = 0.5; // pixels per frame
      let animationId = null;
      let lastTime = 0;
      
      const animate = (timestamp) => {
        if (!lastTime) lastTime = timestamp;
        const delta = timestamp - lastTime;
        lastTime = timestamp;
        
        // Adjust speed based on frame rate
        position -= speed * (delta / 16);
        
        if (Math.abs(position) >= carouselTrack.scrollWidth / 2) {
          position = 0;
        }
        
        // Gunakan transform3d untuk hardware acceleration
        carouselTrack.style.transform = `translate3d(${position}px, 0, 0)`;
        animationId = requestAnimationFrame(animate);
      };
      
      animationId = requestAnimationFrame(animate);
      
      // Cleanup function
      return () => {
        if (animationId) {
          cancelAnimationFrame(animationId);
        }
      };
    };

    initCarousel();
    
    // Check animation support setelah DOM sepenuhnya render
    setTimeout(checkAnimationSupport, 100);
  };

  // ==================== CONTACT FORM ====================
  const initContactForm = () => {
    const contactForm = getElement('#contactForm', 'contactForm');
    if (!contactForm) return;

    // Cache form elements
    const formElements = {
      firstName: contactForm.querySelector('#firstName'),
      email: contactForm.querySelector('#email'),
      subject: contactForm.querySelector('#subject'),
      message: contactForm.querySelector('#message'),
    };

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    const validateForm = () => {
      let isValid = true;
      const errors = [];

      // Check required fields
      Object.entries(formElements).forEach(([key, element]) => {
        if (element && element.value.trim() === '') {
          isValid = false;
          element.classList.add('is-invalid');
          errors.push(`${key} is required`);
        } else if (element) {
          element.classList.remove('is-invalid');
        }
      });

      // Email validation
      if (formElements.email && !emailRegex.test(formElements.email.value.trim())) {
        isValid = false;
        formElements.email.classList.add('is-invalid');
        errors.push('Please enter a valid email address');
      }

      if (!isValid) {
        // Tampilkan error secara lebih user-friendly
        const errorMsg = errors.join('\n');
        showFormMessage(errorMsg, 'error');
      }

      return isValid;
    };

    const showFormMessage = (message, type = 'success') => {
      // Implement feedback UI yang lebih baik
      const alertDiv = document.createElement('div');
      alertDiv.className = `alert alert-${type === 'error' ? 'danger' : 'success'} mt-3`;
      alertDiv.textContent = message;
      alertDiv.setAttribute('role', 'alert');
      
      // Remove existing alerts
      const existingAlert = contactForm.querySelector('.alert');
      if (existingAlert) existingAlert.remove();
      
      contactForm.insertBefore(alertDiv, contactForm.firstChild);
      
      // Auto-hide setelah 5 detik
      setTimeout(() => {
        alertDiv.remove();
      }, 5000);
    };

    const handleSubmit = (e) => {
      e.preventDefault();
      
      if (validateForm()) {
        // Tampilkan loading state
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;
        
        // Simulasi async submission
        setTimeout(() => {
          // Reset form
          contactForm.reset();
          Object.values(formElements).forEach(el => {
            if (el) el.classList.remove('is-invalid');
          });
          
          // Tampilkan success message
          showFormMessage('Message sent successfully!');
          
          // Reset button
          submitBtn.textContent = originalText;
          submitBtn.disabled = false;
        }, 1500);
      }
    };

    // Real-time validation
    Object.values(formElements).forEach(element => {
      if (element) {
        element.addEventListener('blur', () => {
          if (element.value.trim() === '') {
            element.classList.add('is-invalid');
          } else {
            element.classList.remove('is-invalid');
          }
        });
      }
    });

    contactForm.addEventListener('submit', handleSubmit);
  };

  // ==================== NAVBAR ====================
  const initNavbar = () => {
    // Event delegation untuk semua nav links
    document.addEventListener('click', (e) => {
      const navLink = e.target.closest('.nav-link:not(.dropdown-toggle), .dropdown-item');
      const isMobile = window.innerWidth < 992;
      
      if (navLink && isMobile) {
        const navbarCollapse = getElement('#mainNavbar', 'navbarCollapse');
        const bsCollapse = navbarCollapse ? bootstrap.Collapse.getInstance(navbarCollapse) : null;
        
        if (bsCollapse) {
          bsCollapse.hide();
        }
        
        // Reset dropdowns
        document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
          menu.classList.remove('show');
        });
        
        document.querySelectorAll('.dropdown-toggle[aria-expanded="true"]').forEach(toggle => {
          toggle.setAttribute('aria-expanded', 'false');
          toggle.classList.remove('show');
        });
      }
    });
    
    // Handle window resize dengan debounce
    const handleResize = debounce(() => {
      if (window.innerWidth >= 992) {
        const navbarCollapse = getElement('#mainNavbar', 'navbarCollapse');
        
        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) bsCollapse.hide();
        }
        
        // Reset dropdowns
        document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
          menu.classList.remove('show');
        });
        
        document.querySelectorAll('.dropdown-toggle[aria-expanded="true"]').forEach(toggle => {
          toggle.setAttribute('aria-expanded', 'false');
          toggle.classList.remove('show');
        });
      }
    }, 250);
    
    window.addEventListener('resize', handleResize);
  };

  // ==================== SEARCH PAGE ====================
  const initSearch = () => {
    const searchInput = getElement('#searchInput', 'searchInput');
    
    if (searchInput && window.innerWidth > 768) {
      // Gunakan setTimeout dengan delay minimal
      setTimeout(() => {
        try {
          searchInput.focus();
        } catch (e) {
          console.warn('Could not focus search input:', e);
        }
      }, 50);
    }
  };

  // ==================== ABOUT VISION MISSION ====================
  const initVisionMission = () => {
    const vmButtons = getElements('.vm-btn', 'vmButtons');
    const slider = getElement('.vm-slider', 'vmSlider');
    const visionBox = getElement('#content-vision', 'visionBox');
    const missionBox = getElement('#content-mission', 'missionBox');
    
    if (!vmButtons.length || !slider || !visionBox || !missionBox) return;

    let currentIndex = 0;

    const switchTab = (index) => {
      if (index === currentIndex) return;
      
      // Update button states
      vmButtons.forEach(btn => btn.classList.remove('active'));
      vmButtons[index].classList.add('active');
      
      // Update slider
      slider.style.transform = `translate3d(${index * 100}%, 0, 0)`;
      
      // Determine which box to show/hide
      const showBox = index === 0 ? visionBox : missionBox;
      const hideBox = index === 0 ? missionBox : visionBox;
      const hideClass = index === 0 ? 'hide-right' : 'hide-left';
      
      // Animate transition
      hideBox.classList.remove('active');
      hideBox.classList.add(hideClass);
      
      showBox.classList.add('active');
      showBox.classList.remove('hide-left', 'hide-right');
      
      // Trigger word animations dengan optimasi
      const animatedElements = showBox.querySelectorAll('.word-fade, .animate-fade-blue');
      animatedElements.forEach(el => {
        // Reset dan trigger reflow
        el.style.animation = 'none';
        void el.offsetWidth; // Trigger reflow
        el.style.animation = '';
      });
      
      currentIndex = index;
    };

    // Event delegation untuk vm buttons
    const container = vmButtons[0].closest('.vm-container') || document;
    container.addEventListener('click', (e) => {
      const button = e.target.closest('.vm-btn');
      if (button) {
        const index = Array.from(vmButtons).indexOf(button);
        if (index !== -1) switchTab(index);
      }
    });
  };

  // ==================== PRINCIPAL CARD CAROUSEL ====================
  const initPrincipalCardCarousel = () => {
    const carousel = getElement('#partnershipCarousel', 'partnershipCarousel');
    
    if (!carousel) return;
    
    carousel.addEventListener('slide.bs.carousel', (e) => {
      const dots = document.querySelectorAll('.carousel-dot');
      dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === e.to);
      });
    });
  };

  // ==================== TESTIMONIAL CAROUSEL ====================
  const initTestimonialCarousel = () => {
    const slider = getElement('.testimonial-slider', 'testimonialSlider');
    const cards = getElements('.testimonial-card', 'testimonialCards');
    const nextBtn = getElement('.testimonial-nav.next', 'testimonialNext');
    const prevBtn = getElement('.testimonial-nav.prev', 'testimonialPrev');
    const progressBar = getElement('.testimonial-progress-bar', 'testimonialProgress');
    
    if (!slider || !cards.length || !nextBtn || !prevBtn || !progressBar) return;

    let currentIndex = 0;
    let cardWidth = 0;
    let gap = 0;

    const calculateLayout = () => {
      const computedStyle = getComputedStyle(slider);
      gap = parseInt(computedStyle.gap) || 0;
      cardWidth = cards[0].offsetWidth;
      
      return {
        visibleCount: () => {
          if (window.innerWidth < 576) return 1;
          if (window.innerWidth < 992) return 2;
          return 3;
        },
        cardFullWidth: cardWidth + gap
      };
    };

    const updateCarousel = throttle(() => {
      const layout = calculateLayout();
      const visibleCount = layout.visibleCount();
      const maxIndex = Math.max(0, cards.length - visibleCount);
      
      currentIndex = Math.min(currentIndex, maxIndex);
      
      // Update transform dengan hardware acceleration
      slider.style.transform = `translate3d(-${currentIndex * layout.cardFullWidth}px, 0, 0)`;
      
      // Update button states
      prevBtn.classList.toggle('disabled', currentIndex === 0);
      nextBtn.classList.toggle('disabled', currentIndex >= maxIndex);
      
      // Update progress bar
      const shown = Math.min(currentIndex + visibleCount, cards.length);
      progressBar.style.width = `${(shown / cards.length) * 100}%`;
    }, 16); // ~60fps

    // Navigation handlers
    const goNext = () => {
      const layout = calculateLayout();
      const visibleCount = layout.visibleCount();
      const maxIndex = Math.max(0, cards.length - visibleCount);
      
      if (currentIndex < maxIndex) {
        currentIndex++;
        updateCarousel();
      }
    };

    const goPrev = () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    };

    // Event listeners
    nextBtn.addEventListener('click', goNext);
    prevBtn.addEventListener('click', goPrev);
    
    // Handle window resize dengan debounce
    const handleResize = debounce(updateCarousel, 150);
    window.addEventListener('resize', handleResize);
    
    // Initialize
    updateCarousel();
  };

  // ==================== MAIN INITIALIZATION ====================
  const initAll = () => {
    // Single DOMContentLoaded listener
    const initFunctions = [
      initSolutionTabs,
      initSolutionSection,
      initPrincipalCarousel,
      initContactForm,
      initNavbar,
      initSearch,
      initVisionMission,
      initPrincipalCardCarousel,
      initTestimonialCarousel
    ];

    // Jalankan semua init functions
    initFunctions.forEach(fn => {
      try {
        fn();
      } catch (error) {
        console.warn(`Error initializing ${fn.name}:`, error);
      }
    });

    // Cleanup pada page unload
    window.addEventListener('beforeunload', () => {
      cachedElements = {};
    });
  };

  // Start initialization berdasarkan readiness document
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAll);
  } else {
    // DOM sudah siap
    setTimeout(initAll, 0);
  }

  // Ekspos fungsi yang diperlukan ke global scope
  window.closeMobileMenu = function() {
    const navbarCollapse = getElement('#mainNavbar', 'navbarCollapse');
    const bsCollapse = navbarCollapse ? bootstrap.Collapse.getInstance(navbarCollapse) : null;
    
    if (bsCollapse) {
      bsCollapse.hide();
    }
  };
})();
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

  const initContactForm = () => {
  const contactForm = document.getElementById('contactForm');
  if (!contactForm) return;

  const els = {
    firstName: contactForm.querySelector('#firstName'),
    lastName: contactForm.querySelector('#lastName'),
    email: contactForm.querySelector('#email'),
    phone: contactForm.querySelector('#phone'),
    company: contactForm.querySelector('#company'),
    subject: contactForm.querySelector('#subject'),
    message: contactForm.querySelector('#message'),
    privacyPolicy: contactForm.querySelector('#privacyPolicy'),
  };

  const submitBtn = document.getElementById('submitBtn');
  const btnText = submitBtn?.querySelector('.btn-text');
  const spinner = submitBtn?.querySelector('.spinner-border');
  const arrow = submitBtn?.querySelector('.arrow-icon');

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  const setLoading = (on) => {
    if (!submitBtn) return;
    submitBtn.disabled = on;
    if (btnText) btnText.textContent = on ? 'Sending...' : 'Send Message';
    if (spinner) spinner.classList.toggle('d-none', !on);
    if (arrow) arrow.classList.toggle('d-none', on);
  };

  const markInvalid = (el) => el && el.classList.add('is-invalid');
  const clearInvalid = (el) => el && el.classList.remove('is-invalid');

  const validate = () => {
    let ok = true;

    Object.values(els).forEach((el) => {
      if (!el) return;
      const empty = el.type === 'checkbox' ? !el.checked : el.value.trim() === '';
      if (empty) { ok = false; markInvalid(el); } else { clearInvalid(el); }
    });

    const emailVal = els.email?.value.trim() || '';
    if (emailVal && !emailRegex.test(emailVal)) { ok = false; markInvalid(els.email); }

    return ok;
  };

  Object.values(els).forEach((el) => {
    if (!el) return;
    const evt = el.type === 'checkbox' ? 'change' : 'input';
    el.addEventListener(evt, () => {
      const empty = el.type === 'checkbox' ? !el.checked : el.value.trim() === '';
      if (empty) markInvalid(el); else clearInvalid(el);

      if (el === els.email) {
        const v = el.value.trim();
        if (v && !emailRegex.test(v)) markInvalid(el);
      }
    });
  });

  contactForm.addEventListener('submit', (e) => {
    if (!validate()) { e.preventDefault(); return; }
    setLoading(true);
  });

  setTimeout(() => {
    document.querySelectorAll('.alert').forEach((alert) => {
      try {
        if (window.bootstrap?.Alert) new bootstrap.Alert(alert).close();
        else alert.remove();
      } catch { alert.remove(); }
    });
  }, 5000);
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
      initWhatsAppFloating,
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

// whatsapp floating
const initWhatsAppFloating = () => {
  const WA_NUMBER = '6281233300382';

  const widget = document.getElementById('waWidget');
  const box = document.getElementById('waBox');
  const fab = document.getElementById('waFab');
  const closeBtn = document.getElementById('waClose');
  const sendBtn = document.getElementById('waSend');
  if (!widget || !box || !fab || !sendBtn) return;

  //const path = (window.location.pathname || '/').replace(/\/+$/, '') || '/';
  //const isHome = path === '/' || path === '/home';
  //const isContact = path === '/contact' || path === '/contact-us' || path === '/company/contact';
  //if (isHome || isContact) return;

  let selectedMsg = 'Hi! I’d like to know more about your services.';

  const openWa = (message) => {
    const url = `https://wa.me/${WA_NUMBER}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank', 'noopener');
  };

  const openBox = () => box.classList.add('is-open');
  const closeBox = () => box.classList.remove('is-open');
  const toggleBox = () => box.classList.toggle('is-open');

  setTimeout(() => {
  widget.style.display = 'block';

  requestAnimationFrame(() => {
    widget.classList.add('is-ready');

    // Mobile: hanya tampil tombol, jangan auto open card
    const isMobile = window.matchMedia('(max-width: 767.98px)').matches;

    if (!isMobile) {
      // Desktop: auto open card setelah jeda kecil
      if (!sessionStorage.getItem('wa_widget_opened')) {
        setTimeout(() => {
          openBox();
          sessionStorage.setItem('wa_widget_opened', 'true');
        }, 300);
      }
    }
  });
}, 3000);


  fab.addEventListener('click', () => {
  toggleBox();
});

  if (closeBtn) closeBtn.addEventListener('click', (e) => { e.stopPropagation(); closeBox(); });

  widget.querySelectorAll('.wa-chip').forEach((btn) => {
    btn.addEventListener('click', () => {
      selectedMsg = btn.getAttribute('data-wa-msg') || selectedMsg;
      openWa(selectedMsg);
    });
  });

  sendBtn.addEventListener('click', () => openWa(selectedMsg));

  document.addEventListener('mousedown', (e) => {
    if (!box.classList.contains('is-open')) return;
    if (widget.contains(e.target)) return;
    closeBox();
  });

  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeBox(); });
};

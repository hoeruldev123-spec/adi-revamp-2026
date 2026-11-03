// SOLUTION PAGE
document.addEventListener("DOMContentLoaded", function () {
  const solutionTabs = document.querySelectorAll("#solutionsTab .nav-link");

  solutionTabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      // Add click animation
      this.style.transform = "translateX(8px)";
      setTimeout(() => {
        this.style.transform = "translateX(5px)";
      }, 150);
    });
  });

  // Hover effect for non-active tabs
  solutionTabs.forEach((tab) => {
    tab.addEventListener("mouseenter", function () {
      if (!this.classList.contains("active")) {
        this.style.transform = "translateX(5px)";
      }
    });

    tab.addEventListener("mouseleave", function () {
      if (!this.classList.contains("active")) {
        this.style.transform = "translateX(0)";
      }
    });
  });
});

// SOLUTION SECTION HOME
document.addEventListener("DOMContentLoaded", function () {
  const solutionItems = document.querySelectorAll(".solution-item");
  const mainImage = document.getElementById("solution-main-image");

  function activateSolution(item) {
    // Remove active class from all items
    solutionItems.forEach((el) => {
      el.classList.remove("active");
      el.querySelector(".solution-full").classList.remove("show");
      el.querySelector(".solution-collapsed").classList.add("show");
    });

    // Add active class to clicked item
    item.classList.add("active");
    item.querySelector(".solution-full").classList.add("show");
    item.querySelector(".solution-collapsed").classList.remove("show");

    // Update image with fade effect
    const newImage = item.getAttribute("data-image");
    const newAlt = item.querySelector("h5").textContent + " Solution";

    if (mainImage.src !== newImage) {
      // Fade out current image
      mainImage.classList.add("fade-out");

      setTimeout(() => {
        // Change image source
        mainImage.src = newImage;
        mainImage.alt = newAlt;

        // Fade in new image
        mainImage.classList.remove("fade-out");
        mainImage.classList.add("fade-in");

        // Remove fade-in class after animation
        setTimeout(() => {
          mainImage.classList.remove("fade-in");
        }, 500);
      }, 300);
    }
  }

  // Add click event listeners
  solutionItems.forEach((item) => {
    item.addEventListener("click", function () {
      activateSolution(this);
    });
  });

  // Optional: Auto-activate on hover (uncomment if needed)
  /*
        solutionItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                if (!this.classList.contains('active')) {
                    activateSolution(this);
                }
            });
        });
        */
});

// File: principal.js
document.addEventListener("DOMContentLoaded", function () {
  // Data principals
  const principals = [
    { name: "Qlik", logo: "/assets/images/principals/qlik-logo.png" },
    { name: "Confluent", logo: "/assets/images/principals/confluent-logo.png" },
    { name: "Dendo", logo: "/assets/images/principals/dendo-logo.png" },
    { name: "Snowflake", logo: "/assets/images/principals/snowflake-logo.png" },
    { name: "Dataiku", logo: "/assets/images/principals/dataiku-logo.png" },
    { name: "Cloudera", logo: "/assets/images/principals/cloudera-logo.png" },
  ];

  const carouselTrack = document.getElementById("logoCarousel");

  function initCarousel() {
    // Clear existing content
    carouselTrack.innerHTML = "";

    // Create two sets of logos for seamless looping
    for (let i = 0; i < 2; i++) {
      principals.forEach((principal) => {
        const logoItem = document.createElement("div");
        logoItem.className = "logo-carousel-item";
        logoItem.innerHTML = `
                    <img src="${principal.logo}" alt="${principal.name}" 
                         loading="lazy" onerror="this.src='/assets/images/placeholder-logo.png'">
                `;
        carouselTrack.appendChild(logoItem);
      });
    }

    console.log("Carousel initialized with", principals.length * 2, "logos");
  }

  // Initialize carousel
  initCarousel();

  // Fallback: Jika CSS animation tidak bekerja, gunakan JavaScript
  function startJsAnimation() {
    const track = document.querySelector(".logo-carousel-track");
    let position = 0;
    const speed = 1; // pixels per frame

    function animate() {
      position -= speed;

      // Reset position ketika sudah mencapai setengah dari total width
      if (Math.abs(position) >= track.scrollWidth / 2) {
        position = 0;
      }

      track.style.transform = `translateX(${position}px)`;
      requestAnimationFrame(animate);
    }

    // Cek jika CSS animation tidak bekerja
    setTimeout(() => {
      const computedStyle = window.getComputedStyle(track);
      const animation = computedStyle.getPropertyValue("animation");

      if (!animation || animation === "none") {
        console.log("CSS animation not working, starting JS animation");
        animate();
      }
    }, 1000);
  }

  startJsAnimation();
});

// CONTACT US
document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById("contactForm");

  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();

      // Simple validation
      const firstName = document.getElementById("firstName").value.trim();
      const email = document.getElementById("email").value.trim();
      const subject = document.getElementById("subject").value.trim();
      const message = document.getElementById("message").value.trim();

      if (!firstName || !email || !subject || !message) {
        alert("Please fill in all required fields.");
        return;
      }

      // Email validation
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return;
      }

      // If validation passes, submit the form
      this.submit();
    });
  }
});

// NAVBAR //
document.addEventListener('DOMContentLoaded', function() {

    window.closeMobileMenu = function() {
      const navbarCollapse = document.getElementById('mainNavbar');
      const navbarToggler = document.querySelector('.navbar-toggler');
      const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);

      if (bsCollapse) {
        bsCollapse.hide();
      }
    };

    document.querySelectorAll('.nav-link:not(.dropdown-toggle), .dropdown-item').forEach(link => {
      link.addEventListener('click', function() {
        if (window.innerWidth < 992) {

          const navbarCollapse = document.getElementById('mainNavbar');
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) {
            bsCollapse.hide();
          }

          document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.remove('show');
          });
          document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.setAttribute('aria-expanded', 'false');
            toggle.classList.remove('show');
          });
        }
      });
    });

    // Handle window resize
    window.addEventListener('resize', function() {
      if (window.innerWidth >= 992) {

        const navbarCollapse = document.getElementById('mainNavbar');
        if (navbarCollapse.classList.contains('show')) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) {
            bsCollapse.hide();
          }
        }

        document.querySelectorAll('.dropdown-menu').forEach(menu => {
          menu.classList.remove('show');
        });
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
          toggle.setAttribute('aria-expanded', 'false');
          toggle.classList.remove('show');
        });
      }
    });
  });
  // END NAVBAR

  // SEARCH PAGE //
// Auto Focus Script
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        if (searchInput && window.innerWidth > 768) {
            setTimeout(() => searchInput.focus(), 300);
        }
    });
// ====END===

// about_vision_mission
const btns = document.querySelectorAll(".vm-btn");
  const slider = document.querySelector(".vm-slider");

  const visionBox = document.getElementById("content-vision");
  const missionBox = document.getElementById("content-mission");

  btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {

      document.querySelector(".vm-btn.active").classList.remove("active");
      btn.classList.add("active");

      slider.style.transform = `translateX(${i * 100}%)`;

      const show = i === 0 ? visionBox : missionBox;
      const hide = i === 0 ? missionBox : visionBox;

      hide.classList.remove("active");
      hide.classList.add(i === 0 ? "hide-right" : "hide-left");

      show.classList.add("active");
      show.classList.remove("hide-left", "hide-right");

      // retrigger word animation
      show.querySelectorAll(".word-fade, .animate-fade-blue").forEach(el => {
        el.classList.remove("animate");
        void el.offsetWidth;
        el.classList.add("animate");
      });
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const vmButtons = document.querySelectorAll('.vm-btn');

    vmButtons.forEach(button => {
      button.addEventListener('click', function() {

        const target = this.dataset.target;
        const activeBox = document.getElementById(`content-${target}`);
        const animatedWords = activeBox.querySelectorAll('.animate-fade-blue, .word-fade');

        animatedWords.forEach(word => {
          word.style.animation = 'none';
          word.classList.remove('animate-again');
          void word.offsetWidth;
          word.classList.add('animate-again');
          word.style.animation = '';
        });

      });
    });
  });

  // =======end========

  // PRINCIPAL CARD
   document.getElementById('partnershipCarousel')
            ?.addEventListener('slide.bs.carousel', function(e) {
                document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
                    dot.classList.toggle('active', index === e.to);
                });
            });

 // TESTIMONIAL
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector('.testimonial-slider');
        const cards = [...document.querySelectorAll('.testimonial-card')];
        const nextBtn = document.querySelector('.testimonial-nav.next');
        const prevBtn = document.querySelector('.testimonial-nav.prev');
        const progressBar = document.querySelector('.testimonial-progress-bar');

        let index = 0;

        const visibleCount = () => {
            if (window.innerWidth < 576) return 1;
            if (window.innerWidth < 992) return 2;
            return 3;
        };

        const cardFullWidth = () => {
            const style = getComputedStyle(slider);
            const gap = parseInt(style.gap || style.columnGap || 0);
            return cards[0].offsetWidth + gap;
        };

        const update = () => {
            const visible = visibleCount();
            const maxIndex = Math.max(0, cards.length - visible);

            index = Math.min(index, maxIndex);

            // slide
            slider.style.transform = `translateX(-${index * cardFullWidth()}px)`;

            // buttons
            prevBtn.classList.toggle('disabled', index === 0);
            nextBtn.classList.toggle('disabled', index >= maxIndex);

            // progress
            const shown = Math.min(index + visible, cards.length);
            progressBar.style.width = `${(shown / cards.length) * 100}%`;
        };

        nextBtn.addEventListener('click', () => {
            index++;
            update();
        });

        prevBtn.addEventListener('click', () => {
            index--;
            update();
        });

        window.addEventListener('resize', update);

        update(); // init
    });
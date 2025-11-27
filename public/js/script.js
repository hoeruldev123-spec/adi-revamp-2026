// File: solutions.js
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

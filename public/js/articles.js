/**
 * Articles Page Enhancements
 */

document.addEventListener('DOMContentLoaded', function() {
  
  // Smooth scroll to top when changing pages
  const paginationLinks = document.querySelectorAll('.pagination .page-link');
  paginationLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      // Let the default action happen, but smooth scroll
      setTimeout(() => {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      }, 100);
    });
  });

  // Search form enhancement
  const searchForm = document.querySelector('form[action*="articles"]');
  if (searchForm) {
    const searchInput = searchForm.querySelector('input[name="search"]');
    
    // Clear button
    if (searchInput && searchInput.value) {
      const clearBtn = document.createElement('button');
      clearBtn.type = 'button';
      clearBtn.className = 'btn btn-sm btn-link position-absolute end-0 top-50 translate-middle-y me-5';
      clearBtn.innerHTML = '<i class="bi bi-x-circle"></i>';
      clearBtn.style.zIndex = '10';
      
      clearBtn.addEventListener('click', function() {
        searchInput.value = '';
        searchInput.focus();
      });
      
      const inputGroup = searchInput.closest('.input-group');
      if (inputGroup) {
        inputGroup.style.position = 'relative';
        inputGroup.appendChild(clearBtn);
      }
    }
  }

  // Lazy loading for images
  const images = document.querySelectorAll('img[loading="lazy"]');
  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.classList.add('loaded');
          observer.unobserve(img);
        }
      });
    });

    images.forEach(img => imageObserver.observe(img));
  }

  // Add reading progress bar
  addReadingProgressBar();

  // Filter chip animations
  animateFilterChips();

  // Sidebar sticky behavior
  handleSidebarSticky();
});

/**
 * Add reading progress bar
 */
function addReadingProgressBar() {
  const progressBar = document.createElement('div');
  progressBar.className = 'reading-progress';
  progressBar.style.cssText = `
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    width: 0%;
    z-index: 9999;
    transition: width 0.2s ease;
  `;
  document.body.appendChild(progressBar);

  window.addEventListener('scroll', function() {
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;
    
    progressBar.style.width = scrollPercent + '%';
  });
}

/**
 * Animate filter chips
 */
function animateFilterChips() {
  const filterChips = document.querySelectorAll('.badge');
  
  filterChips.forEach((chip, index) => {
    chip.style.opacity = '0';
    chip.style.transform = 'translateY(10px)';
    
    setTimeout(() => {
      chip.style.transition = 'all 0.3s ease';
      chip.style.opacity = '1';
      chip.style.transform = 'translateY(0)';
    }, index * 50);
  });
}

/**
 * Handle sidebar sticky behavior
 */
function handleSidebarSticky() {
  const sidebar = document.querySelector('.sticky-top');
  if (!sidebar) return;

  const navbar = document.querySelector('.navbar');
  const navbarHeight = navbar ? navbar.offsetHeight : 0;

  window.addEventListener('scroll', function() {
    if (window.innerWidth >= 992) {
      sidebar.style.top = (navbarHeight + 20) + 'px';
    }
  });
}

/**
 * Share article functionality
 */
function shareArticle(title, url) {
  if (navigator.share) {
    navigator.share({
      title: title,
      url: url
    }).catch(err => console.log('Error sharing:', err));
  } else {
    // Fallback: copy to clipboard
    navigator.clipboard.writeText(url).then(() => {
      alert('Link copied to clipboard!');
    });
  }
}

/**
 * Bookmark article (localStorage)
 */
function bookmarkArticle(articleId, title) {
  let bookmarks = JSON.parse(localStorage.getItem('articleBookmarks') || '[]');
  
  const exists = bookmarks.find(b => b.id === articleId);
  
  if (exists) {
    // Remove bookmark
    bookmarks = bookmarks.filter(b => b.id !== articleId);
    console.log('Bookmark removed');
  } else {
    // Add bookmark
    bookmarks.push({
      id: articleId,
      title: title,
      timestamp: Date.now()
    });
    console.log('Bookmark added');
  }
  
  localStorage.setItem('articleBookmarks', JSON.stringify(bookmarks));
}

/**
 * Get bookmarked articles
 */
function getBookmarks() {
  return JSON.parse(localStorage.getItem('articleBookmarks') || '[]');
}
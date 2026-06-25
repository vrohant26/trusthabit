document.addEventListener("DOMContentLoaded", () => {
  // ── Smooth Scroll (Lenis) ──────────────────────────────────────────────
  const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    prevent: () => false,
  });

  (function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  })();

  // ── Header scroll state ────────────────────────────────────────────────
  const header = document.querySelector(".site-header");
  if (header) {
    window.addEventListener("scroll", () => {
      header.classList.toggle("header-scrolled", window.scrollY > 150);
    });
  }

  // ── GSAP block (all animations) ────────────────────────────────────────
  if (typeof gsap === "undefined") return;

  // Register plugins once
  const plugins = [ScrollTrigger];
  if (typeof SplitText !== "undefined") plugins.push(SplitText);
  gsap.registerPlugin(...plugins);

  // Exclamation glow — bento cards
  document.querySelectorAll(".exclamation-glow").forEach((el) => {
    ScrollTrigger.create({
      trigger: el,
      start: "top 80%",
      onEnter: () => el.classList.add("glow-active"),
      once: true,
    });
  });

  // Mission statement — word colour scrub
  const missionText = document.querySelector(".mission-statement");
  if (missionText && typeof SplitText !== "undefined") {
    const split = new SplitText(missionText, { type: "words" });
    gsap.fromTo(
      split.words,
      { color: "#cbd5e1" },
      {
        color: "#26529B",
        stagger: 0.1,
        scrollTrigger: {
          trigger: missionText,
          start: "top 80%",
          end: "bottom 40%",
          scrub: 1,
        },
      },
    );
  }

  // Logo animation section — pinned colour transition
  const logoSection = document.querySelector(".logo-animation-section");
  if (logoSection) {
    gsap
      .timeline({
        scrollTrigger: {
          trigger: logoSection,
          start: "top 20%",
          end: "+=20%",
          scrub: 1,
        },
      })
      .to(".animated-logo-text", { color: "#26529B", duration: 1 }, 0)
      .to(
        ".animated-logo-icon",
        { backgroundColor: "#26529B", color: "#ffffff", duration: 1 },
        0,
      );
  }

  // Audience list — sticky scroll on desktop
  const audienceSection = document.querySelector(".aud-sec");
  const audienceList = document.querySelector(".audience-list");
  if (audienceSection && audienceList) {
    ScrollTrigger.matchMedia({
      "(min-width: 901px)": function () {
        gsap.to(audienceList, {
          y: () => {
            const dist = audienceList.scrollHeight - window.innerHeight * 0.4;
            return dist > 0 ? -dist : 0;
          },
          ease: "none",
          scrollTrigger: {
            trigger: audienceSection,
            start: "top 100px",
            end: "+=150%",
            pin: true,
            scrub: 1,
            invalidateOnRefresh: true,
          },
        });
      },
      "(max-width: 900px)": function () {
        gsap.set(audienceList, { clearProps: "all" });
      },
    });
  }

  // ── Features Flow (Section 5) ──────────────────────────────────────────

  // SVG connecting lines
  const ffRows = document.getElementById("ff-rows");
  const card1 = document.getElementById("ff-card-1");
  const card2 = document.getElementById("ff-card-2");
  const card3 = document.getElementById("ff-card-3");
  const card4 = document.getElementById("ff-card-4");
  const card5 = document.getElementById("ff-card-5");
  const path1bg = document.getElementById("ff-path-1-bg");
  const path1 = document.getElementById("ff-path-1");
  const path2bg = document.getElementById("ff-path-2-bg");
  const path2 = document.getElementById("ff-path-2");
  const path3bg = document.getElementById("ff-path-3-bg");
  const path3 = document.getElementById("ff-path-3");
  const path4bg = document.getElementById("ff-path-4-bg");
  const path4 = document.getElementById("ff-path-4");

  if (ffRows && card1 && card2 && path1) {
    // Measure element position relative to ancestor — immune to CSS transforms & scroll
    function offsetRelTo(el, ancestor) {
      let top = 0,
        left = 0,
        cur = el;
      while (cur && cur !== ancestor) {
        top += cur.offsetTop;
        left += cur.offsetLeft;
        cur = cur.offsetParent;
      }
      return {
        top,
        left,
        width: el.offsetWidth,
        height: el.offsetHeight,
        bottom: top + el.offsetHeight,
        right: left + el.offsetWidth,
      };
    }

    // Returns { d, x1, y1, x2, y2 } — path string + endpoint coords for gradient
    function buildPath(fromEl, fromX, toEl, toX) {
      const a = offsetRelTo(fromEl, ffRows);
      const b = offsetRelTo(toEl, ffRows);
      const x1 = a.left + a.width * fromX,
        y1 = a.bottom;
      const x2 = b.left + b.width * toX,
        y2 = b.top;
      const cy = (y2 - y1) * 0.5;
      return {
        d: `M ${x1} ${y1} C ${x1} ${y1 + cy}, ${x2} ${y2 - cy}, ${x2} ${y2}`,
        x1,
        y1,
        x2,
        y2,
      };
    }

    function setGradient(gradEl, x1, y1, x2, y2) {
      gradEl.setAttribute("x1", x1);
      gradEl.setAttribute("y1", y1);
      gradEl.setAttribute("x2", x2);
      gradEl.setAttribute("y2", y2);
    }

    const grad1 = document.getElementById("ff-grad-1");
    const grad2 = document.getElementById("ff-grad-2");

    function initPaths() {
      if (window.innerWidth <= 900) return;

      if (path1 && card2) {
        const p1 = buildPath(card1, 0.5, card2, 0.5);
        if (path1bg) path1bg.setAttribute("d", p1.d);
        path1.setAttribute("d", p1.d);
        path1.style.stroke = "url(#ff-grad-1)";
        if (grad1) setGradient(grad1, p1.x1, p1.y1, p1.x2, p1.y2);
        gsap.set(path1, {
          strokeDasharray: path1.getTotalLength(),
          strokeDashoffset: path1.getTotalLength(),
        });
      }

      if (path2 && card3) {
        const p2 = buildPath(card2, 0.5, card3, 0.5);
        if (path2bg) path2bg.setAttribute("d", p2.d);
        path2.setAttribute("d", p2.d);
        path2.style.stroke = "url(#ff-grad-2)";
        if (grad2) setGradient(grad2, p2.x1, p2.y1, p2.x2, p2.y2);
        gsap.set(path2, {
          strokeDasharray: path2.getTotalLength(),
          strokeDashoffset: path2.getTotalLength(),
        });
      }

      if (path3 && card4) {
        const p3 = buildPath(card3, 0.5, card4, 0.5);
        if (path3bg) path3bg.setAttribute("d", p3.d);
        path3.setAttribute("d", p3.d);
        path3.style.stroke = "url(#ff-grad-1)";
        gsap.set(path3, {
          strokeDasharray: path3.getTotalLength(),
          strokeDashoffset: path3.getTotalLength(),
        });
      }

      if (path4 && card5) {
        const p4 = buildPath(card4, 0.5, card5, 0.5);
        if (path4bg) path4bg.setAttribute("d", p4.d);
        path4.setAttribute("d", p4.d);
        path4.style.stroke = "url(#ff-grad-2)";
        gsap.set(path4, {
          strokeDasharray: path4.getTotalLength(),
          strokeDashoffset: path4.getTotalLength(),
        });
      }
    }

    function setupDrawTriggers() {
      if (window.innerWidth <= 900) return;

      const triggers = [];
      if (path1)
        triggers.push({
          path: path1,
          trigger: ".ff-row-1",
          endTrigger: ".ff-row-2",
        });
      if (path2)
        triggers.push({
          path: path2,
          trigger: ".ff-row-2",
          endTrigger: ".ff-row-3",
        });
      if (path3)
        triggers.push({
          path: path3,
          trigger: ".ff-row-3",
          endTrigger: ".ff-row-4",
        });
      if (path4)
        triggers.push({
          path: path4,
          trigger: ".ff-row-4",
          endTrigger: ".ff-row-5",
        });

      triggers.forEach(({ path, trigger, endTrigger }) => {
        gsap.to(path, {
          strokeDashoffset: 0,
          ease: "none",
          scrollTrigger: {
            trigger,
            start: "center center",
            endTrigger: endTrigger,
            end: "center center",
            scrub: 0.8,
            invalidateOnRefresh: true,
            onRefresh: initPaths,
          },
        });
      });
    }

    ScrollTrigger.addEventListener("refresh", function onFirstRefresh() {
      ScrollTrigger.removeEventListener("refresh", onFirstRefresh);
      initPaths();
      setupDrawTriggers();
    });

    ScrollTrigger.refresh();

    window.addEventListener("resize", () => {
      initPaths();
      ScrollTrigger.refresh();
    });
  }

  /* =========================================================================
     SWIPER INITIALIZATIONS
     ========================================================================= */

  if (typeof Swiper !== "undefined") {
    new Swiper(".team-swiper", {
      slidesPerView: 1.2,
      spaceBetween: 20,
      navigation: {
        nextEl: ".team-swiper-next",
        prevEl: ".team-swiper-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 2.2,
          spaceBetween: 20,
        },
        900: {
          slidesPerView: 3.2,
          spaceBetween: 30,
        },
        1100: {
          slidesPerView: 4.2,
          spaceBetween: 40,
        },
      },
    });
  }
});

// Mobile Menu Toggle
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const mobileMenuOverlay = document.querySelector(".mobile-menu-overlay");

  if (mobileMenuToggle && mobileMenuOverlay) {
    mobileMenuToggle.addEventListener("click", function () {
      this.classList.toggle("active");
      mobileMenuOverlay.classList.toggle("active");

      if (this.classList.contains("active")) {
        document.body.style.overflow = "hidden"; // Prevent scrolling
      } else {
        document.body.style.overflow = "";
      }
    });

    // Close menu when a link is clicked
    const mobileLinks = mobileMenuOverlay.querySelectorAll("a");
    mobileLinks.forEach((link) => {
      link.addEventListener("click", () => {
        mobileMenuToggle.classList.remove("active");
        mobileMenuOverlay.classList.remove("active");
        document.body.style.overflow = "";
      });
    });
  }

  // FAQ Accordion Logic
  const faqQuestions = document.querySelectorAll(".faq-question");

  faqQuestions.forEach((question) => {
    question.addEventListener("click", () => {
      const item = question.closest(".faq-accordion-item");
      const answerWrapper = item.querySelector(".faq-answer-wrapper");
      const iconPlus = question.querySelector(".icon-plus");
      const iconMinus = question.querySelector(".icon-minus");
      const iconContainer = question.querySelector(".faq-icon");

      const isOpen = item.classList.contains("active");

      // Auto-close others in the same group
      const group = item.closest(".faq-accordion-list");
      if (group) {
        group.querySelectorAll(".faq-accordion-item").forEach((otherItem) => {
          if (otherItem !== item && otherItem.classList.contains("active")) {
            otherItem.classList.remove("active");
            otherItem.querySelector(".icon-plus").style.display = "block";
            otherItem.querySelector(".icon-minus").style.display = "none";
            otherItem.querySelector(".faq-icon").style.transform =
              "rotate(0deg)";
          }
        });
      }

      if (isOpen) {
        // Close it
        item.classList.remove("active");
        iconPlus.style.display = "block";
        iconMinus.style.display = "none";
        iconContainer.style.transform = "rotate(0deg)";
      } else {
        // Open it
        item.classList.add("active");
        iconPlus.style.display = "none";
        iconMinus.style.display = "block";
        iconContainer.style.transform = "rotate(180deg)";
      }
    });
  });

  // Why Trust Habit - Carousel
  const carousel = document.getElementById("hf-carousel");
  const prevBtn = document.getElementById("hf-prev-btn");
  const nextBtn = document.getElementById("hf-next-btn");

  if (carousel && prevBtn && nextBtn) {
    // Calculate scroll amount based on first card's width + gap
    const getScrollAmount = () => {
      const card = carousel.children[0];
      const gap = 24; // 1.5rem gap
      return card ? card.offsetWidth + gap : 300;
    };

    prevBtn.addEventListener("click", () => {
      carousel.scrollBy({ left: -getScrollAmount(), behavior: "smooth" });
    });

    nextBtn.addEventListener("click", () => {
      carousel.scrollBy({ left: getScrollAmount(), behavior: "smooth" });
    });
  }

  // Decision Makers - Carousel
  const dmCarousel = document.getElementById("dm-carousel");
  const dmPrevBtn = document.getElementById("dm-prev-btn");
  const dmNextBtn = document.getElementById("dm-next-btn");

  if (dmCarousel && dmPrevBtn && dmNextBtn) {
    const getDmScrollAmount = () => {
      const card = dmCarousel.children[0];
      const gap = 24; // 1.5rem gap
      return card ? card.offsetWidth + gap : 300;
    };

    dmPrevBtn.addEventListener("click", () => {
      dmCarousel.scrollBy({ left: -getDmScrollAmount(), behavior: "smooth" });
    });

    dmNextBtn.addEventListener("click", () => {
      dmCarousel.scrollBy({ left: getDmScrollAmount(), behavior: "smooth" });
    });
  }

  // ==========================================
  // Blog Archive AJAX Filtering & Pagination
  // ==========================================
  const blogForm = document.getElementById("blog-search-form");
  const blogTags = document.querySelectorAll(".blog-tag-filter");
  const blogGrid = document.getElementById("blog-grid-container");
  const blogPagination = document.getElementById("blog-pagination-container");
  const blogOverlay = document.getElementById("blog-loading-overlay");
  const mobileFiltersToggle = document.getElementById("mobile-filters-toggle");
  const mobileFiltersPopup = document.querySelector(".popup-on-mobile");

  if (mobileFiltersToggle && mobileFiltersPopup) {
    mobileFiltersToggle.addEventListener("click", () => {
      mobileFiltersPopup.classList.toggle("show");
      const plusIcon = mobileFiltersToggle.querySelector(".plus-icon");
      if (mobileFiltersPopup.classList.contains("show")) {
        plusIcon.textContent = "-";
      } else {
        plusIcon.textContent = "+";
      }
    });

    // Close popup if clicking outside
    document.addEventListener("click", (e) => {
      if (!mobileFiltersToggle.contains(e.target) && !mobileFiltersPopup.contains(e.target)) {
        mobileFiltersPopup.classList.remove("show");
        const plusIcon = mobileFiltersToggle.querySelector(".plus-icon");
        if (plusIcon) plusIcon.textContent = "+";
      }
    });
  }

  if (blogGrid) {
    let currentSearch = document.getElementById("blog-search-input")?.value || "";
    let currentTag = "";
    let currentPage = 1;

    // Helper to fetch posts via AJAX
    const fetchBlogs = (search, tag, page) => {
      if (blogOverlay) blogOverlay.style.display = "flex";
      
      const formData = new FormData();
      formData.append("action", "filter_blogs");
      formData.append("s", search);
      formData.append("tag", tag);
      formData.append("paged", page);
      // Ensure nonce is included if you decide to add one, but for public search it's not strictly necessary.

      // In WordPress, ajax url is typically passed via wp_localize_script, we'll assume standard WP setup
      const ajaxUrl = window.trustHabbitAjaxUrl || "/wp-admin/admin-ajax.php";

      fetch(ajaxUrl, {
        method: "POST",
        body: formData,
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          blogGrid.innerHTML = data.data.html;
          blogPagination.innerHTML = data.data.pagination;
          
          // Re-bind pagination clicks
          bindPagination();
          
          // Scroll to top of grid
          const contentArea = document.getElementById("blog-content-area");
          if (contentArea) {
            const yOffset = -120; 
            const y = contentArea.getBoundingClientRect().top + window.pageYOffset + yOffset;
            window.scrollTo({top: y, behavior: 'smooth'});
          }
        }
        if (blogOverlay) blogOverlay.style.display = "none";
      })
      .catch(err => {
        console.error("Error fetching blogs:", err);
        if (blogOverlay) blogOverlay.style.display = "none";
      });
    };

    // Bind Search
    if (blogForm) {
      blogForm.addEventListener("submit", (e) => {
        e.preventDefault();
        currentSearch = document.getElementById("blog-search-input").value;
        currentPage = 1;
        fetchBlogs(currentSearch, currentTag, currentPage);
      });
    }

    // Bind Tags
    blogTags.forEach(tagBtn => {
      tagBtn.addEventListener("click", (e) => {
        e.preventDefault();
        // Remove active class from all
        blogTags.forEach(btn => {
          btn.classList.remove("active");
          const marker = btn.querySelector(".tag-marker");
          if(marker) marker.style.background = "transparent";
        });
        
        // Set active
        tagBtn.classList.add("active");
        const marker = tagBtn.querySelector(".tag-marker");
        if(marker) marker.style.background = "var(--color-primary)";

        currentTag = tagBtn.getAttribute("data-tag");
        currentPage = 1;
        fetchBlogs(currentSearch, currentTag, currentPage);

        // Close mobile popup if open
        if (mobileFiltersPopup && mobileFiltersPopup.classList.contains("show")) {
          mobileFiltersPopup.classList.remove("show");
          const plusIcon = mobileFiltersToggle.querySelector(".plus-icon");
          if (plusIcon) plusIcon.textContent = "+";
        }
      });
    });

    // Bind Pagination (needs to be bound initially and after every AJAX fetch)
    const bindPagination = () => {
      const pageLinks = blogPagination.querySelectorAll("a.page-numbers");
      pageLinks.forEach(link => {
        link.addEventListener("click", (e) => {
          e.preventDefault();
          const url = new URL(link.href);
          
          // Extract page number
          let page = 1;
          if (url.searchParams.has("paged")) {
            page = parseInt(url.searchParams.get("paged"));
          } else {
            const match = url.pathname.match(/\/page\/(\d+)/);
            if (match) page = parseInt(match[1]);
          }
          
          currentPage = page;
          fetchBlogs(currentSearch, currentTag, currentPage);
        });
      });
    };

    bindPagination();
  }
  // Dynamic Table of Contents for Single Blog
  // ==========================================
  const blogContentArea = document.getElementById('single-blog-content');
  const tocList = document.getElementById('dynamic-toc-list');
  const tocContainer = document.getElementById('blog-toc-container');

  if (blogContentArea && tocList && tocContainer) {
    const headings = blogContentArea.querySelectorAll('h2');
    
    if (headings.length > 0) {
      headings.forEach((heading, index) => {
        // Ensure heading has an ID
        if (!heading.id) {
          heading.id = 'blog-heading-' + (index + 1);
        }

        // Create TOC link
        const li = document.createElement('li');
        const a = document.createElement('a');
        a.href = '#' + heading.id;
        a.innerHTML = '<span style="flex-shrink: 0; width: 1.25rem;">' + (index + 1) + '.</span> <span style="flex: 1;">' + heading.textContent + '</span>';
        a.style.display = 'flex';
        a.style.gap = '0.25rem';
        
        // Smooth scroll
        a.addEventListener('click', (e) => {
          e.preventDefault();
          const yOffset = -100; // offset for sticky header
          const y = heading.getBoundingClientRect().top + window.pageYOffset + yOffset;
          window.scrollTo({top: y, behavior: 'smooth'});
        });

        li.appendChild(a);
        tocList.appendChild(li);
      });
    } else {
      // Hide TOC if no headings found
      tocContainer.style.display = 'none';
    }
  }

});

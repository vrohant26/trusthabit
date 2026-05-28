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

  // Hero entrance animation removed as per request

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
  // Row fade-in animation removed as per request

  // SVG connecting lines
  const ffRows = document.getElementById("ff-rows");
  const card1 = document.getElementById("ff-card-1");
  const card2 = document.getElementById("ff-card-2");
  const card3 = document.getElementById("ff-card-3");
  const path1bg = document.getElementById("ff-path-1-bg");
  const path1 = document.getElementById("ff-path-1");
  const path2bg = document.getElementById("ff-path-2-bg");
  const path2 = document.getElementById("ff-path-2");

  if (ffRows && card1 && card2 && card3 && path1 && path2) {
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

      const p1 = buildPath(card1, 0.72, card2, 0.72);
      path1bg.setAttribute("d", p1.d);
      path1.setAttribute("d", p1.d);
      path1.style.stroke = "url(#ff-grad-1)";
      if (grad1) setGradient(grad1, p1.x1, p1.y1, p1.x2, p1.y2);
      gsap.set(path1, {
        strokeDasharray: path1.getTotalLength(),
        strokeDashoffset: path1.getTotalLength(),
      });

      const p2 = buildPath(card2, 0.28, card3, 0.28);
      path2bg.setAttribute("d", p2.d);
      path2.setAttribute("d", p2.d);
      path2.style.stroke = "url(#ff-grad-2)";
      if (grad2) setGradient(grad2, p2.x1, p2.y1, p2.x2, p2.y2);
      gsap.set(path2, {
        strokeDasharray: path2.getTotalLength(),
        strokeDashoffset: path2.getTotalLength(),
      });
    }

    function setupDrawTriggers() {
      if (window.innerWidth <= 900) return;
      [
        { path: path1, trigger: ".ff-row-1" },
        { path: path2, trigger: ".ff-row-2" },
      ].forEach(({ path, trigger }) => {
        gsap.to(path, {
          strokeDashoffset: 0,
          ease: "none",
          scrollTrigger: {
            trigger,
            start: "bottom 65%",
            end: "bottom 5%",
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
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1100: {
          slidesPerView: 4,
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
});

document.addEventListener("DOMContentLoaded", () => {
  // Initialize Lenis Smooth Scroll
  const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    direction: "vertical",
    gestureDirection: "vertical",
    smooth: true,
    smoothTouch: false,
    touchMultiplier: 2,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);

  // Header Scroll Effect
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 150) {
        header.classList.add('header-scrolled');
      } else {
        header.classList.remove('header-scrolled');
      }
    });
  }

  // Basic GSAP Animation Example for Hero Section
  if (document.querySelector(".hero-title")) {
    gsap.from(".hero-title", {
      y: 50,
      opacity: 0,
      duration: 1.2,
      ease: "power3.out",
      delay: 0.2,
    });
  }

  // GSAP ScrollTrigger for Exclamation Glow
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    gsap.registerPlugin(ScrollTrigger);

    const glowElements = document.querySelectorAll(".exclamation-glow");
    glowElements.forEach((el) => {
      ScrollTrigger.create({
        trigger: el,
        start: "top 80%", // Trigger when top of element hits 80% of viewport
        onEnter: () => el.classList.add("glow-active"),
        once: true, // Ensure it only happens once
      });
    });
  }

  // GSAP ScrollTrigger & SplitText for Mission Statement
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined" && typeof SplitText !== "undefined") {
    gsap.registerPlugin(ScrollTrigger, SplitText);

    const missionText = document.querySelector(".mission-statement");
    if (missionText) {
      const split = new SplitText(missionText, { type: "words" });
      
      gsap.fromTo(split.words, 
        { color: "#cbd5e1" }, // Start grey
        {
          color: "#26529B", // Animate to primary color
          stagger: 0.1,
          scrollTrigger: {
            trigger: missionText,
            start: "top 80%",
            end: "bottom 40%",
            scrub: 1, // Smooth scrub tied to scroll
          }
        }
      );
    }
  }
});

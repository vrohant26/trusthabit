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
  const header = document.querySelector(".site-header");
  if (header) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 150) {
        header.classList.add("header-scrolled");
      } else {
        header.classList.remove("header-scrolled");
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
  if (
    typeof gsap !== "undefined" &&
    typeof ScrollTrigger !== "undefined" &&
    typeof SplitText !== "undefined"
  ) {
    gsap.registerPlugin(ScrollTrigger, SplitText);

    const missionText = document.querySelector(".mission-statement");
    if (missionText) {
      const split = new SplitText(missionText, { type: "words" });

      gsap.fromTo(
        split.words,
        { color: "#cbd5e1" }, // Start grey
        {
          color: "#26529B", // Animate to primary color
          stagger: 0.1,
          scrollTrigger: {
            trigger: missionText,
            start: "top 80%",
            end: "bottom 40%",
            scrub: 1, // Smooth scrub tied to scroll
          },
        },
      );
    }
  }

  // GSAP ScrollTrigger for Logo Animation Section
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    const logoSection = document.querySelector(".logo-animation-section");
    if (logoSection) {
      const logoTl = gsap.timeline({
        scrollTrigger: {
          trigger: logoSection,
          start: "top top", // Pin at the top
          end: "+=100%", // Pin for 100% of the viewport height
          scrub: 1,
          pin: true,
        },
      });

      logoTl
        .to(".animated-logo-text", { color: "#26529B", duration: 1 }, 0)
        .to(
          ".animated-logo-icon",
          { backgroundColor: "#26529B", color: "#ffffff", duration: 1 },
          0,
        );
    }
  }

  // GSAP ScrollTrigger for Audience Section List Scroll
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    const audienceSection = document.querySelector(".aud-sec");
    const audienceList = document.querySelector(".audience-list");

    if (audienceSection && audienceList) {
      ScrollTrigger.matchMedia({
        // Desktop, larger than 900px
        "(min-width: 901px)": function() {
          let getScrollDistance = () => {
            // Calculate how far up the list should translate.
            const distance = audienceList.scrollHeight - window.innerHeight * 0.4;
            return distance > 0 ? -distance : 0;
          };

          gsap.to(audienceList, {
            y: getScrollDistance,
            ease: "none",
            scrollTrigger: {
              trigger: audienceSection,
              start: "top 100px",
              end: "+=150%", // Pin and scroll for 1.5x viewport height
              pin: true,
              scrub: 1,
              invalidateOnRefresh: true, // Recalculate distance on window resize
            },
          });
        },

        // Mobile/Tablet, 900px and below
        "(max-width: 900px)": function() {
          // Ensure styles are reset for normal flow
          gsap.set(audienceList, { clearProps: "all" });
        }
      });
    }
  }
});

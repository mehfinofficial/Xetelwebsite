(function () {

  /* ---------- Header scroll state ---------- */
const nav = document.getElementById("siteNav");
function updateNavScrollState() {
  if (window.scrollY > 20) nav.classList.add("scrolled");
  else nav.classList.remove("scrolled");
}
updateNavScrollState();
window.addEventListener("scroll", updateNavScrollState, { passive: true });

  

  /* ---------- Hero product window: auto-cycling industries ---------- */
  const industries = ["transport", "pharmacy", "school", "accounting", "hotel", "restaurant"];
  const sidebarItems = document.querySelectorAll(".pw-sidebar-item");
  const panels = document.querySelectorAll(".pw-panel");
  const tabLabel = document.getElementById("pwTabLabel");
  let activeIndex = 0;
  let cycleTimer;

  function setActivePanel(key) {
    sidebarItems.forEach(el => el.classList.toggle("active", el.dataset.panel === key));
    panels.forEach(el => el.classList.toggle("active", el.dataset.panel === key));
    if (tabLabel) tabLabel.textContent = "xetel — " + key;
    activeIndex = industries.indexOf(key);
  }

  function startCycle() {
    cycleTimer = setInterval(() => {
      activeIndex = (activeIndex + 1) % industries.length;
      setActivePanel(industries[activeIndex]);
    }, 3200);
  }
  function stopCycle() { clearInterval(cycleTimer); }

  sidebarItems.forEach(item => {
    item.addEventListener("click", () => {
      stopCycle();
      setActivePanel(item.dataset.panel);
      startCycle();
    });
  });

  if (sidebarItems.length) startCycle();

  /* ---------- Showcase tabs ---------- */
  const showcaseTabs = document.querySelectorAll(".showcase-tab");
  const showcasePanels = document.querySelectorAll(".showcase-panel");
  showcaseTabs.forEach(tab => {
    tab.addEventListener("click", () => {
      showcaseTabs.forEach(t => t.classList.remove("active"));
      showcasePanels.forEach(p => p.classList.remove("active"));
      tab.classList.add("active");
      document.querySelector(`.showcase-panel[data-tab="${tab.dataset.tab}"]`).classList.add("active");
    });
  });

  /* ---------- Scroll reveal ---------- */
  const revealEls = document.querySelectorAll("[data-reveal]");
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("in-view");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  revealEls.forEach(el => observer.observe(el));

  /* ---------- Smooth nav for in-page anchors ---------- */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");
      if (targetId.length > 1) {
        const target = document.querySelector(targetId);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: "smooth", block: "start" });
        }
      }
    });
  });

 /* ---------- How it works: staggered step activation ---------- */
  const processRail = document.querySelector(".process-rail");
  if (processRail) {
    const steps = processRail.querySelectorAll(".process-step");
    const stepObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
         steps.forEach((step, i) => {
            setTimeout(() => {
              step.classList.add("active");
              processRail.style.setProperty("--line-progress", i / (steps.length - 1));
            }, i * 900);
          });
          stepObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.35 });
    stepObserver.observe(processRail);
  }

  /* ---------- Registration success overlay ---------- */
function showRegistrationSuccess() {
  document.getElementById("regSuccessOverlay").classList.add("show");
}
document.getElementById("regSuccessClose").addEventListener("click", () => {
  document.getElementById("regSuccessOverlay").classList.remove("show");
});
window.showRegistrationSuccess = showRegistrationSuccess; // exposed so form-handler.js can call it

  /* ---------- FAQ accordion ---------- */
  document.querySelectorAll(".faq-item").forEach(item => {
    const question = item.querySelector(".faq-question");
    question.addEventListener("click", () => {
      const isOpen = item.classList.contains("open");
      document.querySelectorAll(".faq-item.open").forEach(open => {
        open.classList.remove("open");
        open.querySelector(".faq-question").setAttribute("aria-expanded", "false");
      });
      if (!isOpen) {
        item.classList.add("open");
        question.setAttribute("aria-expanded", "true");
      }
    });
  });

  /* ---------- Typeriter animation Hero ---------- */

  const typeWords = ["accounting", "schools", "pharmacies", "hotels", "restaurants", "transport"];
const typeEl = document.getElementById("typeWord");

let wordIndex = 0, charIndex = 0, deleting = false;

function typeLoop() {
  const word = typeWords[wordIndex];

  if (!deleting) {
    charIndex++;
    typeEl.textContent = word.slice(0, charIndex);
    if (charIndex === word.length) {
      deleting = true;
      setTimeout(typeLoop, 1400); // pause on full word
      return;
    }
  } else {
    charIndex--;
    typeEl.textContent = word.slice(0, charIndex);
    if (charIndex === 0) {
      deleting = false;
      wordIndex = (wordIndex + 1) % typeWords.length;
    }
  }

  setTimeout(typeLoop, deleting ? 40 : 80);
}

typeLoop();

})();
(function () {
  const tabbar = document.getElementById("mobileTabbar");
  if (!tabbar) return;

  const softwaresBtn = document.getElementById("mtabSoftwares");
  const sheet = document.getElementById("softwaresSheet");
  const overlay = document.getElementById("softwaresSheetOverlay");
  const tabs = tabbar.querySelectorAll(".mtab-item");

  function openSheet() {
    sheet.classList.add("show");
    overlay.classList.add("show");
  }
  function closeSheet() {
    sheet.classList.remove("show");
    overlay.classList.remove("show");
  }

  softwaresBtn.addEventListener("click", () => {
    const isOpen = sheet.classList.contains("show");
    isOpen ? closeSheet() : openSheet();
  });
  overlay.addEventListener("click", closeSheet);

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      if (tab.dataset.tab === "softwares") return; // handled above
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");
      closeSheet();
    });
  });
})();
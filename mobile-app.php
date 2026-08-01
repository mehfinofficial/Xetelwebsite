<?php
// Standalone mobile app-shell page.
// Not linked into index.php yet — open directly (mobile-app.php) to preview.
// Reuses header.php / footer.php for nav, fonts, scripts, bottom tabbar.
$pageTitle  = 'Xetel — Home';
$activePage = 'home';
include __DIR__ . "/partials/header.php";
?>

<link rel="stylesheet" href="css/mobile-app.css">

<main class="mobile-app-shell">

  <div class="mah-promo" data-reveal>
    <span class="mah-eyebrow">Trusted by 25,000+ businesses</span>
    <h2>Software built for the way your business runs.</h2>
    <a href="#contact" class="btn btn-primary mah-promo-cta">Request a demo</a>
    <div class="mah-promo-meta">
      <span>Dedicated support</span>
      <span class="mah-dot">•</span>
      <span>Works offline</span>
      <span class="mah-dot">•</span>
      <span>GST 2.0 ready</span>
    </div>
  </div>

  <div class="mah-search">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
    <input type="text" id="mahSearch" placeholder="Search industries, products…">
  </div>

  <p class="mah-empty" id="mahEmpty">No matches — try a different search.</p>

  <!-- ============ INDUSTRIES (flat, no accordion) ============ -->
  <div class="mah-section" data-mah-section>
    <h3 class="mah-section-label">Choose Your Business.</h3>
    <div class="mah-grid">
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 15l4-4 3 3 5-6"/></svg></span>
        <span>Accounting</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.5 20.5L3.5 13.5a5 5 0 0 1 7-7l7 7a5 5 0 0 1-7 7z"/><path d="M8.5 8.5l7 7"/></svg></span>
        <span>Pharmacy</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.5 3 3 6 3s6-1.5 6-3v-5"/></svg></span>
        <span>School</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21V8l9-5 9 5v13"/><path d="M9 21v-6h6v6"/></svg></span>
        <span>Hotel</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 2v7c0 1.7 1.3 3 3 3s3-1.3 3-3V2M6 12v10M15 2c-2 0-3 2-3 5s1 5 3 5 M15 2v20"/></svg></span>
        <span>Restaurant</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="7" width="15" height="10" rx="1"/><path d="M16 10h4l3 3v4h-7"/><circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/></svg></span>
        <span>Transport</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 2v6.5L4 18a2 2 0 0 0 1.8 3h12.4a2 2 0 0 0 1.8-3l-5-9.5V2"/><path d="M8.5 2h7"/><path d="M6.5 15h11"/></svg></span>
        <span>Medical Lab</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 10h14l-1.5 9a2 2 0 0 1-2 1.7H8.5a2 2 0 0 1-2-1.7z"/><path d="M9 10a3 3 0 0 1 6 0"/><path d="M3 10h18"/></svg></span>
        <span>Mandi</span>
      </a>
      
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 15l4-4 3 3 5-6"/></svg></span>
        <span>Accounting</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.5 20.5L3.5 13.5a5 5 0 0 1 7-7l7 7a5 5 0 0 1-7 7z"/><path d="M8.5 8.5l7 7"/></svg></span>
        <span>Pharmacy</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.5 3 3 6 3s6-1.5 6-3v-5"/></svg></span>
        <span>School</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21V8l9-5 9 5v13"/><path d="M9 21v-6h6v6"/></svg></span>
        <span>Hotel</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 2v7c0 1.7 1.3 3 3 3s3-1.3 3-3V2M6 12v10M15 2c-2 0-3 2-3 5s1 5 3 5 M15 2v20"/></svg></span>
        <span>Restaurant</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="7" width="15" height="10" rx="1"/><path d="M16 10h4l3 3v4h-7"/><circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/></svg></span>
        <span>Transport</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 2v6.5L4 18a2 2 0 0 0 1.8 3h12.4a2 2 0 0 0 1.8-3l-5-9.5V2"/><path d="M8.5 2h7"/><path d="M6.5 15h11"/></svg></span>
        <span>Medical Lab</span>
      </a>
      <a href="index.php#industries" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 10h14l-1.5 9a2 2 0 0 1-2 1.7H8.5a2 2 0 0 1-2-1.7z"/><path d="M9 10a3 3 0 0 1 6 0"/><path d="M3 10h18"/></svg></span>
        <span>Mandi</span>
      </a>
    </div>
  </div>

  <!-- ============ PRODUCTS (flat, no accordion) ============ -->
  <div class="mah-section" data-mah-section>
    <h3 class="mah-section-label">Products</h3>
    <div class="mah-grid">
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8"/><path d="M16 17H8"/></svg></span>
        <span>Accounting ERP</span>
      </a>
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.5 20.5L3.5 13.5a5 5 0 1 1 7-7l7 7a5 5 0 1 1-7 7z"/><line x1="8.5" y1="8.5" x2="15.5" y2="15.5"/></svg></span>
        <span>Pharma ERP</span>
      </a>
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.1 2.7 3 6 3s6-1.9 6-3v-5"/></svg></span>
        <span>School ERP</span>
      </a>
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="6" width="15" height="12" rx="1"/><path d="M16 10h4l3 3v5h-7z"/><circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/></svg></span>
        <span>Transport ERP</span>
      </a>
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 10h14l-1.5 9a2 2 0 0 1-2 1.7H8.5a2 2 0 0 1-2-1.7z"/><path d="M9 10a3 3 0 0 1 6 0"/><path d="M3 10h18"/></svg></span>
        <span>Mandi ERP</span>
      </a>
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 2v6L4 19a2 2 0 0 0 2 3h12a2 2 0 0 0 2-3l-5-11V2"/><path d="M9 2h6"/><path d="M6.5 15h11"/></svg></span>
        <span>Lab ERP</span>
      </a>
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="7" y="2" width="10" height="20" rx="2"/><line x1="11" y1="18" x2="13" y2="18"/></svg></span>
        <span>Mobile App</span>
      </a>
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg></span>
        <span>Cloud ERP</span>
      </a>
    </div>
  </div>

  <!-- ============ COMPANY (flat, no accordion) ============ -->
  <div class="mah-section" data-mah-section>
    <h3 class="mah-section-label">Company</h3>
    <div class="mah-grid">
      <a href="index.php#product" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg></span>
        <span>Product</span>
      </a>
      <a href="index.php#features" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg></span>
        <span>Features</span>
      </a>
      <a href="downloads.php" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg></span>
        <span>Downloads</span>
      </a>
      <a href="index.php#contact" class="mah-tile">
        <span class="mah-tile-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 6l-10 7L2 6"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg></span>
        <span>Contact</span>
      </a>
    </div>
  </div>

  <!-- ============ FAQ (reuses sitewide .faq-item — accordion JS already in app.js) ============ -->
  <div class="mah-section" data-reveal>
    <h3 class="mah-section-label">Questions, answered</h3>
    <div class="faq-list mah-faq-list">
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span>Does Xetel work without internet?</span>
          <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="faq-answer"><p>Yes. Billing, stock and day-to-day entries keep working offline, and sync automatically once you're back online.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span>Can I use more than one industry software?</span>
          <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="faq-answer"><p>Yes — many businesses run more than one, like accounting alongside transport or pharmacy.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span>Is my business data secure?</span>
          <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="faq-answer"><p>Data is encrypted, backed up regularly, and access is controlled per staff login.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span>Do you help with training and setup?</span>
          <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="faq-answer"><p>Yes — every rollout includes hands-on training and support while you settle in.</p></div>
      </div>
    </div>
  </div>

  <!-- ============ CONTACT ============ -->
  <div class="mah-contact-card" data-reveal>
    <h3>Prefer to talk?</h3>
    <p>We're a phone call away, no ticket queue.</p>
    <div class="mah-contact">
      <a href="tel:+910000000000" class="mah-contact-btn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <span>Call</span>
      </a>
      <a href="https://wa.me/910000000000" target="_blank" rel="noopener" class="mah-contact-btn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
        <span>WhatsApp</span>
      </a>
      <a href="mailto:hello@xetel.in" class="mah-contact-btn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 6l-10 7L2 6"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
        <span>Email</span>
      </a>
    </div>
  </div>

</main>

<script>
  /* ---------- Search / filter tiles (sections stay flat, just hide empty ones) ---------- */
  const mahSearch = document.getElementById("mahSearch");
  const mahEmpty = document.getElementById("mahEmpty");
  const allSections = document.querySelectorAll("[data-mah-section]");

  mahSearch.addEventListener("input", () => {
    const q = mahSearch.value.trim().toLowerCase();
    let anyVisible = false;

    allSections.forEach(section => {
      let sectionHasMatch = false;
      section.querySelectorAll(".mah-tile").forEach(tile => {
        const match = !q || tile.textContent.trim().toLowerCase().includes(q);
        tile.style.display = match ? "flex" : "none";
        if (match) sectionHasMatch = true;
      });
      section.style.display = sectionHasMatch ? "" : "none";
      if (sectionHasMatch) anyVisible = true;
    });

    mahEmpty.style.display = (q && !anyVisible) ? "block" : "none";
  });
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>
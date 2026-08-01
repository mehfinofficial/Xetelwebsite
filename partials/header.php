<?php
// Defaults — override by setting $pageTitle / $pageDescription / $activePage
// BEFORE including this file from any page.
$pageTitle       = $pageTitle ?? 'Xetel Softwares';
$pageDescription = $pageDescription ?? 'Xetel builds ERP and management software for accounting, transport, schools, pharmacies, hotels and restaurants — one platform, tailored to every industry.';
$activePage      = $activePage ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/variables.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body data-theme="light">

<!-- ============ NAV ============ -->
<nav class="nav" id="siteNav">
  <div class="nav-inner">
    <div class="nav-bar">

      <a href="#" class="logo-zone">
        <img src="assets/images/logo/Xetellogo1.png" alt="Xetel" class="logo-img logo-light">
        <img src="assets/images/logo/Xetellogo2.png" alt="Xetel" class="logo-img logo-dark">
      </a>

      <div class="nav-links-zone">
        
        <div class="nav-item nav-item-mega">
          <a href="javascript:void(0)"><span>Softwares</span><svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></a>
          <div class="mega-panel">
            <div class="mega-features">
              <span class="mega-col-title">Features</span>
               <a href="" class="mega-link mega-link-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8"/><path d="M16 17H8"/><path d="M10 9H8"/></svg><span>Accounting &amp; Billing</span></a>
               <a href="" class="mega-link mega-link-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="M3.27 6.96L12 12l8.73-5.04"/><path d="M12 22.08V12"/></svg><span>Inventory Management</span></a>
               <a href="" class="mega-link mega-link-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="5" x2="5" y2="19"/><circle cx="6.5" cy="6.5" r="2.5"/><circle cx="17.5" cy="17.5" r="2.5"/></svg><span>GST &amp; Tax Filing</span></a>
               <a href="" class="mega-link mega-link-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/></svg><span>Reports &amp; Analytics</span></a>
               <a href="" class="mega-link mega-link-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="9" y1="7" x2="9" y2="7.01"/><line x1="15" y1="7" x2="15" y2="7.01"/><line x1="9" y1="11" x2="9" y2="11.01"/><line x1="15" y1="11" x2="15" y2="11.01"/><line x1="9" y1="15" x2="9" y2="15.01"/><line x1="15" y1="15" x2="15" y2="15.01"/></svg><span>Multi-Branch Management</span></a>
               <a href="" class="mega-link mega-link-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg><span>User &amp; Role Access</span></a>
            </div>
            <div>
              <span class="mega-col-title">Industries</span>
              <div class="mega-industries">
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="8" y2="10.01"/><line x1="12" y1="10" x2="12" y2="10.01"/><line x1="16" y1="10" x2="16" y2="10.01"/><line x1="8" y1="14" x2="8" y2="14.01"/><line x1="12" y1="14" x2="12" y2="14.01"/><line x1="16" y1="14" x2="16" y2="14.01"/><line x1="8" y1="18" x2="16" y2="18"/></svg><span>Accounting</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.5 20.5L3.5 13.5a5 5 0 1 1 7-7l7 7a5 5 0 1 1-7 7z"/><line x1="8.5" y1="8.5" x2="15.5" y2="15.5"/></svg><span>Pharmacy</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.1 2.7 3 6 3s6-1.9 6-3v-5"/></svg><span>School</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 4v16"/><path d="M2 8h18a2 2 0 0 1 2 2v10"/><path d="M2 17h20"/><path d="M6 8V6a2 2 0 0 1 2-2h3"/></svg><span>Hotel</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 2v7c0 1.1.9 2 2 2h1a2 2 0 0 0 2-2V2"/><path d="M6 11v11"/><path d="M18 2c-2 2-3 4-3 7 0 2 1 3 3 3s3-1 3-3c0-3-1-5-3-7z"/><path d="M18 13v9"/></svg><span>Restaurant</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="6" width="15" height="12" rx="1"/><path d="M16 10h4l3 3v5h-7z"/><circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/></svg><span>Transport</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 2v6L4 19a2 2 0 0 0 2 3h12a2 2 0 0 0 2-3l-5-11V2"/><path d="M9 2h6"/><path d="M6.5 15h11"/></svg><span>Medical Lab</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 10h14l-1.5 9a2 2 0 0 1-2 1.7H8.5a2 2 0 0 1-2-1.7z"/><path d="M9 10a3 3 0 0 1 6 0"/><path d="M3 10h18"/></svg><span>Mandi</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><path d="M12 2v7"/><path d="M4.2 16.5l6-3.5"/><path d="M19.8 16.5l-6-3.5"/></svg><span>Driving Institute</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l1-5h16l1 5"/><path d="M3 9v11h18V9"/><path d="M9 20v-6h6v6"/></svg><span>Retail Shop</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg><span>Ecommerce</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l9 5v10l-9 5-9-5V7z"/><path d="M3 7l9 5 9-5"/><path d="M12 22V12"/></svg><span>FMCG</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a4 4 0 0 0-5.66 5.66L2 19l3 3 7.04-7.04a4 4 0 0 0 5.66-5.66l-2.83 2.83-2.12-2.12z"/></svg><span>Auto Parts</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg><span>Food &amp; Beverages</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 2v6.5L4.5 19a2 2 0 0 0 1.8 3h11.4a2 2 0 0 0 1.8-3L14 8.5V2"/><path d="M8.5 2h7"/></svg><span>Chemical</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="6" width="12" height="12" rx="1"/><path d="M9 2v3M15 2v3M9 19v3M15 19v3M2 9h3M2 15h3M19 9h3M19 15h3"/></svg><span>Computer Hardware</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 13V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v6"/><path d="M2 13h20v5a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/><path d="M4 19v2M20 19v2"/></svg><span>Furniture</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 4h7a3 3 0 0 1 3 3v13a2 2 0 0 0-2-2H2z"/><path d="M22 4h-7a3 3 0 0 0-3 3v13a2 2 0 0 1 2-2h8z"/></svg><span>Book Publishing</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9z"/></svg><span>Electrical</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg><span>Paper Mill</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18.37 2.63L14 7l-1.59-1.59a2 2 0 0 0-2.82 0L8 7l9 9 1.59-1.59a2 2 0 0 0 0-2.82L17 10l4.37-4.37a2.12 2.12 0 1 0-3-3z"/><path d="M9 8c-2 3-4 3.5-7 4l8 8c.5-3 1-5 4-7"/></svg><span>Paint</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="7" y="2" width="10" height="20" rx="2"/><line x1="11" y1="18" x2="13" y2="18"/></svg><span>Mobile</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 3l4 3-2 3-2-1v12H8V8L6 9 4 6l4-3 2 2h4z"/></svg><span>Garments</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3h12l4 6-10 12L2 9z"/><path d="M2 9h20"/><path d="M9 3l3 6-3 12"/><path d="M15 3l-3 6 3 12"/></svg><span>Jewellery</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="7" cy="17" r="3"/><circle cx="18" cy="17" r="2"/><path d="M7 14V6h5l3 4h3v4"/><path d="M10 14h5"/></svg><span>Agriculture</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4z"/></svg><span>Stationery</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg><span>Electronics</span></a>
                <a href="" class="mega-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2l1.5 4M18 2l-1.5 4"/><rect x="3" y="6" width="18" height="15" rx="2"/><path d="M3 10h18"/></svg><span>Grocery</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-item nav-item-mega">
  <a href="javascript:void(0)"><span>Products</span><svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></a>
  <div class="mega-panel mega-panel-products">
    <div class="mega-products-grid">
      <a href="" class="product-card">
        <span class="product-icon product-icon-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8"/><path d="M16 17H8"/><path d="M10 9H8"/></svg></span>
        <span class="product-info">
          <span class="product-title">Accounting ERP</span>
          <span class="product-desc">Billing, inventory &amp; GST accounting for growing businesses.</span>
        </span>
      </a>
      <a href="" class="product-card">
        <span class="product-icon product-icon-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.5 20.5L3.5 13.5a5 5 0 1 1 7-7l7 7a5 5 0 1 1-7 7z"/><line x1="8.5" y1="8.5" x2="15.5" y2="15.5"/></svg></span>
        <span class="product-info">
          <span class="product-title">Pharma ERP</span>
          <span class="product-desc">Batch, expiry &amp; compliance-ready pharmacy management.</span>
        </span>
      </a>
      <a href="" class="product-card">
        <span class="product-icon product-icon-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.1 2.7 3 6 3s6-1.9 6-3v-5"/></svg></span>
        <span class="product-info">
          <span class="product-title">School ERP</span>
          <span class="product-desc">Admissions, fees, attendance &amp; results in one place.</span>
        </span>
      </a>
      <a href="" class="product-card">
        <span class="product-icon product-icon-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="6" width="15" height="12" rx="1"/><path d="M16 10h4l3 3v5h-7z"/><circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/></svg></span>
        <span class="product-info">
          <span class="product-title">Transport ERP</span>
          <span class="product-desc">Fleet, GR tracking &amp; freight billing management.</span>
        </span>
      </a>
      <a href="" class="product-card">
        <span class="product-icon product-icon-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 10h14l-1.5 9a2 2 0 0 1-2 1.7H8.5a2 2 0 0 1-2-1.7z"/><path d="M9 10a3 3 0 0 1 6 0"/><path d="M3 10h18"/></svg></span>
        <span class="product-info">
          <span class="product-title">Mandi ERP</span>
          <span class="product-desc">Commission agent billing for Anaj &amp; Sabji mandis.</span>
        </span>
      </a>
      <a href="" class="product-card">
        <span class="product-icon product-icon-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 2v6L4 19a2 2 0 0 0 2 3h12a2 2 0 0 0 2-3l-5-11V2"/><path d="M9 2h6"/><path d="M6.5 15h11"/></svg></span>
        <span class="product-info">
          <span class="product-title">Lab ERP</span>
          <span class="product-desc">Sample tracking, reports &amp; diagnostics workflow.</span>
        </span>
      </a>
      <a href="" class="product-card">
        <span class="product-icon product-icon-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="7" y="2" width="10" height="20" rx="2"/><line x1="11" y1="18" x2="13" y2="18"/></svg></span>
        <span class="product-info">
          <span class="product-title">Mobile App</span>
          <span class="product-desc">Reports, quotations &amp; orders right on your phone.</span>
        </span>
      </a>
      <a href="" class="product-card">
        <span class="product-icon product-icon-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg></span>
        <span class="product-info">
          <span class="product-title">Xetel Cloud ERP</span>
          <span class="product-desc">Access your full ERP from anywhere, securely.</span>
        </span>
      </a>
    </div>
  </div>
</div>
        <a href="#features"><span>Pricing</span></a>
         <a href="downloads.php" class="<?= $activePage === 'downloads' ? 'active' : '' ?>"><span>Downloads</span></a>
        <a href="#contact"><span>Contact</span></a>
      </div>

      <div class="nav-actions-zone">
        
        <a href="#contact" class="btn btn-primary nav-cta">
          Request Demo
          
        </a>
        <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
          <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>
          <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
        </button>
       
      </div>

    </div>
  </div>
</nav>
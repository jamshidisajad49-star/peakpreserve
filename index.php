<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peak Preserve - Elevate Your Space</title>
  <link rel="icon" href="favicon.ico">
  <script src="https://cdn.tailwindcss.com?v=3.4.0"></script>
  <style>
    :root {
      --color-background: oklch(0.92 0.01 85);
      --color-foreground: oklch(0.25 0.02 85);
      --color-muted: oklch(0.55 0.05 85);
      --color-primary: oklch(0.65 0.12 85);
      --color-primary-hover: oklch(0.58 0.12 85);
      --color-neomorph-light: oklch(0.98 0.005 85);
      --color-neomorph-dark: oklch(0.85 0.015 85);
    }
    body {
      font-family: 'Source Sans 3', sans-serif;
      background-color: var(--color-background);
      color: var(--color-foreground);
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Merriweather', serif;
      color: var(--color-foreground);
    }
    .shadow-dramatic {
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    .shadow-neomorph {
      box-shadow: 8px 8px 16px var(--color-neomorph-dark), -8px -8px 16px var(--color-neomorph-light);
    }
    .shadow-neomorph-inset {
      box-shadow: inset 8px 8px 16px var(--color-neomorph-dark), inset -8px -8px 16px var(--color-neomorph-light);
    }
    .neomorph-surface {
      background-color: var(--color-background);
    }
    .hover\:bg-shift:hover {
      background-color: var(--color-primary-hover);
    }
    .section-spacing {
      padding-block: 6rem;
    }
    .rounded-\[20px\] {
      border-radius: 20px;
    }
    .animate-scale-on-scroll {
      transform: scale(0.95);
      opacity: 0.8;
      transition: transform 0.6s ease-out, opacity 0.6s ease-out;
    }
    .scrolled-into-view {
      transform: scale(1);
      opacity: 1;
    }
    .btn-primary-gradient {
        background: linear-gradient(to right, var(--color-primary), oklch(0.70 0.15 95));
    }
    .btn-primary-gradient:hover {
        background: linear-gradient(to right, var(--color-primary-hover), oklch(0.63 0.15 95));
    }
  </style>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YTP08B4056"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YTP08B4056');
</script>

</head>
<body class="selection:bg-[var(--color-primary)] selection:text-white">
  <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out nav-transparent">
    <nav class="container mx-auto px-4 py-4 md:py-6 flex justify-between items-center">
      <a href="#" class="text-xl md:text-2xl font-bold text-foreground">Peak Preserve</a>
      <button class="md:hidden text-foreground focus:outline-none" aria-label="Open navigation menu">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden md:flex space-x-6">
        <a href="#collections" class="text-foreground hover:text-primary transition-colors">Collections</a>
        <a href="#bespoke" class="text-foreground hover:text-primary transition-colors">Bespoke Services</a>
        <a href="#sustainability" class="text-foreground hover:text-primary transition-colors">Sustainability</a>
        <a href="#consulting" class="text-foreground hover:text-primary transition-colors">Consulting</a>
        <a href="#contact" class="text-foreground hover:text-primary transition-colors">Contact</a>
      </div>
    </nav>
  </header>
<main>
    <section id="hero" class="section-spacing text-center bg-gradient-radial from-[var(--color-neomorph-light)] to-[var(--color-neomorph-dark)] min-h-screen flex items-center justify-center py-20 md:py-0">
      <div class="container mx-auto px-4">
        <h1 class="font-bold text-4xl md:text-6xl text-foreground text-center animate-fade-in-up">Elevate Your Space with Peak Preserve</h1>
        <p class="font-light text-lg text-muted text-center max-w-2xl mx-auto mt-4 animate-fade-in-up delay-100">Curated shelving, bespoke furniture, and sustainable decor accents for the modern, organized home.</p>
        <a href="#collections" class="btn-primary-gradient text-white rounded-[20px] px-8 py-4 mt-8 mx-auto block w-max shadow-dramatic transition-all duration-300 hover:scale-105 animate-fade-in-up delay-200">Explore Collections</a>
        <img src="images/hero-centered-shelving-display.jpeg" alt="Beautifully organized minimalist shelving unit by Peak Preserve" width="1024" height="512" class="w-full rounded-[20px] mt-12 shadow-dramatic object-cover mx-auto max-w-4xl animate-fade-in-up delay-300">
      </div>
    </section>

    <section id="collections" class="section-spacing container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in-up">Curated Collections</h2>
      <p class="text-lg text-muted text-center max-w-3xl mx-auto mb-12 animate-fade-in-up delay-100">Discover our signature mix of bespoke furniture and decor accents designed to harmonize with your lifestyle.</p>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="shadow-dramatic rounded-[20px] neomorph-surface p-6 group hover:scale-[1.02] transition-transform duration-300 animate-scale-on-scroll" data-observe>
          <img src="images/collection-shelving-wide.jpeg" alt="Modular curated shelving systems" width="768" height="512" class="w-full h-auto rounded-[15px] mb-6 object-cover transform transition-transform duration-300 group-hover:scale-105">
          <h3 class="text-xl font-bold text-foreground mb-2">Curated Shelving</h3>
          <p class="text-muted text-sm">Modular systems designed for adaptability and timeless elegance in any space.</p>
        </div>
        
        <div class="shadow-dramatic rounded-[20px] neomorph-surface p-6 group hover:scale-[1.02] transition-transform duration-300 animate-scale-on-scroll" data-observe>
          <img src="images/collection-bespoke-narrow.jpeg" alt="Hand-crafted bespoke seating" width="384" height="512" class="w-full h-auto rounded-[15px] mb-6 object-cover transform transition-transform duration-300 group-hover:scale-105">
          <h3 class="text-xl font-bold text-foreground mb-2">Bespoke Furniture</h3>
          <p class="text-muted text-sm">Hand-crafted pieces tailored to your vision, emphasizing unique designs.</p>
        </div>
        
        <div class="shadow-dramatic rounded-[20px] neomorph-surface p-6 group hover:scale-[1.02] transition-transform duration-300 animate-scale-on-scroll" data-observe>
          <img src="images/collection-decor-narrow.jpeg" alt="Sustainable ceramic decor accents" width="384" height="512" class="w-full h-auto rounded-[15px] mb-6 object-cover transform transition-transform duration-300 group-hover:scale-105">
          <h3 class="text-xl font-bold text-foreground mb-2">Decor Accents</h3>
          <p class="text-muted text-sm">Ethically sourced accents that add character and warmth to your home.</p>
        </div>
        
        <div class="md:col-span-2 shadow-dramatic rounded-[20px] neomorph-surface p-6 group hover:scale-[1.02] transition-transform duration-300 animate-scale-on-scroll" data-observe>
          <img src="images/collection-organization-wide.jpeg" alt="Elegant storage and organization solutions" width="768" height="512" class="w-full h-auto rounded-[15px] mb-6 object-cover transform transition-transform duration-300 group-hover:scale-105">
          <h3 class="text-xl font-bold text-foreground mb-2">Home Organization</h3>
          <p class="text-muted text-sm">Intelligent storage solutions that blend seamlessly with your interior design.</p>
        </div>
      </div>
    </section>

    <section id="bespoke" class="section-spacing container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in-up">Bespoke Living Approach</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="flex flex-col space-y-8 animate-fade-in-up delay-100">
          <div class="bg-background rounded-[20px] shadow-neomorph p-6 flex flex-col items-center text-center transition-transform hover:scale-[1.02] duration-300 group animate-scale-on-scroll" data-observe>
            <img src="images/icon-craftsmanship-circle.jpeg" alt="Craftsmanship icon" width="64" height="64" class="rounded-full shadow-neomorph p-2 mb-4 group-hover:rotate-6 transition-transform">
            <h3 class="text-2xl font-bold text-foreground mb-2">Master Craftsmanship</h3>
            <p class="text-muted text-sm">Every piece from Peak Preserve is crafted with meticulous precision, blending unparalleled form with superior function. Our artisans ensure each detail reflects our commitment to excellence and durability, creating heirlooms for your home.</p>
          </div>
          <div class="bg-background rounded-[20px] shadow-neomorph p-6 flex flex-col items-center text-center transition-transform hover:scale-[1.02] duration-300 group animate-scale-on-scroll" data-observe>
            <img src="images/icon-measurement-circle.jpeg" alt="Measurement icon" width="64" height="64" class="rounded-full shadow-neomorph p-2 mb-4 group-hover:-rotate-6 transition-transform">
            <h3 class="text-2xl font-bold text-foreground mb-2">Tailored Dimensions</h3>
            <p class="text-muted text-sm">No two homes are alike, and neither should be your furniture. We design shelving and storage solutions that meticulously fit your unique spatial requirements, optimizing every inch for beauty and utility.</p>
          </div>
        </div>
        <div class="relative animate-fade-in-up delay-200">
          <img src="images/bespoke-living-studio.jpeg" alt="Interior design studio detailing bespoke furniture" width="768" height="1024" class="rounded-[20px] shadow-dramatic w-full h-auto object-cover animate-scale-on-scroll" data-observe>
        </div>
      </div>
    </section>

    <section id="sustainability" class="section-spacing container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in-up">Sustainable Living Products</h2>
      <div class="shadow-neomorph-inset rounded-[20px] p-8 md:p-12 neomorph-surface text-center max-w-4xl mx-auto animate-fade-in-up delay-100 animate-scale-on-scroll" data-observe>
        <p class="text-lg text-muted leading-relaxed mb-8">At Peak Preserve, our commitment extends beyond aesthetics. We passionately source reclaimed woods entirely localized to the Northeast, utilize zero-VOC finishes for a healthy home environment, and partner exclusively with sustainable forestry initiatives to ensure our bespoke creations leave a minimal ecological footprint.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
          <div class="p-4 rounded-[15px] shadow-neomorph-inset bg-[var(--color-neomorph-light)] animate-scale-on-scroll" data-observe>
            <h4 class="text-2xl font-bold text-primary mb-1">78%</h4>
            <p class="text-muted text-sm">Reclaimed Materials</p>
          </div>
          <div class="p-4 rounded-[15px] shadow-neomorph-inset bg-[var(--color-neomorph-light)] animate-scale-on-scroll" data-observe>
            <h4 class="text-2xl font-bold text-primary mb-1">100%</h4>
            <p class="text-muted text-sm">Zero-VOC Finishes</p>
          </div>
          <div class="p-4 rounded-[15px] shadow-neomorph-inset bg-[var(--color-neomorph-light)] animate-scale-on-scroll" data-observe>
            <h4 class="text-2xl font-bold text-primary mb-1">Yes</h4>
            <p class="text-muted text-sm">Carbon Neutral Delivery</p>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-spacing container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in-up">Client Experiences</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="shadow-dramatic rounded-[20px] p-8 text-center bg-background transform transition-transform duration-300 hover:scale-[1.02] animate-scale-on-scroll" data-observe>
          <img src="images/testimonial-elena-portrait.jpeg" alt="Elena M." width="128" height="128" class="rounded-full shadow-neomorph mb-4 mx-auto object-cover">
          <p class="text-muted italic mb-4">"Peak Preserve completely transformed my chaotic living room into a serene, curated gallery of my life. The process was seamless, and the result is beyond my expectations—pure artistry!"</p>
          <p class="font-bold text-foreground">- Elena Mustafina, Architect</p>
        </div>
        <div class="shadow-dramatic rounded-[20px] p-8 text-center bg-background transform transition-transform duration-300 hover:scale-[1.02] animate-scale-on-scroll" data-observe>
          <img src="images/testimonial-james-portrait.jpeg" alt="James T." width="128" height="128" class="rounded-full shadow-neomorph mb-4 mx-auto object-cover">
          <p class="text-muted italic mb-4">"The bespoke shelving units crafted by Peak Preserve are not just furniture; they are architectural statements. The attention to detail and choice of materials speak volumes. Unmatched quality and professionalism from start to finish."</p>
          <p class="font-bold text-foreground">- Jamal Theron, Interior Designer</p>
        </div>
        <div class="shadow-dramatic rounded-[20px] p-8 text-center bg-background transform transition-transform duration-300 hover:scale-[1.02] animate-scale-on-scroll" data-observe>
          <img src="images/testimonial-sophia-portrait.jpeg" alt="Sophia R." width="128" height="128" class="rounded-full shadow-neomorph mb-4 mx-auto object-cover">
          <p class="text-muted italic mb-4">"Our family den now feels so elegant and organized thanks to Peak Preserve. The customized storage they designed perfectly holds our extensive book collection and children's games. Truly lifesavers!"</p>
          <p class="font-bold text-foreground">- Sophia Rodriguez, Homeowner</p>
        </div>
        <div class="shadow-dramatic rounded-[20px] p-8 text-center bg-background transform transition-transform duration-300 hover:scale-[1.02] animate-scale-on-scroll" data-observe>
          <img src="images/testimonial-david-portrait.jpeg" alt="David K." width="128" height="128" class="rounded-full shadow-neomorph mb-4 mx-auto object-cover">
          <p class="text-muted italic mb-4">"I approached Peak Preserve for a custom office setup. Their consulting service was phenomenal, translating my needs into a functional yet stunning environment. Exceptional craft."</p>
          <p class="font-bold text-foreground">- David Kim, Entrepreneur</p>
        </div>
        <div class="shadow-dramatic rounded-[20px] p-8 text-center bg-background transform transition-transform duration-300 hover:scale-[1.02] animate-scale-on-scroll" data-observe>
          <img src="images/testimonial-liam-portrait.jpeg" alt="Liam P." width="128" height="128" class="rounded-full shadow-neomorph mb-4 mx-auto object-cover">
          <p class="text-muted italic mb-4">"From the first design sketch to the final installation, Peak Preserve demonstrated unparalleled dedication. Their commitment to sustainability also resonated deeply with my values. Highly recommended!"</p>
          <p class="font-bold text-foreground">- Liam O'Connell, Environmental Consultant</p>
        </div>
        <div class="shadow-dramatic rounded-[20px] p-8 text-center bg-background transform transition-transform duration-300 hover:scale-[1.02] animate-scale-on-scroll" data-observe>
          <img src="images/testimonial-fatima-portrait.jpeg" alt="Fatima A." width="128" height="128" class="rounded-full shadow-neomorph mb-4 mx-auto object-cover">
          <p class="text-muted italic mb-4">"We needed unique display cabinets for our art collection, and Peak Preserve delivered beyond our wildest expectations. Each cabinet is a piece of art itself. Truly magnificent work."</p>
          <p class="font-bold text-foreground">- Fatima Al-Saeed, Art Collector</p>
        </div>
      </div>
    </section>

    <section id="consulting" class="section-spacing container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in-up">Home Organization Consulting</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start mt-8">
        <div class="neomorph-surface rounded-[20px] shadow-dramatic p-8 animate-fade-in-up delay-100 animate-scale-on-scroll" data-observe>
          <h3 class="text-3xl font-bold mb-6">Schedule a Walkthrough</h3>
          <p class="text-muted leading-relaxed mb-6">Our dedicated experts visit your space, meticulously assess your organizational challenges, and architect custom systems using Peak Preserve exclusive products. We create intelligent, beautiful solutions tailored to your unique lifestyle.</p>
          <div class="space-y-4 text-muted mb-8">
            <p class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-3 flex-shrink-0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              Union Hill, New York, New York 11379, USA
            </p>
            <p class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-3 flex-shrink-0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-3.67-3.67A19.79 19.79 0 0 1 2 4.18 2 2 0 0 1 4.18 2h3a2 2 0 0 1 2 1.72c.1.75.4 1.49.86 2.18a3 3 0 0 1-4.7 4.7l-1 1A12.5 12.5 0 0 0 12 21l1-1a3 3 0 0 1-4.7-4.7c.69-.46 1.43-.76 2.18-.86a2 2 0 0 1 1.72 2z"></path></svg>
              +1 274-267-3511
            </p>
            <p class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-3 flex-shrink-0"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="hover:text-primary transition-colors">info@<?php echo $_SERVER['HTTP_HOST']; ?></a>
            </p>
          </div>
          <div class="aspect-w-16 aspect-h-9 w-full rounded-[15px] overflow-hidden shadow-neomorph">
            <iframe
              width="100%"
              height="300"
              frameborder="0"
              style="border:0"
              src="https://www.google.com/maps/embed/v1/place?q=Union%20Hill%2C%20New%20York%2C%20USA&zoom=14&key=YOUR_GOOGLE_MAPS_API_KEY"
              allowfullscreen>
            </iframe>
          </div>
        </div>
        <div id="contact" class="shadow-neomorph-inset rounded-[20px] p-8 neomorph-surface animate-fade-in-up delay-200 animate-scale-on-scroll" data-observe>
          <form class="space-y-6">
            <div>
              <input type="text" placeholder="Your Name" class="w-full rounded-[20px] shadow-neomorph-inset bg-transparent border-none px-4 py-3 font-light text-foreground focus:outline-none focus:ring-2 focus:ring-primary placeholder-muted" aria-label="Your Name">
            </div>
            <div>
              <input type="email" placeholder="Email Address" class="w-full rounded-[20px] shadow-neomorph-inset bg-transparent border-none px-4 py-3 font-light text-foreground focus:outline-none focus:ring-2 focus:ring-primary placeholder-muted" aria-label="Email Address">
            </div>
            <div>
              <select class="w-full rounded-[20px] shadow-neomorph-inset bg-transparent border-none px-4 py-3 font-light text-foreground focus:outline-none focus:ring-2 focus:ring-primary appearance-none custom-select" aria-label="Consultation Type">
                <option value="">Select a Consultation Type</option>
                <option value="virtual">Virtual Consultation</option>
                <option value="in-home">In-Home Assessment (NYC Area)</option>
                <option value="product">Product Inquiry</option>
              </select>
              <style>
                .custom-select {
                  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23383a42' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
                  background-repeat: no-repeat;
                  background-position: right 0.7rem center;
                  background-size: 0.8rem 0.8rem;
                }
                @media (prefers-reduced-motion: reduce) {
                    .animate-fade-in-up, .animate-scale-on-scroll {
                        animation: none !important;
                        opacity: 1 !important;
                        transform: none !important;
                    }
                }
              </style>
            </div>
            <div>
              <button type="submit" class="btn-primary-gradient text-white rounded-[20px] px-8 py-3 w-full shadow-dramatic font-bold transition-all duration-300 hover:scale-105">Request Consultation</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
<footer class="bg-foreground text-white py-8 rounded-t-[20px] shadow-neomorph-inset mt-12">
    <div class="container mx-auto px-4 text-center">
      <p class="font-light text-sm">&copy; 2024 Peak Preserve. All rights reserved.</p>
      <div class="flex justify-center space-x-6 mt-4 text-sm">
        <a href="./privacy.html" class="hover:text-primary transition-colors">Privacy Policy</a>
        <a href="./tos.html" class="hover:text-primary transition-colors">Terms of Service</a>
      </div>
    </div>
    <div id="cookie-consent" class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 flex items-center justify-between z-50">
      <p class="text-sm">We use cookies to ensure you get the best experience on our website. By using our site, you agree to our <a href="./privacy.html" class="text-primary hover:underline">Privacy Policy</a>.</p>
      <button id="accept-cookies" class="bg-primary text-white px-4 py-2 rounded-[10px] text-sm hover:bg-primary-hover transition-colors">Accept</button>
    </div>
  </footer>

  <script>
    // Navigation bar scroll effect
    window.addEventListener('scroll', function() {
      const header = document.querySelector('header');
      if (window.scrollY > 50) {
        header.classList.add('nav-solid', 'bg-[var(--color-background)]', 'shadow-neomorph');
        header.classList.remove('nav-transparent');
      } else {
        header.classList.remove('nav-solid', 'bg-[var(--color-background)]', 'shadow-neomorph');
        header.classList.add('nav-transparent');
      }
    });

    // Mobile navigation toggle
    document.querySelector('header button').addEventListener('click', function() {
      const navLinks = document.querySelector('header .md\\:flex');
      navLinks.classList.toggle('hidden');
      navLinks.classList.toggle('flex');
      navLinks.classList.toggle('flex-col');
      navLinks.classList.toggle('absolute');
      navLinks.classList.toggle('top-full');
      navLinks.classList.toggle('left-0');
      navLinks.classList.toggle('right-0');
      navLinks.classList.toggle('bg-[var(--color-background)]');
      navLinks.classList.toggle('shadow-dramatic');
      navLinks.classList.toggle('p-4');
      navLinks.classList.toggle('space-y-4');
      navLinks.classList.toggle('md:space-y-0');
    });

    // Cookie Consent
    const consentPrefix = 'consent_v3_';
    const cookieName = `${consentPrefix}user_accepted_cookies`;
    const cookieConsent = document.getElementById('cookie-consent');
    const acceptCookiesBtn = document.getElementById('accept-cookies');

    function getCookie(name) {
      const nameEQ = name + "=";
      const ca = document.cookie.split(';');
      for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }

    function setCookie(name, value, days) {
      let expires = "";
      if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
    }

    if (!getCookie(cookieName)) {
      cookieConsent.style.display = 'flex';
    }

    acceptCookiesBtn.addEventListener('click', function() {
      setCookie(cookieName, 'true', 365); // Store for 1 year
      cookieConsent.style.display = 'none';
    });

    // Intersection Observer for scroll animations
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.2
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('scrolled-into-view');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    document.querySelectorAll('[data-observe]').forEach(el => {
      observer.observe(el);
    });
  </script>
</body>
</html>

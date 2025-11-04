<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Krishna Bandhu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
  <!-- Required External CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <style>
    * { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }

    
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
   

    /* Banner */
    .banner {
      position: relative;
      height: 100vh;
      background: url('/banner.jpeg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: left;
      animation: fadeIn 2s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    .banner-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
    }
    .banner-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
      padding: 20px;
    }
    .banner h6 {
      letter-spacing: 1px;
      color: #d0e0ff;
      font-weight: 600;
    }
    .banner h1 {
      font-size: 3rem;
      font-weight: 700;
      animation: fadeUp 1.2s ease-in-out;
    }
    .banner p {
      font-size: 1.1rem;
      margin-top: 10px;
      animation: fadeUp 1.5s ease-in-out;
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Buttons */
    .btn-main {
      background-color: #0066ff;
      color: white;
      border-radius: 5px;
      padding: 10px 20px;
      transition: 0.3s;
    }
    .btn-main:hover { background-color: #004bcc; }
    .btn-outline-light:hover { background-color: #ffffff; color: #000000; }

    /* Who Section */
    .who-section {
      background-color: #f4f7fb;
      padding: 100px 0;
      text-align: center;
    }
    .who-section h2 {
      font-weight: 700;
      font-size: 36px;
      margin-bottom: 30px;
      color: #0a0a0a;
    }
    .who-section p {
      font-size: 17px;
      line-height: 1.8;
      color: #222;
      max-width: 850px;
      margin: 0 auto;
    }
    .lotus-line {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 10px;
    }
    .lotus-line::before,
    .lotus-line::after {
      content: "";
      width: 50px;
      height: 3px;
      background-color: #3d5af1;
      border-radius: 2px;
    }
    .lotus-line img { width: 28px; }
    .founders {
      display: flex;
      justify-content: center;
      gap: 60px;
      margin-top: 60px;
      flex-wrap: wrap;
    }
    .founder-card {
      text-align: center;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .founder-card:hover {
      transform: translateY(-12px);
      box-shadow: 0 8px 25px rgba(26, 77, 245, 0.3);
    }
    .founder-card img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid #1a4df5;
      box-shadow: 0 0 20px rgba(26, 77, 245, 0.4);
    }
    .founder-name {
      margin-top: 15px;
      font-weight: 600;
      color: #0a0a0a;
    }

    /* Floating lotus animation */
    .floating-lotus {
      position: absolute;
      top: -30px;
      left: 50%;
      transform: translateX(-50%);
      width: 40px;
      animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
      0%, 100% { transform: translateX(-50%) translateY(0); }
      50% { transform: translateX(-50%) translateY(-15px); }
    }

    /* Responsive */
    @media (max-width: 768px) {
      .banner h1 { font-size: 2rem; }
      .banner p { font-size: 1rem; }
      header nav a { display: block; margin: 5px 0; }
    }
  </style>
  <!-- Add this CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .icon-circle {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #0066FF, #00BFFF);
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 28px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .feature-card {
        transition: all 0.3s ease-in-out;
    }
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    </style>

    <style>
    .lecture-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
    height: 100%;
    }
    .lecture-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,102,255,0.2);
    }
    .lecture-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.6s ease;
    }
    .lecture-card:hover .lecture-image img {
    transform: scale(1.08);
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
    background-color: #0066FF;
    border-radius: 50%;
    padding: 15px;
    background-size: 70%;
    }
    .carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #ccc;
    border: none;
    }
    .carousel-indicators .active {
    background-color: #0066FF;
    }
    @media (max-width: 768px) {
    .lecture-image img { height: 180px; }
    }
</style>
<!-- Custom Styles -->
<style>
    body { font-family: 'Poppins', sans-serif; }
    .feature-card {
        transition: all 0.3s ease-in-out;
        background-color: #fff;
    }
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 102, 255, 0.25);
    }
    .feature-card.active-card {
        background: linear-gradient(135deg, #0066FF, #0052CC);
        color: white;
    }
    .feature-card.active-card p {
        color: #EAF3FF;
    }
    .icon-circle {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #0066FF, #00BFFF);
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 28px;
        box-shadow: 0 4px 12px rgba(0, 102, 255, 0.3);
    }
</style>

<style>
.login-modal-content {
  border-radius: 25px;
  overflow: hidden;
  box-shadow: 0 10px 40px rgba(0,0,0,0.25);
  animation: fadeInUp 0.8s ease;
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(40px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Left form section */
.form-side {
  background: #f9fafc;
}

.form-side h2 {
  font-size: 28px;
  font-weight: 600;
}

.form-side p {
  font-size: 14px;
  color: #555;
}

.form-control {
  border-radius: 10px;
  padding: 12px;
  border: 1px solid #ddd;
}

.btn-login {
  background-color: #a2666f;
  color: white;
  border-radius: 10px;
  border: none;
  transition: all 0.3s ease;
}

.btn-login:hover {
  background-color: #8b4f58;
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(162,102,111,0.3);
}

/* Right image section */
.illustration-side {
  background: linear-gradient(to right, #fff, rgba(255,255,255,0.2));
}

.illustration-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 0 25px 25px 0;
  animation: slideInRight 1s ease;
}

@keyframes slideInRight {
  from { opacity: 0; transform: translateX(60px); }
  to { opacity: 1; transform: translateX(0); }
}

/* Social icons */
.social-btn {
  background: #fff;
  width: 45px;
  height: 45px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  cursor: pointer;
  transition: all 0.3s ease;
}
.social-btn:hover {
  transform: translateY(-3px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .login-modal-content {
    border-radius: 15px;
  }
  .illustration-side {
    display: none !important;
  }
}

</style>
</head>

<body>

  <!-- Header -->
 <!-- Responsive Header with Mobile Drawer -->
<header class="main-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center px-3 py-3">
            <!-- Logo Section -->
            <div class="d-flex align-items-center header-logo">
                <img src="/logo.webp" alt="Krishna Bandhu Logo" class="logo-img">
                <span class="logo-text">Krishna Bandhu</span>
            </div>

            <!-- Desktop Navigation -->
            <nav class="desktop-nav d-none d-lg-flex align-items-center">
                <a href="#home" class="nav-link-custom">Home</a>
                <a href="#who" class="nav-link-custom">About</a>
                <a href="#what-we-do" class="nav-link-custom">Activities</a>
                <a href="#featured-lectures" class="nav-link-custom">Lectures</a>
                <a href="#appreciations" class="nav-link-custom">Appreciations</a>
               <a href="#" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">
                     <i class="bi bi-person-circle me-1"></i>Login
                </a>

            </nav>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn d-lg-none" id="mobileMenuBtn" aria-label="Toggle Menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>
    </div>
</header>

<!-- Login Modal -->
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content login-modal-content">

      <div class="modal-body p-0 d-flex flex-wrap">
        
        <!-- Left Section (Form) -->
        <div class="col-12 col-md-6 p-5 form-side">
          <h2 class="fw-bold mb-3">Welcome Back</h2>
          <p class="text-muted mb-4">Login to your account to continue</p>

          <form action="#" method="POST">
            @csrf
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>
            <button type="submit" class="btn btn-login w-100 py-2">Login</button>
          </form>

          <p class="mt-3 text-center">
            Don’t have an account? 
            <a href="#" class="text-decoration-none fw-semibold text-muted">Create one</a>
          </p>

          <div class="social-login mt-4 d-flex justify-content-center gap-3">
            <div class="social-btn"><i class="bi bi-google"></i></div>
            <div class="social-btn"><i class="bi bi-apple"></i></div>
            <div class="social-btn"><i class="bi bi-facebook"></i></div>
          </div>
        </div>

        <!-- Right Section (Image) -->
        <div class="col-12 col-md-6 illustration-side d-none d-md-flex align-items-center justify-content-center">
          <img src="/banner.jpeg" alt="Login Banner" class="illustration-img">
        </div>

      </div>
    </div>
  </div>
</div>



<!-- Mobile Sidebar Overlay -->
<div class="mobile-overlay" id="mobileOverlay"></div>

<!-- Mobile Sidebar -->
<div class="mobile-sidebar" id="mobileSidebar">
    <div class="sidebar-header">
        <div class="d-flex align-items-center">
            <img src="/logo.webp" alt="Krishna Bandhu Logo" class="sidebar-logo">
            <span class="sidebar-title">Krishna Bandhu</span>
        </div>
        <button class="close-btn" id="closeSidebarBtn" aria-label="Close Menu">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <div class="sidebar-content">
        <nav class="mobile-nav">
            <a href="#home" class="mobile-nav-item">
                <i class="bi bi-house-door-fill"></i>
                <span>Home</span>
            </a>
            <a href="#who" class="mobile-nav-item">
                <i class="bi bi-info-circle-fill"></i>
                <span>About</span>
            </a>
            <a href="#what-we-do" class="mobile-nav-item">
                <i class="bi bi-grid-fill"></i>
                <span>Activities</span>
            </a>
            <a href="#featured-lectures" class="mobile-nav-item">
                <i class="bi bi-play-circle-fill"></i>
                <span>Lectures</span>
            </a>
            <a href="#appreciations" class="mobile-nav-item">
                <i class="bi bi-star-fill"></i>
                <span>Appreciations</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <a href="{{ route('login') }}" class="btn-mobile-login">
                <i class="bi bi-person-circle me-2"></i>
                Login to Dashboard
            </a>
            
            <div class="sidebar-social">
                <p class="social-title">Connect With Us</p>
                <div class="social-links">
                    <a href="#" class="social-icon" aria-label="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Telegram">
                        <i class="bi bi-telegram"></i>
                    </a>
                </div>
            </div>

            <div class="sidebar-contact">
                <p class="contact-text">
                    <i class="bi bi-envelope-fill me-2"></i>
                    krishna108bandhu@gmail.com
                </p>
                <p class="contact-text">
                    <i class="bi bi-telephone-fill me-2"></i>
                    +918770341995
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Header Styles */
    .main-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(8px);
        animation: slideDown 1s ease forwards;
    }

    @keyframes slideDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .header-logo {
        gap: 12px;
    }

    .logo-img {
        height: 45px;
        width: 45px;
        object-fit: contain;
    }

    .logo-text {
        color: #fff;
        font-weight: 700;
        font-size: 20px;
        letter-spacing: 0.5px;
    }

    /* Desktop Navigation */
    .desktop-nav {
        gap: 20px;
    }

    .nav-link-custom {
        color: #fff;
        font-weight: 500;
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 6px;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-link-custom::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background: #00bfff;
        transition: width 0.3s ease;
    }

    .nav-link-custom:hover {
        color: #00bfff;
    }

    .nav-link-custom:hover::after {
        width: 80%;
    }

    .btn-login {
        background: linear-gradient(135deg, #0066ff, #00bfff);
        color: white;
        border: none;
        padding: 10px 24px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .btn-login:hover {
        background: linear-gradient(135deg, #0052cc, #0099cc);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 102, 255, 0.4);
    }

    /* Mobile Menu Button */
    .mobile-menu-btn {
        background: transparent;
        border: none;
        padding: 8px;
        cursor: pointer;
        z-index: 1001;
        display: flex;
        flex-direction: column;
        gap: 5px;
        transition: all 0.3s ease;
    }

    .hamburger-line {
        width: 28px;
        height: 3px;
        background: #fff;
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    .mobile-menu-btn:hover .hamburger-line {
        background: #00bfff;
    }

    .mobile-menu-btn.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(8px, 8px);
    }

    .mobile-menu-btn.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-btn.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }

    /* Mobile Overlay */
    .mobile-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(4px);
        z-index: 1050;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .mobile-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    /* Mobile Sidebar */
    .mobile-sidebar {
        position: fixed;
        top: 0;
        right: -100%;
        width: 320px;
        max-width: 85vw;
        height: 100%;
        background: linear-gradient(135deg, #001a4d 0%, #000d26 100%);
        z-index: 1100;
        transition: right 0.4s ease;
        overflow-y: auto;
        box-shadow: -5px 0 25px rgba(0, 0, 0, 0.5);
    }

    .mobile-sidebar.active {
        right: 0;
    }

    .sidebar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        background: rgba(0, 0, 0, 0.2);
    }

    .sidebar-logo {
        width: 40px;
        height: 40px;
    }

    .sidebar-title {
        color: #fff;
        font-weight: 700;
        font-size: 18px;
        margin-left: 10px;
    }

    .close-btn {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        color: #fff;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 20px;
    }

    .close-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: rotate(90deg);
    }

    /* Sidebar Content */
    .sidebar-content {
        padding: 30px 20px;
    }

    .mobile-nav {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .mobile-nav-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px 20px;
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        border-radius: 10px;
        transition: all 0.3s ease;
        font-weight: 500;
        position: relative;
        overflow: hidden;
    }

    .mobile-nav-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(to bottom, #0066ff, #00bfff);
        transform: scaleY(0);
        transition: transform 0.3s ease;
    }

    .mobile-nav-item:hover,
    .mobile-nav-item:active {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        padding-left: 25px;
    }

    .mobile-nav-item:hover::before {
        transform: scaleY(1);
    }

    .mobile-nav-item i {
        font-size: 22px;
        color: #00bfff;
    }

    /* Sidebar Footer */
    .sidebar-footer {
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .btn-mobile-login {
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #0066ff, #00bfff);
        color: white;
        text-decoration: none;
        padding: 14px 20px;
        border-radius: 10px;
        font-weight: 600;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }

    .btn-mobile-login:hover {
        background: linear-gradient(135deg, #0052cc, #0099cc);
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0, 102, 255, 0.4);
    }

    .sidebar-social {
        margin-bottom: 25px;
    }

    .social-title {
        color: rgba(255, 255, 255, 0.7);
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .social-links {
        display: flex;
        gap: 12px;
    }

    .social-icon {
        width: 42px;
        height: 42px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 18px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: #00bfff;
        color: #00bfff;
        transform: translateY(-3px);
    }

    .sidebar-contact {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .contact-text {
        color: rgba(255, 255, 255, 0.7);
        font-size: 13px;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .contact-text i {
        color: #00bfff;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .desktop-nav {
            display: none !important;
        }
    }

    @media (max-width: 576px) {
        .logo-text {
            font-size: 18px;
        }

        .logo-img {
            height: 38px;
            width: 38px;
        }

        .mobile-sidebar {
            width: 280px;
        }
    }

    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Body lock when sidebar is open */
    body.sidebar-open {
        overflow: hidden;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');
        const mobileNavItems = document.querySelectorAll('.mobile-nav-item');
        const body = document.body;

        // Open Sidebar
        function openSidebar() {
            mobileSidebar.classList.add('active');
            mobileOverlay.classList.add('active');
            mobileMenuBtn.classList.add('active');
            body.classList.add('sidebar-open');
        }

        // Close Sidebar
        function closeSidebar() {
            mobileSidebar.classList.remove('active');
            mobileOverlay.classList.remove('active');
            mobileMenuBtn.classList.remove('active');
            body.classList.remove('sidebar-open');
        }

        // Event Listeners
        mobileMenuBtn.addEventListener('click', openSidebar);
        closeSidebarBtn.addEventListener('click', closeSidebar);
        mobileOverlay.addEventListener('click', closeSidebar);

        // Close sidebar when clicking on nav items
        mobileNavItems.forEach(item => {
            item.addEventListener('click', closeSidebar);
        });

        // Close sidebar on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileSidebar.classList.contains('active')) {
                closeSidebar();
            }
        });

        // Prevent scroll propagation when sidebar is open
        mobileSidebar.addEventListener('touchmove', function(e) {
            e.stopPropagation();
        });
    });
</script>

  <!-- Banner -->
  <section class="banner">
    <div class="banner-overlay"></div>
    <div class="banner-content">
      <h6>WELCOME TO KRISHNA BANDHU!</h6>
      <h1>Your next door spiritual home!</h1>
      <p>A safe space where your heart feels at home, curated with love for seekers of Love of Godhead.</p>
      <div class="mt-4">
        <a href="#" class="btn btn-main me-3">Register Now</a>
        <a href="#who" class="btn btn-outline-light">Learn More</a>
      </div>
    </div>
  </section>

    <!-- Who Are We Section -->
    <section class="who-section" id="who">
        <img src="/logo.webp" alt="Lotus" class="floating-lotus">
        <div class="container" data-aos="fade-up">
        <div class="lotus-line">
            <img src="/logo.webp" alt="Lotus Icon">
        </div>
        <h2>Who Are We?</h2>
        <p data-aos="fade-up" data-aos-delay="200">
            Krishna Bandhu is an online devotee congregation established in 2020 by HG Sundar Vamana Prabhuji 
            and HG Ratnavali Gopi Mataji. With a vision to inspire and guide newcomers in devotional service who are unable 
            to fully participate in offline temple activities, Krishna Bandhu has grown into a vibrant community of over 
            800 active devotees worldwide. Members regularly engage in chanting, listening, reading, and performing devotional 
            service, all under the expert mentorship of seasoned guides.
        </p>

        <div class="founders mt-5">
            <div class="founder-card" data-aos="fade-right">
            <img src="/svp-edited.webp" alt="HG Sundar Vamana Das">
            <div class="founder-name">HG Sundar Vamana Das</div>
            </div>
            <div class="founder-card" data-aos="fade-left">
            <img src="/rgm.webp" alt="HG Ratnavali Gopi Devi Dasi">
            <div class="founder-name">HG Ratnavali Gopi Devi Dasi</div>
            </div>
        </div>
        </div>
    </section>

    <section class="py-5 bg-white position-relative overflow-hidden" id="what-we-do">
    <div class="container text-center">
        <!-- Section Heading -->
        <div class="mb-5">
        <div class="d-flex justify-content-center align-items-center mb-2">
            <hr class="flex-grow-1 mx-2" style="height:2px;background:#0066FF;border:none;">
                <img src="/logo.webp" alt="Lotus Icon">

            <hr class="flex-grow-1 mx-2" style="height:2px;background:#0066FF;border:none;">
        </div>
        <h2 class="fw-bold text-dark">What We Do</h2>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="feature-card h-100 text-center p-4 rounded-4 shadow-sm animate__animated animate__fadeInUp">
            <div class="icon-circle mx-auto mb-3">
                <i class="bi bi-sunrise"></i>
            </div>
            <h5 class="fw-semibold mb-2">Daily Morning Sessions</h5>
            <p class="text-muted mb-0">Begin your japa at Brahmamuhurt with our morning Zoom sanga of 450+ devotees.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="feature-card active-card h-100 text-center p-4 rounded-4 shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
            <div class="icon-circle mx-auto mb-3">
                <i class="bi bi-pencil-square"></i>
            </div>
            <h5 class="fw-semibold mb-2">Track Your Sadhana</h5>
            <p class="text-muted mb-0">Take small steps in surrendering your heart to Krishna by tracking your sadhana daily.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="feature-card h-100 text-center p-4 rounded-4 shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
            <div class="icon-circle mx-auto mb-3">
                <i class="bi bi-person-video2"></i>
            </div>
            <h5 class="fw-semibold mb-2">Personal Mentorship</h5>
            <p class="text-muted mb-0">Receive one-on-one guidance for both material and spiritual challenges from expert mentors.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="feature-card h-100 text-center p-4 rounded-4 shadow-sm animate__animated animate__fadeInUp animate__delay-3s">
            <div class="icon-circle mx-auto mb-3">
                <i class="bi bi-laptop"></i>
            </div>
            <h5 class="fw-semibold mb-2">Live Online Sessions</h5>
            <p class="text-muted mb-0">Discuss scriptures, clarify doubts, and grow spiritually together in our live sessions.</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="feature-card h-100 text-center p-4 rounded-4 shadow-sm animate__animated animate__fadeInUp animate__delay-4s">
            <div class="icon-circle mx-auto mb-3">
                <i class="bi bi-people-fill"></i>
            </div>
            <h5 class="fw-semibold mb-2">Offline Weekend Meets</h5>
            <p class="text-muted mb-0">Engage in love, prayers, and fellowship through weekend satsangs in various cities.</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="feature-card h-100 text-center p-4 rounded-4 shadow-sm animate__animated animate__fadeInUp animate__delay-5s">
            <div class="icon-circle mx-auto mb-3">
                <i class="bi bi-airplane"></i>
            </div>
            <h5 class="fw-semibold mb-2">Dhaam Yatras</h5>
            <p class="text-muted mb-0">From prasadam to serene stays, our yatras fulfill your spiritual travel desires beautifully.</p>
            </div>
        </div>
        </div>
    </div>
    </section>

    


    <section class="py-5 bg-light" id="featured-lectures">
        <div class="container text-center">
            <!-- Heading -->
            <div class="mb-5">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <hr class="flex-grow-1 mx-2" style="height:2px;background:#0066FF;border:none;">
                <img src="/logo.webp" alt="Lotus Icon" style="width:30px;">
                <hr class="flex-grow-1 mx-2" style="height:2px;background:#0066FF;border:none;">
            </div>
            <h2 class="fw-bold text-dark">Featured Lecture Series</h2>
            </div>

            <!-- Carousel -->
            <div id="lectureCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                    <div class="row g-4 justify-content-center">
                        @foreach([
                        ['img'=>'/bg-thumbnail.webp', 'title'=>'Bhagavad Gita As It Is', 'desc'=>'Discover wisdom from the ancient scripture that explains life’s purpose and eternal truths.'],
                        ['img'=>'/sb-thumbnail.webp', 'title'=>'Shrimad Bhagavatam Mahapuran', 'desc'=>'Unveil the mysteries of creation and the transcendental pastimes of the Lord.'],
                        ['img'=>'/shiva-tattva.webp', 'title'=>'Shiva Tattva', 'desc'=>'Explore the divine relationship between Lord Shiva and Lord Vishnu.'],
                        ['img'=>'/bg-thumbnail.webp', 'title'=>'Sharanagati (Surrender)', 'desc'=>'Understand true surrender and devotion in the path to God.']
                        ] as $lecture)
                        <div class="col-10 col-md-6 col-lg-3">
                        <div class="lecture-card">
                            <div class="lecture-image">
                            <img src="{{ $lecture['img'] }}" alt="{{ $lecture['title'] }}">
                            </div>
                            <div class="p-3 text-start">
                            <h6 class="fw-bold text-dark">{{ $lecture['title'] }}</h6>
                            <p class="text-muted small mb-0">{{ $lecture['desc'] }}</p>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        @foreach([
                        ['img'=>'/bg-thumbnail.webp', 'title'=>'Hanuman Bhakti', 'desc'=>'Dive into Lord Hanuman’s pure devotion and strength.'],
                        ['img'=>'/shiva-tattva.webp', 'title'=>'Radha Krishna Prem', 'desc'=>'Witness divine love between Radha and Krishna — a bond beyond time.'],
                        ['img'=>'/sb-thumbnail.webp', 'title'=>'Vaikuntha Darshan', 'desc'=>'Explore the abode of Lord Vishnu and eternal bliss.'],
                        ['img'=>'/bg-thumbnail.webp', 'title'=>'Chaitanya Leela', 'desc'=>'Learn the teachings and divine compassion of Lord Chaitanya.']
                        ] as $lecture)
                        <div class="col-10 col-md-6 col-lg-3">
                        <div class="lecture-card">
                            <div class="lecture-image">
                            <img src="{{ $lecture['img'] }}" alt="{{ $lecture['title'] }}">
                            </div>
                            <div class="p-3 text-start">
                            <h6 class="fw-bold text-dark">{{ $lecture['title'] }}</h6>
                            <p class="text-muted small mb-0">{{ $lecture['desc'] }}</p>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                    </div>

            </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#lectureCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#lectureCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            <!-- Indicators -->
            <div class="carousel-indicators mt-4">
                <button type="button" data-bs-target="#lectureCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#lectureCarousel" data-bs-slide-to="1"></button>
            </div>
            </div>
        </div>
    </section>






     
<!-- Appreciations Section - Add after Featured Lecture Series -->
<section class="appreciations-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="lotus-divider">
                <span class="lotus-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 5C20 5 15 10 15 15C15 18 17 20 20 20C23 20 25 18 25 15C25 10 20 5 20 5Z" fill="currentColor"/>
                        <path d="M12 12C12 12 8 15 8 19C8 21.5 9.5 23 12 23C14.5 23 16 21.5 16 19C16 15 12 12 12 12Z" fill="currentColor"/>
                        <path d="M28 12C28 12 32 15 32 19C32 21.5 30.5 23 28 23C25.5 23 24 21.5 24 19C24 15 28 12 28 12Z" fill="currentColor"/>
                        <path d="M20 20C20 20 17 22 15 26C14 28 15 31 18 32C21 33 23 31 24 28C25 24 22 20 20 20Z" fill="currentColor"/>
                        <path d="M20 20C20 20 23 22 25 26C26 28 25 31 22 32C19 33 17 31 16 28C15 24 18 20 20 20Z" fill="currentColor"/>
                    </svg>
                </span>
            </div>
            <h2 class="section-title">Appreciations</h2>
        </div>

        <div id="appreciationsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="appreciation-card">
                        <div class="quote-icon">"</div>
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="avatar-wrapper">
                                    <img src="/svp-edited.webp" alt="HH Lokanath Swami Maharaj" class="avatar-img">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <blockquote class="appreciation-quote">
                                    The Lord is taking note of what Sundar Vaman Prabhu is doing. The lord may also take note of what you all are doing to expand this Krishna Bandhu movement.
                                </blockquote>
                                <div class="author-info">
                                    <h5 class="author-name">HH Lokanath Swami Maharaj</h5>
                                    <p class="author-title">Initiating Guru & Senior Disciple of Srila Prabhupada</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="appreciation-card">
                        <div class="quote-icon">"</div>
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="avatar-wrapper">
                                    <img src="/rgm.webp" alt="Author 2" class="avatar-img">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <blockquote class="appreciation-quote">
                                    Another appreciation quote goes here. This is a sample text for the second slide of the appreciation carousel.
                                </blockquote>
                                <div class="author-info">
                                    <h5 class="author-name">HG Ratnavali Gopi Devi Dasi</h5>
                                    <p class="author-title">Co-Founder, Krishna Bandhu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="appreciation-card">
                        <div class="quote-icon">"</div>
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="avatar-wrapper">
                                    <img src="/svp-edited.webp" alt="Author 3" class="avatar-img">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <blockquote class="appreciation-quote">
                                    Third appreciation quote will be displayed here with meaningful content about Krishna Bandhu's impact.
                                </blockquote>
                                <div class="author-info">
                                    <h5 class="author-name">Senior Devotee Name</h5>
                                    <p class="author-title">Spiritual Guide & Mentor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#appreciationsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#appreciationsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#appreciationsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#appreciationsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#appreciationsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        </div>
    </div>
</section>

<style>
    .appreciations-section {
        background: linear-gradient(135deg, #001952 0%, #001133 100%);
        padding: 80px 0 120px;
        position: relative;
        overflow: hidden;
    }

    .appreciations-section::before {
        content: '"';
        position: absolute;
        font-size: 600px;
        font-family: Georgia, serif;
        color: rgba(255, 255, 255, 0.02);
        top: -150px;
        left: 10%;
        line-height: 1;
        pointer-events: none;
    }

    .appreciations-section::after {
        content: '"';
        position: absolute;
        font-size: 600px;
        font-family: Georgia, serif;
        color: rgba(255, 255, 255, 0.02);
        bottom: -200px;
        right: 10%;
        line-height: 1;
        pointer-events: none;
    }

    .section-header {
        margin-bottom: 60px;
    }

    .lotus-divider {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        gap: 20px;
    }

    .lotus-divider::before,
    .lotus-divider::after {
        content: '';
        height: 2px;
        width: 80px;
        background: linear-gradient(90deg, transparent, #4a90e2, transparent);
    }

    .lotus-icon {
        color: #4a90e2;
        display: inline-flex;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .section-title {
        color: #ffffff;
        font-size: 48px;
        font-weight: 700;
        margin: 0;
        letter-spacing: 1px;
    }

    .appreciation-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 60px;
        margin: 0 50px;
        position: relative;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .quote-icon {
        position: absolute;
        top: 30px;
        left: 30px;
        font-size: 120px;
        font-family: Georgia, serif;
        color: rgba(74, 144, 226, 0.2);
        line-height: 1;
    }

    .avatar-wrapper {
        position: relative;
        display: inline-block;
    }

    .avatar-img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        border: 5px solid #4a90e2;
        object-fit: cover;
        box-shadow: 0 10px 40px rgba(74, 144, 226, 0.3);
    }

    .appreciation-quote {
        color: #ffffff;
        font-size: 22px;
        line-height: 1.8;
        margin-bottom: 30px;
        text-align: justify;
        position: relative;
        z-index: 1;
    }

    .author-info {
        text-align: right;
    }

    .author-name {
        color: #ffa500;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .author-title {
        color: #ffa500;
        font-size: 16px;
        margin: 0;
        opacity: 0.9;
    }

    /* Carousel Controls */
    #appreciationsCarousel .carousel-control-prev,
    #appreciationsCarousel .carousel-control-next {
        width: 60px;
        height: 60px;
        background: rgba(74, 144, 226, 0.3);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        opacity: 1;
        transition: all 0.3s ease;
    }

    #appreciationsCarousel .carousel-control-prev {
        left: -30px;
    }

    #appreciationsCarousel .carousel-control-next {
        right: -30px;
    }

    #appreciationsCarousel .carousel-control-prev:hover,
    #appreciationsCarousel .carousel-control-next:hover {
        background: rgba(74, 144, 226, 0.6);
    }

    #appreciationsCarousel .carousel-control-prev-icon,
    #appreciationsCarousel .carousel-control-next-icon {
        width: 30px;
        height: 30px;
    }

    /* Carousel Indicators */
    #appreciationsCarousel .carousel-indicators {
        bottom: -50px;
        margin-bottom: 0;
    }

    #appreciationsCarousel .carousel-indicators [data-bs-target] {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.3);
        border: none;
        margin: 0 5px;
        transition: all 0.3s ease;
    }

    #appreciationsCarousel .carousel-indicators .active {
        background-color: #4a90e2;
        width: 40px;
        border-radius: 6px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .appreciations-section {
            padding: 60px 0 100px;
        }

        .appreciation-card {
            padding: 40px 30px;
            margin: 0 20px;
        }

        .section-title {
            font-size: 36px;
        }

        .avatar-img {
            width: 150px;
            height: 150px;
            margin-bottom: 30px;
        }

        .appreciation-quote {
            font-size: 18px;
            text-align: left;
        }

        .author-info {
            text-align: center;
        }

        .author-name {
            font-size: 20px;
        }

        .author-title {
            font-size: 14px;
        }

        .quote-icon {
            font-size: 80px;
            top: 20px;
            left: 20px;
        }

        #appreciationsCarousel .carousel-control-prev,
        #appreciationsCarousel .carousel-control-next {
            width: 45px;
            height: 45px;
        }

        #appreciationsCarousel .carousel-control-prev {
            left: 0;
        }

        #appreciationsCarousel .carousel-control-next {
            right: 0;
        }

        .lotus-divider::before,
        .lotus-divider::after {
            width: 40px;
        }
    }
</style>

<script>
    // Initialize the appreciations carousel
    document.addEventListener('DOMContentLoaded', function() {
        var appreciationsCarousel = document.getElementById('appreciationsCarousel');
        if (appreciationsCarousel) {
            new bootstrap.Carousel(appreciationsCarousel, {
                interval: 5000,
                wrap: true,
                keyboard: true
            });
        }
    });
</script>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="row g-4">
            <!-- Column 1: Logo & Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-brand mb-4">
                    <img src="/logo.webp" alt="Krishna Bandhu Logo" class="footer-logo">
                    <h5 class="footer-title">Krishna Bandhu</h5>
                </div>
                
                <div class="footer-contact">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-text">
                            <p>Riverside Appartments, Gournagar,<br>
                            Bhaktisiddhanta Saraswati Marg,<br>
                            Mayapur, West Bengal 741313</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contact-text">
                            <p>krishna108bandhu@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-text">
                            <p>+918770341995</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media Icons -->
                <div class="social-icons mt-4">
                    <a href="#" class="social-link" aria-label="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Telegram">
                        <i class="bi bi-telegram"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Timings -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading">Timings</h5>
                <ul class="footer-list">
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>04:00 AM - Chant with Krishna Bandhus</span>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>04:30 AM - Online Mangala Aarti</span>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>04:40 AM - Chant with Krishna Bandhus</span>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>05:30 AM - Chant with HH Lokanath Swami</span>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>06:45 AM - Japa Talk</span>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>10:00 AM - Sunday Live Classes</span>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>08:00 PM - Evening Lectures</span>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Popular Videos -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading">Popular Videos</h5>
                <ul class="footer-list">
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Exposing Bollywood</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Lord Shiva v/s Lord Vishnu</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Tips to Wake Up Early</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Why do people commit suicide?</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">How to observe Kartik month?</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Puri Yatra Highlights</a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading">Quick Links</h5>
                <ul class="footer-list">
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">KB Japa Session</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Chant Japa with LNS</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Sangam Registration 2025</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="copyright-text mb-0">
                        <i class="bi bi-c-circle"></i> 2025 Krishna Bandhu. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-links">
                        <a href="#">Privacy Policy</a>
                        <span class="separator">|</span>
                        <a href="#">Refund Policy</a>
                        <span class="separator">|</span>
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-section {
        background: linear-gradient(135deg, #001a4d 0%, #000d26 100%);
        color: #ffffff;
        padding: 80px 0 0;
        position: relative;
    }

    .footer-brand {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .footer-logo {
        width: 50px;
        height: 50px;
    }

    .footer-title {
        color: #ffffff;
        font-size: 22px;
        font-weight: 600;
        margin: 0;
    }

    .footer-contact {
        margin-top: 25px;
    }

    .contact-item {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        align-items: flex-start;
    }

    .contact-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .contact-icon i {
        font-size: 18px;
        color: #ffffff;
    }

    .contact-text p {
        margin: 0;
        font-size: 14px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.85);
    }

    .social-icons {
        display: flex;
        gap: 15px;
    }

    .social-link {
        width: 45px;
        height: 45px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 20px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .social-link:hover {
        background: #ffffff;
        color: #001a4d;
        border-color: #ffffff;
        transform: translateY(-3px);
    }

    .footer-heading {
        color: #ffffff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-heading::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 3px;
        background: #4a90e2;
    }

    .footer-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-list li {
        margin-bottom: 15px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.85);
    }

    .footer-list li i {
        color: #4a90e2;
        font-size: 14px;
        margin-top: 3px;
        flex-shrink: 0;
    }

    .footer-list li a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer-list li a:hover {
        color: #ffffff;
        padding-left: 5px;
    }

    .footer-bottom {
        background: rgba(0, 0, 0, 0.3);
        padding: 25px 0;
        margin-top: 60px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .copyright-text {
        color: rgba(255, 255, 255, 0.85);
        font-size: 14px;
    }

    .copyright-text i {
        margin-right: 5px;
    }

    .footer-links {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-links a:hover {
        color: #ffffff;
    }

    .footer-links .separator {
        color: rgba(255, 255, 255, 0.4);
    }

    /* Responsive */
    @media (max-width: 991px) {
        .footer-section {
            padding: 60px 0 0;
        }

        .footer-heading {
            margin-top: 30px;
        }
    }

    @media (max-width: 767px) {
    .footer-brand {
        justify-content: center;
    }

    .footer-contact {
        text-align: center;
    }

    .contact-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .social-icons {
        justify-content: center;
    }

    .footer-heading::after {
        left: 50%;
        transform: translateX(-50%);
    }

    .footer-list li {
        justify-content: center;
    }

    .footer-bottom .col-md-6:first-child {
        margin-bottom: 15px;
    }

    .footer-links {
        justify-content: center;
    }
    }
</style>




  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    AOS.init({ duration: 1200, once: true });
  </script>

</body>
</html>

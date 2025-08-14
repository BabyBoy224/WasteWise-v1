<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WasteWise | Smart Recycling</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vendor/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vendor/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vendor/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary-green: #2E8B57;
      --light-green: #3CB371;
      --dark-green: #228B22;
      --accent-gold: #FFD700;
      --soft-white: rgba(255,255,255,0.9);
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
    }

    .login-page {
      background: linear-gradient(135deg, rgba(46, 139, 87, 0.75), rgba(60, 179, 113, 0.85)),
                  url('images/wastewise1.jpg') no-repeat center center;
      background-size: cover;
      background-blend-mode: soft-light;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      animation: gradientShift 12s ease infinite alternate;
      padding: 20px;
      box-sizing: border-box;
    }

    @keyframes gradientShift {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

    .login-container {
      width: 100%;
      max-width: 420px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .brand-title {
      color: var(--soft-white);
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
      letter-spacing: 1.2px;
      font-size: 2.4rem;
      margin-bottom: 0.3rem;
      line-height: 1.2;
      animation: fadeInDown 1s ease both;
      text-align: center;
    }

    .brand-subtitle {
      color: var(--accent-gold);
      font-family: 'Montserrat', sans-serif;
      font-weight: 600;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
      letter-spacing: 0.8px;
      font-size: 1.15rem;
      margin-top: 0;
      opacity: 0.95;
      animation: fadeInDown 1s ease 0.2s both;
      text-align: center;
    }

    .brand-logo {
      height: 75px;
      margin-bottom: 10px;
      filter: drop-shadow(1px 1px 3px rgba(0,0,0,0.25));
      transition: all 0.3s ease;
      animation: bounceIn 1s ease both, float 4s ease-in-out infinite 1s;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    .brand-logo:hover {
      transform: scale(1.03) translateY(-5px);
      animation: none;
    }

    .login-card {
      border-radius: 10px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
      border: none;
      overflow: hidden;
      background-color: rgba(255, 255, 255, 0.94);
      backdrop-filter: blur(2px);
      animation: fadeInUp 0.8s ease 0.4s both;
      transform-origin: center;
      width: 100%;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes bounceIn {
      from, 20%, 40%, 60%, 80%, to {
        animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
      }
      0% {
        opacity: 0;
        transform: scale3d(.3, .3, .3);
      }
      20% {
        transform: scale3d(1.1, 1.1, 1.1);
      }
      40% {
        transform: scale3d(.9, .9, .9);
      }
      60% {
        opacity: 1;
        transform: scale3d(1.03, 1.03, 1.03);
      }
      80% {
        transform: scale3d(.97, .97, .97);
      }
      to {
        opacity: 1;
        transform: scale3d(1, 1, 1);
      }
    }

    .login-card-body {
      padding: 28px;
    }

    .login-box-msg {
      color: var(--dark-green);
      font-weight: 500;
      margin-bottom: 22px;
      font-size: 1.05rem;
      text-align: center;
      animation: fadeIn 0.8s ease 0.6s both;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .input-group-text {
      background-color: var(--light-green);
      color: white;
      border: none;
      transition: all 0.2s;
    }

    .form-control {
      border-left: none;
      transition: all 0.3s;
    }

    .form-control:focus {
      border-color: var(--light-green);
      box-shadow: 0 0 0 0.2rem rgba(60, 179, 113, 0.2);
    }

    .btn-primary {
      background-color: var(--primary-green);
      border-color: var(--dark-green);
      font-weight: 600;
      letter-spacing: 0.4px;
      padding: 11px;
      transition: all 0.3s;
      font-size: 1rem;
      border-radius: 6px;
      position: relative;
      overflow: hidden;
    }

    .btn-primary:hover {
      background-color: var(--dark-green);
      transform: translateY(-1px);
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }

    .btn-primary:after {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 5px;
      height: 5px;
      background: rgba(255, 255, 255, 0.5);
      opacity: 0;
      border-radius: 100%;
      transform: scale(1, 1) translate(-50%);
      transform-origin: 50% 50%;
    }

    .btn-primary:focus:not(:active)::after {
      animation: ripple 1s ease-out;
    }

    @keyframes ripple {
      0% {
        transform: scale(0, 0);
        opacity: 0.5;
      }
      100% {
        transform: scale(20, 20);
        opacity: 0;
      }
    }

    .brand-container {
      text-align: center;
      margin-bottom: 1.8rem;
      padding: 0 15px;
      width: 100%;
    }

    .footer-text {
      color: var(--soft-white);
      text-align: center;
      margin-top: 22px;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.4);
      font-size: 0.9rem;
      letter-spacing: 0.3px;
      opacity: 0.9;
      animation: fadeIn 1s ease 0.8s both;
      width: 100%;
    }

    .input-group:hover .input-group-text {
      background-color: var(--primary-green);
    }

    /* Input field animations */
    .input-group {
      animation: fadeInLeft 0.8s ease both;
    }

    .input-group:nth-child(1) {
      animation-delay: 0.7s;
    }

    .input-group:nth-child(2) {
      animation-delay: 0.8s;
    }

    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translateX(-20px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Button animation */
    .row {
      animation: fadeIn 0.8s ease 0.9s both;
    }

    /* Leaf animation in background */
    .leaf {
      position: absolute;
      background-size: contain;
      background-repeat: no-repeat;
      opacity: 0.7;
      z-index: -1;
      animation: falling linear infinite;
    }

    @keyframes falling {
      0% {
        transform: translate(0, -10vh) rotate(0deg);
      }
      100% {
        transform: translate(calc(var(--random-x) * 10vw), 100vh) rotate(360deg);
      }
    }

    @media (max-width: 768px) {
      .login-page {
        background-image: linear-gradient(135deg, rgba(46, 139, 87, 0.82), rgba(60, 179, 113, 0.92)),
                          url('images/wastewise.jpg');
      }

      .brand-title {
        font-size: 2.1rem;
      }

      .brand-subtitle {
        font-size: 1.05rem;
      }

      .brand-logo {
        height: 65px;
      }

      .login-card {
        background-color: rgba(255, 255, 255, 0.96);
        border-radius: 8px;
      }

      .login-card-body {
        padding: 24px;
      }
    }
  </style>
</head>
<body class="hold-transition login-page">
<!-- Animated leaves in background -->
<div id="leaves-container"></div>

<div class="login-container">
  <div class="brand-container">
    <img src="images/wastewise.jpg" alt="WasteWise Logo" class="brand-logo">
    <h1 class="brand-title">WASTEWISE</h1>
    <p class="brand-subtitle">Smart Recycling Management</p>
  </div>

  <div class="card login-card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        <i class="fas fa-sign-in-alt mr-2" style="color: var(--primary-green);"></i> Sign in to continue
      </p>

      <form method="POST" action="/auth/user">
        @csrf
        <div class="input-group mb-3">
          <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                 name="username" value="{{ old('username') }}"
                 placeholder="Username" required autocomplete="username" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user" style="color: white;"></span>
            </div>
          </div>
          @error('username')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="input-group mb-4">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                 name="password" placeholder="Password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock" style="color: white;"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">
              <i class="fas fa-sign-in-alt mr-2"></i> SIGN IN
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <p class="footer-text">
    <i class="fas fa-recycle mr-1"></i> Transforming waste into valuable resources
  </p>
</div>

<!-- jQuery -->
<script src="vendor/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vendor/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vendor/AdminLTE/dist/js/adminlte.min.js"></script>

<script>
  // Create animated leaves
  document.addEventListener('DOMContentLoaded', function() {
    const leavesContainer = document.getElementById('leaves-container');
    const leafTypes = 3; // Number of different leaf images/styles

    for (let i = 0; i < 12; i++) {
      const leaf = document.createElement('div');
      leaf.className = 'leaf';

      // Random leaf style (you could replace with actual images)
      const leafType = Math.floor(Math.random() * leafTypes) + 1;
      leaf.style.backgroundImage = `url('images/leaf${leafType}.png')`;

      // Random positioning and animation
      const randomX = Math.random();
      const randomDelay = Math.random() * 5;
      const randomDuration = 10 + Math.random() * 20;
      const randomSize = 20 + Math.random() * 30;

      leaf.style.setProperty('--random-x', randomX);
      leaf.style.left = `${randomX * 100}%`;
      leaf.style.width = `${randomSize}px`;
      leaf.style.height = `${randomSize}px`;
      leaf.style.animationDuration = `${randomDuration}s`;
      leaf.style.animationDelay = `${randomDelay}s`;

      leavesContainer.appendChild(leaf);
    }

    // Add hover effect to login card
    const loginCard = document.querySelector('.login-card');
    loginCard.addEventListener('mouseenter', () => {
      loginCard.style.transform = 'translateY(-5px)';
      loginCard.style.boxShadow = '0 12px 24px rgba(0,0,0,0.15)';
    });

    loginCard.addEventListener('mouseleave', () => {
      loginCard.style.transform = 'translateY(0)';
      loginCard.style.boxShadow = '0 6px 18px rgba(0,0,0,0.12)';
    });

    // Add focus animation to input fields
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.querySelector('.input-group-text').style.transform = 'scale(1.05)';
        this.parentElement.querySelector('.input-group-text').style.boxShadow = '0 0 8px rgba(46, 139, 87, 0.4)';
      });

      input.addEventListener('blur', function() {
        this.parentElement.querySelector('.input-group-text').style.transform = 'scale(1)';
        this.parentElement.querySelector('.input-group-text').style.boxShadow = 'none';
      });
    });
  });
</script>

</body>
</html>

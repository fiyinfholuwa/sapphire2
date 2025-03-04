
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sapphire</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<div class="animated-background">
    <div class="gradient-sphere sphere-1"></div>
    <div class="gradient-sphere sphere-2"></div>
    <div class="gradient-sphere sphere-3"></div>
    <div class="particles" id="particles"></div>
</div>

<div class="login-container">
    <div class="login-header">
        <a href="{{route('home')}}" class="logo">
            <img style="height: 60px; width: 60px;" src="{{asset('frontend_new/assets/images/logo.png')}}" alt="Tourly logo">
        </a>
        <h1>Register</h1>
        <p>Click here to go <a style="color: #ffffff;" href="{{route('home')}}">Home</a></p>
    </div>

    <form  action="{{route('register')}}"  method="post">
        @csrf
        <div class="form-group">
            <input
                type="text"
                name="name"
                class="form-input"
                placeholder="Enter Full Name"

            >
            <i class="input-icon fas fa-user"></i>
            <h6 style="padding-top: 10px;">
                @error('name')
                {{$message}}
                @enderror
            </h6>
        </div>


        <div class="form-group">
            <input
                type="number"
                name="phone"
                class="form-input"
                placeholder="Enter Phone Number"

            >
            <i class="input-icon fas fa-phone"></i>
            <h6 style="padding-top: 10px;">
                @error('name')
                {{$message}}
                @enderror
            </h6>
        </div>

<div class="form-group">
            <input
                type="email"
                name="email"
                class="form-input"
                id="email"
                placeholder="Email address"

            >
            <i class="input-icon fas fa-envelope"></i>
            <h6 style="padding-top: 10px;">
                @error('email')
                {{$message}}
                @enderror
            </h6>
        </div>

        <div class="form-group">
            <input name="password"
                type="password"
                class="form-input"
                placeholder="Password"

            >
            <i class="input-icon fas fa-lock"></i>
            <h6 style="padding-top: 10px;">
                @error('password')
                {{$message}}
                @enderror
            </h6>
        </div>

<div class="form-group">
            <input name="password_confirmation"
                type="password"
                class="form-input"
                placeholder="Password"

            >
            <i class="input-icon fas fa-lock"></i>
            <h6 style="padding-top: 10px;">
                @error('password_confirmation')
                {{$message}}
                @enderror
            </h6>
        </div>

        <button type="submit" class="submit-button">Sign Up</button>
    </form>

{{--    <div class="divider">--}}
{{--        <span>or continue with</span>--}}
{{--    </div>--}}

{{--    <div class="social-login">--}}
{{--        <button class="social-button" onclick="handleSocialLogin('google')">--}}
{{--            <i class="fab fa-google"></i>--}}
{{--        </button>--}}
{{--        <button class="social-button" onclick="handleSocialLogin('apple')">--}}
{{--            <i class="fab fa-apple"></i>--}}
{{--        </button>--}}
{{--        <button class="social-button" onclick="handleSocialLogin('github')">--}}
{{--            <i class="fab fa-github"></i>--}}
{{--        </button>--}}
{{--    </div>--}}

    <div class="additional-options">
        <a href="" >Forgot password?</a>
        <p style="margin-top: 1rem">
            You have an account?
            <a href="{{route('login')}}">Sign In</a>
        </p>
    </div>
</div>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', 'Segoe UI', sans-serif;
    }

    body {
        min-height: 140vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #0a0a0a;
        position: relative;
        overflow: hidden;
    }

    .animated-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        overflow: hidden;
    }

    .gradient-sphere {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        opacity: 0.5;
        animation: moveSphere 20s infinite ease-in-out;
    }

    .sphere-1 {
        width: 600px;
        height: 600px;
        background: linear-gradient(45deg, #0c4c91, #0c4c91);
        top: -300px;
        left: -300px;
        animation-delay: -5s;
    }

    .sphere-2 {
        width: 500px;
        height: 500px;
        background: linear-gradient(45deg, #4433ff, #3dceff);
        bottom: -250px;
        right: -250px;
        animation-delay: -2s;
    }

    .sphere-3 {
        width: 400px;
        height: 400px;
        background: linear-gradient(45deg, #0c4c91, #0c4c91);
        top: 50%;
        left: 30%;
        animation-delay: -8s;
    }

    @keyframes moveSphere {
        0%, 100% {
            transform: translate(0, 0) rotate(0deg) scale(1);
        }
        25% {
            transform: translate(100px, 50px) rotate(90deg) scale(1.1);
        }
        50% {
            transform: translate(50px, 100px) rotate(180deg) scale(1);
        }
        75% {
            transform: translate(-50px, 50px) rotate(270deg) scale(0.9);
        }
    }

    .particles {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .particle {
        position: absolute;
        width: 2px;
        height: 2px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        animation: floatParticle 8s infinite linear;
    }

    @keyframes floatParticle {
        0% {
            transform: translateY(100vh) scale(0);
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            transform: translateY(-100vh) scale(1);
            opacity: 0;
        }
    }

    .login-container {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 440px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 24px;
        padding: 3rem;
        color: white;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        overflow: hidden;
        transform: translateY(20px);
        opacity: 0;
        animation: slideIn 0.6s ease-out forwards;
    }

    .login-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 200%;
        height: 100%;
        background: linear-gradient(
            to right,
            transparent,
            rgba(255, 255, 255, 0.1),
            transparent
        );
        transform: skewX(-15deg);
        transition: 0.5s;
    }

    .login-container:hover::before {
        left: 100%;
    }

    @keyframes slideIn {
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .login-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .login-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        background: linear-gradient(45deg, #fff, #ccc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .login-header p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 1rem;
    }

    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .form-input {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        font-size: 1rem;
        color: white;
        transition: all 0.3s ease;
    }

    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .form-input:focus {
        outline: none;
        border-color: rgba(255, 255, 255, 0.3);
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.05);
    }

    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, 0.4);
        transition: color 0.3s ease;
    }

    .form-input:focus + .input-icon {
        color: white;
    }

    .submit-button {
        width: 100%;
        padding: 1rem;
        background: white;
        color: black;
        border: none;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .submit-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            to right,
            transparent,
            rgba(255, 255, 255, 0.8),
            transparent
        );
        transition: 0.5s;
    }

    .submit-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .submit-button:hover::before {
        left: 100%;
    }

    .social-login {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin: 2rem 0;
    }

    .social-button {
        width: 50px;
        height: 50px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.05);
        color: white;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .social-button::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(100%);
        transition: 0.3s ease;
    }

    .social-button:hover {
        transform: translateY(-3px);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .social-button:hover::before {
        transform: translateY(0);
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 2rem 0;
        color: rgba(255, 255, 255, 0.4);
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .divider span {
        padding: 0 1rem;
        font-size: 0.9rem;
    }

    .additional-options {
        text-align: center;
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.6);
    }

    .additional-options a {
        color: white;
        text-decoration: none;
        transition: opacity 0.3s ease;
    }

    .additional-options a:hover {
        opacity: 0.8;
    }

    .error-message {
        color: #0c4c91;
        font-size: 0.85rem;
        margin-top: 0.5rem;
        display: none;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes ripple {
        to {
            width: 300px;
            height: 300px;
            opacity: 0;
        }
    }

    @media (max-width: 480px) {
        .login-container {
            margin: 1rem;
            padding: 2rem;
        }

        .login-header h1 {
            font-size: 2rem;
        }
    }

</style>

<script>
    // Create floating particles
    function createParticles() {
        const container = document.getElementById('particles');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';

            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 8 + 's';
            particle.style.opacity = Math.random() * 0.5 + 0.2;

            container.appendChild(particle);
        }
    }

    // Handle form submission
    function handleLogin(event) {
        event.preventDefault();

        const email = document.getElementById('email');
        const password = document.getElementById('password');
        let isValid = true;

        // Reset error messages
        document.querySelectorAll('.error-message').forEach(elem => {
            elem.style.display = 'none';
        });

        // Validate email
        if (!isValidEmail(email.value)) {
            showError('emailError', 'Please enter a valid email address');
            isValid = false;
        }

        // Validate password
        if (password.value.length < 6) {
            showError('passwordError', 'Password must be at least 6 characters');
            isValid = false;
        }

        if (isValid) {
            // Simulated login success
            alert('Login successful! (Demo only)');
            document.getElementById('loginForm').reset();
        }

        return false;
    }

    // Email validation
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    // Show error message
    function showError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        errorElement.textContent = message;
        errorElement.style.display = 'block';
    }

    // Handle social login buttons
    function handleSocialLogin(provider) {
        alert(`${provider} login would be implemented here`);
    }

    // Handle forgot password
    function handleForgotPassword() {
        alert('Password reset would be implemented here');
    }

    // Handle sign up
    function handleSignUp() {
        alert('Sign up would be implemented here');
    }

    // Add mouse move effect for gradient spheres
    document.addEventListener('mousemove', (e) => {
        const spheres = document.querySelectorAll('.gradient-sphere');
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;

        spheres.forEach((sphere, index) => {
            const speed = (index + 1) * 20;
            const xOffset = (0.5 - x) * speed;
            const yOffset = (0.5 - y) * speed;

            sphere.style.transform = `translate(${xOffset}px, ${yOffset}px) scale(${1 + (index * 0.1)})`;
        });
    });

    // Add smooth reveal animation for form elements
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize particles
        createParticles();

        // Animate form elements
        const elements = document.querySelectorAll('.form-group, .submit-button, .divider, .social-login, .additional-options');
        elements.forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            setTimeout(() => {
                element.style.transition = 'all 0.6s ease-out';
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, 100 * index);
        });

        // Add input focus effects
        const inputs = document.querySelectorAll('.form-input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', () => {
                if (!input.value) {
                    input.parentElement.classList.remove('focused');
                }
            });
        });
    });

    // Add ripple effect to buttons
    document.querySelectorAll('.submit-button, .social-button').forEach(button => {
        button.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const ripple = document.createElement('div');
            ripple.style.position = 'absolute';
            ripple.style.width = '0';
            ripple.style.height = '0';
            ripple.style.background = 'rgba(255, 255, 255, 0.4)';
            ripple.style.borderRadius = '50%';
            ripple.style.transform = 'translate(-50%, -50%)';
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            ripple.style.animation = 'ripple 0.6s ease-out';

            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    });
</script>

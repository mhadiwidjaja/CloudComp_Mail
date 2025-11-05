<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing 2025 Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #1a1a2e;
            color: #e0e0e0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            overflow: hidden;
            position: relative;
        }

        .background-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.6;
            z-index: -1;
        }

        .blob1 {
            width: 400px;
            height: 400px;
            top: -150px;
            left: -150px;
            background: linear-gradient(180deg, rgba(255, 29, 220, 0.5) 0%, rgba(102, 126, 234, 0.5) 100%);
            animation: move 20s infinite alternate;
        }

        .blob2 {
            width: 300px;
            height: 300px;
            bottom: -100px;
            right: -100px;
            background: linear-gradient(180deg, rgba(0, 242, 255, 0.5) 0%, rgba(255, 153, 0, 0.5) 100%);
            animation: move 25s infinite alternate-reverse;
        }

        @keyframes move {
            from {
                transform: translate(0, 0) rotate(0deg);
            }
            to {
                transform: translate(100px, 50px) rotate(90deg);
            }
        }
        
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 3rem;
            max-width: 480px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            z-index: 1;
        }
        
        h1 {
            font-size: 28px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 0.5rem;
            text-align: center;
        }
        
        .subtitle {
            font-size: 17px;
            color: #a9a9d4;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .alert {
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-size: 15px;
            border: 1px solid;
        }
        
        .alert-success {
            background-color: rgba(45, 211, 111, 0.2);
            color: #adffcf;
            border-color: rgba(45, 211, 111, 0.5);
        }
        
        .alert-error {
            background-color: rgba(255, 59, 48, 0.2);
            color: #ffc7c4;
            border-color: rgba(255, 59, 48, 0.5);
            text-align: left;
            margin-top: 0.5rem;
            padding: 0.75rem;
            font-size: 13px;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            font-size: 15px;
            font-weight: 600;
            color: #e0e0e0;
            margin-bottom: 0.5rem;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 0.875rem 1rem;
            font-size: 17px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.05);
            transition: all 0.2s ease;
            font-family: inherit;
            color: #ffffff;
        }
        
        input:focus {
            outline: none;
            border-color: rgba(138, 43, 226, 0.8);
            box-shadow: 0 0 0 4px rgba(138, 43, 226, 0.2);
        }
        
        input::placeholder {
            color: #a9a9d4;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
        
        button {
            width: 100%;
            padding: 1rem;
            font-size: 17px;
            font-weight: 600;
            color: white;
            background: linear-gradient(90deg, #e94057, #f27121);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }
        
        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(233, 64, 87, 0.4);
        }
        
        button:active {
            transform: translateY(0);
            box-shadow: 0 5px 15px rgba(233, 64, 87, 0.3);
        }
    </style>
</head>
<body>
    <div class="background-blob blob1"></div>
    <div class="background-blob blob2"></div>
    <div class="container">
        <h1>Cloud Computing 2025</h1>
        <p class="subtitle">Registration Form</p>

        @if (session('success'))
            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('subscribe.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required value="{{ old('name') }}">
                @error('name')
                    <div class="alert-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required value="{{ old('email') }}">
                @error('email')
                    <div class="alert-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Minimum 8 characters" required>
                @error('password')
                    <div class="alert-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-enter your password" required>
            </div>

            <div class="form-group">
                <label for="birth_date">Birth Date</label>
                <input type="date" id="birth_date" name="birth_date" required value="{{ old('birth_date') }}">
                @error('birth_date')
                    <div class="alert-error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Register Now</button>
        </form>
    </div>
</body>
</html>
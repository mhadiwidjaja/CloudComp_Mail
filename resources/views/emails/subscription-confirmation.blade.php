<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #1d1d1f;
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
            background-color: #f5f5f7;
        }
        .email-wrapper {
            background-color: #ffffff;
            margin: 40px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }
        .content {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 20px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 20px;
        }
        .intro-text {
            font-size: 17px;
            color: #1d1d1f;
            margin-bottom: 30px;
        }
        .info-box {
            background-color: #f5f5f7;
            padding: 25px;
            border-radius: 10px;
            margin: 25px 0;
        }
        .info-box h3 {
            font-size: 19px;
            font-weight: 600;
            color: #1d1d1f;
            margin: 0 0 15px 0;
        }
        .info-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #d2d2d7;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: 600;
            color: #86868b;
            min-width: 140px;
        }
        .info-value {
            color: #1d1d1f;
            font-weight: 500;
        }
        .fun-fact-box {
            background: linear-gradient(135deg, #fff3cd 0%, #ffe8a1 100%);
            padding: 20px;
            border-radius: 10px;
            margin: 25px 0;
            border-left: 4px solid #ffc107;
        }
        .fun-fact-box strong {
            display: block;
            font-size: 17px;
            color: #856404;
            margin-bottom: 8px;
        }
        .fun-fact-box p {
            font-size: 15px;
            color: #856404;
            margin: 0;
        }
        .button-container {
            text-align: center;
            margin: 35px 0;
        }
        .confirm-button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white !important;
            text-decoration: none;
            padding: 14px 40px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 17px;
            transition: all 0.3s ease;
        }
        .confirm-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }
        .closing-text {
            font-size: 15px;
            color: #1d1d1f;
            margin: 25px 0;
        }
        .footer {
            text-align: center;
            padding: 30px;
            background-color: #f5f5f7;
            color: #86868b;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="header">
            <h1>Welcome to Cloud Computing 2025!</h1>
        </div>
        
        <div class="content">
            <div class="greeting">Hello {{ $name }},</div>
            
            <div class="intro-text">
                Congratulations! You've successfully registered for Cloud Computing 2025. We're excited to have you join us on this learning journey.
            </div>
            
            <div class="info-box">
                <h3>Registration Details</h3>
                <div class="info-row">
                    <span class="info-label">Full Name:</span>
                    <span class="info-value">{{ $name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email:</span>
                    <span class="info-value">{{ $email }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Birth Date:</span>
                    <span class="info-value">{{ \Carbon\Carbon::parse($birthDate)->format('F d, Y') }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Course:</span>
                    <span class="info-value">Cloud Computing 2025</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Registered:</span>
                    <span class="info-value">{{ now()->format('F d, Y') }}</span>
                </div>
            </div>

            <div class="button-container">
                <a href="{{ config('app.url') }}" class="confirm-button">Confirm Registration</a>
            </div>
            
            <div class="closing-text">
                If you have any questions or need assistance, feel free to reach out to us at <strong>info@mattr.lafamiglia.my.id</strong>
            </div>
            
            <div class="closing-text">
                Best regards,<br>
                <strong>Cloud Computing 2025 Team</strong>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
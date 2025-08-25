<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Haazir</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
            margin: 0;
            color: #333333;
            line-height: 1.6;
        }

        .email-container {
            max-width: 600px;
            background: #ffffff;
            margin: 0 auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .header {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            padding: 30px 20px;
            text-align: center;
        }

        .logo {
            max-width: 150px;
            height: auto;
        }

        .header h1 {
            color: white;
            margin: 15px 0 0;
            font-size: 24px;
            font-weight: 600;
        }

        .content {
            padding: 30px;
        }

        .welcome-text {
            font-size: 18px;
            margin-bottom: 25px;
            color: #374151;
        }

        .user-details {
            background: #f9fafb;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            border-left: 4px solid #2563eb;
        }

        .detail-row {
            display: flex;
            margin-bottom: 10px;
        }

        .detail-label {
            font-weight: 600;
            width: 120px;
            color: #6b7280;
        }

        .detail-value {
            color: #374151;
        }

        .confirmation-box {
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 8px;
            padding: 18px;
            margin: 25px 0;
            text-align: center;
        }

        .confirmation-label {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 8px;
        }

        .confirmation-id {
            font-size: 20px;
            font-weight: 700;
            color: #2563eb;
            letter-spacing: 1px;
        }

        .note {
            background: #fffbeb;
            border: 1px solid #fde68a;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            font-size: 14px;
            color: #92400e;
        }

        .footer {
            background: #f3f4f6;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
        }

        .social-links {
            margin: 15px 0;
        }

        .social-links a {
            margin: 0 10px;
            text-decoration: none;
            color: #2563eb;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Haazir Logo" class="logo">
            <h1>Welcome to Haazir</h1>
        </div>

        <div class="content">
            <p class="welcome-text">Hello <strong>{{ $user->name }}</strong>,</p>
            <p class="welcome-text">Thank you for registering with <strong>Haazir</strong>. We're excited to have you
                onboard and look forward to providing you with an exceptional experience.</p>

            <div class="user-details">
                <div class="detail-row">
                    <span class="detail-label">Account Type:</span>
                    <span class="detail-value">
                        @if ($user->role == 0)
                            Haazir Team
                        @elseif($user->role == 2)
                            User
                        @elseif($user->role == 1)
                            Admin
                        @else
                            Unknown Role
                        @endif
                    </span>

                </div>
                <div class="detail-row">
                    <span class="detail-label">Email:</span>
                    <span class="detail-value">{{ $user->email }}</span>
                </div>
            </div>

            <div class="confirmation-box">
                <div class="confirmation-label">YOUR CONFIRMATION ID</div>
                <div class="confirmation-id">{{ $user->confirmation_id }}</div>
            </div>

            <div class="note">
                <strong>Important:</strong> Please keep this confirmation ID safe as you will need it for account
                verification and support requests.
            </div>

            <p>If you have any questions or need assistance, please don't hesitate to contact our support team.</p>

            <p>Best regards,<br>The Haazir Team</p>
        </div>

        <div class="footer">
            <div class="social-links">
                <a href="#">Website</a> •
                <a href="#">Support</a> •
                <a href="#">Privacy Policy</a>
            </div>
            <div>&copy; {{ date('Y') }} Haazir. All rights reserved.</div>
            <div>You're receiving this email because you created an account with Haazir</div>
        </div>
    </div>
</body>

</html>

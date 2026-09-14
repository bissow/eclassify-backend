<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }} - QR Standee</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: #f8fafc;
            color: #0f172a;
            width: 100%;
            height: 100%;
            position: relative;
        }
        .standee-container {
            width: 100%;
            height: 100%;
            padding: 24px 20px 20px 20px;
            background: #ffffff;
            text-align: center;
            border-top: 10px solid {{ $primaryColor }};
        }
        .brand-badge {
            display: inline-block;
            background: {{ $primaryColor }}15;
            color: {{ $primaryColor }};
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        .header-title {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.25;
            margin-bottom: 6px;
        }
        .header-tagline {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 18px;
            line-height: 1.4;
        }
        .qr-card-wrapper {
            background: #ffffff;
            border: 2.5px solid {{ $primaryColor }};
            border-radius: 20px;
            padding: 18px;
            margin: 0 auto 16px auto;
            width: 86%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
            position: relative;
        }
        .qr-image {
            width: 220px;
            height: 220px;
            display: block;
            margin: 0 auto;
        }
        .scan-action-badge {
            margin-top: 12px;
            display: inline-block;
            background: {{ $secondaryColor }};
            color: #ffffff;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        .store-info-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 12px 16px;
            margin: 0 auto 16px auto;
            width: 90%;
            text-align: center;
        }
        .store-name-row {
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 4px;
        }
        .verified-tick {
            color: #00B2CA;
            font-weight: bold;
            display: inline-block;
            margin-left: 4px;
        }
        .store-location {
            font-size: 11px;
            color: #64748b;
            line-height: 1.3;
        }
        .store-contact {
            font-size: 11px;
            color: #475569;
            font-weight: 600;
            margin-top: 4px;
        }
        .standee-footer {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px dashed #cbd5e1;
            font-size: 10px;
            color: #94a3b8;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .footer-logo {
            max-height: 20px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 6px;
        }
    </style>
</head>
<body>
    <div class="standee-container">
        <!-- Top Tag / Category -->
        <div class="brand-badge">
            {{ $badgeText ?? __('DIGITAL STORE & CATALOG') }}
        </div>

        <!-- Heading & Tagline -->
        <h1 class="header-title">{{ $title }}</h1>
        <p class="header-tagline">{{ $tagline }}</p>

        <!-- QR Code Standee Card -->
        <div class="qr-card-wrapper">
            <img src="{{ $qrBase64 }}" class="qr-image" alt="Store QR Code" />
            <div class="scan-action-badge">
                {{ __('SCAN TO VIEW ALL ADS & OFFERS') }}
            </div>
        </div>

        <!-- Store Information -->
        @if ($store)
        <div class="store-info-box">
            <div class="store-name-row">
                {{ $store->name }}
                @if ($isVerified)
                    <span class="verified-tick" title="{{ __('Verified Store') }}">✓ {{ __('Verified') }}</span>
                @endif
            </div>
            @if ($storeAddress)
                <div class="store-location">{{ $storeAddress }}</div>
            @endif
            @if ($storeContact)
                <div class="store-contact">{{ __('Call / WhatsApp:') }} {{ $storeContact }}</div>
            @endif
        </div>
        @endif

        <!-- Footer Notice -->
        <div class="standee-footer">
            <span>{{ $footerText }}</span>
            @if (!empty($footerLogoUrl))
                <img src="{{ $footerLogoUrl }}" class="footer-logo" alt="Platform Logo" />
            @endif
        </div>
    </div>
</body>
</html>

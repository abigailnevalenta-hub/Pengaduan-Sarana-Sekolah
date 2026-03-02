<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - PSS</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        /* ================= GLOBAL ================= */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f5f6f8;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* ================= SIDEBAR ================= */
        .sidebar {
            width: 205px;
            background: white;
            padding: 24px 16px;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.04);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #FF7C19;
            margin-bottom: 32px;
        }

        .menu-section {
            margin-bottom: 24px;
        }

        .menu-label {
            font-size: 11px;
            font-weight: 700;
            color: #919191;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            padding: 0 12px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 8px;
            cursor: pointer;
            color: #74747c;
            transition: 0.2s;
            display: flex;
            align-items: center;
            font-size: 14px;
        }

        .menu li i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
        }

        .menu li:hover {
            background: #f5f6f8;
            color: #FF7C19;
        }

        .menu li.active {
            background: #fff3e9;
            color: #FF7C19;
            font-weight: 500;
        }

        .menu-link {
            display: flex;
            align-items: center;
            color: inherit;
            text-decoration: none;
            width: 100%;
        }

        /* ================= LOGOUT ================= */
        .logout-btn {
            position: absolute;
            bottom: 24px;
            left: 16px;
            right: 16px;
            padding: 12px;
            border: none;
            background: white;
            color: #FF3333;
            border-radius: 10px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .logout-btn i {
            margin-right: 8px;
        }

        /* ================= MAIN CONTENT ================= */
        .main {
            flex: 1;
            margin-left: 205px;
            padding: 24px 32px;
        }

        /* ================= TOPBAR ================= */
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .topbar-left h1 {
            font-size: 28px;
            color: #242424;
            margin-bottom: 4px;
        }

        .topbar-left p {
            font-size: 14px;
            color: #919191;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Theme Toggle */
        .theme-toggle {
            display: flex;
            background: #f5f6f8;
            border-radius: 20px;
            padding: 4px;
            cursor: pointer;
        }

        .theme-toggle-btn {
            padding: 8px 16px;
            border: none;
            background: transparent;
            cursor: pointer;
            font-size: 13px;
            color: #74747c;
            border-radius: 18px;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 500;
        }

        .theme-toggle-btn.active {
            background: #FF7C19;
            color: white;
        }

        .theme-toggle-btn:hover {
            color: #FF7C19;
        }

        /* Icon Button */
        .icon-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 1px solid #e5e5e5;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #74747c;
            font-size: 16px;
            transition: 0.2s;
        }

        .icon-btn:hover {
            color: #FF7C19;
        }

        /* Profile Avatar */
        .profile-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #FF7C19, #FF9D45);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="layout">

        {{-- Sidebar --}}
        @include('components.sidebar')

        {{-- Main Content --}}
        <div class="main">

            <header class="topbar">
                <div class="topbar-left">
                    <h1>Laporan</h1>
                    <p>Halaman laporan placeholder.</p>
                </div>

                <div class="topbar-right">
                    <div class="theme-toggle">
                        <button class="theme-toggle-btn active">
                            <i class="fas fa-sun"></i> Light
                        </button>
                        <button class="theme-toggle-btn">
                            <i class="fas fa-moon"></i> Dark
                        </button>
                    </div>

                    <button class="icon-btn">
                        <i class="fas fa-bell"></i>
                    </button>

                    <div class="profile-avatar">AB</div>
                </div>
            </header>

            <p>Konten kosong untuk saat ini.</p>

        </div>
    </div>

    <script>
        const themeButtons = document.querySelectorAll('.theme-toggle-btn');

        themeButtons.forEach(button => {
            button.addEventListener('click', function () {
                themeButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
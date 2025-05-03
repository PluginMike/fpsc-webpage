<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SERVER['HTTP_HOST']; ?> - Coming Soon</title>
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #1abc9c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --text: #34495e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text);
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            padding: 2rem;
            position: relative;
            z-index: 10;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            padding: 4rem 3rem;
            position: relative;
            backdrop-filter: blur(10px);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: var(--accent);
        }

        .header {
            margin-bottom: 3rem;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.5rem;
            position: relative;
            display: inline-block;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }

        .domain {
            color: var(--secondary);
            font-weight: 700;
        }

        h2 {
            font-size: 1.75rem;
            font-weight: 300;
            color: var(--secondary);
            margin-top: 1rem;
            margin-bottom: 2rem;
        }

        .content {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .message {
            font-size: 1.125rem;
            line-height: 1.7;
            color: var(--text);
            max-width: 600px;
        }

        .progress-container {
            margin: 1.5rem 0;
            position: relative;
        }

        .progress-bar {
            height: 4px;
            background: rgba(0, 0, 0, 0.05);
            border-radius: 2px;
            overflow: hidden;
            margin: 1rem 0;
        }

        .progress {
            height: 100%;
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            border-radius: 2px;
            width: 0;
            animation: loading 2.5s infinite cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes loading {
            0% { width: 0; }
            50% { width: 70%; }
            100% { width: 100%; }
        }

        .status {
            display: flex;
            justify-content: space-between;
            font-size: 0.875rem;
            color: var(--dark);
            opacity: 0.7;
        }

        .contact {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            font-size: 1.125rem;
        }

        .contact a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }

        .contact a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 1px;
            background: var(--secondary);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .contact a:hover {
            color: var(--accent);
        }

        .contact a:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .footer {
            margin-top: 3rem;
            font-size: 0.875rem;
            color: var(--text);
            opacity: 0.7;
            text-align: right;
        }

        /* Background elements */
        .bg-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .bg-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.05;
            background: #fff;
        }

        .shape-1 {
            width: 500px;
            height: 500px;
            top: -250px;
            right: -100px;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            bottom: -150px;
            left: -100px;
        }

        .shape-3 {
            width: 200px;
            height: 200px;
            top: 30%;
            right: 10%;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .card {
                padding: 3rem 1.5rem;
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            .message {
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 480px) {
            .card {
                padding: 2rem 1.25rem;
            }

            h1 {
                font-size: 1.75rem;
            }

            h2 {
                font-size: 1.25rem;
            }

            .contact, .message {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <div class="bg-elements">
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
        <div class="bg-shape shape-3"></div>
    </div>

    <div class="container">
        <div class="card">
            <div class="header">
                <h1>Welcome to <span class="domain"><?php echo $_SERVER['HTTP_HOST']; ?></span></h1>
                <h2>Coming Soon</h2>
            </div>
            
            <div class="content">
                <div class="message">
                    Webpage coming soon.
                </div>
                
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress"></div>
                    </div>
                    <div class="status">
                        <span>Development in progress</span>
                        <span>Coming soon</span>
                    </div>
                </div>
                
                <div class="contact">
                    For urgent queries, contact the developer at <a href="mailto:webmaster@bodycorporate-fpsc.co.za">webmaster@bodycorporate-fpsc.co.za</a>
                </div>
            </div>
            
            <div class="footer">
                &copy; <?php echo date('Y'); ?> <?php echo $_SERVER['HTTP_HOST']; ?> - All Rights Reserved
            </div>
        </div>
    </div>
</body>
</html>
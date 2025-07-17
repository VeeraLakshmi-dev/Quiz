<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Test - Welcome</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #2c3e50;
        }

        .welcome-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            border: 1px solid #e9ecef;
        }

        .welcome-header {
            background: #ffffff;
            border-bottom: 2px solid #dee2e6;
            padding: 40px 32px;
            text-align: center;
        }

        .welcome-title {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #212529;
        }

        .welcome-subtitle {
            font-size: 16px;
            color: #6c757d;
            line-height: 1.5;
        }

        .welcome-content {
            padding: 40px 32px;
        }

        .quiz-info {
            margin-bottom: 32px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 20px;
            margin-bottom: 32px;
        }

        .info-card {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            padding: 24px 16px;
            text-align: center;
            transition: all 0.2s ease;
        }

        .info-card:hover {
            background: #e9ecef;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .info-number {
            font-size: 24px;
            font-weight: 600;
            color: #212529;
            margin-bottom: 6px;
        }

        .info-label {
            font-size: 14px;
            color: #6c757d;
            font-weight: 500;
        }

        .instructions {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            padding: 28px;
            margin-bottom: 32px;
            text-align: left;
        }

        .instructions h3 {
            color: #212529;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .instructions ul {
            list-style: none;
        }

        .instructions li {
            color: #495057;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }

        .instructions li:before {
            content: "•";
            color: #212529;
            font-weight: bold;
            position: absolute;
            left: 0;
            font-size: 16px;
        }

        .btn {
            padding: 14px 32px;
            border: 2px solid #212529;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            margin: 0 8px;
            background: white;
        }

        .btn-primary {
            background: #212529;
            color: white;
        }

        .btn-primary:hover {
            background: #495057;
            border-color: #495057;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: white;
            color: #212529;
            border-color: #dee2e6;
        }

        .btn-secondary:hover {
            background: #f8f9fa;
            border-color: #212529;
        }

        .welcome-footer {
            background: #f8f9fa;
            padding: 24px 32px;
            border-top: 1px solid #dee2e6;
            color: #6c757d;
            font-size: 14px;
            text-align: center;
        }

        .disclaimer {
            margin-top: 12px;
            font-size: 12px;
            color: #868e96;
            line-height: 1.4;
        }

        .actions {
            text-align: center;
        }

        @media (max-width: 768px) {
            .welcome-container {
                margin: 10px;
            }

            .welcome-header {
                padding: 32px 24px;
            }

            .welcome-title {
                font-size: 24px;
            }

            .welcome-content {
                padding: 32px 24px;
            }

            .info-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }

            .instructions {
                padding: 20px;
            }

            .btn {
                padding: 12px 24px;
                font-size: 15px;
                margin: 6px 0;
                width: 100%;
            }

            .welcome-footer {
                padding: 20px 24px;
            }
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="welcome-header">
            <h1 class="welcome-title">Quiz Test</h1>
        </div>

        <div class="welcome-content">
            <div class="quiz-info">
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-number">20</div>
                        <div class="info-label">Questions</div>
                    </div>
                    <div class="info-card">
                        <div class="info-number">10</div>
                        <div class="info-label">Minutes</div>
                    </div>
                    <div class="info-card">
                        <div class="info-number">100</div>
                        <div class="info-label">Points</div>
                    </div>
                </div>
            </div>

            <div class="instructions">
                <h3>Important Instructions</h3>
                <ul>
                    <li>Do not refresh the page or go back during the quiz</li>
                    <li>If you refresh or go back, you will be unable to continue the quiz</li>
                    <li>You can only attempt this quiz once - complete it within the time limit</li>
                    <li>Read each question carefully before selecting your answer</li>
                    <li>Ensure all questions are answered before final submission</li>
                </ul>
            </div>

            <div class="actions">
                <button class="btn btn-primary" onclick="startQuiz()">Register & Start Quiz</button>
            </div>
        </div>

        <div class="welcome-footer">
            <p>Ensure you have a stable internet connection throughout the assessment</p>
            <p class="disclaimer">
                By proceeding, you agree to our terms and conditions. This assessment is for evaluation purposes.
            </p>
        </div>
    </div>

    <script>
        function startQuiz() {
            const startTime = new Date().toISOString();
            window.location.href = '/register';
        }
    </script>
</body>
</html>

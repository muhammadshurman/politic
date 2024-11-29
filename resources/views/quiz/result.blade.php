<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google-fonts-include -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div id="wrapper">
        <div class="container text-center mt-5">
            <div class="check_mark_img">
                <img src="https://jthemes.net/themes/html/quizo/thankyou/assets/images/checkmark.png" width="20%" alt="checkmark">
            </div>
            <div class="sub_title">
                <span>Quiz Results</span>
            </div>
            <div class="title pt-3">
                <h3>Your Analysis: <strong>{{ $analysis ?? 'Not Available' }}</strong></h3>
            </div>
            @if (isset($scores))
                <div class="results pt-4">
                    <h4>Score Breakdown:</h4>
                    <ul class="list-unstyled">
                        <li><strong>Middle:</strong> {{ $scores['Middle'] ?? 0 }}</li>
                        <li><strong>Right:</strong> {{ $scores['Right'] ?? 0 }}</li>
                        <li><strong>Left:</strong> {{ $scores['Left'] ?? 0 }}</li>
                    </ul>
                </div>
            @else
                <div class="no_results pt-4">
                    <p>No results available. Please try again.</p>
                </div>
            @endif
            <div class="pt-4">
                <a href="{{ route('home') }}" class="btn btn-primary">Go Back to Home</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap-js include -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Customer Query</title>
</head>
<body>
    <section>
        <div class="container">
            @if($mailData['type'] == 'query')
                <h3>Customer Query</h3>
            @endif
            @if($mailData['type'] == 'booking')
                <h3>Customer Booking</h3>
            @endif
            <h5>{{ $mailData['subject'] ?? '' }}</h5>
            <div>
                {{$mailData['description'] ?? ''}}
            </div>
            <div>
                <strong>customer name :</strong> {{$mailData['name'] ?? ''}}
            </div>
            <div>
                <strong>customer contact :</strong> {{$mailData['contact'] ?? ''}}
            </div>
            <div>
                <strong>customer email :</strong> {{ $mailData['email'] ?? '' }}
            </div>
        </div>
    </section>
</body>
</html>
<!-- <base href="{{ env('APP_URL') }}"> -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<link href="/FoodDelivery/public/css/bootstrap.min.css" rel="stylesheet">
<link href="/FoodDelivery/public/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/FoodDelivery/public/css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

@if(isset($config['css'])&&is_array($config['css']))
@foreach($config['css'] as $key => $val)
<link href="/FoodDelivery/public/{{ $val }}" rel="stylesheet">
@endforeach
@endif
<link href="/FoodDelivery/public/css/style.css" rel="stylesheet">
<link href="/FoodDelivery/public/css/customize.css" rel="stylesheet">

<script src="/FoodDelivery/public/js/jquery-3.1.1.min.js"></script>
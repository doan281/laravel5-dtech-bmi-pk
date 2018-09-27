<html>
<head>
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>DTECH BMI</title>
</head>
<body>
<div>
    <p>BMI: {{ isset($bmi) ? $bmi : '' }}</p>
</div>
<form action="{{ route('bmi_path') }}" method="get">
    <input type="number" step="0.1" value="" name="weight" placeholder="weight(kg)">
    <input type="number" step="0.01" value="" name="heigh" placeholder="heigh(m)">
    <button type="submit">Calculate</button>
</form>
</body>
</html>
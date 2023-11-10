<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form class="form-login" action="{{ route('UpdateRefris', $refris->ubicacion) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="group">
            <span class="label">Ubicacion:</span>
            <input name="ubicacion" type="text" class="input" value="{{ $refris->ubicacion }}" disabled>
        </div>                                                                                          
    </form>
</body>
</html>
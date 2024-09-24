{{-- resources/views/errors/unauthorized.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Thêm link tới file CSS nếu cần -->
</head>
<body>
    <div class="container">
        <h1 class="text-danger">Unauthorized Access</h1>
        <p>Xin lỗi, bạn không có quyền truy cập vào trang này.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Quay về trang chủ</a>
    </div>
</body>
</html>

@php
    $currentRoute = Route::currentRouteName();
    $map = [
        'articles.index' => 'Danh sách bài viết',
        'articles.create' => 'Tạo bài viết',
        'articles.show' => 'Chi tiết bài viết',
        'articles.edit' => 'Chỉnh sửa bài viết',
    ];

    $label = $map[$currentRoute] ?? 'Trang';
@endphp

<nav style="margin-bottom: 10px;">
    <a href="{{ route('articles.index') }}">Trang chủ</a>
    @if($label !== 'Danh sách bài viết')
        → <span>{{ $label }}</span>
    @endif
</nav>


@push('styles')
<style>
nav {
    font-size: 14px;
}
nav a {
    color: #2563eb;
    text-decoration: none;
}
nav span {
    color: #555;
}
</style>
@endpush

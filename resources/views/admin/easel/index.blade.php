@extends('layouts.admin-layout')
@section('content')
    <div class="row">
        <div class="button-list">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">
                Добавить мольберт
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Размер</th>
                <th>Материал</th>
                <th>Изображение</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($easels as $index => $easel)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $easel->name }}</td>
                    <td>{{ $easel->size }}</td>
                    <td>{{ $easel->material }}</td>
                    <td>
                        @php
                            $images = [];
                            if ($easel->images) {
                                $images = is_array($easel->images) ? $easel->images : json_decode($easel->images, true);
                                if (!is_array($images)) {
                                    $images = [];
                                }
                            }
                        @endphp
                        @if(count($images))
                            <div id="carousel-{{ $easel->id }}" class="carousel slide" data-bs-ride="carousel"
                                 style="width: 120px;">
                                <div class="carousel-inner">
                                    @foreach($images as $imgIndex => $image)
                                        <div class="carousel-item {{ $imgIndex === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/' . $image) }}"
                                                 class="d-block easel-carousel-img" alt="easel image">
                                        </div>
                                    @endforeach
                                </div>
                                @if(count($images) > 1)
                                    <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carousel-{{ $easel->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-bs-target="#carousel-{{ $easel->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </button>
                                @endif
                            </div>
                        @else
                            <span class="text-muted">Нет изображения</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('easelEdit', $easel->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('easel.destroy', $easel->id) }}" method="POST"
                              style="display:inline-block;"
                              onsubmit="return confirm('Haqiqatan ham o‘chirmoqchimisiz?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @if($easels->isEmpty())
                <tr>
                    <td colspan="6" class="text-center text-muted">Данные отсутствуют.</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>

    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                    </div>
                    <form class="px-3" action="{{ route('easelCreate') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label">Название</label>
                            <input name="name" class="form-control" type="text" required placeholder="Мольберт лира">
                        </div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Размер</label>
                            <input class="form-control" name="size" type="text" required placeholder="180x70">
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Фото</label>
                            <input class="form-control" id="images" name="images[]" type="file" multiple required>
                            <div id="file-error" style="color: red; margin-top: 6px;"></div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Тип</label>
                            <select name="material" class="form-select" required>
                                <option value="" selected disabled>Выберите тип</option>
                                <option value="wood">Дерево</option>
                                <option value="iron">Железо</option>
                                <option value="aluminum">Алюминий</option>
                            </select>
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Добавить мольберт</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .easel-carousel-img {
            height: 80px;
            width: 100%;
            object-fit: cover;
        }

        .carousel {
            max-width: 100px;
        }

        .carousel-inner {
            width: 100%;
        }
    </style>
    <script>
        document.getElementById('images').addEventListener('change', function (event) {
            const maxSize = 2 * 1024 * 1024; // 2 MB
            const files = event.target.files;
            let errorMsg = "";
            for (let i = 0; i < files.length; i++) {
                if (files[i].size > maxSize) {
                    errorMsg += `"${files[i].name}" размер больше 2 МБ!<br>`;
                }
            }
            document.getElementById('file-error').innerHTML = errorMsg;
            if (errorMsg !== "") {
                event.target.value = ""; // fayl tanlovini tozalash
            }
        });
    </script>
@endsection

@extends('layouts.admin-layout')

@section('content')
    <div class="row mb-3">
        <div class="button-list">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">
                Добавить артиста
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table mb-0 table-bordered">
            <thead>
            <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Описание</th>
                <th>Работы (Изображения)</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($artists as $index => $artist)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $artist->name }}</td>
                    <td class="description-box">{{ $artist->description ?? '-' }}</td>
                    <td>
                        @php
                            $firstImage = null;
                            foreach ($artist->works as $work) {
                                if (!empty($work->images)) {
                                    $firstImage = $work->images;
                                    break;
                                }
                            }
                        @endphp

                        @if($firstImage)
                            <a href="{{ asset('storage/' . $firstImage) }}" target="_blank">
                                <img src="{{ asset('storage/' . $firstImage) }}"
                                     class="work-thumbnail"
                                     alt="Изображение работы">
                            </a>
                        @else
                            <span class="text-muted">Изображения отсутствуют</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('edit-artist', $artist->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('artist.destroy', $artist->id) }}" method="POST" class="d-inline-block"
                              onsubmit="return confirm('Вы уверены, что хотите удалить?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                data-bs-target="#addImageModal-{{ $artist->id }}">
                            <i class="fa fa-image"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="addImageModal-{{ $artist->id }}" tabindex="-1"
                     aria-labelledby="addImageModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('artist.addWork', $artist->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addImageModalLabel">Добавить изображение
                                        ({{ $artist->name }})</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Закрыть"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Изображение</label>
                                        <input type="file" name="image" id="images" class="form-control" required accept="image/*">
                                        <div id="file-error" style="color: red; margin-top: 6px;"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image_name" class="form-label">Название изображения</label>
                                        <input type="text" name="image_name" class="form-control" placeholder="что-то"
                                               required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="size" class="form-label">Размер</label>
                                        <input type="text" name="size" class="form-control" placeholder="90x120"
                                               required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="materials" class="form-label">Материалы</label>
                                        <input type="text" name="materials" class="form-control"
                                               placeholder="Акварель, бумага" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Добавить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Данные отсутствуют</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="px-3" action="{{ route('artist-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Имя</label>
                            <input name="name" class="form-control" type="text" required placeholder="Имя артиста">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Описание</label>
                            <textarea name="description" class="form-control" rows="3"
                                      placeholder="Краткое описание об артисте..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Фотографии работ</label>
                            <input type="file" name="images" id="images" class="form-control" multiple required>
                            <div id="file-error" style="color: red; margin-top: 6px;"></div>
                        </div>


                        <div class="mb-3">
                            <label for="size" class="form-label">Название изображения</label>
                            <input name="image_name" class="form-control" type="text" required placeholder="что-то">
                        </div>

                        <div class="mb-3">
                            <label for="size" class="form-label">Размер изображения</label>
                            <input name="size" class="form-control" type="text" required placeholder="90x120">
                        </div>

                        <div class="mb-3">
                            <label for="materials" class="form-label">Материалы изображения</label>
                            <input name="materials" class="form-control" type="text" required
                                   placeholder="Акварель, бумага">
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .work-thumbnail {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #ccc;
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
                event.target.value = "";
            }
        });
    </script>
@endsection

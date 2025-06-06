@extends('layouts.admin-layout')

@section('content')
    <div class="container">
        <h2 class="mb-4">Редактировать мольберт</h2>

        <form action="{{ route('update-easel', $easel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Название</label>
                <input name="name" class="form-control" type="text" value="{{ old('name', $easel->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Размер</label>
                <input class="form-control" name="size" type="text" value="{{ old('size', $easel->size) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Текущие фото</label>
                <div class="row" id="existing-images">
                    @php
                        $images = is_string($easel->images) ? json_decode($easel->images, true) : $easel->images;
                    @endphp

                    @foreach($images as $key => $image)
                        <div class="col-md-3 mb-2 image-wrapper position-relative" data-index="{{ $key }}"
                             style="height: 100px;width: 100px">
                            <input type="hidden" name="existing_images[]" value="{{ $image }}">
                            <img src="{{ asset('storage/' . $image) }}" class="img-fluid rounded w-100" alt="image">
                            <button type="button"
                                    class="btn btn-danger btn-sm position-absolute top-0 end-0 remove-image"
                                    style="border-radius: 50%; padding: 2px 6px;">&times;
                            </button>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="mb-3">
                <label for="images" class="form-label">Фото</label>
                <input class="form-control" id="images" name="images[]" type="file" multiple required>
                <div id="file-error" style="color: red; margin-top: 6px;"></div>
            </div>

            <div class="mb-3">
                <label class="form-label">Тип</label>
                <select name="material" class="form-select" required>
                    <option disabled>Выберите тип</option>
                    <option value="wood" {{ $easel->material == 'wood' ? 'selected' : '' }}>Дерево</option>
                    <option value="iron" {{ $easel->material == 'iron' ? 'selected' : '' }}>Железо</option>
                    <option value="aluminum" {{ $easel->material == 'aluminum' ? 'selected' : '' }}>Алюминий</option>
                </select>
            </div>

            <div class="text-center">
                <button class="btn btn-success" type="submit">Сохранить изменения</button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.remove-image').forEach(button => {
                    button.addEventListener('click', function () {
                        const wrapper = this.closest('.image-wrapper');
                        wrapper.remove();
                    });
                });
            });
        </script>
    @endpush
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

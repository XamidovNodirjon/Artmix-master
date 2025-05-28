@extends('layouts.admin-layout')

@section('content')
    <div class="container">
        <h2 class="mb-4">Artistni tahrirlash</h2>

        <form action="{{ route('update-artist', $artists->id) }}" method="POST" enctype="multipart/form-data" id="artist-form">
            @csrf
            @method('PUT')

            {{-- Deleted works IDs --}}
            <input type="hidden" name="deleted_works" id="deleted-works" value="">

            {{-- Artist ismi --}}
            <div class="mb-3">
                <label class="form-label">Ismi</label>
                <input name="name" class="form-control" type="text" value="{{ old('name', $artists->name) }}" required>
            </div>

            {{-- Tavsif --}}
            <div class="mb-3">
                <label class="form-label">Tavsif</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description', $artists->description) }}</textarea>
            </div>

            {{-- Asarlar --}}
            <div class="mb-3">
                <label class="form-label">Asarlar</label>
                <div class="works-container">
                    @foreach($artists->works as $work)
                        <div class="card mb-3 work-item" data-work-id="{{ $work->id }}">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Asar #{{ $loop->iteration }}</h5>
                                <button type="button" class="btn btn-sm btn-danger remove-work" data-work-id="{{ $work->id }}">O'chirish</button>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    {{-- O'lchami va materiallari --}}
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">O'lchami</label>
                                            <input type="text" name="works[{{ $work->id }}][size]" class="form-control" value="{{ old("works.$work->id.size", $work->size) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Materiallari</label>
                                            <input type="text" name="works[{{ $work->id }}][materials]" class="form-control" value="{{ old("works.$work->id.materials", $work->materials) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Rasm nomi</label>
                                            <input type="text" name="works[{{ $work->id }}][image_name]" class="form-control" value="{{ old("works.$work->id.image_name", $work->image_name) }}" required>
                                        </div>
                                    </div>

                                    {{-- Rasm --}}
                                    <div class="col-md-6">
                                        <label class="form-label">Mavjud rasm</label>
                                        <div class="mb-2 image-item position-relative">
                                            @if($work->images && Storage::disk('public')->exists($work->images))
                                                <a href="{{ asset('storage/' . $work->images) }}" target="_blank">
                                                    <img src="{{ asset('storage/' . $work->images) }}" class="img-thumbnail preview-thumbnail" alt="Asar rasmi">
                                                </a>
                                                <input type="hidden" name="works[{{ $work->id }}][existing_image]" value="{{ $work->images }}">
                                            @else
                                                <span class="text-muted">Rasm yo'q</span>
                                            @endif
                                        </div>

                                        <div class="mt-2">
                                            <label class="form-label">Yangi rasm yuklash</label>
                                            <input type="file" name="works[{{ $work->id }}][new_image]" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Yangi asar qo‘shish --}}
            <div class="mb-3">
                <button type="button" class="btn btn-primary" id="add-new-work">Yangi asar qo'shish</button>
            </div>

            {{-- Saqlash --}}
            <div class="text-center">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>
        </form>
    </div>

    {{-- Template for new work --}}
    <template id="new-work-template">
        <div class="card mb-3 work-item" data-work-id="new-__INDEX__">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Yangi asar</h5>
                <button type="button" class="btn btn-sm btn-danger remove-work">O'chirish</button>
            </div>
            <div class="card-body">
                <div class="row">
                    {{-- O'lcham va material --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">O'lchami</label>
                            <input type="text" name="works[new-__INDEX__][size]" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Materiallari</label>
                            <input type="text" name="works[new-__INDEX__][materials]" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rasm nomi</label>
                            <input type="text" name="works[new-__INDEX__][image_name]" class="form-control" required>
                        </div>
                    </div>

                    {{-- Rasm --}}
                    <div class="col-md-6">
                        <label class="form-label">Rasm</label>
                        <input type="file" name="works[new-__INDEX__][new_image]" class="form-control" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
    </template>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const deletedWorks = [];
                const deletedWorksInput = document.getElementById('deleted-works');
                let newWorkIndex = 0;

                document.getElementById('add-new-work').addEventListener('click', function () {
                    const template = document.getElementById('new-work-template').innerHTML;
                    // Replace placeholder with unique index
                    const newWorkHtml = template.replace(/__INDEX__/g, newWorkIndex++);
                    document.querySelector('.works-container').insertAdjacentHTML('beforeend', newWorkHtml);
                });

                document.addEventListener('click', function (e) {
                    if (e.target.classList.contains('remove-work')) {
                        const workItem = e.target.closest('.work-item');
                        const workId = e.target.dataset.workId || workItem.dataset.workId;

                        if (confirm("Bu asarni o'chirmoqchimisiz?")) {
                            if (workId && workId !== 'new' && !workId.toString().startsWith('new-')) {
                                deletedWorks.push(workId);
                                deletedWorksInput.value = JSON.stringify(deletedWorks);
                            }
                            workItem.remove();
                        }
                    }
                });
            });
        </script>
    @endpush

    <style>
        .work-item {
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .image-item img {
            height: 100px;
            object-fit: cover;
        }

        .preview-thumbnail {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            display: block;
        }

        .preview-thumbnail:hover {
            opacity: 0.85;
        }

        .image-item a {
            display: inline-block;
            max-width: 100%;
        }
    </style>
@endsection

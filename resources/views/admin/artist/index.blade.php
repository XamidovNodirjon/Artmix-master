@extends('layouts.admin-layout')

@section('content')
    <div class="row mb-3">
        <div class="button-list">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">
                Добавить артист
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table mb-0 table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Ismi</th>
                <th>Izoh</th>
                <th>Asarlar (Rasmlar)</th>
                <th>Amallar</th>
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
                                     alt="Work image">
                            </a>
                        @else
                            <span class="text-muted">Rasmlar yo‘q</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('edit-artist', $artist->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('artist.destroy', $artist->id) }}" method="POST" class="d-inline-block"
                              onsubmit="return confirm('Haqiqatan ham o‘chirmoqchimisiz?')">
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
                                    <h5 class="modal-title" id="addImageModalLabel">Yangi rasm qo‘shish
                                        ({{ $artist->name }})</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Yopish"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Rasm</label>
                                        <input type="file" name="image" class="form-control" required accept="image/*">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image_name" class="form-label">rasim nomi</label>
                                        <input type="text" name="image_name" class="form-control" placeholder="nimadir"
                                               required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="size" class="form-label">O‘lchami</label>
                                        <input type="text" name="size" class="form-control" placeholder="90x120"
                                               required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="materials" class="form-label">Materiallari</label>
                                        <input type="text" name="materials" class="form-control"
                                               placeholder="Akvarrel, qog‘oz" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Qo‘shish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Ma'lumotlar mavjud emas</td>
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
                            <label for="name" class="form-label">Ismi</label>
                            <input name="name" class="form-control" type="text" required placeholder="Artist ismi">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Tavsif</label>
                            <textarea name="description" class="form-control" rows="3"
                                      placeholder="Artist haqida qisqacha tavsif..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Asar fotosuratlari</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="size" class="form-label">Rasim nomi</label>
                            <input name="image_name" class="form-control" type="text" required placeholder="nimaidr">
                        </div>

                        <div class="mb-3">
                            <label for="size" class="form-label">Rasim size</label>
                            <input name="size" class="form-control" type="text" required placeholder="90x120">
                        </div>

                        <div class="mb-3">
                            <label for="materials" class="form-label">Rasim materials</label>
                            <input name="materials" class="form-control" type="text" required
                                   placeholder="Akvarrel, qog‘oz">
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Qo‘shish</button>
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


@endsection

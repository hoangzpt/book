@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Thêm thể loại') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @include('layouts.nav')

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('category.store') }}">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label class="form-label">Tên thể loaị</label>
                                <input name="tentheloai" type="text" class="form-control" placeholder="Tên thể loại">
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Mô tả thể loaị</label>
                                <input name="mota" type="text" class="form-control" placeholder="Mô tả thể loại">
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Trạng thái</label>
                                <select name="kichhoat" class="form-select" aria-label="Default select example">
                                    <option selected value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin.master')
@section('title', 'Create New Counter')

@section('content')
@include('admin.includes.message')

<div class="content">
    <div class="card container-fluid mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Counter</h5>
            <small class="text-muted float-end">
                <a href="{{ route('counter.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                    Back</a>
            </small>
        </div>
        <div class="card-body p-0">
            <form method="POST" class="row" action="{{ route('counter.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-9 mb-5">
                    <div class="card card-body main-description shadow br-8 p-4 mb-3">

                        <!-- name  -->
                        <div class="form-group mb-3">
                            <label for="answer">Name</label>
                            <input name="name" id="name" class="form-control  br-8 @error('name') is-invalid @enderror" placeholder="Enter name">{{ old('name') }}
                            @error('name')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Numbers -->
                        <div class="form-group mb-3">
                            <label for="number">Number</label>
                            <input type="text" name="number" value="{{ old('number') }}" class="form-control br-8 @error('number') is-invalid @enderror" placeholder="Enter number">
                            @error('question')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Icon image -->
                        <div class="form-group mb-3 mt-2">
                            <label for="image">Featured Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" data-show-remove="false" class="dropify @error('image') is-invalid @enderror" id="image">
                                @error('image')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body card shadow br-8">
                        <div class="form-group mb-3 d-flex align-items-center">
                            <label class="m-0 p-0">Status</label>
                            <select name="status" id="status" class="form-select ms-5">
                                <option value="1" class="p-3">Publish</option>
                                <option value="0" class="p-3">Draft</option>
                            </select>
                        </div>

                        <hr class="shadow-sm">

                        <div class="form-group mb-3 d-flex align-items-center">
                            <label for="order">Order</label>
                            <input type="number" name="order" value="{{ old('order') }}" class="form-control ms-5 @error('order') is-invalid @enderror" placeholder="Enter Order">
                            @error('order')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <hr class="shadow-sm">

                        <div class="card-footers">
                            <button type="submit" class="btn btn-lg btn-primary"><i class="fa-solid fa-plus"></i> Publish</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
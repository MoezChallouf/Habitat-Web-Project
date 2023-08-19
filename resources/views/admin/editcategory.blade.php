@extends('admin.layouts.template')
@section('page_title')
    Edit Category -HyperOptima
@endsection
@section('content')
    <div class="container max-w-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Category</h4>
        <div class="col-xxl">
            <div class="card mb-2">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Category</h5>

                </div>
                <div class="card-body">
                    <form action="{{route('updatecategory')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$category_info->id}}" name="category_id">
                        <div class="form-group">
                            <label for="category_name"
                                   class="block mb-2 text-md font-medium text-gray-900 mt-3">Category Name</label>
                            <input type="text"
                                   class="mb-2 form-control pl-3 bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 mt-3"
                                   id="category_name" name="category_name"
                                   placeholder="Category Name"
                                   required
                                   value="{{ $category_info->category_name}}">
                        </div>
                        <div class="row justify-content-start ml-1">
                            <button type="submit"
                                    class="w-60 flex justify-center bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition duration-300">
                                Update Category
                            </button>
                        </div>
                    </form>
                    @if($errors->any())
                        <div class="text-red-700 mt-2 text-sm light-style list-none">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

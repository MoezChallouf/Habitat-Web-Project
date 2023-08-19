@extends('admin.layouts.template')
@section('page_title')
    Add SubCategory -HyperOptima
@endsection
@section('content')
    <div class="container max-w-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Sub Category</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New Sub Category</h5>

                </div>
                <div class="card-body">
                    <form action="{{route('storesubcategory')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="subcategory_name"
                                       class="block mb-2 text-md font-medium text-gray-900 mt-3">Sub Category Name
                                    :</label>
                                <input type="text"
                                       class=" form-control pl-3 bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 mt-3"
                                       id="subcategory_name" name="subcategory_name"
                                       placeholder="Sub Category"
                                       required
                                       value="{{old('subcategory_name')}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="category"
                                       class="block mb-2 text-md font-medium text-gray-900 mt-3">Category name</label>
                                <select
                                    class=" form-control bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 mt-3"
                                    id="category_id" name="category_id">
                                    <option selected>Open to select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-start ml-1">
                            <button type="submit"
                                    class="w-60 flex justify-center bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition duration-300">
                                Create Category
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

@extends('admin.layouts.template')
@section('page_title')
    All Category -HyperOptima
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Category</h4>
        <div class="card">

            <div class="table-responsive text-nowrap">
                @if(session()->has('message'))
                    <div
                        class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        {{session()->get('message')}}
                    </div>
                @endif
                <table id="category" class="category table-striped mt-2" style="width:100%">
                    <thead class="table-light">
                    <tr>
                        <th class="text-center" data-priority="1">Id</th>
                        <th class="text-center" data-priority="2">Category Name</th>
                        <th class="text-center" data-priority="3">Sub Category</th>
                        <th class="text-center" data-priority="4">Slug</th>
                        <th class="text-center" data-priority="5">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($categories as $category)
                        <tr>
                            <td class="text-center">{{$category->id}}</td>
                            <td class="text-center">{{$category->category_name}}</td>
                            <td class="text-center">{{$category->subcategory_count}}</td>
                            <td class="text-center">{{$category->slug}}</td>
                            <td class="text-center flex  justify-center">

                                <a class=" border  hover:text-green-500 border-gray-500 rounded p-2 text-center mr-1"
                                   href="{{route('editcategory',$category->id)}}"
                                > Edit</a>
                                <a class="border hover:text-red-700 border-gray-500 rounded p-2 text-center"
                                   href="{{route('deletecategory',$category->id)}}"
                                >Delete</a>

                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@extends('admin.master')

@section('title')
    Add Product
@endsection

@section('main')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Product</h3></div>
                    <div class="card-body">
                        <form action="{{ route('admin.save.product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Product name" />
                                <label for="name">Name</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="category_name" name="category_name" type="text" placeholder="Enter your category name" />
                                        <label for="category_name">Category name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="brand_name" name="brand_name" type="text" placeholder="Enter your brand name" />
                                        <label for="brand_name">Brand name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                                <label for="description">Description</label>
                            </div>
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input name="image" type="file" class="form-control" id="image" />
                            </div>
                            <div class="mt-4 mb-0">
                                <button class="btn btn-primary w-100">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
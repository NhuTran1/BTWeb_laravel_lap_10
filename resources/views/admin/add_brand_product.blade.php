@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thương hiệu sản phẩm
                </header>

                @if (Session::has('message'))
                <span class="text-alert">
                    {{ Session::get('message') }};
                    {{ Session::forget('message') }};
                </span>
                @endif

                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/save-brand-product') }}" method="post">
                            @csrf 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug</label>
                                <input type="text" name="brand_slug" class="form-control" id="exampleInputEmail1"
                                    placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả thương hiệu</label><br>
                                <textarea style="width: 100%" rows="8" class="formcontrol" name="brand_product_desc" id="exampleInputPassword1"
                                    placeholder="Mô tả danh mục"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="brand_product_status" class="form-control
input-sm m-bot15">
                                    
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>


                                </select>
                            </div>

                            <button type="submit" name="add_category_product" class="btn btn-info">Thêm thương
                                hiệu</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    @endsection

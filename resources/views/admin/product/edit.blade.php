@extends('layouts.admin_layout')
@section('title', 'Редактировать продукт')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать продукт {{$product['title']}}</h1>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                        </div>
                    @endif
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('product.update', $product['id'])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Название</label>
                                <div class="col-sm-10">
                                    <input name="title" value="{{$product['title']}}" class="form-control" placeholder="Введите название товара" required>
                                </div>
                                <label class="col-sm-2 col-form-label">Описание</label>
                                <div class="col-sm-10">
                                    <input name="desc" value="{{$product['description']}}" class="form-control" placeholder="Введите описание товара" required>
                                </div>
                                <label class="col-sm-2 col-form-label">Цена</label>
                                <div class="col-sm-10">
                                    <input name="price" value="{{$product['price']}}" class="form-control" placeholder="Введите цену товара" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-group"></div>
                                    <label>Выберите категорию</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category['id']}}">{{$category['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea></textarea>
                            </div>
                            <div class="form-group">
                                <label for="feature_image">Изображение</label>
                                <input type="text" name="img" class="form-control" id="feature_image" value="{{$product->images[0]['name']}}">
                                <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Добавить</button>
                            </div>
                            <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection



@extends('layouts.admin_layout')
@section('title', 'Добавить продукт')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить Товар</h1>
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
                    <form class="form-horizontal" action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Название</label>
                                <div class="col-sm-10">
                                    <input name="title" class="form-control" placeholder="Введите название категории" required>
                                </div>
                                <label class="col-sm-2 col-form-label">Описание</label>
                                <div class="col-sm-10">
                                    <input name="desc" class="form-control" placeholder="Введите описание категории" required>
                                </div>
                                <label class="col-sm-2 col-form-label">Изображение</label>
                                <div class="col-sm-10">
                                    <input name="img" class="form-control" placeholder="Введите картинку категории" required>
                                </div>
                                <label class="col-sm-2 col-form-label">Алиас</label>
                                <div class="col-sm-10">
                                    <input name="alias" class="form-control" placeholder="Введите сокращение категории" required>
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


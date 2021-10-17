@extends('layouts.admin_layout')
@section('title', "Редактирование")
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Редактирование категории {{$category['title']}}</h1>
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
                <form class="form-horizontal" action="{{route('category.update', $category['id'])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Название</label>
                            <div class="col-sm-10">
                                <input name="title" class="form-control" value="{{$category['title']}}">
                            </div>
                            <label class="col-sm-2 col-form-label">Описание</label>
                            <div class="col-sm-10">
                                <input name="desc" class="form-control" value="{{$category['desc']}}">
                            </div>
                            <label class="col-sm-2 col-form-label">Изображение</label>
                            <div class="col-sm-10">
                                <input name="img" class="form-control" value="{{$category['img']}}">
                            </div>
                            <label class="col-sm-2 col-form-label">Алиас</label>
                            <div class="col-sm-10">
                                <input name="alias" class="form-control" value="{{$category['alias']}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Обновить</button>
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

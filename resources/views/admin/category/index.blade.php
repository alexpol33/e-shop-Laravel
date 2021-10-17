@extends('layouts.admin_layout')
@section('title', 'Категории')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категории</h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th style="width: 20%">
                                    Название
                                </th>
                                <th style="width: 30%">
                                    Описание
                                </th>
                                <th>
                            </tr>
                            </thead>
                            @foreach($categories as $category)

                                <tbody>
                                <tr>
                                    <td>
                                        {{$category['id']}}
                                    </td>
                                    <td>
                                        <a>
                                            {{$category['title']}}
                                        </a>
                                        <br/>
                                        <small>
                                            {{$category['created_at']}}}
                                        </small>
                                    </td>
                                    <td id="описание">
                                        {{$category['desc']}}
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Удалить
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection



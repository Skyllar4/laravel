@extends('layouts.main')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Создание</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Главная</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Наименование">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" placeholder="Добавить">
                </div>
            </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

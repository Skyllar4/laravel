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
            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Имя">
                </div>
                <div class="form-group">
                    <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="text" value="{{old('password')}}" name="password" class="form-control" placeholder="Пароль">
                </div>
                <div class="form-group">
                    <input type="text" value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control" placeholder="Подтверждение пароля">
                </div>
                 <div class="form-group">
                    <input type="text" value="{{old('surname')}}" name="surname" class="form-control" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <input type="text" value="{{old('patronymic')}}" name="patronymic" class="form-control" placeholder="Отчество">
                </div>
                 <div class="form-group">
                    <input type="text" value="{{old('age')}}" name="age" class="form-control" placeholder="Возраст">
                </div>
                <div class="form-group">
                    <input type="text" value="{{old('address')}}" name="address" class="form-control" placeholder="Адрес">
                </div>
                 <div class="form-group">
                    <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                        <option disabled selected>Пол</option>
                        <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                        <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" placeholder="Добавить">
                </div>
            </form>
        </div>
      </div>
    </section>
@endsection

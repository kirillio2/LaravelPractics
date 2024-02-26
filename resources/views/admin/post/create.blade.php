@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Добавить статью</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- $table->string('title');
            $table->string('img');
            $table->text('text');
            $table->bigInteger('cat_id')->unsigned(); -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название статьи" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">img</label>
                                <input type="text" name="img" class="form-control" id="exampleInputEmail1" placeholder="Введите название img" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">text</label>
                                <input type="text" name="text" class="form-control" id="exampleInputEmail1" placeholder="Введите текст статьи" required>
                            </div>
                            <div class="form-group">
                                <label for="cat_id">Категория</label>
                                <select name="cat_id" id="cat_id" class="form-control" required>
                                    <option value="">Выберите категорию</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
=======
=======
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить статью</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Введите название категории" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
<<<<<<< HEAD
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
=======
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038

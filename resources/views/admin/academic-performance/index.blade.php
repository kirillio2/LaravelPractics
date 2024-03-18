@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')



<style>
    .rounded-custom {
        border-radius: 20px;
    }


    .rotate-text {
      writing-mode: vertical-lr;
      transform: rotate(-180deg);
    }

    .table-responsive {
      overflow-x: auto;
    }

</style>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Текущий контроль</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card rounded-custom">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Дисциплины, даты и оценки</h3> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th></th>
                    <th class="rotate-text">2024-01-15 - 2024-01-21</th>
                    <th class="rotate-text">2024-01-22 - 2024-01-28</th>
                    <th class="rotate-text">2024-01-22 - 2024-01-28</th>
                    <th class="rotate-text">2024-01-22 - 2024-01-28</th>
                    <th class="rotate-text">2024-01-22 - 2024-01-28</th>
                    <th class="rotate-text">2024-01-22 - 2024-01-28</th>
                    <th class="rotate-text">2024-01-22 - 2024-01-28</th>
                    <!-- Добавьте другие даты по необходимости -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Дисциплина 1</td>
                    <td>1</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <!-- Добавьте другие оценки по необходимости -->
                  </tr>
                  <tr>
                    <td>Дисциплина 2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <!-- Добавьте другие оценки по необходимости -->
                  </tr>
                  <!-- Добавьте другие строки по необходимости -->
                </tbody>
              </table>
            </div>
        </div>
    </div>
</section>


@endsection

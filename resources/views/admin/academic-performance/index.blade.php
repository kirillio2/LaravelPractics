@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')

    <div class="container">
        <h2>Дисциплины, даты и оценки</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Дисциплина</th>
                    <th>Дата</th>
                    <th>Оценка</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Дисциплина 1</td>
                    <td>2024-01-15 - 2024-01-21</td>
                    <td>4.5</td>
                </tr>
                <tr>
                    <td>2024-01-22 - 2024-01-28</td>
                    <td>4.0</td>
                </tr>
                <tr>
                    <td>2024-01-29 - 2024-02-04</td>
                    <td>3.8</td>
                </tr>

                <tr class="table-active">
                    <td rowspan="3">Дисциплина 2</td>
                    <td>2024-01-15 - 2024-01-21</td>
                    <td>3.7</td>
                </tr>
                <tr class="table-active">
                    <td>2024-01-22 - 2024-01-28</td>
                    <td>4.2</td>
                </tr>
                <tr class="table-active">
                    <td>2024-01-29 - 2024-02-04</td>
                    <td>4.0</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

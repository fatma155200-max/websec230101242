@extends('layouts.master')
@section('title', 'multable Numbers')
@section('content')



    <div class="card m-4 col-sm-4">
        <div class="card-header">{{$j}} Multiplication Table</div>
        <div class="card-body">
            <table>
                @foreach (range(1, 10) as $i)
                <tr>
                    <td>{{$i}} * {{$j}}</td>
                    <td> = {{ $i * $j }}</td>
                    </li>
                    @endforeach
            </table>
        </div>
    </div>

    @endsection
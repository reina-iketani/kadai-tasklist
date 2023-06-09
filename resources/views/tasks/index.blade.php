@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    <div class="prose ml-4">
        <h2>タスク 一覧</h2>
    </div>

   @if(isset($tasks))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach ($tasks as $task)
                <tr>
                    <td><a class="link link-hover text-info" href="{{ route('tasks.show', $task->id) }}">{{ $task->id }}</a></td>
                    <td>{!! nl2br(e( $task->status )) !!}</td>
                    <td>{!! nl2br(e( $task->content )) !!}</td>
                </tr>
                @endforeach
           
            </tbody>
        </table>
    @endif
    <div class="my-25 text-center">
        {{ $tasks->links() }}
    </div>
    <a class="btn btn-primary" href="{{ route('tasks.create') }}">新規タスクの投稿</a>
    
@endsection
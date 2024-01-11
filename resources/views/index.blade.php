@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <ul>
        @forelse($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', ['id' => $task->id])  }}"
                   style="color: #718096">  {{ $task->title }} </a>
            </li>
        @empty
            <p>You have no tasks...</p>
        @endforelse
    </ul>
@endsection

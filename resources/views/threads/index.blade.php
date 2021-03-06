@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @forelse ($threads as $thread)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="level">
                                <h4 class="flex">
                                    <a href="{{ $thread->path() }}">
                                        @if (auth()->check())
                                            @if ($thread->hasUpdatesFor(auth()->user()))
                                                <strong>
                                                    {{ $thread->title }}
                                                </strong>
                                            @else
                                                {{ $thread->title }}
                                            @endif
                                        @else
                                            {{ $thread->title }}
                                        @endif
                                    </a>
                                </h4>
                                
                                <a class="btn btn-link" href="{{ $thread->path() }}">
                                    Создатель: {{ $thread->creator->name }}
                                </a>
                                <a class="btn btn-link" href="{{ $thread->path() }}">
                                    Сообщений: {{ $thread->replies_count }}
                                </a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="body">{{ $thread->body }}</div>
                        </div>
                    </div>
                @empty
                    <p>Пока что здесь ничего нет.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
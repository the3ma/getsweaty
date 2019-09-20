@extends('layouts.admin.master')

@section('title', 'Page Title')


@section('content')
    <div class="container mt-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @foreach ($blocks as $block)
        {{$block}}
        <hr/>
        @endforeach

        @if($types)
        <!-- add BLockContent -->
        <div class="dropdown">
            <a class="btn btn-secondary" href="#" role="button" id="BlockContent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                +
            </a>
            <div class="dropdown-menu" aria-labelledby="BlockContent">
                    @foreach ($types as $type)
                        <form action="{{ route('pageblock.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="type" value="{{ $type->id }}">
                            <input type="hidden" name="page" value="{{ $page }}">
                            <button class="btn btn-danger" type="submit">{{ $type->name }}</button>
                        </form>
                    @endforeach
            </div>
        </div>
        @endif

    </div>
@endsection

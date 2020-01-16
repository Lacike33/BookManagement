@extends('layouts.app', ['activePage' => 'books', 'titlePage' => __('Books')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Books') }}</h4>
                            <p class="card-category"> {{ __('Administracne rozhranie pre spravu knih') }}</p>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('book.create') }}"
                                       class="btn btn-sm btn-primary">{{ __('Add book') }}
                                    </a>
                                    <a href="#create-modal"
                                       class="btn btn-sm btn-primary"
                                       data-toggle="modal">{{ __('Add book Via Modal') }}
                                    </a>
                                </div>
                            </div>
                            @include('books.partials.createModal')

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        {{ __('ID') }}
                                    </th>
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Description') }}
                                    </th>
                                    <th>
                                        {{ __('Pages') }}
                                    </th>
                                    <th>
                                        {{ __('Year') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Actions') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($books as $book)
                                        <tr>
                                            <td>
                                                {{ $book->id }}
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="dropdown-item" data-toggle="modal"
                                                        data-target="#edit-modal-{{ $book->id }}"> {{ $book->name }}
                                                </button>
                                                @include('books.partials.editModal', ['book' => $book])
                                            </td>
                                            <td>
                                                {{--                              {{ $user->created_at->format('Y-m-d') }}--}}
                                                {{ $book->description}}
                                            </td>
                                            <td>
                                                {{ $book->pages }}
                                            </td>
                                            <td>
                                                {{ $book->year }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('book.destroy', $book) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <a rel="tooltip" class="btn btn-success btn-link"
                                                       href="{{ route('book.edit', $book) }}" data-original-title=""
                                                       title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-link"
                                                            data-original-title="" title=""
                                                            onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer py-4">
                                <nav class="d-flex justify-content-end" aria-label="...">
                                    {{ $books->links() }}
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

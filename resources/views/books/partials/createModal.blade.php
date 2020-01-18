<div class="modal fade" id="create-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-signup" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <h5 class="modal-title card-title">Add book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-md-center">
                        <div class="col-10">

                            <form class="form" method="POST" action="{{ route('book.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Name ..." name="name"
                                                   value="{{ old('name') }}" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <select name="genre_id" id="input-workParent"
                                                    {{--                    value="{{ old('genre') ? old('genre') : isset($genre) ? $genre->name : 'Genre' }}"--}}
                                                    class="form-control form-control-alternative{{ $errors->has('genre') ? ' is-invalid' : '' }}"
                                                    required>
                                                {{--                <option value="">Genre ...</option>--}}

                                                @if(isset($book))
                                                    <option
                                                        value="{{ $book->genre->id }}">{{ $book->genre->name }}</option>
                                                    @foreach($genres as $genre)
                                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="">Genre ...</option>
                                                    @foreach($genres as $genre)
                                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                                    @endforeach
                                                @endif

                                                {{--                @foreach($genres as $genre)--}}
                                                {{--                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>--}}
                                                {{--                @endforeach--}}

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea rows="4" class="form-control" name="description" type="text"
                                                      placeholder="{{ __('Description ...') }}"
                                                      required>{{ old('description') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" placeholder="Pages ..." class="form-control"
                                                   name="pages" value="{{ old('pages') }}" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" placeholder="Year ..." class="form-control" name="year"
                                                   value="{{ old('year') }}" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer justify-content-center" style="border-top: none">
                                    <button type="submit"
                                            class="btn btn-primary btn-round">{{ __('Save book') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

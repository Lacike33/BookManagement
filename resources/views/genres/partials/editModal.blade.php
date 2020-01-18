<!-- Modal -->
<div class="modal fade" id="edit-modal-{{ $genre->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-signup" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <h5 class="modal-title card-title">Edit genre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-md-center">
                        <div class="col-10">

                            <form class="form" method="POST" action="{{ route('genre.update',$genre) }}">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Name ..." name="name" value="{{ old('name',$genre->name) }}" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea rows="4" class="form-control" id="event_reason" name="description"
                                                      placeholder="{{ __('Description ...') }}" required>{{ old('name',$genre->description) }}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer justify-content-center" style="border-top: none">
                                    <button type="submit"
                                            class="btn btn-primary btn-round">{{ __('Save genre') }}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Blog') }}</div>

                <div class="card-body">

                        <div  class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" value="{{ $blog->title}}" name="title" placeholder="Enter Title"></input>
                        </div>

                        <div  class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" value="{{ $blog->content}}" name="content" rows="3" readonly></textarea>
                        </div>

                        <div  class="form-group">
                            <label for="attachment">Attachment</label>
                            <a href= " {{ config('app.url') }}/storage/{{ $blog->attachment }}" target="_blank">Open Attachment</a>
                        </div>

                        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

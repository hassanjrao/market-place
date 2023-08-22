@extends('layouts.front')

@section('page-title', 'News Feeds')

@section('content')



    <!-- End Feature Trending Products Area -->
    <!-- Start Popular category Area -->
    <section class="section-bg section-padding">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('news-feeds.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <textarea required class="form-control" name="description" placeholder="What's on your mind?" rows="3"></textarea>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="image" class="form-label">Add an image:</label>
                                    <input type="file" class="form-control" id="image">
                                </div> --}}
                                <div class="d-grid gap-2">
                                    <button class="button-1" type="submit">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row justify-content-center mt-4">

                @foreach ($newsFeeds as $feed)
                    <div class="col-lg-8 mb-4">

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="{{ $feed->createdBy->image ? Storage::url($feed->createdBy->image) : asset('media/avatars/avatar0.jpg') }}"
                                        alt="Profile Picture" class="rounded-circle me-2" width="50" height="50">
                                    <div>
                                        <h5 class="card-title mb-0">{{ $feed->createdBy->name }}</h5>
                                        <p class="card-subtitle text-muted">
                                            {{ $feed->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text mt-3">
                                    {{ $feed->description }}
                                </p>
                                {{-- <img src="" alt="Post Image" class="img-fluid mt-3"> --}}

                            </div>
                        </div>

                    </div>
                @endforeach


            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2">
                    {{ $newsFeeds->links() }}
                </div>
            </div>

        </div>

    </section>
    <!-- End Popular category Area -->



@endsection

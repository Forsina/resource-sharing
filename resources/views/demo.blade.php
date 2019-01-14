@extends('layouts.mainlayout')
@section('content')

<div class="container">
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Browse Popular
                <small>Resources</small>
            </h1>

            <!-- Blog Post -->
            @include('layouts.partials.blogPost')
            @include('layouts.partials.blogPost')
            @include('layouts.partials.blogPost')
            @include('layouts.partials.blogPost')

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">More</a>
                </li>
            </ul>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            @include('layouts.partials.searchWidget')
            <!-- Create Widget -->
            @include('layouts.partials.createWidget')
            <!-- Categories Widget -->
            @include('layouts.partials.categoriesWidget')

        </div>

    </div>
</div>

@endsection

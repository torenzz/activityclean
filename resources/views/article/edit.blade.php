@extends('layouts.master')
@section('breadcrumbs')
    <ul class="navbar-nav mr-lg-2">
        <li class="nav-item ml-0">
            <h4 class="mb-0">EDIT ARTICLE</h4>
        </li>
        <li class="nav-item">
            <div class="d-flex align-items-baseline">
                <p class="mb-0">KCCF SMS</p>
                <i class="typcn typcn-chevron-right"></i>
                <p class="mb-0">Articles</p>
                <i class="typcn typcn-chevron-right"></i>
                <p class="mb-0">Edit</p>
            </div>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Article</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('article.update',['article'=>$item->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Article</label>
                            <div class="col-sm-9">
                                <input type="text" name="startyear" class="form-control" id="startyear" value="{{$item->title}}" placeholder="Enter Article">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="content" id="descTextarea1" rows="4"  placeholder="Enter Content">{{$item->content}}</textarea>
                            </div>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-light" href="{{route('article.index')}}">Cancel</a>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
@endsection
@section('script')
@endsection

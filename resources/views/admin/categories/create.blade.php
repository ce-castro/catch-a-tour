@extends('admin.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/iCheck/square/blue.css') }}">
@endsection

@section('js')
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('title')
    Add a Category
@endsection

@section('h1')
    Add a Category
@endsection

@section('bread')
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/carts">Categories</a></li>
        <li class="active">Add a Category</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a></li>
                        <li class="disabled"><a href="#tab_2"><i class="fa fa-picture-o" aria-hidden="true"></i> Images</a></li>
                        <li class="disabled"><a href="#tab_3"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQs</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <form class="form-horizontal" method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="box-body">

                                    <div class="form-group @if ($errors->has('name')) has-error @endif required col-sm-12">
                                        <label for="name" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" onchange="convert()" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('url')) has-error @endif required col-sm-12">
                                        <label for="url" class="col-sm-2 control-label">URL</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="url" placeholder="URL" name="url" value="{{ old('url') }}">
                                            @if ($errors->has('url'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('url')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('description')) has-error @endif required col-sm-12">
                                        <label for="description" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" id="description" class="form-control ckeditor">{{ old('description') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('description')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('advice')) has-error @endif col-sm-12">
                                        <label for="advice" class="col-sm-2 control-label">Advice</label>
                                        <div class="col-sm-10">
                                            <textarea name="advice" id="advice" class="form-control ckeditor">{{ old('advice') }}</textarea>
                                            @if ($errors->has('advice'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('advice')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('status')) has-error @endif col-sm-6">
                                        <label for="status" class="col-sm-4 control-label">Active</label>
                                        <div class="col-sm-8">
                                            <div class="checkbox icheck">
                                                <label><input type="checkbox" value="1" name="status" @if ( old('status') == 1) checked @endif></label>
                                            </div>
                                            @if ($errors->has('status'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('status')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('frontpage')) has-error @endif col-sm-6">
                                        <label for="frontpage" class="col-sm-4 control-label">Frontpage</label>
                                        <div class="col-sm-8">
                                            <div class="checkbox icheck">
                                                <label><input type="checkbox" value="1" name="frontpage" @if ( old('frontpage') == 1) checked @endif></label>
                                            </div>
                                            @if ($errors->has('frontpage'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('frontpage')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <hr >
                                        <h3>Meta Tags: </h3>
                                    </div>

                                    <div class="form-group @if ($errors->has('keywords')) has-error @endif col-sm-6">
                                        <label for="keywords" class="col-sm-2 control-label">Keywords:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="keywords" placeholder="Keywords" name="keywords" value="{{ old('keywords') }}">
                                            @if ($errors->has('keywords'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('keywords')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('title_og')) has-error @endif col-sm-6">
                                        <label for="title_og" class="col-sm-2 control-label">OG Title:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_og" placeholder="OG Title" name="title_og" value="{{ old('title_og') }}">
                                            @if ($errors->has('title_og'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('title_og')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('description_tag')) has-error @endif col-sm-6">
                                        <label for="description_tag" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description_tag" id="description_tag" class="form-control">{{ old('description_tag') }}</textarea>
                                            @if ($errors->has('description_tag'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('description_tag')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('description_og')) has-error @endif col-sm-6">
                                        <label for="description_og" class="col-sm-2 control-label">OG Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description_og" id="description_og" class="form-control">{{ old('description_og') }}</textarea>
                                            @if ($errors->has('description_og'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('description_og')}}</span>
                                            @endif
                                        </div>
                                    </div>


                                </div>

                                <div class="box-footer">
                                    <a href="{{ route('categories.index') }}" class="btn btn-default btn-flat"><i class="fa fa-times-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Cancel</a>
                                    <button type="submit" class="btn btn-success pull-right btn-flat"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Save and Continue
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '10%' // optional
            });
        });
    </script>
    <script>
        $(function () {
            CKEDITOR.replace('.ckeditor')
        })
    </script>
    <script>
        function convert() {
            $("#url").val(slug($("#name").val()) + ".html");
        }
    </script>
@endsection
<?php
function bytesToHuman($bytes){
    $units = ['B', 'KB', 'MB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, 2) . ' ' . $units[$i];
}
?>

@extends('admin.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/iCheck/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fancybox/jquery.fancybox.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendors/fancybox/jquery.fancybox.min.js') }}"></script>
@endsection

@section('title')
    Edit a Category
@endsection

@section('h1')
    Edit a Category
@endsection

@section('bread')
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('categories.index') }}">Categories</a></li>
        <li class="active">Edit a Category</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li @if (Request::route('tab') == "tab_1") class="active" @endif><a href="#tab_1" data-toggle="tab"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a></li>
                        <li @if (Request::route('tab') == "tab_2") class="active" @endif><a href="#tab_2" data-toggle="tab"><i class="fa fa-picture-o" aria-hidden="true"></i> Images</a></li>
                        <li @if (Request::route('tab') == "tab_3") class="active" @endif><a href="#tab_3" data-toggle="tab"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQs</a></li>
                    </ul>
                    <div class="tab-content" id="tabs">
                        @include('admin.layouts.errors')

                        <div class="tab-pane @if (Request::route('tab') == "tab_1") active @endif" id="tab_1">
                            <form class="form-horizontal" method="post" action="{{ route('categories.update', $category->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="box-body">
                                    <div class="form-group @if ($errors->has('name')) has-error @endif required">
                                        <label for="name" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" onchange="convert()">
                                            @if ($errors->has('name'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('url')) has-error @endif required">
                                        <label for="url" class="col-sm-2 control-label">URL</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="url" name="url" value="{{ $category->url }}">
                                            @if ($errors->has('url'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('url')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('description')) has-error @endif required">
                                        <label for="description" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" id="description" class="form-control ckeditor">{{ $category->description }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('description')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('advice')) has-error @endif">
                                        <label for="advice" class="col-sm-2 control-label">Advice</label>
                                        <div class="col-sm-10">
                                            <textarea name="advice" id="advice" class="form-control ckeditor">{{ $category->advice }}</textarea>
                                            @if ($errors->has('advice'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('advice')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('status')) has-error @endif col-sm-6">
                                        <label for="inputActive" class="col-sm-4 control-label">Active</label>
                                        <div class="col-sm-8">
                                            <div class="checkbox icheck">
                                                <label><input type="checkbox" value="1" name="status" @if ($category->status == 1) checked @endif> </label>
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
                                                <label><input type="checkbox" value="1" name="frontpage" @if ($category->frontpage == 1) checked @endif></label>
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
                                            <input type="text" class="form-control" id="keywords" placeholder="Keywords" name="keywords" value="{{ $category->keywords  }}">
                                            @if ($errors->has('keywords'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('keywords')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('title_og')) has-error @endif col-sm-6">
                                        <label for="title_og" class="col-sm-2 control-label">OG Title:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_og" placeholder="OG Title" name="title_og" value="{{ $category->title_og  }}">
                                            @if ($errors->has('title_og'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('title_og')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('description_tag')) has-error @endif col-sm-6">
                                        <label for="description_tag" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description_tag" id="description_tag" class="form-control">{{ $category->description_tag }}</textarea>
                                            @if ($errors->has('description_tag'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('description_tag')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group @if ($errors->has('description_og')) has-error @endif col-sm-6">
                                        <label for="description_og" class="col-sm-2 control-label">OG Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description_og" id="description_og" class="form-control">{{ $category->description_og }}</textarea>
                                            @if ($errors->has('description_og'))
                                                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('description_og')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="box-footer">
                                    <a href="{{ route('categories.index') }}" class="btn btn-default btn-flat"><i class="fa fa-times-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Cancel</a>
                                    <button type="submit" class="btn btn-primary pull-right btn-flat"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Update</button>
                                    <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger pull-right btn-flat" onclick="return confirm('Delete {{ $category->name }}?');"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;Delete</a>
                                </div>

                            </form>
                        </div>
                        <div class="tab-pane @if (Request::route('tab') == "tab_2") active @endif" id="tab_2">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h3>Images</h3>
                                    <div class="box">
                                        <div class="box-body">
                                            <table class="table table-bordered table-striped" id="tablita1">
                                                <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Type</th>
                                                    <th>Dimension</th>
                                                    <th>Size</th>
                                                    <th>Status</th>
                                                    <th style="width: 45px">Edit</th>
                                                    <th style="width: 45px">View</th>
                                                    <th style="width: 45px">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($photos as $photo)
                                                    <?php
                                                    $filename = "http://".$_SERVER['SERVER_NAME']."/uploads/".$photo->image;
                                                    $size = getimagesize($filename);
                                                    ?>
                                                    <tr>
                                                        <td>{{ $photo->title }}</td>
                                                        <td>
                                                            @if ($photo->type_id == "1")Main @endif
                                                            @if ($photo->type_id == "2")Category @endif
                                                            @if ($photo->type_id == "3")Gallery @endif
                                                            @if ($photo->type_id == "4")Facebook OG @endif
                                                        </td>
                                                        <td>
                                                            <?php echo $size[0]; ?>px by <?php echo $size[1]; ?>px
                                                        </td>
                                                        <td><?php echo bytesToHuman($photo->size); ?></td>
                                                        <td>@if ($photo->status == 1)
                                                                Active
                                                            @else
                                                                Inactive
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            <a data-fancybox="iframe" data-src="{{ route('photos.edit', [$photo->id]) }}" data-type="iframe" href="javascript:;" title="Edit" class="fancy1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="/uploads/{{ $photo->image }}" title="Preview {{ $photo->title }}" data-fancybox="gallery" data-caption="<strong>{{ $photo->title }}</strong> <br >{{ $photo->description }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('photos.deletecat', [$photo->id, $category->id]) }}" title="Delete {{ $photo->title }}" onclick="return confirm('Delete {{ $photo->title }}?');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <form class="form-horizontal" method="post" action="{{ route('photos.store') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                                        <div class="box-body" style="padding-top: 0px; border: solid #CCC 1px;">
                                            <h3>Add an image</h3>

                                            <div class="form-group @if ($errors->has('category_id')) has-error @endif col-sm-12 required">
                                                <label for="category_id" class="col-sm-2 control-label">Type</label>
                                                <div class="col-sm-10">
                                                    <select name="type_id" id="category_id" class="form-control">
                                                        <option value="">Please select..</option>
                                                        <option value="1">Main</option>
                                                        <option value="2">Category</option>
                                                        <option value="3">Gallery</option>
                                                        <option value="4">Facebook OG</option>
                                                    </select>
                                                    @if ($errors->has('category_id'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('category_id')}}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group @if ($errors->has('image')) has-error @endif col-sm-12 required">
                                                <label for="title" class="col-sm-2 control-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="title" name="title">
                                                    @if ($errors->has('title'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('title') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group @if ($errors->has('image')) has-error @endif col-sm-12 required">
                                                <label for="image" class="col-sm-2 control-label">Photo</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="image" name="image">
                                                    @if ($errors->has('image'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('image') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group @if ($errors->has('description')) has-error @endif col-sm-12">
                                                <label for="description" class="col-sm-2 control-label">Alt. Text</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description" id="description" class="form-control"></textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('description') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group @if ($errors->has('status')) has-error @endif col-sm-6">
                                                <label for="status" class="col-sm-4 control-label">Active</label>
                                                <div class="col-sm-8">
                                                    <div class="checkbox icheck">
                                                        <label><input type="checkbox" value="1" name="status"></label>
                                                    </div>
                                                    @if ($errors->has('status'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('status') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <button type="submit" class="btn btn-success pull-right btn-flat col-sm-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add Photo
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane @if (Request::route('tab') == "tab_3") active @endif" id="tab_3">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h3>FAQs</h3>
                                    <div class="box">
                                        <div class="box-body">
                                            <table class="table table-bordered table-striped" id="tablita5">
                                                <thead>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Order</th>
                                                    <th>Status</th>
                                                    <th style="width: 45px">Edit</th>
                                                    <th style="width: 45px">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($faqs as $faq)
                                                    <tr>
                                                        <td>{{ $faq->question }}</td>
                                                        <td>{{ $faq->orden }}</td>
                                                        <td>@if ($faq->status == 1)
                                                                Active
                                                            @else
                                                                Inactive
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            <a data-fancybox="iframe" data-src="{{ route('faqs.edit', [$faq->id]) }}" data-type="iframe" href="javascript:;" title="Edit" class="fancy3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('faqs.deletecat', [$faq->id, $category->id]) }}" title="Delete {{ $faq->question }}" onclick="return confirm('Delete {{ $faq->question }}?');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <form class="form-horizontal" method="post" action="{{ route('faqs.store') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                                        <div class="box-body" style="padding-top: 0px; border: solid #CCC 1px;">
                                            <h3>Add a FAQ</h3>

                                            <div class="form-group @if ($errors->has('question')) has-error @endif col-sm-12 required">
                                                <label for="title" class="col-sm-3 control-label">Question</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="question" name="question">
                                                    @if ($errors->has('question'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('question') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group @if ($errors->has('answer')) has-error @endif col-sm-12 required">
                                                <label for="answer" class="col-sm-3 control-label">Answer</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="answer" name="answer">
                                                    @if ($errors->has('answer'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('answer') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group @if ($errors->has('orden')) has-error @endif col-sm-12">
                                                <label for="orden" class="col-sm-3 control-label">Order</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="orden" name="orden">
                                                    @if ($errors->has('orden'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('orden') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group @if ($errors->has('status')) has-error @endif col-sm-9">
                                                <label for="status" class="col-sm-4 control-label">Active</label>
                                                <div class="col-sm-8">
                                                    <div class="checkbox icheck">
                                                        <label><input type="checkbox" value="1" name="status"></label>
                                                    </div>
                                                    @if ($errors->has('status'))
                                                        <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('status') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-3">
                                                <button type="submit" class="btn btn-success pull-right btn-flat"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add FAQ
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
        function convert(){
            //$("#url").val(slug($("#name").val())+".html");
        }
    </script>
    <script>
        $(function () {
            $('.select2').select2();
        });
        $(".fancy1").fancybox({
            iframe : {
                css : {
                    width : '800px',
                    height : '515px'
                }
            }
        });
        $(".fancy2").fancybox({
            iframe : {
                css : {
                    width : '800px',
                    height : '390px'
                }
            }
        });
    </script>
@endsection
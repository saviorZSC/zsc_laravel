@extends('nweaver.commuity.model')
@section('body')
    <div>
        <ol class="breadcrumb ">
            <li><a href="{{url('/')}}">N-weaver</a></li>
            <li><a href="{{url('/commuity')}}">Commuity</a></li>
            <li class="active">CreatePage</li>
        </ol>
    </div>
    <div class="editBody">
        <form action="{{url('/commuity/store')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title"/>
            </div>
            <!-- 加载编辑器的容器 -->
            <script id="container" name="content" type="text/plain"></script>
            <br />
            <div class="form-group">
                <label for="publish_time">Publish_time</label>
                <input type="date" class="form-control" name="publish_time" />
            </div>
            <br />
            <input type="submit" class="btn btn-primary" value="submit" />
        </form>
            <!-- 配置文件 -->
            <script type="text/javascript" src="{{url('/javascript/ueditor/ueditor.config.js')}}"></script>
            <!-- 编辑器源码文件 -->
            <script type="text/javascript" src="{{url('/javascript/ueditor/ueditor.all.js')}}"></script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                //var ue = UE.getEditor('container');
                /*var editor = new UE.ui.Editor({initialFrameHeight:100,initialFrameWidth:400
                });
                editor.render("container");*/
                var editor = new UE.ui.Editor({initialFrameHeight:350
                });
                editor.render("container");
            </script>
    </div>
@endsection
@section('side')
    <div class="heightset">
        <div href="#" class="thumbnail thumbnail-set">
            <div class="commuity-side-thumbnil">
                <i class="icon-question-sign icon-set"></i>
            </div>
            <span class="text">Have Question</span>
        </div>
    </div>
    <div class="heightset">
        <div href="#" class="thumbnail thumbnail-set">
            <div class="commuity-side-thumbnil">
                <i class="icon-pencil icon-set"></i>
            </div>
            <span class="text">Edit Article</span>
        </div>
    </div>
    <div class="heightset">
        <div href="#" class="thumbnail thumbnail-set">
            <div class="commuity-side-thumbnil">
                <i class="icon-comments-alt icon-set"></i>
            </div>
            <span class="text">Discussion</span>
        </div>
    </div>
    <div class="heightset">
        <div href="#" class="thumbnail thumbnail-set">
            <div class="commuity-side-thumbnil">
                <i class="icon-thumbs-up icon-set"></i>
            </div>
            <span class="text">Figure out</span>
        </div>
    </div>
@endsection

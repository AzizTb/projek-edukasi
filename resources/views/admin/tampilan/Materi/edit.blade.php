@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Materi
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form method="post" name="" action="">
                    Judul Materi<br>
                    <input type="text" name="judul_artikel" size="30"><br>
                    Isi Materi<br>
                    <textarea name="isi_artikel" cols="60" rows="10"></textarea><br>
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<br><bR><br>
<div class="container">
    <div class="col-sm-4">
        @if(count($edit) == 0  )
        <form action="/upload1" method="post" enctype="multipart/form-data">
            <center><h3>บันทึกรูปภาพ</h3></center>
            <input type="text" name="uploadfilename" class="form-control"><br>
            <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"><br>
            <center>
                <img id="view" src="" style="width: 120px;" />
            </center>
            <br><br>
            <input type="submit" value="upload" class="btn btn-primary btn-block">
        </form>
        @elseif(count($edit) > 0)
            @foreach($edit as $row)
            <form action="/update123" method="post" enctype="multipart/form-data">
                <center><h3>บันทึกรูปภาพ</h3></center>
                <input type="hidden" name="ID" value="{{$row->ID}}">
                <input type="text" name="uploadfilename" class="form-control" value="{{$row->FileName}}"><br>
                <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"><br>
                <center>
                    <img id="view" src="{{asset('upload/'.$row->FilePath)}}" style="width: 120px;" />
                </center>
                <br><br>
                <input type="submit" value="upload" class="btn btn-primary btn-block">
            </form>
            @endforeach
        @endif
    </div>
    <div class="col-sm-8">

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>ชื่อไฟล์</th>
                    <th>ขนาดไฟล์</th>
                    <th>ประเภทไฟล์</th>
                    <th>Path File</th>
                    <th>Downalod</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datatable as $row)
                <tr>
                    <td>

                        @if($row->FileType == 'png' OR $row->FileType == 'jpeg')
                            <!-- <img src="upload/{{$row->FilePath}}" width="60px"> -->
                            <img src="{{ asset('upload/'.$row->FilePath)}}" width="60px">
                            
                        @endif

                        

                    </td>
                    <td>{{ $row->FileName }}</td>
                    <td>{{ $row->FileSize }} KB</td>
                    <td>{{ strtoupper($row->FileType) }}</td>
                    <td>{{ $row->FilePath }}</td>
                    <td>
                        <a class="btn btn-xs btn-info" href="dl/{{$row->FilePath}}/{{ $row->FileName }}.{{ $row->FileType }}" target="new">Download</a>
                        <a class="btn btn-xs btn-danger" href="rm/{{$row->ID}}">Delete</a>
                        <a class="btn btn-xs btn-warning" href="{{url('ed/'.$row->ID)}}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>



</div>
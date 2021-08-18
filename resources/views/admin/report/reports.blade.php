@extends('master') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            @include('admin.slide')
        </div>
        <div class="col-md-9 col-sm-8">
            <div class="list-film">
                <h1 class="title">DANH SÁCH LỖI</h1>
                <div style="overflow-x: auto">
                    <table class="admin-table">
                        <tr>
                            <th>ID</th>
                            <th>PHIM</th>
                            <th>EMAIL</th>
                            <th>NỘI DUNG</th>
                            <th>NGÀY</th>
                        </tr>
                        @foreach ($report as $item)
                        @foreach ($film as $items)
                         @if($items->id == $item->film_id)
                        
                        <tr>
                            <td>{{$item->id}}</td>
                            <td style="text-align: left;">
                                        <a href="{{route('film', ['id' => $item->film_id, 'uri' => Help::beauty($items->name)])}}" title="{{$items->id}}">{{$items->name}}</a>
                                </td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->messages}}</td>
                            <td>{{date("H:i d/m/Y", strtotime($item->created_at))}}</td>
                            
                            
                        </tr>
                         @endif
                         @endforeach @endforeach @if (sizeof($report) === 0)
                        <tr>
                            <td colspan="5">Chưa có người dùng nào!</td>
                        </tr>
                        @endif
                    </table>
                    <br>
                    <br>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
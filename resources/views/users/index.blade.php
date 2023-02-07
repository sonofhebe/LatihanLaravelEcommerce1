@extends('layouts.header')

@section('content')	
<div class="app-pages app-section">
    <div class="container">
        <a href="{{route('users.create')}}" class="btn waves-effect waves-light" style="float: right;">Add User</a>
        <h3>Users</h3><br>
        @if (session('success'))     
            <script>alert("User Berhasil Ditambahkan!")</script>
        @endif
        @if (session('hapus'))     
            <script>alert("User Berhasil Dihapus!")</script>
        @endif
        @if (session('edit'))     
            <script>alert("User Berhasil Diedit!")</script>
        @endif
        <table class="striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Action</th>
              </tr>
            </thead>
    
            <tbody>
                @foreach ($data as $key => $d)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->password }}</td>
                        <td><a href="{{ route('users.edit', $d->id) }}" class="btn button-secondary">Edit</a></td>
                        <td><form method="POST" action="{{ url('users', $d->id) }}">   
                            @csrf
                            @method('delete')     
                            <button class="btn waves-effect waves-light red" type="submit" name="action">Delete
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </form></td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
        </div>
    </div>
@endsection
@include('layouts.login')

@section('container')
<div class="container-category fluid" style="padding:20px;background-color: #afeeee">
    <div class="container-category-header">
        <table style="width: 100%">
            <tr>
                <td align="left">
                    <div style="color: black">
                        <h2>Login</h2>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>  
                </td>
            </tr>
            <tr>
                <td>
                    <div class="btn-group">
                        <a href="/" class="btn btn-outline-succes">Back</a>
                        <a href="/" class="btn btn-primary">Login</a>
                        <a href="/registration" class="btn btn-outline-primary">Daftar</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
@show
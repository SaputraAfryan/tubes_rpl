@include('layouts.login')

@section('container')
<div class="container-category fluid" style="padding:20px;background-color: #afeeee">
    <div class="container-category-header">
        <table style="width: 100%">
            <tr>
                <td align="left">
                    <div style="color: black">
                        <h2>Registration</h2>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputUsername4">Username</label>
                            <input type="text" class="form-control" id="inputUsername4" placeholder="Username">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputAddress">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                          </div>
                        </div>
                        <div class="btn-group mt-4">
                            <a href="/" class="btn btn-outline-succes">Back</a>
                            <a href="/login" class="btn btn-primary">Sign In</a>
                            <a href="/registration" class="btn btn-outline-primary">Sign up</a>
                        </div>
                      </form>     
                </td>
            </tr>
        </table>
    </div>
</div>
@show